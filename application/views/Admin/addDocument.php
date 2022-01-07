<?php include('header.php'); ?>

<div class="container" style="margin-top:20px;">
<h1>Add Docuemnts</h1>

 <?php echo form_open_multipart('admin/documentSendController'); ?>
 <?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Title">Docuemnts name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Documents name','name'=>'docName','value'=>set_value('docName')]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('docName');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Documents Description</label>
  
   <?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Docuemnts description','name'=>'docDesc','value'=>set_value('docDesc')]); ?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('docDesc');  ?>
  </div>
   </div>
   <!-- image upload -->
	<div class="row">
	 <div class="col-lg-6">
	  <div class="form-group">
		<label for="body">Select Docuemnts</label>
	  <!--<input type="file" name="userfile" size="20" /> -->
	   <?php  echo form_upload(['name'=>'userfile']); ?>
	   </div>
	   </div>
	   <div class="col-lg-6" style="margin-top:40px;">
	   <?php  if(isset($upload_error)){echo $upload_error;} ?>
	  </div>
	</div>
   <!-- image upload end -->
   
   
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>

</div>

<?php include('footer.php'); ?>