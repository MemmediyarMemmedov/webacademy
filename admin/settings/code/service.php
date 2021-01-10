<?php
$data = $CRUD->Select( 'xidmetler', 1 );
if ( isset( $_POST['service_add'] ) ) {

    $sekiltypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
    $sekilname = $_FILES['sekil']['name'];
    $sekilsize = $_FILES['sekil']['size'];
    $sekiltype = $_FILES['sekil']['type'];
    $sekiltmp = $_FILES['sekil']['tmp_name'];
    $sekilpath = '../../img/services/'.time().'-' .$sekilname;

    $icontypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
    $iconname = $_FILES['icon']['name'];
    $iconsize = $_FILES['icon']['size'];
    $icontype = $_FILES['icon']['type'];
    $icontmp = $_FILES['icon']['tmp_name'];
    $iconpath = '../../img/icon/'.time().'-' .$iconname;

    if ( !in_array( $sekiltype, $sekiltypes ) || !in_array( $icontype, $icontypes ) ) {
        header( 'Location:services-add.php?status=imgtype' );
        exit;
    }

    $col = "
    basliq=:title,
    aciqlama=:description,
    sekil=:sekil,
    icon=:icon
 ";
    $arr = [
        'title' => $_POST['basliq'],
        'description' => $_POST['mezmun'],
        'sekil' => substr( $sekilpath, 6 ),
        'icon' => substr( $iconpath, 6 )

    ];

    $ins = $CRUD->Insert( 'xidmetler', $col, $arr );

    if ( $ins ) {
        move_uploaded_file( $sekiltmp, $sekilpath );
        move_uploaded_file( $icontmp, $iconpath );

        header( 'Location:services.php?status=ok' );
        exit;
    } else {
        header( 'Location:services-add.php?status=no' );
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
    $icontypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
    $iconname = $_FILES['icon']['name'];
    $iconsize = $_FILES['icon']['size'];
    $icontype = $_FILES['icon']['type'];
    $icontmp = $_FILES['icon']['tmp_name'];
    $iconpath = '../../img/icon/'.time().'-' .$iconname;

    if ( !in_array( $sekiltype, $sekiltypes ) && $sekilsize > 0 ) {
        header( 'Location:sevices.php?status=imgtype' );
        exit;
    }
    if ( !in_array( $icontype, $icontypes ) && $iconsize > 0 )
 {
        header( 'Location:sevices.php?status=icontype' );
        exit;
    }
    $col = "
    basliq=:title,
    aciqlama=:description,
    sekil=:sekil,
    icon=:icon
    where id=:id
 ";
    $arr = [
        'title' => $_POST['basliq'],
        'description' => $_POST['mezmun'],
        'sekil' => $sekilsize>0?substr( $sekilpath, 6 ):substr( $_POST['oldimg'], 6 ),
        'icon' => $iconsize>0?substr( $iconpath, 6 ):substr( $_POST['oldicon'], 6 ),
        'id'=> $_POST['id']

    ];

    $upd = $CRUD->Update( 'xidmetler', $col, $arr );

    if ($upd) {

        if ( $sekilsize > 0 ) {
            $sekil =$_POST['oldimg'];
            unlink( $sekil );
            move_uploaded_file( $sekiltmp, $sekilpath );
        }
        if ($iconsize > 0 ) {
            $icon = $_POST['oldicon'];
            unlink( $icon );
            move_uploaded_file( $icontmp, $iconpath );
        }

        header( 'Location:services.php?status=ok' );
        exit;
    } else {
        header( 'Location:service-edit.php?status=no' );
        exit;
    }
}

if ( isset( $_GET['edit'] ) ) {

    $servicedata = $CRUD->Select( 'xidmetler', 0, 'where id='.@$_GET['id'] );
    if ( empty( $servicedata ) ) {
        header( 'Location:services.php?status=empty' );

    }
}