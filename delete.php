<?php
    include 'db_conn.php';
if($_SERVER["REQUEST_METHOD"] == "GET"){
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sn=$_GET['sn'];
    $q="delete from skills where std_id='$id' and skill_name='$sn'";
    $rs = mysqli_query($conn,$q);
    if (!$rs) {
        echo "error";
    }
    else{
        header("location:profile.php");
        exit();
    }
}
if (isset($_GET['id_for_edu'])) {
    $id=$_GET['id_for_edu'];
    $schl=$_GET['schl'];
    $q="delete from educations where std_id='$id' and schl='$schl'";
    $rs = mysqli_query($conn,$q);
    if (!$rs) {
        echo "error";
    }
    else{
        header("location:profile.php");
        exit();
    }
}

}
?>