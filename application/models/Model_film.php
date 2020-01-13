<?php 
    class Model_film extends CI_Model {

        private $_table = "film";

        public $id;
        public $judul;
        public $deskripsi;
        public $tahun_terbit;
        public $rating;
        public $poster;
        public $harga;

        public function getFilm()
        {
            return $this->db->get($this->_table)->result();
        }

        public function rules(){
            return [
                [
                    'field' => 'judul',
                    'label' => 'Judul',
                    'rules' => 'required'
                ],

                [
                    'field' => 'tahun_terbit',
                    'label' => 'Tahun terbit',
                    'rules' => 'required'
                ],

                [
                    'field' => 'harga',
                    'label' => 'Harga',
                    'rules' => 'numeric'
                ]
            ];
        }

        public function getById($id){
            return $this->db->get_where($this->_table, ["id" => $id])->row();
        }

        public function save(){
            $post = $this->input->post();
            $this->id = uniqid();
            $this->judul = $post["judul"];
            $this->deskripsi = $post["deskripsi"];
            $this->tahun_terbit = $post["tahun_terbit"];
            $this->rating = $post["rating"];
            //$this->poster = $post["poster"];
            $this->poster = $this->_uploadImage();
            $this->harga = $post["harga"];
            $this->db->insert($this->_table, $this);
        }

        public function update(){
            $post = $this->input->post();
            $this->id = $post["id"];
            $this->judul = $post["judul"];
            $this->deskripsi = $post["deskripsi"];
            $this->tahun_terbit = $post["tahun_terbit"];
            $this->rating = $post["rating"];

            if (!empty($_FILES["poster"]["name"])) {
                $this->poster = $this->_uploadImage();
            } else {
                $this->poster = $post["old_poster"];
            }

            //$this->poster = $post["poster"];
            $this->harga = $post["harga"];
            $this->db->update($this->_table, $this, array('id' => $post['id']));
        }

        public function delete($id){
            $this->_deleteImage($id);
            return $this->db->delete($this->_table, array("id" => $id));
        }

        private function _uploadImage()
        {
            $config['upload_path']          = './upload/poster/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->id;
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('poster')) {
                return $this->upload->data("file_name");
            }

            return "default.jpg";
        }

        private function _deleteImage($id)
        {
            $film = $this->getById($id);
            if ($film->poster != "default.jpg") {
                $filename = explode(".", $film->poster)[0];
                return array_map('unlink', glob(FCPATH . "upload/poster/$filename.*"));
            }
        }
    }
?>