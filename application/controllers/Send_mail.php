<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_mail extends Public_Controller {
    function __construct() {
        // 
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
    }

    public function index()
    {   
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'minhsu57', // change it to yours
            'smtp_pass' => 'sti4000sti', // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'starttls'  => true,
            'newline'   => "\r\n"
        );
        $this->load->library('email', $config);

        
        
        /* get info from user input */       
        $name   = $this->input->post('name');
        $phone  = $this->input->post('phone');
        $email  = $this->input->post('email');
        $course  = $this->input->post('course');
        $message  = $this->input->post('message');
        /* Send email to customer */
        $subject = 'Đăng ký tư vấn khóa học';
        /* ************************ */
        $message = '123';
        $this->load->library('email', $config);
        //$this->email->set_newline("\n");
        $this->email->from('minhsu57@gmail.com'); // change it to yours
        $this->email->to('minhsu0602@gmail.com');// change it to yours
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()){
            echo json_encode(array("sent"=>TRUE));
        }else{
            echo json_encode(array("sent"=>FALSE));
        }
    }
}