<?php
    class Model_pemesanan extends CI_Model {
        private $_table = "pemesanan";
        
        public $id;
        public $nama_pembeli;
        public $email;
        public $nama_film;
        public $tanggal;
        public $alamat;
        public $bukti_pembayaran;
        public $status;

        public function getPemesanan()
        {
            return $this->db->get($this->_table)->result();
        }

        public function rules(){
            return [ 
                [
                    'field' => 'nama_pembeli',
                    'label' => 'Nama pembeli',
                    'rules' => 'required'
                ],

                [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
                ]

            ];

        }

        public function getById($id){
            return $this->db->get_where($this->_table, ["id" => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->load->helper('date');
            $now = date('Y-m-d');
            $this->id = uniqid();
            $this->nama_pembeli = $post["nama_pembeli"];
            $this->email = $post["email"];
            $this->nama_film = $post["nama_film"];
            $this->tanggal = $post["tanggal"];
            //$this->bukti_pembayaran = $post["bukti_pembayaran"];
            $this->bukti_pembayaran = $this->_uploadImage();
            $this->alamat = $post["alamat"];
            $this->status = $post["status"];
            $this->db->insert($this->_table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->load->helper('date');
            $now = date('Y-m-d');
            $this->id = $post["id"];
            $this->nama_pembeli = $post["nama_pembeli"];
            $this->email = $post["email"];
            $this->nama_film = $post["nama_film"];
            $this->tanggal = $post["tanggal"];
            $this->status = $post["status"];

            if (!empty($_FILES["bukti_pembayaran"]["name"])) {
                $this->bukti_pembayaran = $this->_uploadImage();
            } else {
                $this->bukti_pembayaran = $post["old_bukti_pembayaran"];
            }

            //$this->bukti_pembayaran = $post["bukti_pembayaran"];
            $this->alamat = $post["alamat"];
            $this->db->update($this->_table, $this, array('id' => $post['id']));
        }

        public function delete($id)
        {
            $this->_deleteImage($id);
            return $this->db->delete($this->_table, array("id" => $id));
        }

        private function _uploadImage()
        {
            $config['upload_path']          = './upload/pembayaran/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $this->id;
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti_pembayaran')) {
                return $this->upload->data("file_name");
            }

            return "default.jpg";
        }

        private function _deleteImage($id)
        {
            $pemesanan = $this->getById($id);
            if ($pemesanan->bukti_pembayaran != "default.jpg") {
                $filename = explode(".", $pemesanan->bukti_pembayaran)[0];
                return array_map('unlink', glob(FCPATH . "upload/pembayaran/$filename.*"));
            }
        }

        public function view_by_date($date)
        {
            $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya

            return $this->db->get('pemesanan')->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }

        public function view_by_month($month, $year)
        {
            $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
            $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun

            return $this->db->get('pemesanan')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }

        public function view_by_year($year)
        {
            $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun

            return $this->db->get('pemesanan')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        }

        public function view_all()
        {
            return $this->db->get('pemesanan')->result(); // Tampilkan semua data transaksi
        }

        public function option_tahun()
        {
            $this->db->select('YEAR(tanggal) AS tahun'); // Ambil Tahun dari field tgl
            $this->db->from('pemesanan'); // select ke tabel transaksi
            $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
            $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tgl

            return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
        }

        public function Lunas($id)
        {
        /* $data = array(
                    'status' => '1'
                );

                $this->db->where('id', $id);
                $this->db->update($this->_table, $data); */
            $this->db->where('id', $id);
            return $this->db->update($this->_table, array("status" => 'Lunas'));
        }

    }
?>