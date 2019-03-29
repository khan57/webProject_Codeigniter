
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


public function __construct()
{
	parent::__construct();
	$this->load->model('Usersm');
}
	public function index()
	{

$this->load->view('home-page');


	}
// load  users  signup page
	public function loadsignup(){

		$this->load->view('signup');
	}
//developers register page

	public function loaddeveloper(){

// $this->load->view('D', $data, FALSE);

	}

	//user logout

	public function userlogout(){

		$this->session->unset_userdata('username');
	redirect(base_url().'index.php/main');
	}




	public function registeruser(){
$data=array(

'name'=> $this->input->post('name'),
'username'=>$this->input->post('username'),
'email'=>$this->input->post('email'),
'password'=>$this->input->post('password'),

);
$username=$this->input->post('username');
$email=$this->input->post('email');

if ($this->Usersm->checkuser($username,$email)) {
	echo "already exist";
}else{
			 if($this->Usersm->insertuser($data)){
		echo "<script>alert('You have been registered successfully!!!')</script>";
		$this->load->view('home-page');
			 }else{
		echo "<script>alert('Some error occured!!!')</script>";
			 }
}


	}

//load user login form
public function loadUserLoginForm(){

$this->load->view('usersignin');

}

//load Developer login form
public function loaddevLoginForm(){

$this->load->view('Dsignin');

}


//dev registeration form load

public  function loadregform()
{
$data = array('deverror' =>'');
	$this->load->view('devregister',$data);
}

//user login 

public function userLogin(){

$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Username','required|trim');
		//$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run()) {
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				$this->load->model('Usersm');
				if ($this->Usersm->can_login($email,$password)) {
					$sessionData=array(
						'email'=>$email
					);
					$this->session->set_userdata('username',$sessionData);
					redirect(base_url().'index.php/main/userCanEnter');
				}else{
					$this->session->set_flashdata('error',"Invalid username/password");
					redirect(base_url('index.php/main/loadUserLoginForm'));
				}
		}//validation if end
		 else {
			$this->loadUserLoginForm();
			
		}

}

//deveoper registration saving into db
public function registerdeveloper(){
$this->load->model('Usersm');
$data = array(

	'name' =>$this->input->post('name')  ,
	'username' => $this->input->post('username') ,
	'email' => $this->input->post('email') ,
	'password' =>$this->input->post('password') ,
	'mobile' =>$this->input->post('mobile') 

);
$uname= $this->input->post('username') ;
$email = $this->input->post('email') ;
if ($this->Usersm->checkDuplicateDeveloper($uname,$email)) {
	echo '<script>alert("Sorry!This username/Email is already registered")</script>';
	$this->loadregform();
}else{
$this->Usersm->registerdevtodb($data);	
}


}

//developer login

public function developerLogin(){

$this->load->library('form_validation');
	

		 	$email=$this->input->post('username');
				$password=$this->input->post('password');
				$this->load->model('Usersm');
				if ($this->Usersm->can_dev_login($email,$password)) {
					$sessionData=array(
						'email'=>$email
					);
					$this->session->set_userdata('devdata',$sessionData);
					redirect(base_url().'index.php/main/devCanEnter');
				}else{
					$this->session->set_flashdata('error',"Invalid username/password");
					redirect(base_url('index.php/main/loaddevLoginForm'));
				}
	
		

}

public function userCanEnter(){

	$this->index();
}


public function devCanEnter(){

$this->load->view('dashboard');
	//$this->load->view('Dsignin');
}

// load logo upload  form developer

public function uploadlogoform(){
	$data = array('error' =>'' );
	$this->load->view('uploadLogos', $data);
}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */