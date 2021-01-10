<?php

$data = $CRUD->Select("nizamlamalar");

if (isset($_POST["general_settings"])) {

    $logotypes = ["image/png", "image/jpeg", "image/jpg"];
    $robotstypes = ["text/plain"];

    $logosize = $_FILES['logo']["size"];
    $logotype = $_FILES['logo']["type"];
    $logotmp = $_FILES['logo']["tmp_name"];

    $robotsname = $_FILES['robots']["name"];
    $robotssize = $_FILES['robots']["size"];
    $robotstype = $_FILES['robots']["type"];
    $robotstmp = $_FILES['robots']["tmp_name"];

    $robotspath = "../../robots.txt";
    $logopath = "../../img/logo.".(($logotype == "image/png") ? "png" : (($logotype == "image/jpeg") ? "jpeg" : "jpg"));
  
    if (!in_array($logotype, $logotypes) && $logosize > 0) {
        header("Location:general-settings.php?status=logotype");
        exit;
    }

    if (!in_array($robotstype, $robotstypes) && $robotssize > 0) {
        header("Location:general-settings.php?status=robotstype");
        exit;
    }

    $col = "
    basliq=:title,
    aciqlama=:description,
    robots=:robots,
    logo=:logo
 ";
    $arr = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'robots' => $robotssize > 0 ?  substr($robotspath, 6) : "robots.txt",
        'logo' => $logosize > 0 ? substr($logopath, 6) : $_POST['old_logo']
    ];

    $upd = $CRUD->Update("nizamlamalar", $col, $arr);

    if ($upd) {

        if ($logosize > 0) {
            $logo = "../../".$_POST["old_logo"];
            unlink($logo);
            move_uploaded_file($logotmp, $logopath);
        }
        if ($robotssize > 0) {
            unlink("../../robots.txt");
            move_uploaded_file($robotstmp, $robotspath);
        }

        header("Location:general-settings.php?status=ok");
        exit;
    } else {
        header("Location:general-settings.php?status=no");
        exit;
    }
}


if (isset($_POST["about"])) {

    $sekiltypes = ["image/png", "image/jpeg", "image/jpg"];
    $sekilname = $_FILES['sekil']["name"];
    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];
    $sekilpath = "../../img/".$sekilname;
  
    if (!in_array($sekiltype, $sekiltypes) && $sekilsize > 0) {
        header("Location:about.php?status=imgtype");
        exit;
    }

    $col = "
    haqqinda=:haqqinda,
    sekil=:sekil
 ";
    $arr = [
        'haqqinda' => $_POST['mezmun'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : $_POST['old_sekil']
    ];

    $upd = $CRUD->Update("nizamlamalar", $col, $arr);

    if ($upd) {

        if ($sekilsize > 0) {
            $sekil = "../../".$_POST["old_sekil"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }

        header("Location:about.php?status=ok");
        exit;
    } else {
        header("Location:about.php?status=no");
        exit;
    }
}


if (isset($_POST["contact"])) {
    $col = "
    unvan=:adress,
    email=:mail,
    mobil=:mobile,
    facebook=:facebook, 
    instagram=:instagram
 
 ";
    $arr = [
        'adress' => $_POST['unvan'],
        'mail' => $_POST['email'],
        'mobile' => $_POST['mobil'],
        'facebook' => $_POST['facebook'],
        'instagram' => $_POST['instagram']
      
    ];

    $upd = $CRUD->Update("nizamlamalar", $col, $arr);
    if ($upd) {

        header("Location:contact.php?status=ok");
        exit;
    } else {
        header("Location:contact.php?status=no");
        exit;
    }
}
//slide
if(isset($_POST['slide'])){
   
    $slidename1=$_FILES['slide1']['name'];
    $slidesize1=$_FILES['slide1']['size'];
    $slidetmp1= $_FILES['slide1']['tmp_name'];
    $slidetype1=$_FILES['slide1']['type'];
   // $slidetypes1 = ["image/png", "image/jpeg", "image/jpg"];
     $slidepath1='../../img/slide/'.time(). '-' .$slidename1 ;
     
$slidename2=$_FILES['slide2']['name'];
$slidesize2=$_FILES['slide2']['size'];
$slidetmp2= $_FILES['slide2']['tmp_name'];
$slidetype2=$_FILES['slide2']['type'];
//$slidetypes2 = ["text/plain"];
$slidepath2='../../img/slide/'.time(). '-' .$slidename2 ;

$slidename3=$_FILES['slide3']['name'];
$slidesize3=$_FILES['slide3']['size'];
$slidetmp3= $_FILES['slide3']['tmp_name'];
//$slidetype3=$_FILES['slide3']['type'];
//$slidetypes3 = ["image/png", "image/jpeg", "image/jpg"];
$slidepath3='../../img/slide/'.time(). '-' .$slidename3 ;

//if(!in_array($slidetype1,$slidetypes1)||!in_array($slidetype2,$slidetypes2)||!in_array($slidetype3,$slidetypes3)){
//header("Location:slide.php?status=notype");
//exit;
//}
        $arr= "
        slide1=:slide1,
        slide2=:slide2,
        slide3=:slide3
        ";
        $col=[
            'slide1'=>$slidesize1>0?substr($slidepath1, 6):$_POST['old_slide1'],
            'slide2'=>$slidesize2>0?substr($slidepath2, 6):$_POST['old_slide2'],
            'slide3'=>$slidesize3>0?substr($slidepath3, 6):$_POST['old_slide3']

        ];
        $upd=$CRUD->Update('nizamlamalar',$arr,$col);
        if($upd){
            if($slidesize1>0){
                $slide1 = "../../".$_POST["old_slide1"];
                unlink($slide1);
                 move_uploaded_file($slidetmp1,$slidepath1);

            }   if($slidesize2>0){
                $slide2 = "../../".$_POST["old_slide2"];
                unlink($slide2);
                 move_uploaded_file($slidetmp2,$slidepath2);

            }   if($slidesize3>0){
                $slide3 = "../../".$_POST["old_slide3"];
                unlink($slide3);
                 move_uploaded_file($slidetmp3,$slidepath3);

            }
           

           header("Location:slide.php?status=ok");
        exit;
    } else {
        header("Location:slide.php?status=no");
        exit;
    }
}