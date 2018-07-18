<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_NilaiController extends CI_Controller {
	private $filename = "DataNilaiMataKuliah"; 

    function __construct()
	{
        parent::__construct();
        $this->load->model('Database_Nilai');
		
    }
    
    function fetch(){
        $data = $this->Database_Nilai->select();
        $output = '
        <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>KODE MATA KULIAH</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>TUGAS 1</th>
            <th>TUGAS 2</th>
            <th>TUGAS 3</th>
            <th>TUGAS 4</th>
            <th>TUGAS 5</th>
            <th>PRESENSI</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>PRAKTIKUM</th>
            <th>NILAI</th>
            <th>GRADE</th>

        </tr>
        ';
        foreach($data->result() as $row)
        {
            $output .= '
            <tr>
            <td>'.$row->ID_NILAI.'</td>
            <td>'.$row->KODE_MK.'</td>
            <td>'.$row->NIM.'</td>
            <td>'.$row->NAMA.'</td>
            <td>'.$row->TUGAS_1.'</td>
            <td>'.$row->TUGAS_2.'</td>
            <td>'.$row->TUGAS_3.'</td>
            <td>'.$row->TUGAS_4.'</td>
            <td>'.$row->TUGAS_5.'</td>
            <td>'.$row->PRESENSI.'</td>
            <td>'.$row->UTS.'</td>
            <td>'.$row->UAS.'</td>
            <td>'.$row->PRAKTIKUM.'</td>
            <td>'.$row->NILAI.'</td>
            <td>'.$row->GRADE.'</td>
            </tr>
            ';
        }
        $output .= '</table>';
        echo $output;
    }
	
	public function nilai_view(){
    $data = array(); // Buat variabel $data sebagai array
    
    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
      $upload = $this->Database_Nilai->upload_file($this->filename);
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
        $data['sheet'] = $sheet; 
      }else{ // Jika proses upload gagal
        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('admin_nilai', $data);
  }
	
	public function proses_import(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
    
    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
    $data = [];
    
    $numrow = 1;
    foreach($sheet as $row){
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Kita push (add) array data ke variabel data
        array_push($data, [
          'ID_NILAI'=>$row['A'], // Insert data nis dari kolom A di excel
          'KODE_MK'=>$row['B'], // Insert data nama dari kolom B di excel
          'NIM'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
          'NAMA'=>$row['D'], // Insert data alamat dari kolom D di excel
		  'TUGAS_1'=>$row['E'],
		  'TUGAS_2'=>$row['F'],
		  'TUGAS_3'=>$row['G'],
		  'TUGAS_4'=>$row['H'],
		  'TUGAS_5'=>$row['I'],
		  'PRESENSI'=>$row['J'],
		  'UTS'=>$row['K'],
		  'UAS'=>$row['L'],
		  'PRAKTIKUM'=>$row['M'],
		  'NILAI'=>$row['N'],
		  'GRADE'=>$row['O']
		  
        ]);
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
    $this->Database_Nilai->insert($data);
    
    redirect("Admin_NilaiController/nilai_view"); // Redirect ke halaman awal (ke controller siswa fungsi index)
  }
	
	
	
    public function upload(){
        $fileName = time().$_FILES['file']['name'];
        
        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
        
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
            
        $media = $this->upload->data('file');
        $inputFileName = './assets/'.$media['file_name'];
        
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            
            for ($row = 0; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                
                //Sesuaikan sama nama kolom tabel di database                                
                $data = array(
                    "ID_NILAI"=> $rowData[0][0],
                    "KODE_MK"=> $rowData[0][1],
                    "NIM"=> $rowData[0][2],
                    "NAMA"=> $rowData[0][3],
                    "TUGAS_1"=> $rowData[0][4],
                    "TUGAS_2"=> $rowData[0][5],
                    "TUGAS_3"=> $rowData[0][6],
                    "TUGAS_4"=> $rowData[0][7],
                    "TUGAS_5"=> $rowData[0][8],
                    "PRESENSI"=> $rowData[0][9],
                    "UTS"=> $rowData[0][10],
                    "UAS"=> $rowData[0][11],
                    "PRAKTIKUM"=> $rowData[0][12],
                    "NAMA"=> $rowData[0][13],
                    "ALAMAT"=> $rowData[0][14],
                );
                
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("nilai",$data);
                delete_files($media['file_path']);
                    
            }
        redirect('nilai_view');
    }
    
    function import(){
        if(isset($_FILES["file"]["name"]))
        {
        $path = $_FILES["file"]["tmp_name"];
        $reader = new PHPExcel_IOFactory();
        $object = $reader::load($path);
        foreach($object->getWorksheetIterator() as $worksheet)
        {
            $highestRow = $worksheet->getHighestRow();
            $highestColumn = $worksheet->getHighestColumn();
            for($row=2; $row<=$highestRow; $row++)
            {
            $id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
            $kode_mk = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $nim = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
            $nama = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $tugas1 = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
            $tugas2 = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
            $tugas3 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
            $tugas4 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
            $tugas5 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
            $presensi = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
            $uts = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
            $uas = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
            $praktikum = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
            $nilai = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
            $grade = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
            $data[] = array(
                //FORMAT SINTAKS
                //'NAMA ATTRIBUT' => $NAMA_VARIABEL
            'ID_NILAI'  => $id,
            'KODE_MK'   => $kode_mk,
            'NIM'    => $nim,
            'NAMA'  => $nama,
            'TUGAS_1'   => $tugas1,
            'TUGAS_2'  => $tugas2,
            'TUGAS_3'   => $tugas3,
            'TUGAS_4'    => $tugas4,
            'TUGAS_5'  => $tugas5,
            'PRESENSI'   => $presensi,
            'UTS'  => $uts,
            'UAS'   => $uas,
            'PRAKTIKUM'    => $praktikum,
            'NILAI'  => $nilai,
            'GRADE'   => $grade
            );
            }
        }
        $this->Database_Nilai->insert($data);
        } 
        redirect('nilai_view'); // Redirect ke halaman awal (ke [nama controller]  fungsi index)
    }
 
}
?>