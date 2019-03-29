

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersm extends CI_Model {

	

public function checkuser($uname,$email){


			$query=$this->db->where('username', $uname)->where('email',$email)->get('buyers');
			if($query->num_rows()>0){

			return true;

			}else{
				return false;
			}

}

//check for duplicate accounts of developer
public function checkDuplicateDeveloper($uname,$email){
$query=$this->db->where('username', $uname)->where('email',$email)->get('developer');
			if($query->num_rows()>0){

			return true;

			}else{
				return false;
			}


}

// saving developer info to db
public function registerdevtodb($data)
{
		$query=$this->db->insert('developer',$data);
		if ($query) {
			return true;
		}else{

			return false;
		}
}

//user login check
	function can_login($email,$password){
				$query=$this->db->where('username',$email)->where('password',$password)->get('buyers');
				if ($query->num_rows()>0) {
					return true;
				}else{
					return false;
				}


	}


	//Developer login check
	function can_dev_login($email,$password){
				$query=$this->db->where('username',$email)->where('password',$password)->get('developer');
				if ($query->num_rows()>0) {
					return true;
				}else{
					return false;
				}


	}
public function insertuser($info){


		$insert=$this->db->insert('buyers',$info);
		if ($insert) {
			return true;
		}else{
			return false;
		}
}






}

/* End of file usersm.php */
/* Location: ./application/models/usersm.php */