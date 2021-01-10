<?php
$data = $CRUD->Select( 'blog', 1 );
if ( isset( $_POST['blog_add'] ) ) {
    $sekiltypes = ['image/png', 'image/jpeg', 'image/jpg'];
    $sekilname = $_FILES['sekil']['name'];
    $sekilsize = $_FILES['sekil']['size'];
    $sekiltype = $_FILES['sekil']['type'];
    $sekiltmp = $_FILES['sekil']['tmp_name'];
    $sekilpath = '../../img/blogs/'.time().'-' .$sekilname;

    if ( !in_array( $sekiltype, $sekiltypes ) ) {
        header( 'Location:blog-add.php?status=imgtype' );
        exit;
    }

    $col = "
    basliq=:basliq,
    mezmun=:mezmun,
    sekil=:sekil
   
 ";
    $arr = [
        'basliq' => $_POST['basliq'],
        'mezmun' => $_POST['mezmun'],
        'sekil' => substr( $sekilpath, 6 )
        
    ];
   

    $insrt = $CRUD->Insert( 'blog', $col, $arr );
    
    if ( $insrt ) {
        move_uploaded_file( $sekiltmp, $sekilpath );
        header( 'Location:blogs.php?status=ok' );
        exit;
    } else {
        header( 'Location:blog-add.php?status=no' );
        exit;
    }
}
;
///////////////////////////

if (isset($_POST["blog_edit"])) {
    $sekiltypes = ["image/png", "image/jpeg", "image/jpg"];
    $sekilname = $_FILES['sekil']["name"];
    $sekilsize = $_FILES['sekil']["size"];
    $sekiltype = $_FILES['sekil']["type"];
    $sekiltmp = $_FILES['sekil']["tmp_name"];

    $sekilpath = "../../img/blogs/".time()."-".$sekilname;

    if (!in_array($sekiltype, $sekiltypes) & $sekilsize > 0) {
        header("Location:blogs.php?status=imgtype");
        exit;
    }

    $col = "
    basliq=:basliq,
    mezmun=:mezmun,
    sekil=:sekil
    where id=:id
    
 ";
    $arr = [
        'basliq' => $_POST['basliq'],
        'mezmun' => $_POST['mezmun'],
        'sekil' => $sekilsize > 0 ? substr($sekilpath, 6) : substr($_POST['oldimg'],6),
        'id' => $_POST['id']
    ];

    $insrt = $CRUD->Update("blog", $col, $arr);

    if ($insrt) {
        if ($sekilsize > 0){
            $sekil = $_POST["oldimg"];
            unlink($sekil);
            move_uploaded_file($sekiltmp, $sekilpath);
        }

        header("Location:blogs.php?status=ok");
        exit;
    } else {
        $id = $_POST['id'];
        header("Location:blog-edit.php?status=no&id=$id");
        exit;
    }
}
if (isset($_GET["edit"])){
    $editdata = $CRUD->Select("blog",0,"where id=".@$_GET["id"]);
    if (empty($editdata)){
        header("Location:blogs.php?status=empty");
        exit;
    }
   
}


