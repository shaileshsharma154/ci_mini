<?php

class admin extends MY_controller
{
///  redirect to login page if session user id blank	
public function __construct()
  {
	  
    parent::__construct();
    if( ! $this->session->userdata('id') )
    return redirect('login');
    
  }
  
 public function welcome()
 {
  $this->load->model('loginmodel','ar');
  $this->load->library('pagination');

  $config=[
        'base_url' => base_url('admin/welcome'),
        'per_page' =>3,
        'total_rows' => $this->ar->num_rows(),
        'full_tag_open'=>"<ul class='pagination'>",
        'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li>",
        'num_tag_close' =>"<li>",
        'cur_tag_open' =>"<li class='active'><a>",
        'cur_tag_close' =>"</a></li>"

 ];


  $this->pagination->initialize($config);

 
  $articles=$this->ar->articleList($config['per_page'],$this->uri->segment(3));
  $this->load->view('admin/dashboard',['articles'=>$articles]);
 }

 public function showBrowserInfo()
 {
   $this->load->library('user_agent');
   $data['browser']=$this->agent->browser();
   $data['browser_version']=$this->agent->version();
   $data['os']=$this->agent->platform();
   $data['ip_address']=$this->input->ip_address();
   $data['en']=$this->agent->accept_lang('en');
   
   $this->load->view('admin/browserView', $data);
  
 }
 public function adduser()
 {
    
   $this->load->view('admin/add_article');
  
 }
 public function addDocuments(){
	 $this->load->view('admin/addDocument');
 }
 
 public function documentSendController()
 {
	 //echo "shailesh";
	 //die;
	$config=[
		'upload_path'=>'./upload',
		'allowed_types'=>'gif|jpg|jpeg|png',
	];
	$this->load->library('upload',$config);
	//echo "here";
	//die;
  if($this->form_validation->run('add_doc_rules') && $this->upload->do_upload())
  {
	 
      $post=$this->input->post(); 
	  
	  $data=$this->upload->data();
	  $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
	  $post['image_path']=$image_path;
	  
      $this->load->model('docModel','docAdd');
      if($this->docAdd->add_DocModel($post))
      {
         $this->session->set_flashdata('msg','documents added successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Documents not added Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/welcome');
}
  else
  {
   $upload_error=$this->upload->display_errors();  
   $this->load->view('admin/addDocument', compact('upload_error'));
  }

 }

 public function userValidation()
 {
	$config=[
		'upload_path'=>'./upload',
		'allowed_types'=>'gif|jpg|jpeg|png',
	];
	$this->load->library('upload',$config);
	
	
  if($this->form_validation->run('add_article_rules') && $this->upload->do_upload())
  {
      $post=$this->input->post(); 
	  //print_r($post);
	  //die();
	  $data=$this->upload->data();
	  $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
	  $post['image_path']=$image_path;
      $this->load->model('loginmodel','useradd');
      if($this->useradd->add_articles($post))
      {
         $this->session->set_flashdata('msg','Articles added successfully');
         $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Articles not added Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/welcome');
}
  else
  {
   $upload_error=$this->upload->display_errors();  
   $this->load->view('admin/add_article', compact('upload_error'));
  }

 }
 /// super form controller //
 public function superFormContoller(){	 
	 $fileName=APPPATH.'views/forms/superFormView.php';
	 //$fileName=base_url('Application/views/forms/superFormView.php'); // Not working
	 //$fileName1=$this->load->view('form/form/superFormView');  // not working
	 if(!file_exists($fileName)){
		 show_404(); // when page not found message 
	 }else{
		 $this->load->view('forms/superFormView');
	 }
 } 
 
 public function superFormCon()
 {
	$config=[
		'upload_path'=>'./upload',
		'allowed_types'=>'gif|jpg|jpeg|png',
	];
	$this->load->library('upload',$config);
	
	
  if($this->form_validation->run('add_article_rules') && $this->upload->do_upload())
  {
      $post=$this->input->post(); 
	  //print_r($post);
	  //die();
	  $data=$this->upload->data();
	  $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
	  $post['image_path']=$image_path;
      $this->load->model('superFormModel','superFormAdd');
	  //echo $this->superFormAdd->add_superForm($post);
	  //die();
      if($this->superFormAdd->add_superForm($post))//==1
      {
		 //echo "shh".$this->superFormAdd->add_superForm($post);
         $this->session->set_flashdata('msg','Supers form added successfully');
         $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
		 echo "else".$this->superFormAdd->add_superForm($post);
         $this->session->set_flashdata('msg','super form not added Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
	  //$this->load->view('forms/superFormView');
	  //return redirect('admin/superFormContoller');
}
  else
  {
   $upload_error=$this->upload->display_errors();  
   $this->load->view('admin/add_article', compact('upload_error'));
  }

 }
 
 ///  super form controller end //
 public function edituser()//$id
 {
	 $id=$this->input->post('id');
 $this->load->model('loginmodel');
 $article=$this->loginmodel->find_article($id);
 $this->load->view('admin/edit_article',['article'=>$article]);

 }
 public function updatearticle()//$article_id
 {
if($this->form_validation->run('add_article_rules'))
  {
      $post=$this->input->post(); 
	  //print_r($post);
	  //die();
	  $article_title=$this->input->post('article_title');
	  $article_body=$this->input->post('article_body');
	  $language=$this->input->post('language');
	  $data=array('article_title'=>$article_title,'article_body'=>$article_body);
	  $id=$this->input->post('article_id');
      //print_r($post);die();
	  //$articleid=$post['article_id'];
	  //echo $articleid;die();
      //unset($articleid);
      $this->load->model('loginmodel','editupdate');
      if($this->editupdate->update_article($id,['article_title'=>$article_title,'article_body'=>$article_body,'language'=>$language])) //$article_id,$post
      {
         $this->session->set_flashdata('msg','Article Update successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Articles not update Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/welcome');
     }
  else
  {
    $this->edituser($article_id);
  }

 }
 public function delarticles($id)
 {
   //$id=$this->input->post('id'); /// this is use for form hidden id
  
    $this->load->model('loginmodel','delarticle');
      if($this->delarticle->del($id))
      {
          $this->session->set_flashdata('msg','Delete Successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','Please try again..not delete');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/welcome');

 }
 
  public function logout()
  {
    $this->session->unset_userdata('id');
    return redirect('login');
	//return redirect('admin/welcome')
  }
/////////  core controller 
public function coreController(){
	$this->test();
}
	
}


?>