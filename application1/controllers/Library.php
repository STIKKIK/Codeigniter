<?php
class Library extends CI_Controller {

    function index()
    {
        // core library
        $this->load->library('example_library');
        echo $this->example_library->bar();
    }
    function email()
    {
        // extend email library
        echo $this->email->readmail();

        // send email to gmail
        // ####### open security https://myaccount.google.com/security
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'thanawat.thum@bumail.net',
            'smtp_pass' => '5713+Thumbal',
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('maikawinthum@gmail.com', 'your Name');
        $this->email->to('thanawat.thum@bumail.net');
        $this->email->subject(' Your Subject here.. ');
        $this->email->message('Your Message here..');
        if (!$this->email->send()) {
            show_error($this->email->print_debugger()); }
        else {
            echo 'Your e-mail has been sent!';
        }
    }
}
?>