<?php include('header.php'); ?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
// Note :-
 // we can direct use logical part in view its ok but not a good for codeigniter purpose
 //$this->load->library('user_agent');  // library already call in admin controller
/*  
  $data['browser1']=$this->agent->browser();
   $data['browser_version1']=$this->agent->version();
   $data['os1']=$this->agent->platform();
   $data['ip_address1']=$this->input->ip_address();
   $data['lang1']=$this->agent->accept_lang('en');
   $data['mob1']=$this->agent->is_mobile('iphone');
   //echo $lang;
*/  
  //print_r($data);
   //echo $data['lang1'];
   //$this->load->view('admin/browserView', $data);
?>
<div class="container" style="margin-top:20px;">
<h1>Browser Information</h1>

 <div class="row">
 <div class="col-lg-12">
  <div class="form-group">
    <label for="Title">Docuemnts name:</label>
   
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <table>
  <tr>
    <th>Name</th>
    <th>Info</th>
    
  </tr>
  <tr>
    <td>Browser</td>
    <td><?=$browser;?></td>    
  </tr>
  
  <tr>
	<td>Browser version</td>
	<td><?=$browser_version;?></td>
  </tr>
  
  <tr>
	<td>os</td>
	<td><?=$os;?></td>
  </tr>
  
  <tr>
	<td>ip_address</td>
	<td><?=$ip_address;?></td>
  </tr>
  
  <tr>
	<td>Language</td>
	<td><?=$en;?></td>
  </tr>
  
  
  
 
 
</table>

  </div>
  </div>
</div>

<?php include('footer.php'); ?>