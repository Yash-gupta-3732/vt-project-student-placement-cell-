<?php
                        include 'db_conn.php';
                        session_start(); // Resume the session
                        // Retrieve data from session variables
                        // $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
                        $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Unknown@gmail.com';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>profile</title>
    <link rel='stylesheet' href='style.css?v=1.0'>
    <link rel='stylesheet' href='list8.css?v=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body>

    <?php  
        //editing the profile
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET['Save-changes'])){
$name = $_GET['name'];
$course = $_GET['course'];
$grad = $_GET['grad'];
$fos = $_GET['fos'];
$prons = $_GET['prons'];
    $q = "update profiles set name='$name',prons='$prons',course='$course',fos='$fos',grad='$grad' where email='$email'";
    $rs = mysqli_query($conn,$q);
    if (!$rs) {
        echo "error";
    }
        }
        //adding skills to db
        if(isset($_GET['add-skill'])){
    $skill = $_GET['skill'];
    $Q= "select std_id from profiles where email='$email'";
    $res= mysqli_query($conn,$Q);
    $row=mysqli_fetch_array($res);
        $q= "insert into skills(std_id,skill_name) value($row[std_id],'$skill')";
        $rs = mysqli_query($conn,$q);
        if (!$rs) {
            echo "error";
        }
        header("location:profile.php"); // Redirects the user to "profile.php".
        exit; // Stops the script execution after the redirect to ensure no further code is executed.
}
      //adding education to db
      if (isset($_GET['save-edu'])) {
        $school=$_GET['school'];
        $deg=$_GET['deg'];
        $fos=$_GET['fos'];
        $st_dt=$_GET['st-dt'];
        $end_dt=$_GET['end-dt'];
        $grade=$_GET['grade'];

        $Q= "select std_id from profiles where email='$email'";
        $res= mysqli_query($conn,$Q);
        $row=mysqli_fetch_array($res);
        $q= "insert into educations(std_id,schl,deg,fos,strt_dt,end_dt,grade) value($row[std_id],'$school','$deg','$fos','$st_dt','$end_dt','$grade')";
        $rs = mysqli_query($conn,$q);
        if (!$rs) {
            echo "error";
        }
        header("location:profile.php"); // Redirects the user to "profile.php".
        exit; // Stops the script execution after the redirect to ensure no further code is executed.
      }
      //adding work to db
      if(isset($_GET['save-work'])){
        $url = $_GET['pjt-url'];
        $descript=$_GET['descript'];
        $Q= "select std_id from profiles where email='$email'";
        $res= mysqli_query($conn,$Q);
        $row=mysqli_fetch_array($res);
            $q= "insert into  work_showcase(std_id,pjt_url,descript) value($row[std_id],'$url','$descript')";
            $rs = mysqli_query($conn,$q);
            if (!$rs) {
                echo "error";
            }
            header("location:profile.php"); // Redirects the user to "profile.php".
            exit; // Stops the script execution after the redirect to ensure no further code is executed.
    }
    }
if(isset($_POST['save-pic'])) //save the profile pic to db
{
$t =  $_FILES['photo']['tmp_name'];
$x =  $_FILES['photo']['name'];
if (move_uploaded_file($t,$x)) {
  $q = "update profiles set prof_pic='$x' where email='$email'";
  $rs = mysqli_query($conn,$q);
 
}
  else {
    echo 'failed to save';
  }
}
?>
    <div class='container'>
       <?php include 'left.php'?>
        <div class='right bg-change edge-radius'>
            <div class='add-skill-ui ui-absolute disp-none'>
                <?php
               echo "<form action='profile.php' method='get'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>Add skill</h1>
                        </div>
                        <div id='close-skill' class='close-btn flex-center'><img id='cls-skl-img' src='close-white.svg' alt=''></div>
                    </div>
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <p class='para-inp'>Skill*</p>
                        <div class='inp-diamension'><input type='text' placeholder='Skill (ex:Project Management)'
                                required name='skill'></div>
                    </div>
                    <hr class='line-2'>
                    <div class='save-btn2'><input type='submit' value='save' name='add-skill'></div>
                </form>"
                ?>
            </div>
            <!-- <div class="del-skill-ui del-ui disp-none">
             <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1 class='font-white'>Delete from profile?</h1>
                        </div>
                        <div id='close-skill' class='close-btn flex-center'><img id='cls-skl-img' src='close-white.svg' alt=''></div>
                    </div>
                    <hr class='line-2'>
            </div> -->
            <!-- <div class="edit-skill-bg">
             <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>skills</h1>
                        </div>
                        <div id='close-skill' class='close-btn flex-center'><img id='cls-skl-img' src='close-white.svg' alt=''></div>
                    </div>
                    <hr class='line-2'>
                    <div class="skill-edit-cont"> <?php
                               $q = "select profiles.email,skills.skill_name from profiles join skills on profiles.std_id=skills.std_id where email='$email'";
                               $rs = mysqli_query($conn,$q);
                               if ($rs->num_rows>0) {
                               while($row=mysqli_fetch_array($rs)){
                            echo "<div class='skill-bar space-btwn align-center'>
                                <p class='bold'>$row[skill_name]</p>
                                  <div class='edit-btn'><img src='edit.svg' alt=''></div>
                                  </div>
                                  <hr class='text-gray2'>";
                               }
                            }
                            ?></div>
            </div> -->
            <div class='add-education-ui ui-absolute disp-none'>
                <?php

                echo"<form action='profile.php' method='get'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>Add education</h1>
                        </div>
                        <div id='close-education' class='close-btn flex-center'><img id='cls-edu-img' src='close-white.svg' alt=''></div>
                    </div> 
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <div class='inp-diamension'>
                            <p class='para-inp'>School*</p>
                            <input type='text' placeholder='Ex: Boston University' required name='school'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Degree</p><input type='text' name='deg'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Field of study</p><input type='text'name='fos'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Start date</p><input type='date' name='st-dt'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>End date</p><input type='date' name='end-dt'>
                        </div>

                        <div class='inp-diamension'>
                            <p class='para-inp'>Grade</p><input type='text' name='grade'>
                        </div>
                    </div>
                    <hr class='line-2'>
                    <div class='save-btn2'><input type='submit' value='Save' name='save-edu'></div>
                </form>"
                ?>
            </div>
            <div class='add-achievement-ui ui-absolute disp-none'>
                <?php
               echo "<form action='profile.php' method='get'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>Add Achievements</h1>
                        </div>
                        <div id='close-achievements' class='close-btn flex-center'><img id='cls-achieve-img' src='close-white.svg' alt=''></div>
                    </div>
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <p class='para-inp'>Headings*</p>
                        <div class='inp-diamension'><input type='text' placeholder='Volunteer/Hackathon winner'
                                required name='achievments'></div>
                        <p class='para-inp'>Description</p>
                        <div class='inp-diamension'><input type='text' 
                               name='desc-achieve'></div>
                    </div>
                    <hr class='line-2'>
                    <div class='save-btn2'><input type='submit' value='save' name='add-skill'></div>
                </form>"
                ?>
            </div>
            <div class='add-work-showcase-ui ui-absolute disp-none'>
                <form action='' method='get'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>Add work</h1>
                        </div>
                        <div id='close-work' class='close-btn flex-center'><img id='cls-work-img' src='close-white.svg'
                                alt=''></div>
                    </div>
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <p class='para-inp'>Project url*</p>
                        <div class='inp-diamension'><input type='url' placeholder='Enter your project url' required
                                name='pjt-url'>
                        </div>
                        <div class='inp-diamension'>
                            <p class='para-inp'>Description</p><input type='text' name='descript' id=''>
                        </div>
                    </div>
                    <hr class='line-2'>
                    <div class='save-btn2'><input type='submit' value='Save' name='save-work'></div>
                </form>
            </div>
            <div class='edit-profile-ui ui-absolute disp-none'>
                <?php  
            $q = "select * from profiles where email='$email'";
            $rs = mysqli_query($conn,$q);
            $row=mysqli_fetch_array($rs);
            echo " <form action='profile.php' method='get'>
                    <div class='head-close space-btwn'>
                        <div class='heading-ui'>
                            <h1>Edit profile</h1>
                        </div>
                        <div id='close-edit' class='close-btn flex-center'><img id='cls-edit-img' src='close-white.svg' alt=''></div>
                    </div>
                    <hr class='line-2'>
                    <div class='inp-cont'>
                        <h2 class='inp-heading'>*Indicates required</h2>
                        <div class='inp-diamension'>
                        <p class='para-inp'>Name*</p>    
                        <input type='text'
                            required value='$row[name]' name='name'></div>
                        <div class='inp-diamension'>
                        <p class='para-inp'>Pronouns</p>    
                        <select value='$row[prons]' name='prons'>
                            <option value='He/Him'>He/Him</option>
                            <option value='She/Her'>She/Her</option>
                            <option value=''></option>
                        </select></div>

                        <div class='inp-diamension'>
                        <p class='para-inp'>Email</p>
                        <input type='email'
                                value='$row[email]' required name='email'></div>
                        <div class='inp-diamension'>
                        <p class='para-inp'>Course</p>
                        <input type='text'
                                name='course' value='$row[course]'></div>
                        <div class='inp-diamension'>
                        <p class='para-inp'>field of study</p>    
                        <input type='text'
                                name='fos' value='$row[fos]'></div>
                        <div class='inp-diamension'>
                        <p class='para-inp'>Graduation</p>    
                        <input type='date'
                                name='grad' value='$row[grad]'></div>
                                <h3>Education</h3>
                                <p class='para-inp'>add or edit your school,degree,field of study and more</p>                     
                                <span class='edit-link'> <a href='#redir-edu'>Edit education</a></span>
                                <br>  
                                <br>                       
                                <h3>Skill</h3>
                                <p class='para-inp'>add or edit your skills</p>                             
                                <span class='edit-link'><u>Edit skill</u></span>
                                <br>     
                                <br>                    
                                <h3>Achivement</h3>
                                <p class='para-inp'>add or edit your achievement</p>                            
                                <span class='edit-link'><u>Edit achievement</u></span>
                                <br>
                                <br>
                                <h3>Work showcase</h3>
                                <p class='para-inp'>add or edit your work showcase.</p> 
                                <span class='edit-link'><u>Edit work</u></span>

                    </div>
                    <hr class='line-2'>
                    <div class='save-btn2 save-chg'><input type='submit' value='Save changes' name='Save-changes'></div>
                </form>"
                ?>
            </div>

            <div class='upper edge-radius bg-change bri-ness'>
                <div class='profile-1 '>
             
                    <div class='blk'>
                        <div class='btn'>
                            <?php

                             $con = mysqli_connect('localhost','root','yash1234','placementcell');
                             $q = "select*from profiles where email='$email'";
                             $rs = mysqli_query($con,$q);
                             $row = mysqli_fetch_array($rs);
                             if (isset($row['prof_pic'])) {
                                 echo "<img src='$row[prof_pic]' id='photo' alt='' height='150px' weight='150px'>";
                             }
                             else {
                                echo "<img src='person-circle.svg' id='photo' alt='' height='150px' weight='150px'>";
                             }
                            ?>
                            <div class='camera flex-dir-col-center'><i class='fa-solid fa-camera z'></i></div>
                            <div class='choose-photo-ui flex-dir-col-center disp-none'>
                                <form method='POST' enctype='multipart/form-data'>
                                    <input type='file' id='file' name='photo'><label for='file' id='upload-btn'><i
                                            id='img-gallery' class='fa-solid fa-image z'></i></label>
                                    <p class='font-white z'>Gallery</p>
                                    <input id='save' type='submit' value='Save' name='save-pic'>
                                </form>
                            </div>
                        </div>

                        <div class='usn'>
                            <?php
                            // if ($email!==null) {
                                $q = "select * from profiles where email='$email'";
                                $rs = mysqli_query($conn,$q);
                                $row=mysqli_fetch_array($rs);                         
                                if(isset($row['name'])|| isset($row['prons']))//in registration scenario name will be true and the prons(he/him,she/her) will false ,if student enable it then it will become true
                                {
                                   $prons_condition =$row['prons'];
                                   echo $prons_condition ? "<p class='as'>$row[name]<span>($row[prons])</span></p>":"<p class='as'>$row[name]</p>"; //using the ternary operator
                                }
                            // }
                            else{
                            echo "<p class='as'>Guest</p>";
                            }
                          $em_condition= isset($row['email']) ;//storing the value of email
                            echo $em_condition ? "<p class='mail z'>$row[email]</p>" :"<p class='mail z'>xyz@gmail.com</p>";//checking the condition ,if email will empty then the default will be executed so the we can get rid from the error thrown on the screen
                            if (isset($row['course']) || isset($row['fos']) || isset($row['grad']))  {
                                if ($row['course'] && $row['fos'] && $row['grad']) {
                                    echo "<p class='mail z'>$row[course]/$row[fos]($row[grad])</p>";
                                }
                                elseif($row['course'] && $row['fos'] &&  $row['grad']==null){
                                    echo "<p class='mail z'>$row[course]/$row[fos]</p>";
                                }
                                elseif($row['course'] && $row['grad'] && $row['fos']==null){
                                    echo "<p class='mail z'>$row[course]/$row[fos]</p>";
                                }
                                elseif($row['fos'] && $row['grad'] && $row['course']==null){
                                    echo "<p class='mail z'>$row[fos]($row[grad])</p>";
                                }
                                elseif($row['course'] && $row['grad']==null && $row['fos']==null){
                                    echo "<p class='mail z'>$row[course]</p>";
                                }
                                elseif($row['fos'] && $row['course']==null && $row['grad']==null){
                                    echo "<p class='mail z'>$row[fos]</p>";
                                }
                                elseif($row['grad'] && $row['course']==null && $row['fos']==null){
                                    echo "<p class='mail z'>$row[grad]</p>";
                                }
                            } else {
                                echo" ";
                            }
                        ?>
                        </div>
                    </div>
                    <div id='edit-info' class='btn1'><button class='font-white'><i
                                class='fa-regular fa-pen-to-square font-white'></i>Edit</button></div>
                </div>
                <div class='block'>
                    <div class='select'>
                        <div class='slt'>
                            <h1>Skills</h1>
                            <div class='add-edit flex-center'>
                                <div class='add-btn'><i id='add-skill' class='fa-solid fa-plus'></i></div>
                            </div>
                        </div>
                        <hr class='under-line-2'>
                        <div class='skill-cont skill-cont-show-more font-white z'>
                            <?php
                               $q = "select profiles.std_id, profiles.email,skills.skill_name from profiles join skills on profiles.std_id=skills.std_id where email='$email'";
                               $rs = mysqli_query($conn,$q);
                               if ($rs->num_rows>0) {
                               while($row=mysqli_fetch_array($rs)){
                                $_SESSION['sn'] = $row['skill_name'];
                            echo "<div class='skill-bar space-btwn align-center'>
                                  <div><p class='bold'>$row[skill_name]</p></div>
                                        <a href='/vt project (student placement cell )/update.php?id=". $row['std_id'] . "&sn=". urlencode($row['skill_name']) ."'><div id='skill-edit-btn' class='edit-btn'><img id='skill-edit-img' src='edit.svg' alt=''></div></a>
                               </div>
                               <hr class='text-gray2 mar-hr-20'>";
                               }
                            }
                            ?>
                        </div>
                        <hr class='text-gray2'>
                        <div class='show-all-skills flex-center font-white z'>
                            <p>Show all skills</p><i class='fa-solid fa-arrow-right font-20'></i>
                        </div>
                    </div>
                    <div id='redir-edu' class='select'>
                        <div class='slt'>
                            <h1>Education</h1>
                            <div class='add-edit flex-center'>
                                <div class='add-btn'><i id='add-education' class='fa-solid fa-plus'></i></div>
                            </div>
                        </div>
                        <hr class='under-line-2'>
                        <div class='edu-cont edu-cont-show-more font-white z'>
                            <?php   
                           $q = "select profiles.std_id,profiles.email,educations.schl,educations.deg,educations.fos,educations.strt_dt,educations.end_dt,grade from profiles join educations on profiles.std_id=educations.std_id where email='$email'";
                           $rs = mysqli_query($conn,$q);
                           if ($rs->num_rows>0) {
                           while($row=mysqli_fetch_array($rs)){
                           echo" <div class='edu-bar space-btwn align-center'>
                           <div>
                                <h2 class='school-heading'>$row[schl]</h2>
                                <p class='deg-fos'>$row[deg], $row[fos]</p>
                                <p class='srt-dt text-gray'>$row[strt_dt]</p>
                            </div>
                              <a href='/vt project (student placement cell )/update.php?id_for_edu=". $row['std_id'] . "&school=". urlencode($row['schl']) ."'> <div id='edu-edit-btn' class='edit-btn'><img id='edu-edit-img' src='edit.svg' alt=''></div></a>
                            </div>
                            <hr class='text-gray2 mar-hr-20'>";
                                }
                           }
                            ?>
                        </div>
                        <hr class='text-gray2'>
                        <div class='show-all-education flex-center font-white z'>
                            <p>Show all educations</p><i class='fa-solid fa-arrow-right font-20'></i>
                        </div>
                    </div>

                    <div class='select'>
                        <div class='slt'>
                            <h1>Achivements</h1>
                            <div class='add-edit flex-center'>
                                <div class='add-btn'><i id='add-achievement' class='fa-solid fa-plus'></i></div>
                            </div>
                        </div>
                        <hr class='under-line-2'>
                    </div>
                    <div class='select1 select'>
                        <div class='slt'>
                            <h1>My Work Showcase</h1>
                            <div class='add-edit flex-center'>
                                <div class='add-btn'><i id='add-work-showcase' class='fa-solid fa-plus'></i></div>
                            </div>
                        </div>
                        <hr class='under-line-2'>
                        <div class='cls'>
                            <?php
                           $q = "select profiles.email, work_showcase.pjt_url, work_showcase.descript from profiles join  work_showcase on profiles.std_id= work_showcase.std_id where email='$email'";
                           $rs = mysqli_query($conn,$q);
                           if ($rs->num_rows>0) {
                            while ($row = mysqli_fetch_array($rs)) {
                                echo "<div class='work-box'>";
                                if ($row['descript']) {
                                    echo "<div class='work-description font-white z'><p class='desc-para more-text'>" . $row['descript'] . "</p>
                                          </div><span class='more z'>...show more</span>";
                                }
                                if ($row['pjt_url']) {
                                    echo "<div class='frame-cont'>
                                            <iframe class='frame' id='show-work' src='" . $row['pjt_url'] . "'
                                            frameborder='0' allowfullscreen></iframe>
                                          </div>";
                                }
                                echo "</div>";
                            }
                        }
                        else{
                            echo "<span class='more z'> </span>";
                        }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <script src='day-night.js'></script>
    <script src='profile-page.js'></script>

</body>

</html>