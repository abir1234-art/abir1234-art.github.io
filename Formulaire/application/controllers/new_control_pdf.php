<?php

class new_control_pdf extends CI_Controller{

    public function index(){
        $this->load->view('welcome');
        #$this->load->view('pdf_exemple');
        
        
      
    }
    public function testpdf(){
        $this->load->library('pdf');
        #$html="bonjour tous le monde";
        $html="<h1 style=color:blue>CODENIGHTER</h1><strong><p>Bonjours tous le monde</p></strong>";
        $html.="<h5 style=color:blue>Définition Codenighter</h5>";
        $html.="<p>CodeIgniter est un framework libre écrit en PHP. Il suit le motif de conception MVC et s'inspire du fonctionnement de Ruby on Rails. Les versions inférieures à la 2.0.0 sont compatibles avec PHP 4 et 5, tandis que celles supérieures à la 2.0.0 ne sont compatibles qu'avec PHP 5.1.6 ou plus. La version 3.0 requiert PHP 5.2.4 et la version 3.1 requiert PHP 5.3.7.</p>";
        $html.="<h5 style=color:blue>ARCHITECTURE DU FRAMEWORK CODEIGNITER</h5>";
        $html.="<p>CodeIgniter reprend un le design pattern de composition qui a fait ses preuves dans le développement web : HMVC pour Hierarchical Model Vue Controller.

        Ce modèle dérive du MVC (Model View Controller) qui prône la séparation des préoccupations (separation of concerns).
        
        Et si modèle MVC permet une programmation élégante et plus maintenable/évolutive de part la séparation claire entre l’acquisition de données (le M de Model), la présentation de ces données (le V de Vue) et la gestion des demandes des utilisateurs (le C de Controller), le modèle HMVC y ajoute une composante hiérarchique pour encore plus de modularité.
        
        Il convient toutefois de préciser que l’approche MVC de CodeIgniter est assez souple : il est par exemple possible de faire l’impasse sur les modèles de données si on le souhaite.
        
        CodeIgniter fournit en outre, la possibilité d’enrichir ce modèle via des libraries/helpers utiles au développement.</p>";
        #$html = $this->output->get_output();
        #$dompdf= new PDF();
        #$html = $this->output->get_output();
        #$html = $this->load->view('welcome');
        $this->dompdf->loadHtml($html);
        $this->dompdf->render();
        $output=$this->dompdf->output();
        file_put_contents('test.pdf',$output);
        $this->dompdf->stream();
    }
}
/*
 require_once APPPATH.'third_party'
                   .DIRECTORY_SEPARATOR.'dompdf'
                   .DIRECTORY_SEPARATOR.'autoload.inc.php';

use Dompdf\Dompdf;


public function index (){
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

}

} */




?>