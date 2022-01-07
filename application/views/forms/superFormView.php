<?php //include('header.php');
 $this->load->view('admin/header');
?>

<div class="container" style="margin-top:20px;">
<div class="container" style="margin-top:50px;">
<?php  if($msg=$this->session->flashdata('msg')){ 

$msg_class=$this->session->flashdata('msg_class')

 ?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?= $msg; ?>
</div>
</div>
</div>

<?php }//endif; ?>

</div>
<h1>Add Super Form  </h1>

 <?php echo form_open_multipart('admin/superFormCon',['id'=>'superForm']); ?>
 <?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
 
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Title">Article Title:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title')]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('article_title');  ?>
  </div>
  </div>
  
  <div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="uniqueAdharNumber"> Adharcard Number</label>
			<?php echo form_input(['type'=>'number', 'name'=>'adhar_number', ]);?>
		</div>
	</div>
  </div>
  
  
  
	<div class="row">
		 <div class="col-lg-6">
			  <div class="form-group">
				<label for="body">Article Body</label>
			   <?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'article_body','value'=>set_value('article_body')]); ?>
			  </div>
		</div>
		<div class="col-lg-6" style="margin-top:40px;">
		   <?php  echo form_error('article_body');  ?>
		</div>
	</div>
	
	<!---dropdown -->
		<div  class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="dropdownbox"></label>
					<?php /*
						$options = array(
						'small'         => 'Small Shirt',
						'med'           => 'Medium Shirt',
						'large'         => 'Large Shirt',
						'xlarge'        => 'Extra Large Shirt',
						);

						//$shirts_on_sale = array('small', 'large');
						echo form_dropdown('shirts', $options, 'large');
						*/
						echo form_dropdown('shirt',['small'=>'small shirt','large'=>'large shirt','med'=>'Medium Shirt'],'large');  // last parameter for selected
					?>
				</div>
			</div>
		</div>
		<!---
		<select name="nametitle">
			<option value="name">Mr</option>
			<option value="name">Mrs</option>
		</select> -->
	<!---dropdown end-->
	<!--- checkbox -->
	<div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label>Social media</label><br>
			<label>Facebook</label>
			<?php  echo form_input(['type'=>'checkbox', 'name'=>'socialMedia', 'value'=>'fb'])?>
			
			<label>Twiter</label> 
			<?php echo form_checkbox(['name'=>'socialMedia', 'value'=>'twiter'])?>
			
			<label>Intagram</label>
			<input type="checkbox" name="socialMedia" value="instagram">
		</div>
	</div>
  </div>
	<!-- checkbox end-->
   <!--- Radio button-->
   <div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="gender">Select Language</label><br>			
			<?php echo form_input(['type'=>'radio','name'=>'language','value'=>'English'])?>
			<label>English</label>
			<?php echo form_radio(['type'=>'radio', 'name'=>'language', 'value'=>'Hindi'])?>
			<label>Hindi</label>
		</div>
	</div>
		<div class="col-lg-6" style="margin-top:40px;">
	   <?php  echo form_error('language');  ?>
	   </div>
   </div>
   <!--- End Radio button-->
   
   <!--  Image upload -->
	<div class="row">
		 <div class="col-lg-6">
		   <div class="form-group">
			<label for="body">Select image</label>
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
 <?php  echo form_reset(['type'=>'button','class'=>'btn btn-primary','value'=>'Reset','onclick'=>'ResetForm()']);  ?>
<a href="welcome" class="btn btn-info">Back</a>
</div>
<script type="text/javascript">
function ResetForm(){
	 var x=confirm("Are you want to reset form?");
	 if(x==true){	
		alert("now rest form");
		document.getElementById("superForm").reset() ;
	 }
}

</script>

<?php //include('footer.php'); 
$this->load->view('admin/footer');

?>