<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("model_pemesanan");
        $this->load->library('form_validation');
        $this->load->helper('rupiah_helper');
    }

    public function index()
    {
        $this->cekLogin();
        $this->isAdminManager();
        $data['pageTitle'] = 'Pemesanan';
        if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $ket = 'Data pemesanan Tanggal ' . date('d-m-Y', strtotime($tgl));
                $url_cetak = 'pemesanan/cetak?filter=1&tahun=' . $tgl;
                $pemesanan = $this->model_pemesanan->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di model_pemesanan
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $ket = 'Data pemesanan Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                $url_cetak = 'pemesanan/cetak?filter=2&bulan=' . $bulan . '&tahun=' . $tahun;
                $pemesanan = $this->model_pemesanan->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di model_pemesanan
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data pemesanan Tahun ' . $tahun;
                $url_cetak = 'pemesanan/cetak?filter=3&tahun=' . $tahun;
                $pemesanan = $this->model_pemesanan->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di model_pemesanan
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data pemesanan';
            $url_cetak = 'pemesanan/cetak';
            $pemesanan = $this->model_pemesanan->getPemesanan(); // Panggil fungsi view_all yang ada di model_pemesanan
        }

        $data['ket'] = $ket;
        $data['url_cetak'] = base_url($url_cetak);
        $data['pemesanan'] = $pemesanan;
        $data['option_tahun'] = $this->model_pemesanan->option_tahun();

        $data['pageContent'] = $this->load->view('pemesanan/pemesananList', $data, TRUE);
        $this->load->view('template/layout', $data);
    }

    public function cetak()
    {
        $this->cekLogin();
        $this->isManager();
        if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $ket = 'Data pemesanan Tanggal ' . date('d-m-Y', strtotime($tgl));
                $pemesanan = $this->model_pemesanan->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Model_pemesanan
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $ket = 'Data pemesanan Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                $pemesanan = $this->model_pemesanan->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model_pemesanan
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data pemesanan Tahun ' . $tahun;
                $pemesanan = $this->model_pemesanan->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model_pemesanan
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data pemesanan';
            $pemesanan = $this->model_pemesanan->getPemesanan(); // Panggil fungsi view_all yang ada di Model_pemesanan
        }

        $data['ket'] = $ket;
        $data['pemesanan'] = $pemesanan;

        ob_start();
        $this->load->view('print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data pemesanan.pdf', 'D');
    }

    public function add()
    {
        //$this->getUserData();
        date_default_timezone_set('Asia/Bangkok');
        $this->load->model("model_film");
        $pemesanan = $this->model_pemesanan;
        $validation = $this->form_validation;
        $validation->set_rules($pemesanan->rules());

        if ($validation->run()) {
            $pemesanan->save();
            $this->session->set_flashdata('success', 'Pemesanan berhasil dilakukan<br>pemberitahuan akan dikirim lewat email');
            redirect('pemesanan/add', 'refresh');
        }

        $data['pageTitle'] = 'Pesan film';
        $data["film"] = $this->model_film->getFilm();
        //$data['pageContent'] = $this->load->view('pemesanan/pemesananAdd', $data, TRUE);

        // Jalankan view template/layout
        $this->load->view('pemesanan/pemesananAdd', $data);
    }

    public function edit($id = null)
    {
        $this->cekLogin();
        $this->isAdmin();
        if (!isset($id)) redirect('pemesanan');

        $pemesanan = $this->model_pemesanan;
        $validation = $this->form_validation;
        $validation->set_rules($pemesanan->rules());

        if ($validation->run() === TRUE) {
            $pemesanan->update();
            $this->session->set_flashdata('success', 'Berhasil diubah');
        }

        $data["pemesanan"] = $pemesanan->getById($id);
        if (!$data["pemesanan"]) show_404();

        $data['pageTitle'] = 'Edit Data Pemesanan';
        $data['pageContent'] = $this->load->view('pemesanan/pemesananEdit', $data, TRUE);

        // Jalankan view template/layout
        $this->load->view('template/layout', $data);
    }

    public function delete($id = null)
    {
        $this->cekLogin();
        $this->isAdmin();
        if (!isset($id)) show_404(); {
            if ($this->model_pemesanan->delete($id)) {
                $this->session->set_flashdata('success', 'Berhasil menghapus pemesanan');
                redirect('pemesanan', 'refresh');
            }
        }
    }

    public function lunas($id = null)
    {
        $this->cekLogin();
        $this->isAdmin();
        if(!isset($id)) show_404(); {
            if ($this->model_pemesanan->Lunas($id)) {
                $this->session->set_flashdata('success', 'Pemesanan telah dibayar lunas');
                redirect('pemesanan', 'refresh');
            }
        }
    }
}
