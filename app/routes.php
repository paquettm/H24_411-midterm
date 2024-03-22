<?php
//defined a few routes "url"=>"controller,method"
$this->addRoute('' , 'Post,index');
$this->addRoute('Post/' , 'Post,index');
$this->addRoute('Post/index' , 'Post,index');
$this->addRoute('Post/create' , 'Post,create');
$this->addRoute('Post/edit/{post_id}','Post,edit');
$this->addRoute('Post/delete/{post_id}','Post,delete');