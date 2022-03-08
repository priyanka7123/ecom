<?php


class Email extends CI_Controller
{

    public function index()
    {
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'priyankadas.7123@gmail.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'priyankadas.7123@gmail.com';
        $config['smtp_pass'] = 'piyu';

        // Load email library and passing configured values to email library
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Sender email address
        $this->email->from('pr@gmail.com', 'ss');
        // Receiver email address
        $this->email->to('priyankadas.7123@gmail.com');
        // Subject of email
        $this->email->subject('subject');
        // Message in email
        $this->email->message('Message Send Here');
        $this->email->send();
        $this->email->print_debugger(array('headers'));
    }

}
