<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PdfModel');
		$this->load->library('pdf12');
	}

	public function index()
	{
		$data['customer_data'] = $this->PdfModel->showRecord();
		$this->load->view('htmltopdf', $data);
	}

	public function details()
	{
		if($this->uri->segment(3))
		{
			$customer_id = $this->uri->segment(3);
			$data['customer_details'] = $this->PdfModel->show_single_details($customer_id);
			$this->load->view('htmltopdf', $data);
		}
	}
    public function pdfdetails(){
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->pdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->pdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $this->pdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->pdf->stream("welcome.pdf", array("Attachment"=>0));
   }
    

    /*
	public function pdfdetails()
	{
		if($this->uri->segment(3))
		{

			$customer_id = $this->uri->segment(3);
			$html_content = '<h3 align="center">Generate PDF using Dompdf</h3>';
			$html_content .= $this->PdfModel->show_single_details($customer_id);
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
		}
	}
    */

}
?>