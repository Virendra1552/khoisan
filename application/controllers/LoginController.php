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
}
