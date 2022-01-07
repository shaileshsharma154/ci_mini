<?php
class Dynamic_dependent_model extends CI_Model
{
 function fetch_countryModel()
 {
  $this->db->order_by("country_name", "ASC");
  $query = $this->db->get("country");
 
  return $query->result();
 }

 function fetch_stateModel($country_id)
 {
  $this->db->where('country_id', $country_id);
  $this->db->order_by('state_name', 'ASC');
  $query = $this->db->get('state');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
  }
  return $output;
 }

 function fetch_cityModel($state_id)
 {
  $this->db->where('state_id', $state_id);
  $this->db->order_by('city_name', 'ASC');
  $query = $this->db->get('city');
  $cityData=$query->result();
  $output = '<option value="">Select City</option>';
  foreach($cityData as $row)
  {
   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
  }
  return $output;
 }
}

?>