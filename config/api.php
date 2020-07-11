<?php
include "../config/koneksi.php";
include "../config/fungsi.php";

if($_GET['modul']=='reg') {
    $data = select_all_where('regional','id',$_GET['id']);
    $dbdata = array();
    while ($row = $data->fetch_assoc())
    {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);

}
elseif($_GET['modul']=='cab') {
    if ($_SESSION['level']==2) {
        $data = select_cabang_reg();
        $dbdata = array();
            while ($row = $data->fetch_assoc())
                {
                    $dbdata[] = $row;
                }
            echo json_encode($dbdata);
    } else {
        $data = select_cabang();
        $dbdata = array();
            while ($row = $data->fetch_assoc())
                {
                    $dbdata[] = $row;
                }
            echo json_encode($dbdata);
    }
}
elseif($_GET['modul']=='ged') {
    $data = select_gedung();
    $dbdata = array();
    while ($row = $data->fetch_assoc())
    {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
}
elseif($_GET['modul']=='pbb') {
    $data = select_pbb();
    $dbdata = array();
    while ($row = $data->fetch_assoc())
    {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
}
elseif($_GET['modul']=='ar') {
    $data = select_ar();
    $dbdata = array();
    while ($row = $data->fetch_assoc())
    {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
}
elseif($_GET['modul']=='ver') {
    $data = select_ver();
    $dbdata = array();
    while ($row = $data->fetch_assoc())
    {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
}
elseif($_GET['modul']=='us') {
    $data = select_all('tbl_user');
    $dbdata = array();
    while ($row = $data->fetch_assoc()) {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
}
elseif($_GET['modul']=='id') {
    $id    = $_GET['id_dokumen'];
    
    $query = mysqli_query($connn, "UPDATE tbl_dokumen SET status = '2' WHERE id_dokumen = ".$id." ");
    // echo json_encode($query);
}
else{
    return '';
}

?>
