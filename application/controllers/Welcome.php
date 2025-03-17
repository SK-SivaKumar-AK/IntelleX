<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
    }

	public function index()
	{
		$global_header_data = [
			"page" => "home"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('home');
		$this->load->view('components/global_footer');
	}

	public function about()
	{
		$global_header_data = [
			"page" => "about"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('about');
		$this->load->view('components/global_footer');
	}

	public function service()
	{
		$global_header_data = [
			"page" => "service"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('service');
		$this->load->view('components/global_footer');
	}

	public function project()
	{
		$global_header_data = [
			"page" => "project"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('project');
		$this->load->view('components/global_footer');
	}

	public function pricing()
	{
		$global_header_data = [
			"page" => "pricing"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('pricing');
		$this->load->view('components/global_footer');
	}

	public function contact()
	{
		$global_header_data = [
			"page" => "contact"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('contact');
		$this->load->view('components/global_footer');
	}

	public function consulting_send_email()
    {
        // Get form data from POST
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $time = $this->input->post('time');
        $message = $this->input->post('message');

        // Validate input fields
        if (empty($name) || empty($phone) || empty($message)) {
			echo json_encode(['status' => 'false', 'message' => 'Please fill in all required fields.']);
            return;
        }

        // Receiver email address, subject, and message body
        $to_email = 'usertestmail87@gmail.com';
        $subject = 'New Consultation Request';
        $body = "
            <h3>Consultation Request</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Preferred Time for Call:</strong> $time</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email using PHPMailer
        $mail = new PHPMailer(true); 

        try {
            // Server settings
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true; 
            $mail->Username = 'usertestmail87@gmail.com'; 
            $mail->Password = 'tvpx ucdm pnsw cqjb'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('usertestmail87@gmail.com', 'Consulting');
            $mail->addAddress($to_email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

           // Send the email
			if ($mail->send()) {
				echo json_encode(['status' => 'true', 'message' => 'Email sent successfully']);
			} else {
				echo json_encode(['status' => 'false', 'message' => $mail->ErrorInfo]);
			}
        } catch (Exception $e) {
			echo json_encode(['status' => 'false', 'message' => "Failed to send email. Error: " . $mail->ErrorInfo]);
        }
    }

	public function contact_send_email()
    {
        // Get form data from POST
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone_number');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // Validate input fields
        if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
			echo json_encode(['status' => 'false', 'message' => 'Please fill in all required fields.']);
            return;
        }

        // Receiver email address, subject, and message body
        $to_email = 'usertestmail87@gmail.com';
        $subject = $subject;
        $body = "
            <h3>Consultation Request</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email using PHPMailer
        $mail = new PHPMailer(true); 

        try {
            // Server settings
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true; 
            $mail->Username = 'usertestmail87@gmail.com'; 
            $mail->Password = 'tvpx ucdm pnsw cqjb'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('usertestmail87@gmail.com', 'Consulting');
            $mail->addAddress($to_email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

           // Send the email
			if ($mail->send()) {
				echo json_encode(['status' => 'true', 'message' => 'Email sent successfully']);
			} else {
				echo json_encode(['status' => 'false', 'message' => $mail->ErrorInfo]);
			}
        } catch (Exception $e) {
			echo json_encode(['status' => 'false', 'message' => "Failed to send email. Error: " . $mail->ErrorInfo]);
        }
    }

}
