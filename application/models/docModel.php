<?php
class DocModel extends CI_Model{
	 public function add_DocModel($array)
  {
	  //print_r($array);
	  //echo "baba".$array['user_id'];
	  
     ///// here key value different ie form field and db table field diff ////
	 return $this->db->insert('document',['doc_name'=>$array['docName'],'doc_descr'=>$array['docDesc'],'user_id'=>$array['user_id'],'image_path'=>$array['image_path']]);
	 
	  /// ===== array key value same as form field name and table field  ===
	 //return $this->db->insert('document',$array);  
	 
	 
  }
}

?>