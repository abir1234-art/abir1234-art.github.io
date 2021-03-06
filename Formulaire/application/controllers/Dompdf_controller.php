<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dompdf_controller  extends CI_Controller {
    
    public function index(){
        // echo "string";die();
        #$this->load->view('welcome_message.php')
        $this->load->view('generatepdf');
        
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'potrait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>1));
    }
    
}