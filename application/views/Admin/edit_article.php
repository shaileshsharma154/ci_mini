<?php include('header.php'); ?>

<div class="container" style="margin-top:20px;">
<h1>Edit Articles</h1>
<?php //print_r($article); die();?>
 <?php echo form_open("admin/updatearticle",['class'=>'myclass','id'=>'editArtForm']); ///{$article->id} ?>
<!--<?php //echo form_hidden('article_id',$article->id); ?> -->
<input type="hidden" name="article_id" value="<?=$article->id;?>" />
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Title">Article Title:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title',$article->article_title)]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('article_title');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Article Body</label>
  
   <?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'article_body','value'=>set_value('article_body',$article->article_body)]); ?>
 
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('article_body');  ?>
  </div>
   </div>
    <!--- Radio button-->
   <div class="row">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="gender">Select Language</label><br>			
			<?php //echo form_radio(['type'=>'radio','name'=>'language','value'=>set_value('language',$article->language)])?>
			<label>English</label>
			
			<input type="radio" name="language" value="English" <?php if($article->language=="English"){echo "checked=checked";}?> >
			
			<label>Hindi</label>
			<input type="radio" name="language" value="Hindi" <?php if($article->language=="Hindi"){echo "checked=checked";}?> >
		</div>
	</div>
		<div class="col-lg-6" style="margin-top:40px;">
	   <?php  echo form_error('language');  ?>
	   </div>
   </div>
   <!--- End Radio button-->
   
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset','onclick'=>'ResetForm()']);  ?>
  
<a href="welcome" class="btn  btn-info" onclick="return abc();">Back</a> 
<?php //echo anchor('admin/welcome','Back',['class'=>'btn  btn-info'])?>
</div>
<script type="text/javascript">

function ResetForm() {
    alert("you want to reset form");
	document.getElementById("editArtForm").reset() ;
}

function abc(){
	  var ask = window.confirm("Are you sure you want to delete this post?");
    if (ask) {
        window.alert("This post was successfully back.");
		  
		  //window.location.replace('http://newpageurl.com/');
		  
        //window.location.href = "window-location.html";
    }else{
		alert("false");
	}
	/*
	//alert("alrt");
	var x=confirm("Sure you want to back s");
	if(x==true){
		alert("true");
		window.location.href="www.google.com";
		//alert(<?php echo base_url("admin/welcome");?>);
		// location.replace("https://www.w3schools.com");
		//return redirect('admin/welcome');
	}else{
		alert("false");
		 window.location.href="abccc.php";
		 //$this->load->view('Admin/edit_article');
		 //return redirect('admin/superFormController');
		 //window.location.assign("https://www.w3schools.com");
	}
	*/
}
</script>
<?php include('footer.php'); ?>