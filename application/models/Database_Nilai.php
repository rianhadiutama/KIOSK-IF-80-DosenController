<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Database_Nilai extends CI_Model{
    function ambil_data(){
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('mata_kuliah', 'mata_kuliah.KODE_MATA_KULIAH = nilai.KODE_MK');
        $query = $this->db->get();
        return $query->result();
    }
    function select()
    {
     $this->db->order_by('ID_NILAI', 'ASC');
     $query = $this->db->get('nilai');
     return $query;
    }
   
    function insert($data)
    {
     $this->db->insert_batch('nilai', $data);
    }
	
	public function view(){
		return $this->db->get('nilai')->result(); // Tampilkan semua data yang ada di tabel siswa
	}	
	
	public function upload_file($filename){
		$this->load->library('upload'); // Load librari upload
		
		$config['upload_path'] = './excel/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']  = '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	  
		$this->upload->initialize($config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
		  // Jika berhasil :
		  $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		  return $return;
		}else{
		  // Jika gagal :
		  $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		  return $return;
    }
	
	function insert($data){
		$this->db->insert_batch('nilai', $data);
	}
  }
}

?>
