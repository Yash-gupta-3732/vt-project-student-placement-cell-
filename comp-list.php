<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PLACEMENT CELL(COMPANIES LIST)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="comp-page.css">
    <link rel="stylesheet" href="list4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
<?php 
if(isset($_GET['comp-name']))
{ 
$name = $_GET['comp-name'];
$comp_type = $_GET['comp-type'];
$comp_arr = $_GET['comp-arrival'];
$comp_ctc = $_GET['comp-ctc'];
$comp_year = $_GET['comp-year'];
$comp_link = $_GET['comp-link'];


  $con = mysqli_connect('localhost','root','yash1234','addcomp');
  $q = "insert into addme(name,type,doa,ctc,year,moreinfo) value('$name','$comp_type','$comp_arr','$comp_ctc ','$comp_year','$comp_link')";

  $rs = mysqli_query($con,$q);
  if (!$rs) {
  echo "error";
  }
}
?>
    <div class="container">
        <div class="left edge-radius bg-change bri-ness">
            <h1 class="heading-1 gradient">PLACEMENT PORTAL</h1>
            <hr class="under-line-1">
            <div class="nav-box">
                <div class="home nav-items">
                    <div class="icons-box"><img src="house-door.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="/">Home</a></p>
                </div>
                <div class="company nav-items icons-box-bg-grad">
                    <div class="icons-box"><img src="buildings.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="comp-list.html">Company</a>
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
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="">Placed</a></p>
                </div>
                <div class="profile nav-items">
                    <div class="icons-box"><img src="person-circle.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" href="profile.php">Profile</a></p>
                </div>
            </div>
            <div class="light-mode font-white z">
                <p>LIGHT MODE</p><img id="d-n-light" src="day-mode(1).png" alt="">
            </div>
        </div>
        <div class="right edge-radius">
            <div class="nav-bar edge-radius bri-ness bg-change">
                <h1 class="heading-2">COMPANY'S LIST</h1>
                <div class="navigation">
                    <a href="index.html" class="text-gray text-deco-none">Home</a>
                    <span class="text-gray">></span>
                    <a href="comp-list.html" class="text-gray text-deco-none">Company</a>
                </div>
            </div>
            <div class="lower bg-change">
                <div class="add-new bri-ness">
                    <h2 class="heading2">NO.OF COMPANY'S</h2>
                    <div class="btn2"><button id="add-comp">ADD NEW COMPANY <img class="add-icon"
                                src="plus-circle-fill.svg" alt=""></button></div>
                </div>
                <div class="add-comp-interface flex-dir-col-center disp-none">
                    <div class="close-btn"><img src="close.svg" alt="close"></div>
                    <form>

                        <div class="inp-bar space-btwn ">
                            <p class="para-inp"> Company Name </p>
                            <div class="inp-bar"><input class="inp-diamension" name="comp-name" type="text"></div>
                        </div>
                        <br>
                        <div class="inp-box space-btwn">
                            <p class="para-inp">Type</p>
                            <div class="inp-bar"><input class="inp-diamension" name="comp-type" type="text"></div>
                        </div>
                        <br>
                        <div class="inp-bar space-btwn">
                            <p class="para-inp"> Date Of Arrival </p>
                            <div class="inp-bar"><input class="inp-diamension" name="comp-arrival" type="date"></div>
                        </div>

                        <br>
                        <div class="inp-bar space-btwn">
                            <p class="para-inp"> CTC </p>
                            <div class="inp-bar"><input class="inp-diamension" name="comp-ctc" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="inp-bar space-btwn">
                            <p class="para-inp"> Year</p>
                            <div class="inp-bar"><input class="inp-diamension" name="comp-year" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="inp-bar space-btwn">
                            <p class="para-inp">Company link</p>
                            <div class="inp-bar"><input class="inp-diamension" name="comp-link" type="url">
                            </div>
                        </div>

                        <div class="submit"><input  type="submit" value="Add Company" name="add-comp"></div>
                    </form>
                </div>

                <div class="t1 bri-ness">
                    <table id="t2" class="t2 bri-ness">
                        <tr
                            style="background-image: linear-gradient(45deg, rgb(255, 0, 180), rgb(104, 0, 255));border-radius: 6px; display">
                            <td class="a">NAME</td>
                            <td class="a">TYPE</td>
                            <td class="a">DATE OF ARRIVAL</td>
                            <td class="a">CTC</td>
                            <td class="a">YEAR</td>
                            <td class="a">MORE INFO</td>
                        </tr>
                        <?php
                        $con = mysqli_connect('localhost','root','yash1234','addcomp');
                        $q = "select * from addme";
                        $rs = mysqli_query($con,$q);
                        while($row = mysqli_fetch_array($rs)){
                          echo "<tr>
                            <td class='a z'>$row[name]</td>
                            <td class='a z'>$row[type]</td>
                            <td class='a z'>$row[doa]</td>
                            <td class='a z'>$row[ctc]</td>
                            <td class='a z'>$row[year]</td>
                            <td class='a z'><a href='$row[moreinfo]'><button class='btn'><i
                                            class='fa-solid fa-circle-info lg'></i></button></a></td>
                            <td colspan='6'>
                                <hr class='text-gray2'>
                            </td>
                        </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
   <script src="day-night.js"></script>
    <script src="comp-page.js">
    </script>
</body>

</html>