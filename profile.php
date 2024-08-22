<!DOCTYPE html>
<html lang="en">

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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="list8.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
    </style>
</head>

<body>
    <div class="container">
        <div class="left edge-radius bg-change">
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
                    <p class="para-1 font-white"><a class="text-deco-none font-white z z"
                            href="profile.php">Profile</a></p>
                </div>
            </div>
            <div class="light-mode font-white z">
                <p>LIGHT MODE</p>
                <div class="day-night-light"><img id="d-n-light" src="day-mode(1).png" alt=""></div>
            </div>
        </div>
        <div class="right bg-change">
            <div class="upper edge-radius bg-change">
                <div class="profile-1">
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
                                <form  method="POST" enctype="multipart/form-data">
                                    <input type="file" id="file" name='photo'><label for="file" id="upload-btn"><i
                                            id="img-gallery" class="fa-solid fa-image z"></i></label>
                                    <p class="font-white z">Gallery</p>
                                    <input id="save" type="submit" value='Save' name='save'>
                                </form>
                            </div>
                        </div>
                        <div class="usn">
                            <p class="as z">Avni Singh<span>(She/Her)</span></p>
                            <p class="mail z">avnis050@gmail.com</p>
                            <p class="mail z">B.Tech/IT(2023)</p>
                        </div>
                    </div>
                    <div class="btn1"><button><i class="fa-regular fa-pen-to-square"></i>Edit</button></div>
                </div>
                <hr class="under-line-2">
                <div class="block">
                    <div class="select bg-gray bg-gray">
                        <div class="slt">
                            <div>
                                <h1>Skills</h1>
                            </div>
                            <div><i class="fa-solid fa-plus "></i></div>
                        </div>
                        <hr class="under-line-2">

                        <!-- <select class="skills">
                            <option>Select Skills</option>
                            <option>HTML</option>
                            <option>HTML</option>
                            <option>HTML</option>
                            <option>HTML</option>
                            <option>HTML</option>
                        </select> -->
                    </div>
                    <div class="project bg-gray">
                        <h1>Project</h1>
                        <hr class="under-line-2">
                        <div class="pjt">
                            <div class="file">
                                <p>Upload File:</p>
                                <input type="file">
                            </div>
                            <div>
                                <p>GitHub Link:</p>
                                <input type="text" placeholder="Enter link" class="int">
                            </div>
                            <div class="save"><button>Save</button></div>
                        </div>
                    </div>
                    <div class="edu bg-gray">
                        <h1>Additional Details</h1>
                        <hr class="under-line-2">
                    </div>
                </div>
                <hr class="under-line-2">
                <div class="my-work-showcase flex-dir-col-center">
                    <div class="heading-4">
                        <h1>My Work Showcase</h1>
                    </div>
                    <iframe id="show-work" src=" https://yash-gupta-3732.github.io/spotify-clone/" height="806"
                        width="504" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="day-night.js"></script>
    <script src="add-photo.js"></script>
</body>

</html>