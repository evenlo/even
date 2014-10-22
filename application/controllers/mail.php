<?php 
class Mail extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function send_for_contact_me() {
    	if ($this->input->post('email')) {
    		$email = $this->input->post('email');
    		$name = $this->input->post('name');
    		$message = $this->input->post('message');
    		$email_subject = "even.pw上有人寄信給你囉，來自:  $name";
        	$this->load->library('mailer');
        	$this->mailer->sendmail('even.buy@gmail.com',$name,$email_subject,$message);
    	}
        
    }
}