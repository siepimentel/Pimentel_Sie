<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index()
	{
		//passs some data to view from controller 

		//get model data and pass to controller		
		//load a model
		$this->load->model('people_model');
		
		$students = $this->people_model->read_people();
		
		// Array ( [0] => Array ( [id] => 1 [idnum] => 15-027-001 [fname] => K
		// [mname] => M [lname] => Binuya [course] => BSCS ) [1] => 
		// Array ( [id] => 2 [idnum] => 15-027-002 [fname] => Butcher 
		// [mname] => Butch [lname] => Bituonan [course] => BSCS ) )
		

		$record = array();
		foreach($students as $p){
			$info['id'] = $p['idnum'];
			$info['name'] = $p['lname'].', '.$p['fname'].' '.$p['mname'];
			$info['crs'] = $p['course'];
			$record[] = $info;
		}
		
		$data['students'] = $record;
		
		//students => id, name, crs
		$data['title'] = "Hello World";
		
		$data['pageTitle'] = "Hello Page";
		$data['user'] = "butcher";
		$data['msg'] = "Goodluck seryoso kami!!";
		
		$this->load->view('hello_world',$data);
	}
	
	public function view_student($idnum){
		echo "Welcome Student with ID NO. $idnum";
	}
	
	
	public function add_student(){
		
	}
	
	public function find_student(){
		
	}
	
	public function delete_student(){
		
	}
	
	
}
