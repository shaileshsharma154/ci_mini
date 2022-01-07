<?php
class superFormModel extends MY_Model
{
  public function add_superForm($array)
  {
	   //$this->myTestModel();  // core model function can call here
     return $this->db->insert('superformtable',$array);
	
  }
  
}

