<?php 

date_default_timezone_set("Asia/Baku");
ob_start();
session_start();


require_once '../settings/db.php';

$db = new DBConnection;

require_once '../settings/class/general.php';
require_once '../settings/class/crud.php';
require_once '../settings/class/login.php';

$General =  new General;
$CRUD = new CRUD;
$Login = new Login;

if(!$Login->CheckSession($_SESSION["yup_email"])){
    header("Location:login.php?status=no");
    exit;
}




$profil = $CRUD->Select("admin");

if (isset($_POST["profile"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg"];
    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];
$sekilname=$_FILES['sekil']['name'];

$sekilpath = "../../img/profil/".$sekilname;
  
    if (!in_array($sekiltype, $sekiltypes) && $sekilsize > 0) {
        header("Location:general-settings.php?status=sekiltype");
        exit;
    }

    $col = "
   pass=:pass,
    sekil=:sekil
 ";

    $arr = [
        'pass' => intval($_POST['pass'])>0? md5($_POST['pass']):$_POST['old_pass'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : $_POST['old_sekil']
    ];

    $upd = $CRUD->Update("admin", $col, $arr);

    if ($upd) {

        if ($sekilsize > 0) {
            $sekil = "../../".$_POST["old_sekil"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }
       
     

        header("Location:profil.php?status=ok");
        exit;
    } else {
        header("Location:general-settings.php?status=no");
        exit;
    }
}