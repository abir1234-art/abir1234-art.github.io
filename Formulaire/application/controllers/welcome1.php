<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Welcome1 extends CI_Controller {
 
 
  /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function index()
   {
	#$this->load->view('welcome_message');
    $this->load->view('generatepdf');
   }
 
 
   /**
    * Get Download PDF File
    *
    * @return Response
   */
   function convertpdf(){
 
 
	// Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf123');
        
        // Load HTML content
        $this->pdf123->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->pdf123->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->pdf123->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->pdf123->stream("welcome.pdf", array("Attachment"=>0));
   }
}
 
 