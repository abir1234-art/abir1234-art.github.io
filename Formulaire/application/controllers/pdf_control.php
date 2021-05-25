<?php
#defined('BASEPATH') OR exit('No direct script access allowed');

class pdf_control extends CI_Controller {

  public function index()
  {
    $this->load->library('mypdf');
    /*
    $data['data'] = array(
      ['nim'=>'123456789','name'=>'example name 1','jurusan'=>'Teknik Informatika'],
      ['nim'=>'123456789', 'name'=>'example name 2', 'jurusan'=>'Jaringan']
    );*/
    #$this->mypdf->generate('dompdf', $data, 'laporan-mahasiswa', 'A4', 'landscape','potrait');
    $this->mypdf->generate('dompdf','laporan-mahasiswa', 'A4', 'landscape','potrait');
    #$this->mypdf->generate('welcome','laporan-mahasiswa', 'A4', 'landscape','potrait');
    
  }

}


