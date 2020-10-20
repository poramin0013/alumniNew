<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Manage_model');
    }

    public function index(){
<<<<<<< HEAD
      
=======
        $data['datapersonal'] = $this->Manage_model->personal_view();
        $data['dataalumni'] = $this->Manage_model->alumni_view();
        $data['dataworkinformation'] = $this->Manage_model->workinformation_view();
        $this->load->view('home',$data);
        //$this->load->view('reg_alumni');
        //$this->load->view('footer');
>>>>>>> bf5b4100e72a48a3ff508956b2a705d1228b3c96
    }

    public function reg_alumni(){
       

        //$cardid = $this->input->post("card_id");
 
    //    echo $cardid;
        //$studentCode = $this->input->post("studentCode");
        //echo $studentCode;
        //$name = $this->input->post("prefix"." "."fname"." "."lname");
        //echo $name;
       // $gender = $this->input->post("gender");
        // echo $gender;

        $name = $this->input->post("prefix").$this->input->post("fname").$this->input->post("lname");
        $address = $this->input->post("p_number").$this->input->post("p_road").$this->input->post("p_district").$this->input->post("p_amphoe").$this->input->post("p_province").$this->input->post("p_zipcode");
        $datapersonal = array(
            'card_id' => $this->input->post("card_id"),
            'student_id' => $this->input->post("student_id"),
            'name'=> $name,
            'gender' => $this->input->post("gender"),
            'birthday' => $this->input->post("birthday"),
            'address' => $address, 
            'tel' => $this->input->post("p_tel"),
            'email' => $this->input->post("email"),
            'facebook' => $this->input->post("facebook"),

            
        );

        $dataalumni = array(
            'student_id' => $this->input->post("student_id"),
            'group' => $this->input->post("group"),
            'branch' => $this->input->post("branch"),
            'faculty' => $this->input->post("faculty"),
            'semester' => $this->input->post("semester"),
            'education_level' => $this->input->post("education_level"),
            'year_int' => $this->input->post("year_int"),
            'year_out' => $this->input->post("year_out"),
            'outstanding_work' => $this->input->post("outstanding_work")
        );
        $address2 = $this->input->post("c_number").$this->input->post("c_road").$this->input->post("c_district").$this->input->post("c_amphoe").$this->input->post("c_province").$this->input->post("c_zipcode");
        $dataworkinformation = array(
            'student_id' => $this->input->post("student_id"),
            'company' => $this->input->post("company"),
            'position' => $this->input->post("position"),
            'address'=> $address2,
            'tel' => $this->input->post("c_tel")

        );

         //print_r($datapersonal);

        $this->Manage_model->personal_insert($datapersonal);
        $this->Manage_model->alumni_insert($dataalumni);
        $this->Manage_model->workinformation_insert($dataworkinformation);
<<<<<<< HEAD
        $this->load->view('view_reg');     
=======
        //$this->loan->view('perview');     
>>>>>>> bf5b4100e72a48a3ff508956b2a705d1228b3c96
    }
    public function view_reg(){
       
        $data['datapersonal'] = $this->Manage_model->personal_view();
        $data['dataalumni'] = $this->Manage_model->alumni_view();
        $data['dataworkinformation'] = $this->Manage_model->workinformation_view();
<<<<<<< HEAD
=======
        $this->load->view('home',$data);
>>>>>>> bf5b4100e72a48a3ff508956b2a705d1228b3c96
        $this->load->view('view_reg',$data);  
    }
   
           
}