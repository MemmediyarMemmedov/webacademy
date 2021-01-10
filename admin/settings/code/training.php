<?php
$data = $CRUD->Select( 'telimler', 1 );
if ( isset( $_POST['training_add'] ) ) {

    $sekiltypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
    $sekilname = $_FILES['sekil']['name'];
    $sekilsize = $_FILES['sekil']['size'];
    $sekiltype = $_FILES['sekil']['type'];
    $sekiltmp = $_FILES['sekil']['tmp_name'];
    $sekilpath = '../../img/services/'.time().'-' .$sekilname;

    $linktypes = ['application/pdf', 'application/zip'];
    $linkname = $_FILES['link']['name'];
    $linksize = $_FILES['link']['size'];
    $linktype = $_FILES['link']['type'];
    $linktmp = $_FILES['link']['tmp_name'];
    $linkpath = '../../link/'.time().'-' .$linkname;

    if ( !in_array( $sekiltype, $sekiltypes ) || !in_array( $linktype, $linktypes ) ) {
        header( 'Location:training-add.php?status=type' );
        exit;
    }

    $col = "
   kateqoriya=:kateqoriya,
   adi=:adi,
   mezmun=:mezmun,
   mezmun1=:mezmun1,
   vaxt=:vaxt,
   qiymet=:qiymet,
  link=:link,
   sekil=:sekil
 ";
    $arr = [
        'kateqoriya'=>$_POST['kateqori'],
        'adi' => $_POST['adi'],
        'mezmun' => $_POST['mezmun'],
        'mezmun1' => $_POST['mezmun1'],
        'vaxt' => $_POST['vaxt'],
        'qiymet' => $_POST['qiymet'],
        'link' => substr( $linkpath, 6 ),
        'sekil' => substr( $sekilpath, 6 )

    ];
  

    $ins = $CRUD->Insert( 'telimler', $col, $arr );

    if ( $ins ) {
        move_uploaded_file( $sekiltmp, $sekilpath );
        move_uploaded_file( $linktmp, $linkpath );
        header( 'Location:training.php?status=ok' );
        exit;
    } else {
        header( 'Location:training-add.php?status=no' );
        exit;
    }
}

if ( isset( $_POST['edit'] ) ) {

    $sekiltypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
    $sekilname = $_FILES['sekil']['name'];
    $sekilsize = $_FILES['sekil']['size'];
    $sekiltype = $_FILES['sekil']['type'];
    $sekiltmp = $_FILES['sekil']['tmp_name'];
    $sekilpath = '../../img/services/'.time().'-'.$sekilname;

    if ( !in_array( $sekiltype, $sekiltypes ) && $sekilsize > 0 ) {
        header( 'Location:training.php?status=imgtype' );
        exit;
    }
    $col = "
    kateqoriya=:kateqoriya,
         adi=:adi,
         mezmun=:mezmun,
         mezmun1=:mezmun1,
         vaxt=:vaxt,
         qiymet=:qiymet,
        link=:link,
         sekil=:sekil
         where id=:id
         "
    ;
  
    $arr = [
        'kateqoriya'=> $_POST['kateqori'],
        'adi' => $_POST['adi'],
        'mezmun' => $_POST['mezmun'],
        'mezmun1' => $_POST['mezmun1'],
        'vaxt' => $_POST['vaxt'],
        'qiymet' => $_POST['qiymet'],
        'link' => $_POST['link'],
        'sekil' => $sekilsize>0?substr( $sekilpath, 6 ):substr( $_POST['oldimg'], 6 ),
        'id'=> $_POST['id']

    ];
  

    $upd = $CRUD->Update( 'telimler', $col, $arr );

    if ( $upd ) {

        if ( $sekilsize > 0 ) {
            $sekil = $_POST['oldimg'];
            unlink( $sekil );
            move_uploaded_file( $sekiltmp, $sekilpath );
        }

        header( 'Location:training.php?status=ok' );
        exit;
    } else {
        header( 'Location:training-edit.php?status=no' );
        exit;
    }
}

if ( isset( $_GET['edit'] ) ) {

    $trainingdata = $CRUD->Select( 'telimler', 0, 'where id='.@$_GET['id'] );
    if ( empty( $trainingdata ) ) {
        header( 'Location:training.php?status=empty' );

    }
}

if ( isset( $_POST['qeydiyyat'] ) ) {
    $col = "
    adsoyad=:adsoyad,
    tevellud=:tevellud,
    cinsi=:cinsi,
    tel=:tel,
    email=:email,
    kurs=:kurs,
    qeydtarix=:qeydtarix
    ";
    $arr = [
        'adsoyad'=>$_POST['adsoyad'],
        'tevellud'=>$_POST['tevellud'],
        'cinsi'=>$_POST['cinsi'],
        'tel'=>$_POST['tel'],
        'email'=>$_POST['email'],
        'kurs'=>$_POST['kurs'],
        'qeydtarix'=>date('Y:m:d H:i:s')
       ];

    $ins = $CRUD->Insert( 'qeydiyyat', $col, $arr ) ;
    if ( $ins ) {

    }
}
$x = $CRUD->Select( 'qeydiyyat', 1 );