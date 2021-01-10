<?php
require_once '../db.php';

$db = new DBConnection;

require_once '../class/general.php';
require_once '../class/crud.php';

$General =  new General;
$CRUD = new CRUD;


if (isset($_POST['ServiceView'])) {
  $data = $CRUD->Select("xidmetler", 0, "where id=" . $_POST["id"]);
  echo json_encode($data,true);

}



if(isset($_POST['ServiceSil'])){
  $dlt = $CRUD->Delete("xidmetler","where id=:id",['id'=>$_POST['id']]);
  if($dlt){
    $img = $_POST['img'];
    unlink($img);
    echo "ok";
  }else{
    echo "no";
  }
}