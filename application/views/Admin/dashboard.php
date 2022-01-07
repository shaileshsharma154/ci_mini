<?php include('header.php'); ?>

<div class="container" style="margin-top:50px;"">
<div class="row">
<?=   anchor('admin/adduser','Add Articles',['class'=>'btn btn-lg btn-primary'])  ?>
<?php echo anchor('admin/addDocuments', "Add Documents",['class'=>'btn btn-lg btn-primary']) ?>
<?php echo anchor('admin/showBrowserInfo', "Browser Info",['class'=>'btn btn-lg btn-primary']) ?>
<?php echo anchor('export', "Feedback",['class'=>'btn btn-lg btn-primary'])?>
<!-- <a href="../export" class="btn btn-lg btn-primary">Export</a> --->
<?php echo anchor('dynamic_dependent',"country/State/City",['class'=>'btn btn-lg btn-primary'])?>
<?php
echo anchor('admin/superFormContoller',"superForm",['class'=>'btn btn-lg btn-primary']);
?>
</div>





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

<?php echo $this->db->last_query(); ?>
<div class="table">
<table>
<thead>
<tr>
<th>S.no</th>
<th>Article Title</th>
<th>Article Body</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php if(count($articles)): ?> 
<?php $srNo=$this->uri->segment(3);?>
<?php foreach ($articles as $art): ?>
<tr>
	   
		<td><?=  ++$srNo; ?></td>
		<td><?=  $art->article_title; ?></td>
		<td><?=  $art->article_body; ?></td>
		<td>
		<?php echo
			form_open('admin/edituser'),
			form_hidden('id',$art->id),
			form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-danger']),
			form_close();
		?>
		<?php  /*=  anchor("admin/edituser/{$art->id}",'Edit',['class'=>'btn btn-default']);  */?></td>
		
		<td>
		<?=
		anchor("admin/delarticles/{$art->id}","Delete",['class'=>'btn btn-danger'])
		?>
        <?php /*=
		
        form_open('admin/delarticles'),
        form_hidden('id',$art->id),
        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
        form_close();
   */


        ?>
      </td>
	</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
	<td colspan="3">Not data available</td>
	</tr>
   <?php endif; ?>
</tbody>




</table>


<?php  echo $this->pagination->create_links();   ?> 
</div>





</div>
<?php include('footer.php'); ?>