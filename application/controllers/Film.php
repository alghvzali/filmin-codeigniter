<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Check apakah sudah login
        $this->cekLogin();

        // Cek apakah user login 
        // sebagai administrator
        $this->isAdmin();
        $this->load->model("model_film");
        $this->load->library('form_validation');
        $this->load->helper('rupiah_helper');
    }

    public function index()
    {
        $data["film"] = $this->model_film->getFilm();
        $data['pageTitle'] = 'Film';
        $data['pageContent'] = $this->load->view('film/filmList', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function add()
    {
        $film = $this->model_film;
        $validation = $this->form_validation;
        $validation->set_rules($film->rules());

        if ($validation->run()) {
            $film->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('film', 'refresh');
        }

        $data['pageTitle'] = 'Tambah Data Film';
        $data['pageContent'] = $this->load->view('film/filmAdd', $data, TRUE);

        // Jalankan view template/layout
        $this->load->view('template/layout', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('film');

        $film = $this->model_film;
        $validation = $this->form_validation;
        $validation->set_rules($film->rules());

        if ($validation->run() === TRUE) {
            $film->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
        }

        $data["film"] = $film->getById($id);
        if (!$data["film"]) show_404();

        $data['pageTitle'] = 'Edit Data Film';
        $data['pageContent'] = $this->load->view('film/filmEdit', $data, TRUE);

        // Jalankan view template/layout
        $this->load->view('template/layout', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404(); {
            if ($this->model_film->delete($id)) {
                $this->session->set_flashdata('success', 'Berhasil menghapus film');
                redirect(site_url('film'));
            }
        }
    }
}