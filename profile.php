<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css?v=1.0">
    <link rel="stylesheet" href="list8.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>
    <div class="container">
        <?php  
if(isset($_POST['save']))
{
$t =  $_FILES['photo']['tmp_name'];
$x =  $_FILES['photo']['name'];
if (move_uploaded_file($t,$x)) {
  $con = mysqli_connect('localhost','root','yash1234','photos');
  $q = "insert into profile(photo) value('$x')";
  $rs = mysqli_query($con,$q);
 
}
  else {
    echo "failed to save";
  }
}
?>
        <div class="left edge-radius bg-change bri-ness">
            <h1 class="heading-1 gradient">PLACEMENT PORTAL</h1>
            <hr class="under-line-1">
            <div class="nav-box">
                <div class="home nav-items">
                    <div class="icons-box"><img src="house-door.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" id="z"
                            href="index.html">Home</a></p>
                </div>
                <div class="company nav-items">
                    <div class="icons-box"><img src="buildings.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z"
                            href="comp-list.html">Company</a>
                    </p>
                </div>
                <div class="students nav-items">
                    <div class="icons-box"><img src="people.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="">Students</a></p>
                </div>
                <div class="applied nav-items">
                    <div class="icons-box"><img src="person-lines-fill.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="applied.html">Applied</a>
                    </p>
                </div>
                <div class="placed nav-items">
                    <div class="icons-box"><img src="person-plus.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="placed.html">Placed</a>
                    </p>
                </div>
                <div class="profile nav-items icons-box-bg-grad">
                    <div class="icons-box"><img src="person-circle.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="profile.php">Profile</a>
                    </p>
                </div>
            </div>
            <div class="light-mode font-white z">
                <p>LIGHT MODE</p>
                <div class="day-night-light"><img id="d-n-light" src="day-mode(1).png" alt=""></div>
            </div>
        </div>
        <div class="right bg-change">
            <div  class="add-skill-ui ui-absolute disp-none">
                <form action="" method="get">
                    <div class="head-close space-btwn">
                        <div class='heading-ui'>
                            <h1>Add skill</h1>
                        </div>
                        <div id='close-skill' class="close-btn flex-center"><img  id='cls-skl-img' src="close-white.svg" alt=""></div>
                    </div>
                    <hr class="line-2">
                    <div class="inp-cont">
                        <h2 class="inp-heading">*Indicates required</h2>
                        <p class="para-inp">Skill*</p>
                        <div class="inp-diamension"><input type="text" placeholder='Skill (ex:Project Management)'
                                required></div>
                    </div>
                    <hr class="line-2">
                    <div class="save-btn2"><input type="submit" value='Save'></div>
                </form>
            </div>
            <div class="add-education-ui ui-absolute disp-none">
                <form action="" method="get">
                    <div class="head-close space-btwn">
                        <div class='heading-ui'>
                            <h1>Add education</h1>
                        </div>
                        <div id='close-education' class="close-btn flex-center"><img id='cls-edu-img' src="close-white.svg" alt=""></div>
                    </div> 
                    <hr class="line-2">
                    <div class="inp-cont">
                        <h2 class="inp-heading">*Indicates required</h2>
                        <div class="inp-diamension">
                            <p class="para-inp">School*</p>
                            <input type="text" placeholder='Ex: Boston University' required>
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">Degree</p><input type="text" placeholder='Ex: Bachelors'>
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">Field of study</p><input type="text" placeholder='Ex: Business'>
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">Start date</p><input type="date" placeholder='Ex: Business'>
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">End date</p><input type="date" placeholder='Ex: Business'>
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">Grade</p><input type="text">
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">Activity and Society</p><textarea name="" id=""
                                placeholder='Ex: Drawing, Volleyball'></textarea>
                        </div>

                        <div class="inp-diamension">
                            <p class="para-inp">Description</p><textarea name="" id=""></textarea>
                        </div>
                    </div>
                    <hr class="line-2">
                    <div class="save-btn2"><input type="submit" value='Save'></div>
                </form>
            </div>
            <div class="add-achievement-ui ui-absolute disp-none">achie</div>
            <div class="add-work-showcase-ui ui-absolute disp-none">  
                <form action="" method="get">
                    <div class="head-close space-btwn">
                        <div class='heading-ui'>
                            <h1>Add work</h1>
                        </div>
                        <div id='close-work' class="close-btn flex-center"><img  id='cls-work-img' src="close-white.svg" alt=""></div>
                    </div>
                    <hr class="line-2">
                    <div class="inp-cont">
                        <h2 class="inp-heading">*Indicates required</h2>
                        <p class="para-inp">Project url*</p>
                        <div class="inp-diamension"><input type="url" placeholder='Enter your project url'
                                required>
                        </div>
                        <div class="inp-diamension">
                            <p class="para-inp">Description</p><textarea name="" id=""></textarea>
                        </div>
                    </div>
                    <hr class="line-2">
                    <div class="save-btn2"><input type="submit" value='Save'></div>
                </form>
            </div>
            <div class="edit-profile-ui ui-absolute disp-none">
               <form action="" method="get">
                    <div class="head-close space-btwn">
                        <div class='heading-ui'>
                            <h1>Edit profile</h1>
                        </div>
                        <div id='close-edit' class="close-btn flex-center"><img id='cls-edit-img' src="close-white.svg" alt=""></div>
                    </div>
                    <hr class="line-2">
                    <div class="inp-cont">
                        <h2 class="inp-heading">*Indicates required</h2>
                        <div class="inp-diamension">
                        <p class="para-inp">Name*</p>    
                        <input type="text"
                            required></div>
                        <div class="inp-diamension">
                        <p class="para-inp">Pronouns</p>    
                        <select name="" id="">
                            <option value="">He/Him</option>
                            <option value="">She/Her</option>
                        </select></div>

                        <div class="inp-diamension">
                        <p class="para-inp">Email</p>
                        <input type="email"
                                ></div>
                        <div class="inp-diamension">
                        <p class="para-inp">Course</p>
                        <input type="text"
                                ></div>
                        <div class="inp-diamension">
                        <p class="para-inp">Subject</p>    
                        <input type="text"
                                ></div>
                        <div class="inp-diamension">
                        <p class="para-inp">Graduation</p>    
                        <input type="date"
                                ></div>
                                <h3>Education</h3>
                                <p class="para-inp">add or edit your school,degree,field of study and more</p>                     
                                <span class="edit-link"><u>Edit education</u></span>
                                <br>  
                                <br>                       
                                <h3>Skill</h3>
                                <p class="para-inp">add or edit your skills</p>                             
                                <span class="edit-link"><u>Edit skill</u></span>
                                <br>     
                                <br>                    
                                <h3>Achivement</h3>
                                <p class="para-inp">add or edit your achievement</p>                            
                                <span class="edit-link"><u>Edit achievement</u></span>
                                <br>
                                <br>
                                <h3>Work showcase</h3>
                                <p class="para-inp">add or edit your work showcase.</p> 
                                <span class="edit-link"><u>Edit work</u></span>

                    </div>
                    <hr class="line-2">
                    <div class="save-btn2"><input type="submit" value='Save'></div>
                </form>
            </div>
            
            <div class="upper edge-radius bg-change bri-ness">
                <div class="profile-1 ">
                    <div class="blk">
                        <!-- <button class="btn"><i class="fa-solid fa-user log"></i></button> -->

                        <div class="btn">
                            <?php
                             $con = mysqli_connect('localhost','root','yash1234','photos');
                             $q = "select * from profile order by id desc limit 1";
                             $rs = mysqli_query($con,$q);
                             while($row = mysqli_fetch_array($rs)){
                               echo "<img src='$row[photo]' id='photo' alt='' height='150px' weight='150px'>";
                             };
                         
                            ?>
                            <div class="camera flex-dir-col-center"><i class="fa-solid fa-camera z"></i></div>
                            <div class="choose-photo-ui flex-dir-col-center disp-none">
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="file" id="file" name='photo'><label for="file" id="upload-btn"><i
                                            id="img-gallery" class="fa-solid fa-image z"></i></label>
                                    <p class="font-white z">Gallery</p>
                                    <input id="save" type="submit" value='Save' name='save'>
                                </form>
                            </div>
                        </div>
                        <div class="usn">
                            <p class="as ">Avni Singh<span>(She/Her)</span></p>
                            <p class="mail z">avnis050@gmail.com</p>
                            <p class="mail z">B.Tech/IT(2023)</p>
                        </div>
                    </div>
                    <div id='edit-info' class="btn1"><button class='font-white'><i class="fa-regular fa-pen-to-square font-white"></i>Edit</button></div>
                </div>
                <div class="block">
                    <div class="select">
                        <div class="slt">
                            <h1>Skills</h1>
                            <div class="add-edit flex-center">
                            <div class='add-btn'><i id='add-skill' class="fa-solid fa-plus"></i></div>
                            <div class="edit-btn"><img src="edit.svg" alt=""></div>
                            </div>
                        </div>
                        <hr class="under-line-2">
                        <div class="skill-cont skill-cont-show-more font-white">
                            <div class="skill-bar">
                                <p class="bold">HTML5</p>
                                <hr class='text-gray2'>
                            </div>
                            <div class="skill-bar ">
                            <p class="bold">CSS3</p>
                            <hr class='text-gray2'>
                            </div>
                            <div class="skill-bar ">
                            <p class="bold">CSS3</p>
                            <hr class='text-gray2'>
                            </div>
                            <div class="skill-bar ">
                            <p class="bold">CSS3</p>
                            <hr class='text-gray2'>
                            </div>
                        </div>
                        <hr class='text-gray2'>
                        <div class="show-all-skills flex-center font-white"><p>Show all skills </p><img src="arrow-right.svg" alt=""></div>
                    </div>
                    <div class="select">
                        <div class="slt">
                            <h1>Education</h1>
                            <div class="add-edit flex-center">
                            <div class='add-btn'><i id='add-education' class="fa-solid fa-plus"></i></div>
                            <div class="edit-btn"><img src="edit.svg" alt=""></div>
                            </div>
                        </div>
                        <hr class="under-line-2">
                        <div class="edu-cont edu-cont-show-more font-white">
                            <div class="edu-bar">
                                <h2 class="school-heading">Government Engineering college jagdalpur</h2>
                                <p class="deg-fos">B-tech, Information Technology</p>
                                <p class="srt-dt text-gray">2022</p>
                                   <hr class='text-gray2'>
                            </div>
                            <div class="edu-bar">
                                <h2 class="school-heading">Government Engineering college jagdalpur</h2>
                                <p class="deg-fos">B-tech, Information Technology</p>
                                <p class="srt-dt text-gray">2022</p>
                                   <hr class='text-gray2'>
                            </div>
                            <div class="edu-bar">
                                <h2 class="school-heading">Government Engineering college jagdalpur</h2>
                                <p class="deg-fos">B-tech, Information Technology</p>
                                <p class="srt-dt text-gray">2022</p>
                                   <hr class='text-gray2'>
                            </div>
                        </div>
                        <hr class='text-gray2'>
                        <div class="show-all-education flex-center font-white"><p>Show all educations</p><img src="arrow-right.svg" alt=""></div>
                    </div>

                    <div class="select">
                        <div class="slt">
                            <h1>Achivements</h1>
                            <div class="add-edit flex-center">
                            <div class='add-btn'><i id='add-achievement' class="fa-solid fa-plus"></i></div>
                            <div class="edit-btn"><img src="edit.svg" alt=""></div>
                            </div>
                        </div>
                        <hr class="under-line-2">
                    </div>
                    <div class="select1 select">
                        <div class="slt">
                            <h1>My Work Showcase</h1>
                            <div class="add-edit flex-center">
                            <div class='add-btn'><i id='add-work-showcase' class="fa-solid fa-plus"></i></div>
                            <div class="edit-btn"><img src="edit.svg" alt=""></div>
                            </div>
                        </div>
                        <hr class="under-line-2">
                        <div class="cls">
                            <div class="work-description font-white"><p class="desc-para more-text">This is a simple spotify clone project ,which is a responsive website. enjoy your favourite music 🎶.
                            Web Technology used - JAVASCRIPT ,HTML,CSS.
                            Here's is my GitHub repository - https://lnkd.in/g7yUPq_b
                             .
                            What I learn ? 
                            Throughout this project I have learned many things like-
                            1- How to make the layout of the website with the html.
                            2- How to use CSS to make a website responsive with the use of mediaqueries and relative length units and learned how to style a website.
                            3- How to use JAVASCRIPT and its functions to give logic to your website and to make it workable. 
                            4-How to manipulate html and CSS with JAVASCRIPT ( Called DOM manipulation).</p></div><span class="more">...show more</span>
                            <iframe class='frame' id="show-work" src="https://yash-gupta-3732.github.io/my-portfolio/"
                                frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script src="day-night.js"></script>
    <script src="profile-page.js"></script>
</body>

</html>