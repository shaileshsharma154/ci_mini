<?php
$config=[

       'add_article_rules'=>[
                          [
                          'field' => 'article_title',
                          'label' => 'Article Title',
                          'rules' => 'required'
                          ],
						  
                          [
                          'field' => 'article_body',
                          'label' => 'Article Body',
                          'rules' => 'required'
                          ],
						  [
						  'field' => 'language',
						  'label' => 'Select Language',
						  'rules' => 'required'
						  ]
                     ],
		'superForm_rules'=>[
							[
							'field'=> 'article_title',
							'label'=> 'Article Title',
							'rules'=>'required'		
							],
							[
							'field'=>'article_body',
							'label'=>'article Body',
							'rules'=>'required'
							],
							[
							'field'=>'shirt',
							'label'=>'shirt dropdown',
							'rules'=>'required'
							],
							[
							'field'=>'language',
							'label'=>'choose language',
							'rules'=>'required'
							]
							
						],	
						
		 'add_doc_rules'=>[
						  [
						  'field' => 'docName',
						  'label' => 'documents Name',
						  'rules' => 'required'
						  ],
						  
						  [
						  'field' => 'docDesc',
						  'label' => 'Documents description',
						  'rules' => 'required'
						  ]
					 ],
                       
];


?>