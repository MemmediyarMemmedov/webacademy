<?php
require_once '../db.php';

$db = new DBConnection;

require_once '../class/general.php';
require_once '../class/crud.php';

$General =  new General;
$CRUD = new CRUD;


if (isset($_POST['TrainingView'])) {
  $data = $CRUD->Select("telimler", 0, "where id=" . $_POST["id"]);
  echo json_encode($data,true);

}

if(isset($_POST['TrainingSil'])){
  $dlt = $CRUD->Delete("telimler","where id=:id",['id'=>$_POST['id']]);
  if($dlt){
    $img = $_POST['img'];
    unlink($img);
    echo "ok";
  }else{
    echo "no";
  }
}if(isset($_POST['qeydiyyatSil'])){
  $dlt = $CRUD->Delete("qeydiyyat","where id=:id",['id'=>$_POST['id']]);
  if($dlt){
   
    echo "ok";
  }else{
    echo "no";
  }
}