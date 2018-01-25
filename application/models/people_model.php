<?php

class People_model extends CI_Model {
    
	private $table = "students";
	
	// Constructor
	public function __construct()
	{
		parent::__construct();		
	}
        
    // C R E A T E
	public function create_people($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function read_people($where=null)
	{
		$this->db->select("*")
			->from($this->table);
		
		// $this->db->select("*")
			// ->from($this->table);
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','')
			
		if( isset($where) ) //in case there are conditions for the results
			$this->db->where($where);
			
		$query=$this->db->get();
		
		return $query->result_array();
	}
        
    // U P D A T E
    public function update_people($data)
	{
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_people($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
	
	public function display_results(){
		
	}
	
}
