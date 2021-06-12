<?php
class control extends CI_Controller{

    public function index(){
           $this->load->helper('url');
           $this->load->model('create_model');
           $this->load->library('pagination');
           $config['base_url']=base_url('control/index');
           $config['per_page']=2;
           $config['total_rows']=$this->create_model->allrows();
           
           $config['full_tag_open']="<ul class='pagination'>";
           $config['full_tag_close']='</ul>';
           $config['next_tag_open']='<li class="page-item disabled">';
           $config['next_tag_close']='</li>';
           $config['prev_tag_open']='<li class="page-item">';
           $config['prev_tag_close']='</li>';
           $config['num_tag_open']='<li class="page-item">';
           $config['num_tag_close']='</li>';
           $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
           $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
           $config['attributes']=array('class'=>'page-link');
           $this->pagination->initialize($config);
           #$data['details_produits']=$this->create_model->getallproduct($config['per_page'],$this->uri->segment(3));
           #$data['details_category']=$this->create_model->getallcategory($config['per_page'],$this->uri->segment(3));
           #$this->load->view('listproduit',$data);
           $this->load->model('create_model');
           $data['title'] = "Produits Selon Categorie";
           $data['angkatan'] = $this->db->get('categories')->result();
           #$data['category'] = $this->db->get('category')->result();
           #$dt['mahasiswa'] = $data;
           #$dt['category_id'] = $id;
           #$data['mahasiswa']=$this->create_model->getallproduct($config['per_page'],$this->uri->segment(3));
           $data['mahasiswa']=$this->create_model->getallproduits($config['per_page'],$this->uri->segment(3));
           $data['details_category']=$this->create_model->getallcategory($config['per_page'],$this->uri->segment(3));
           $data['details_fournisseurs']=$this->create_model->getallfournisseurs($config['per_page'],$this->uri->segment(3));
           $this->load->view('listproduit', $data); 
           
       }  
        public function filter($id)
        {
           $this->load->library('pagination');
           $config['base_url']=base_url('control/index');
           $config['per_page']=2;
           $config['total_rows']=$this->create_model->allrows();
           
           $config['full_tag_open']="<ul class='pagination'>";
           $config['full_tag_close']='</ul>';
           $config['next_tag_open']='<li class="page-item disabled">';
           $config['next_tag_close']='</li>';
           $config['prev_tag_open']='<li class="page-item">';
           $config['prev_tag_close']='</li>';
           $config['num_tag_open']='<li class="page-item">';
           $config['num_tag_close']='</li>';
           $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
           $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
           $config['attributes']=array('class'=>'page-link');
           $this->pagination->initialize($config);
           if ($id == 0) {
                
                $data = $this->db->get('produits')->result();
                #$data=$this->create_model->getallproduits();
                #$data['mahasiswa'] = $this->create_model->getallproduits()->result();
            }
           else
            {
               $data = $this->db->get_where('produits', ['category_id'=>$id])->result();
               #$data=$this->create_model->getallproduits();
               #$data['mahasiswa'] = $this->create_model->getallproduits()->result();
               #$data=$this->db->getproduit();
            }
            #$dt['mahasiswa'] = $data;
            #$dt['category_id'] = $id;
            #$this->load->view('listproduit', $dt);
            $this->load->view('listproduit',$data);
    }
    
    public function addproduit(){
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('create_model');
        $this->form_validation->set_rules('nom_produit','Nom_Produit','trim|required');
        $this->form_validation->set_rules('prix','Prix_Produit','trim|required');
        $this->form_validation->set_rules('quantite','Quantite_Produit','trim|required');
        $this->form_validation->set_rules('category_id','category','trim|required');
        $this->form_validation->set_rules('reference','Référence','trim|required|is_unique[produits.reference]');
        $this->form_validation->set_rules('ref_fournisseur','fournisseurs','trim|required');
        $this->form_validation->set_rules('fournisseurs','fournisseurs','trim|required');

        if($this->form_validation->run()==FALSE){
            $data_error=[
                    'error'=>validation_errors()
            ];
            $this->session->set_flashdata($data_error);

        }
        else{
            $result=$this->create_model->insertproduit([
                'nom_produit'=>$this->input->post('nom_produit'),
                #'nom_produit'=>json_encode(implode(",", $this->input->post('nom_produit'))),
                'prix'=>$this->input->post('prix'),
                'quantite'=>$this->input->post('quantite'),
                'created_date'=>date('y-m-d'),
                'category_id'=>$this->input->post('category_id'),
                'reference'=>$this->input->post('reference'),
                'ref_fournisseur'=>$this->input->post('ref_fournisseur'),
                'fournisseurs'=>$this->input->post('fournisseurs')
               
              

                #'name'=>$_POST['name']

            ]);
            if($result){
                $this->session->set_flashdata('inserted','record added successfuly');

            }

            
        }

        redirect('control/index');
    }
    public function edit_produit($id_produit){
        $this->load->model('create_model');
        $data['details_category']=$this->create_model->getallcategory();
        $data['single_produit']=$this->create_model->getsingleproduct($id_produit);
        $data['single_fournisseurs']=$this->create_model->getallfournisseurs();
        $this->load->view('editproduit',$data);

    }
    public function update_produit($id_produit){
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('create_model');
        $this->form_validation->set_rules('reference','Référence','trim|required');
        $this->form_validation->set_rules('nom_produit','Nom_Produit','trim|required');
        $this->form_validation->set_rules('prix','Prix_Produit','trim|required');
        $this->form_validation->set_rules('quantite','Quantite_Produit','trim|required');
        $this->form_validation->set_rules('category_id','Catégorie','trim|required');
        $this->form_validation->set_rules('ref_fournisseur','fournisseurs','trim|required');
        if($this->form_validation->run()==FALSE){
            $data_error=[
                    'error'=>validation_errors()
            ];
            $this->session->set_flashdata($data_error);
        }
        else{
            $result=$this->create_model->updateproduit([
                'nom_produit'=>$this->input->post('nom_produit'),
                'prix'=>$this->input->post('prix'),
                'quantite'=>$this->input->post('quantite'),
                'created_date'=>date('y-m-d'),
                'category_id'=>$this->input->post('category_id'),
                'ref_fournisseur'=>$this->input->post('ref_fournisseur')
            ],$id_produit);
            if($result){
                $this->session->set_flashdata('updated','record has updated successfuly');

            }

            
        }
        redirect('control/index');

           
    }
    public function delete_produit($id_produit){
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('create_model');
        $result=$this->create_model->delete_record($id_produit);
        if($result == true){
              $this->session->set_flashdata('deleted','the product has been deleted!');

        }
        redirect('control/index');



    }/*
    public function cetak($id)
    {
        if ($id == 0) {
            $data = $this->db->get('produits')->result();
        }
        else
        {
         $data = $this->db->get_where('produits', ['category_id'=>$id])->result();
        }
        $dt['mahasiswa'] = $data;
        $this->load->library('mypdf');
        #$this->mypdf->generate('cetak', $dt, 'laporan-mahasiswa', 'A4', 'portrait');
        $this->mypdf->generate('cetak', $dt,'laporan-mahasiswa', 'A4', 'landscape','potrait');
    }*/
    /*
    public function filter(){
        $filter=$this->input->post('filter');
        $field=$this->input->post('field');
        $search=$this->input->post('search');

        if(isset($filter)&& !empty($search)) {
                $this->load->model('create_model');
                $data['details_produits'] = $this->create_model->getproduitslike($field,$search);
                #$data['details_produits'] = $this->create_model->get_product_category($field,$search);
                #$data['details_produits'] = $this->create_model->get_product_category($field,$search);
        }else{
                $this->load->model('create_model');
                $data['details_produits'] = $this->create_model->getallproduits();
        }
        $this->load->view("listproduit",$data);
    }*/
    /*public function index1(){
        $this->load->helper('url');
        $this->load->model('create_model');
        $this->load->library('pagination');
        $config['base_url']=base_url('control/index1');
        $config['per_page']=2;
        $config['total_rows']=$this->create_model->allrowscategory();
        
        $config['full_tag_open']="<ul class='pagination'>";
        $config['full_tag_close']='</ul>';
        $config['next_tag_open']='<li class="page-item disabled">';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
        $config['attributes']=array('class'=>'page-link');
        $this->pagination->initialize($config);


        $data['details_category']=$this->create_model->getallcategory($config['per_page'],$this->uri->segment(3));
        $this->load->view('listcategory',$data);
    }*/
    public function addcategory(){
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('create_model');
        $this->form_validation->set_rules('name','Nom_category','trim|required');
       
        if($this->form_validation->run()==FALSE){
            #$data_error=[
            #        'error'=>validation_errors()
            #];
            #$this->session->set_flashdata($data_error);
            $this->load->view('listcategory');
            $this->session->set_flashdata('error','The Nom_category field is required');

        } 
        /* 
        else{
            $result=$this->create_model->insertcategory([
                'name'=>$this->input->post('name')
            ]);
            if($result){
                $this->session->set_flashdata('inserted','record inserted successfuly');

            }
        */
        else{

                $formarray = array();
                $formarray['name']= $this->input->post('name');
                $this->create_model->insertcategory($formarray);
                $this->session->set_flashdata('inserted','record inserted successfuly');
                redirect('control/index');
    
        }
        
    }
    public function view_category(){
        $this->load->model('create_model');
        $data['details_category']=$this->create_model->getallcategory();
        $data['details_produits']=$this->create_model->getproduitcategorie();
        $this->load->view('categoryproduit',$data);

    }
    public function index2($offset=0){
        #$data['devis']=$this->create_model->getalldevis();
        #$this->load->view('devis');
        $this->load->model('create_model');
        $this->load->library('pagination');
        $config['base_url']=base_url('auto/index2');
        $config['per_page']=2;
        $config['reuse_query_string']=TRUE;
        $config['total_rows']=$this->create_model->getTotalRowsdevis();
        $config['next_link']='Next';
        $config['prev_link']='Previous';
        /*
        $config['full_tag_open']="<ul class='pagination'>";
        $config['full_tag_close']='</ul>';
        $config['next_tag_open']='<li class="page-item disabled">';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
        $config['attributes']=array('class'=>'page-link');*/
        $config['full_tag_open']="<ul class='pagination'>";
        $config['full_tag_close']='</ul>';
        $config['next_tag_open']='<li class="page-item disabled">';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close']='<span class="sr-only">(current)</span></a></li>';
        $config['attributes']=array('class'=>'page-link');
        $this->pagination->initialize($config);
        #$data['devis']=$this->create_model->getalldevis();
        $data['devis']=$this->create_model->getdevis($config['per_page'],$offset);
        $data['details_clients']=$this->create_model->getallclients1($config['per_page'],$offset);
        $data['details_produits']=$this->create_model->getallproduits1($config['per_page'],$offset);
        $this->load->view('listdevis',$data);
    }

    public function create_devis(){
            $this->load->model('create_model');
            $this->load->helper('array');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('ref_devis','Numéro devis','required');
            $this->form_validation->set_rules('date_creation','date création','required');
            $this->form_validation->set_rules('validite','Durée validité','required');
     
            $this->form_validation->set_rules('id_client','id_client','required');
            #$this->form_validation->set_rules('id_produit[]','id_produit','required');
            $this->form_validation->set_rules('nom_devis[]','nom_devis','required');
            $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
            if($this->form_validation->run()==FALSE){
                $data['details_clients']=$this->create_model->getallclients1();
                $data['details_produits']=$this->create_model->getallproduits1();
                     $this->load->view('devis',$data);
        
            }
            else{  
                #if($data->status==1){
                    $formarray = array();
                    $formarray['id_client']= $this->input->post('id_client');
                    $formarray['duree']= $this->input->post('validite');
                    $formarray['ref_devis']= $this->input->post('ref_devis');
                    $formarray['date']= $this->input->post('date_creation');
                    #$formarray['id_produit']= $this->input->post('id_produit[]');
                    #$this->create_model->insert_devis($formarray);
                    $formarray['nom_devis']=implode(",",$this->input->post('nom_devis'));
                    $this->create_model->insert_devis($formarray);
                    /*
                    foreach($food_list as $food) {
                         $formarray['id_produit']= $food;
                    $this->create_model->insert_devis($formarray);
                    }*/
                    #$id_produit= $this->input->post('id_produit');
                    #if(id_produit) //because $feature will be null if no boxes are checked
                    #{
                    #     $formarray['id_produit'] = json_encode(implode(",", $id_produit));
                    #}
                    /*
                    $details_produits = $this->input->post('id_produit');

                    for ($i=0; $i < count($details_produits) ; $i++) { 
                           $formarray[] = array('id_produit' => $$details_produits[$i]);
                    }*/
                    #$formarray['id_produit']=json_encode(implode(",", $this->input->post('id_produit')));

                    #$this->create_model->insert_devis($formarray);
                    /*
                    $formarray = array(
                        'id_produit' => $this->input->post('id_produit')
                    );
                    */
                    $this->session->set_flashdata('success','record added successfuly');
                    redirect(base_url().'control/index2');
                }
                    /*
                    $result=$this->create_model->insertdevis([
                    'ref_devis'=>$this->input->post('ref_devis'),
                    'date'=>$this->input->post('date_creation'),
                    'duree'=>$this->input->post('validite'),
                   
                    'id_client'=>$this->input->post('id_client'),
                    'id_produit'=>$this->input->post('id_produit'),
   
                    ]);
                    if($result){
                      $this->session->set_flashdata('success','record added successfuly');
                      redirect(base_url().'control/index2');
                      

                    }*/
                   

        
            
       
    }
    /*
    public function edit_devis($userid){
        $this->load->model('create_model');
        $user=$this->create_model->getuser($userid);
        $data=array();
        $data['user']=$user;
        $this->form_validation->set_rules('ref_devis','Numéro devis','required');
        $this->form_validation->set_rules('date_creation','date création','required');
        $this->form_validation->set_rules('validite','Durée validité','required');
     
        $this->form_validation->set_rules('id_client','id_client','required');
        $this->form_validation->set_rules('id_produit','id_produit','required');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
        if($this->form_validation->run() ==  False){

            $this->load->view('modifier_devis',$data);
        }
        else{
            //update user record
            $formarray = array();
            $formarray['id_client']= $this->input->post('id_client');
            $formarray['duree']= $this->input->post('validite');
            $formarray['ref_devis']= $this->input->post('ref_devis');
            $formarray['date']= $this->input->post('date_creation');
            $formarray['id_produit']= $this->input->post('id_produit');
            $this->create_model->updatedevis($userid,$formarray);
            $this->session->set_flashdata('success','record update successfuly');
            #redirect('control/modifier');
            redirect(base_url().'control/index2');

            
        }
    }*/

    /*
    public function view($id){
        $this->load->model('create_model');
        $data['posts']=$this->create_model->getsingledevis($id);
        $this->load->view('afficherdevis',$data);
        #$post=$this->create_model->getsingledevis($id);
        #$post1=$this->create_model->getsingleclient();
        #$this->load->view('afficherdevis',['post'=>$post],['post1'=>$post1]);
        #$this->load->view('afficherdevis',['post'=>$post]);
        #$this->load->library('mypdf');
        #$this->mypdf->generate('afficherdevis',$post,'laporan-mahasiswa', 'A4', 'landscape','potrait');
    }*/
    public function view($id){
    
      
      $this->load->model('create_model');
      $data['posts']=$this->create_model->getsingledevis($id);
      #$this->load->view('afficherdevis',$data);
      $this->load->library('mypdf');
      $this->mypdf->generate('afficherdevis',$data,'laporan-mahasiswa', 'A4', 'landscape','potrait');
    
      
    }
    public function delete_devis($num_devis){
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('create_model');
        $result=$this->create_model->delete_record_devis($num_devis);
        if($result == true){
              $this->session->set_flashdata('success','le devis à été supprimer avec success');

        }
        redirect('control/index2');
    }
    public function update_status_devis($num_devis,$status1){

	    $this->load->model('create_model');

	    //send id and status to the model to update the status
	    if($this->create_model->update_status_devis($num_devis,$status1)){
                $this->session->set_flashdata('success','le devis à létat envoyé');
                   
        }
        else{
                $this->session->set_flashdata('success','le devis à létat brouillon');
        

        }
        return redirect(base_url().'control/index2');  

    }

    public function requirement()
    {
        $this->load->model('create_model');
        $data['user'] = $this->create_model->getusers();
        $this->load->view('requirements',$data);
    
        $insert = array (
          'role_name'             => $this->input->post('role_name'),
          'vacancies'             => $this->input->post('vacancies'),
          'experience'            => $this->input->post('experience'),
          'jd'                    => $this->input->post('jd'),
          'hiring_contact_name'   => $this->input->post('hiring_contact_name'),
          'hiring_contact_number' => $this->input->post('hiring_contact_number'),
          'user_id'=> implode(',',$this->input->post('user_id')) //this is my foreign key id from users table);
        );
        $this->create_model->add_requirement($insert);
    }
    /*
    public function cetak1($id)
    {
        if ($id == 0) {
            $data = $this->db->get('devis')->result();
        }
        else
        {
         $data = $this->db->get_where('devis', ['id_client'=>$id])->result();
        }
        $dt['post'] = $data;
        $this->load->library('mypdf');
        #$this->mypdf->generate('cetak', $dt, 'laporan-mahasiswa', 'A4', 'portrait');
    }*/
    public function cetak($id)    
    {
        $this->load->model('create_model');
        if ($id == 0) {
            $data = $this->db->get('produits')->result();
        }
        else
        {
            $data = $this->db->get_where('produits', ['category_id'=>$id])->result();
        }
        $dt['mahasiswa'] = $data;
        $this->load->library('mypdf');
        $this->mypdf->generate('cetak', $dt,'laporan-mahasiswa', 'A4', 'landscape','potrait');
    }
 


   
    public function edit_devis1($id_devis){
        $this->load->model('create_model');
        #$data['details_category']=$this->create_model->getallcategory();
        $data['details_clients']=$this->create_model->getallclients1();
        $data['details_produits']=$this->create_model->getallproduits1();
        $data['single_devis']=$this->create_model->getsingledevis1($id_devis);

        $this->load->view('modifier_devis',$data);

    }
    
    public function edit_devis($id_devis){
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->model('create_model');
        $this->form_validation->set_rules('ref_devis','Numéro devis','required');
        $this->form_validation->set_rules('date_creation','date création','required');
        $this->form_validation->set_rules('validite','Durée validité','required');
     
        $this->form_validation->set_rules('id_client','id_client','required');
        $this->form_validation->set_rules('id_produit','id_produit','required');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
        if($this->form_validation->run()==FALSE){
            $data_error=[
                    'error'=>validation_errors()
            ];
            $this->session->set_flashdata($data_error);
        }
        else{
            $result=$this->create_model->updatedevis([
                'ref_devis'=>$this->input->post('ref_devis'),
                'date'=>$this->input->post('date_creation'),
                'duree'=>$this->input->post('validite'),
                'id_client'=>$this->input->post('id_client'),
                'id_produit'=>$this->input->post('id_produit')
            ],$id_devis);
            if($result){
                $this->session->set_flashdata('success','record has updated successfuly');

            }

            
        }
        redirect('control/index2');
    }
    
    function index4()
    {
     
        #$html = $this->load->view('view_pdf', [], true);
        $this->load->model('create_model');
        #$data['posts']=$this->create_model->getsingledevis($id);
        $data['posts']=$this->db->query('select * from devis join clients on clients.id=devis.id_client join produits on produits.id_produit=devis.id_produit ')->result();
        #$this->create_model->getalldevis($id);
        $this->load->library('pdft');
        $html = $this->load->view('afficherdevis',$data, true);
        $this->pdft->createPDF($html, 'mypdft', false);
    }
    public function pdfdetails()
    {
     if($this->uri->segment(3))
     {
      $this->load->library('pdf12');
      $this->load->model('create_model');
      $id = $this->uri->segment(3);
      #$html_content = '<h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>';
      #$html_content='<background="LJT MAROC" >';
      $this->pdf12->showWatermarkText=true;
      /*
      $html_content='<table style="border: 1px solid #333">
      <thead>
      <tr>
          <th >Désignation</th>
          <th scope="col">Unité</th>
          <th scope="col">Quantité</th>
          <th scope="col">Prix unitaire</th>
          <th scope="col">Total Ht</th>

      </tr>
  </thead>';*/
      $html_content='<body style="background-image:"assets/img/ljtmaroc.png">';
      #$html_content='<watermarktext content="DRAFT" alpha="0.4"/>';
      $html_content.= $this->create_model->show_single_details($id);
      #$pdf12->loadHtml($html_content);
      $this->pdf12->loadHtml($html_content);
      $this->pdf12->render();
      #$this->pdf12->stream("welcome.pdf", array("Attachment"=>0));
      #$this->pdf12->stream("".$customer_id.".pdf", array("Attachment"=>0));
      
      $this->pdf12->stream("".$customer_id.".pdf",array("Attachment"=>0));
    
      if($this->db->where('status1','1')){
        $this->load->library('email');
                       
        //Get the form data

        $from_email = 'ajotrans1@gmail.com';
        $subject = "devis";
        $message="bonjours voici votre devis";
        //Web master email
        $to_email ='k9190536@gmail.com'; //who receive mails

        //Mail settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'ajotrans1@gmail.com'; // Your email address
        $config['smtp_pass'] = 'bouarfa123'; // Your email account password
        $config['mailtype'] = 'html'; // or 'text'
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE; //No quotes required
        $config['newline'] = "\r\n"; //Double quotes required

        $this->email->initialize($config);                        

        //Send mail with data
        $this->email->from($from_email);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->attach("C:/Users/pc/Downloads/pdf(3)");

        if ($this->email->send())
        {
         #$this->session->set_flashdata("success","Reset Password link sent to your registred email.Please verify");
         $this->session->set_flashdata("success","le devis à été envoyé avec success");
         redirect("control/index2", "refresh");  
        }
     }
    }
        
       
    }

    /*
    public function cetakkartu($id) {  
        //set a value for $kode_pasien
       $kode_pasien = $id;  
       // Load all views as normal
       $data['post'] = $this->create_model->view_kartu($kode_pasien);
       $this->load->view('afficherdevis', $data);
       // Get output html
       $html = $this->output->get_output();
       
       // Load library
       $this->load->library('dompdf');
       
       // Convert to PDF
       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("afficherdevis" . ".pdf", array ('Attachment' => 0));}*/
    
                   
            

}    
    

/*class control extends CI_Controller{

    public function profile_admin(){
        #$this->load->view('profile_admin');
        $this->load->view('adminpage');
    }
    public function profile_user(){
        #$this->load->view('profile_user');
        $this->load->view('exemple/userpage1');
    }
    public function home(){
        #$this->load->view('profile_user');
        $this->load->view('home_test');
        #$this->load->view('list');
    }
    public function ajouter(){
        $this->load->view('create1');
    }
    public function modifier(){
        $this->load->view('list');
    }
}

*/
?>