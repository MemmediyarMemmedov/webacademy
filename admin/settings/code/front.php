<?php 

date_default_timezone_set("Asia/Baku");
ob_start();
session_start();


require_once 'admin/settings/db.php';

$db = new DBConnection;

require_once 'admin/settings/class/general.php';
require_once 'admin/settings/class/crud.php';

$General =  new General;
$CRUD = new CRUD;
 $setting=$CRUD->Select('nizamlamalar');
 $service=$CRUD->Select('xidmetler',1);
 $training=$CRUD->Select('telimler',1);
 $trainingkateqoriya=[];
for($i=0;$i<count($training);$i++){
    if(!in_array($training[$i]['kateqoriya'],$trainingkateqoriya)){
        array_push($trainingkateqoriya,$training[$i]['kateqoriya']);

    }
}
 $blog=$CRUD->Select('blog',1, 'where status<>1');

 if(isset($_GET['blog_id'])){
    $blg=$CRUD->Select('blog',0, 'where id='.@$_GET['blog_id']);
    if(empty($blg)  ){
        header('Location:erorr.php?status=empty');
        exit;
    }

 }
 if(isset($_GET['training_id'])){
    $training=$CRUD->Select('telimler',0, 'where id='.@$_GET['training_id']);
    if(empty($training)){
        header('Location:erorr.php?status=empty');
        exit;
    }}
    
 if(isset($_GET['service_id'])){
    $servc=$CRUD->Select('xidmetler',0, 'where id='.@$_GET['service_id']);
    if(empty($servc)){
        header('Location:erorr.php?status=empty');
        exit;
    }
    
 



 }
 $portfolio=$CRUD->Select('portfolio',1,'where status<>1');
//<?=($portfolio[$i]['kateqoriya']=="Veb Layihələr")? 'cat-1':(($portfolio[$i]['kateqoriya']=="Mobil Layihələr")? 'cat-2':'cat-3');
$portfoliokateqoriya=[];
for($i=0;$i<count($portfolio);$i++){
    if(!in_array($portfolio[$i]['kateqoriya'],$portfoliokateqoriya)){
        array_push($portfoliokateqoriya,$portfolio[$i]['kateqoriya']);

    }
}
