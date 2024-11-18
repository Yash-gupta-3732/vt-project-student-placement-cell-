<?php
include 'db_conn.php';

//edit the data
if($_SERVER["REQUEST_METHOD"] == "GET"){
//update skill
if (isset($_GET['edit-skill'])) {
    $upd_skill = $_GET['upd-skill'];
    $sn=$_GET['sn'];
    $id=$_GET['id'];
    $q="update skills set skill_name='$upd_skill' where std_id='$id' and skill_name='$sn' ";
    $rs = mysqli_query($conn,$q);
    if (!$rs) {
        echo "error";
    }
    else{
        header("location:profile.php");
        exit();
    }
}
//update the education
if (isset($_GET['edit-edu'])) {
    $school=$_GET['school'];
    $ed=$_GET['end-dt'];
    $grade=$_GET['grade'];
    $fos=$_GET['fos'];
    $deg=$_GET['deg'];
    $id=$_GET['id-edu'];
    $schl=$_GET['schl'];
    $q="update educations set schl='$school',deg='$deg',end_dt='$ed',grade='$grade',fos='$fos' where std_id='$id' and schl='$schl' ";
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="list8.css">
</head>
<body>

    <div class="container">
       <?php include 'left.php' ; ?>
        <div class="right">
                <?php
                   if (isset($_GET['id'])) {
          echo" <div id='edit-skill-ui' class='edit-skill-ui ui-absolute'>";
                    $id=$_GET['id'];
                    $sn=$_GET['sn'];
              echo" <form action='' method='GET'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                           <h1>edit $sn</h1>
                        </div>
                        <div id='close-skill' class='close-btn flex-center'><img id='cls-skl-img' src='close-white.svg' alt=''></div>
                    </div>
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <p class='para-inp'>Skill*</p>
                        <div class='inp-diamension'><input type='text' value='$sn'
                                 name='upd-skill' ></div>
                                 <input type='hidden' value='$sn'
                                 name='sn' >
                                 <input type='hidden' value='$id'
                                 name='id' >
                    </div>
                    <hr class='line-2'>
                    <div class='save-btn2'><div class='del-btn'><a href='/vt project (student placement cell )/delete.php?id=". $id . "&sn=". urlencode($sn) ."'>Delete skill</a></div><input type='submit' value='save' name='edit-skill'></div>
                     </form>";
                    echo" </div>";
                }
                if (isset($_GET['id_for_edu']) && isset($_GET['school'])) {
                   echo" <div class='add-education-ui ui-absolute'>";
                   $id=$_GET['id_for_edu'];
                   $schl=$_GET['school'];
                   $q = "select*from educations where std_id='$id' and schl='$schl' ";
                   $rs = mysqli_query($conn,$q);
                   $row=mysqli_fetch_array($rs);

                  echo"<form action='' method='get'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>edit education</h1>
                        </div>
                        <div id='close-education' class='close-btn flex-center'><img id='cls-edu-img' src='close-white.svg' alt=''></div>
                    </div> 
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <div class='inp-diamension'>
                            <p class='para-inp'>School*</p>
                            <input type='text'value='$schl' required name='school'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Degree</p><input type='text' name='deg' value='$row[deg]'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Field of study</p><input type='text'name='fos' value='$row[fos]'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Start date</p><input type='date' name='st-dt' value=''>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>End date</p><input type='date' name='end-dt' value='$row[end_dt]'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Grade</p><input type='text' name='grade' value='$row[grade]'>
                        </div>
                        <input type='hidden' name='schl' value='$schl'>
                        <input type='hidden' name='id-edu' value='$id'>
                    </div>
                    <hr class='line-2'>
                     <div class='save-btn2'><div class='del-btn'><a href='/vt project (student placement cell )/delete.php?id_for_edu=". $id . "&schl=". urlencode( $schl) ."'>Delete skill</a></div><input type='submit' value='save' name='edit-edu'></div>
                </form>";
         
           echo" </div>";
                }
                ?>

    </div>
    <script src="day-night.js"></script>
</body>
</html>