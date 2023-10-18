<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    public function __construct(){
       parent::__construct();
       $this->load->model('registerdata');

    }

    //TO SHOW THE LOGIN PAGE USE THE FUNCTION
	public function index()
	{
        $data['body'] = 'Auth/login';
        $data['title'] = 'Login | Khoisan';
        $this->load->view('frontend_template', $data);
	}

    //TO SHOW THE REGISTRATION PAGE USE THE FUNCTION
	public function signup()
    {
        $data['body'] = 'Auth/Registration';
        $data['title'] = 'Registration | Khoisan';
        $this->load->view('frontend_template', $data);
        // $this->load->view('Auth/Registration');
        
    }


    //REGISTER CONTROLLER FOR TO INSERT USER_DATA
	public function regInfo()
	{
        
        $name = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        

        $data= array(
            'username' => $name,
            'password' => $password,
            'email' => $email,
            'phone' => $phone,
        );
        
         $insert = $this->registerdata->insertuser($data);
         echo json_encode($insert);
            
            
           
        
    }

    //LOGIN CONTROLLER FOR CHECKKING DATA
    public function logvalue()
    {
       
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            $result = $this->registerdata->logdata($username, $password);
            if ($result) {
                echo 'success';
            } else {
                echo 'error';
            }
    }

    //GET ALL DATA 
    public function datafetch() 
    {

      //load the database  
      $this->load->database();  

      //load the model  
      $this->load->model('select');

      //load the method of model  
      $data['h']=$this->select->select();
        
      //return the data in view  
      $this->load->view('select_view', $data);  

    }
    
    public function recorddata()
    {
        $this->load->view('Auth/alldata');
    }

    public function userpanel()
	{
        
        $this->load->view('Auth/adminpanel');
        $data['title'] = 'Admin | Khoisan';
        $this->load->view('frontend_template', $data);
	}
    public function userprofile()
	{
        
        $this->load->view('Auth/userprofile');
        $data['title'] = 'User | Khoisan';
	}

    function add(){
        $this->form_validation->set_rules('image_name', 'Image Name', 'required');
  
     // configurations from upload library
   $config['upload_path'] = './assets';
   $config['allowed_types'] = 'gif|jpg|png|jpeg';
   $config['max_size'] = '2048000'; // max size in KB
   $config['max_width'] = '20000'; //max resolution width
   $config['max_height'] = '20000';  //max resolution height
   // load CI libarary called upload
   $this->load->library('upload', $config);
   // body of if clause will be executed when image uploading is failed
   if(!$this->upload->do_upload()){
    $errors = array('error' => $this->upload->display_errors());
    // This image is uploaded by deafult if the selected image in not uploaded
    $image = 'no_image.png';    
   }
   // body of else clause will be executed when image uploading is succeeded
   else{
    $data = array('upload_data' => $this->upload->data());
    $image = $_FILES['userfile']['name'];  //name must be userfile
    
   }
   $this->Image_model->insert_image($image);
//    $this->session->set_flashdata('success','Image stored');
   redirect('login');
  }
   
}
