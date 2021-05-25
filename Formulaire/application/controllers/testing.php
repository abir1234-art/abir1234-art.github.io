<?php
class testing extends CI_Controller{

    public function index(){
        echo "bonjour";
        $this->load->library('pdf');
        $this->load->view('makepdf');
        #$this->load->view('facture');
    }
    /*
    function htmlToPDF(){
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('facture'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }*/

}


?>