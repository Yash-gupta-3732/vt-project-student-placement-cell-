<?php
        session_start(); // Resume the session
 ?>
 <?php
 if(isset($_GET['logout'])){
       session_destroy();
       header("location:index.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PLACEMENT CELL(HOME)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="charts.css">

</head>

<body>
    <div class="container">
        <div class="left edge-radius bg-change">
            <h1 class="heading-1 gradient">PLACEMENT PORTAL</h1>
            <hr class="under-line-1">
            <div class="nav-box">
                <div class="home nav-items icons-box-bg-grad">
                    <div class="icons-box"><img src="house-door.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z" id="z" href="/">Home</a></p>
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
                <div class="profile nav-items">
                    <div class="icons-box"><img src="person-circle.svg" alt=""></div>
                    <p class="para-1 font-white"><a class="text-deco-none font-white z z" href="profile.php">Profile</a>
                    </p>
                </div>
            </div>
            <div class="light-mode font-white z">
                <div id='li-ni-mode'>LIGHT MODE</div>
                <div class="day-night-light"><img id="d-n-light" src="day-mode.png" alt=""></div>
            </div>
            <?php
            if (isset($_SESSION['hide-lg-regist'])) { // Retrieve data from session variables made at the stdlg page,isset returns tru or false
                echo"
                <div class='logout mar-t-10'>
                  <form action='index.php' method='get'> 
                     <input class='logout border-none' type='submit' value='LogOut' name='logout'>
                  </form>
                </div>";
            } else {
                echo"<div class='log-regist flex'>
                        <div class='login '><a href='stdlgpage.php' style='text-decoration: none; color: white;'>Login</a></div>
                        <div class='register '><a href='stdreg.php' style='text-decoration: none;color: white;'>Register</a></div>
                    </div>";
            }
            ?>
        </div>
        <div class="right edge-radius">
            <div class="numbers-data">
                <div class="stud-info flex info-adjust edge-radius z bg-change">
                    <div class="data-stu">
                        <p class="para-2 ">No.of Students</p>
                        <p class="font-white z">6</p>
                    </div>
                    <div class="icons-box-2"><img src="people.svg" alt=""></div>
                </div>
                <div class="comp-info flex info-adjust edge-radius z bg-change">
                    <div class="data-comp">
                        <p class="para-2 ">No.of Companies</p>
                        <p class="font-white z">11</p>
                    </div>
                    <div class="icons-box-2"><img src="buildings.svg" alt=""></div>
                </div>
                <div class="application-info flex info-adjust edge-radius z bg-change">
                    <div class="data-appication">
                        <p class="para-2 ">No.of Applications</p>
                        <p class="font-white z">5</p>
                    </div>
                    <div class="icons-box-2"><img src="person-lines-fill.svg" alt=""></div>
                </div>
                <div class="offer-given-info flex info-adjust edge-radius z bg-change">
                    <div class="data-off-given">
                        <p class="para-2 ">No.of Offers Given</p>
                        <p class="font-white z">7</p>
                    </div>
                    <div class="icons-box-2"><img src="person-plus.svg" alt=""></div>
                </div>
            </div>

            <!-- html for the charts -->
            <div class="dashboard ">
                <div class="chart-container b-c bg-black bg-change">
                    <canvas id="barChart"></canvas>
                </div>
                <div class="chart-container l-c bg-black bg-change">
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="chart-container h-b-c bg-black bg-change">
                    <canvas id="horizontalBarChart"></canvas>
                </div>
                <div class="chart-container d-c bg-black bg-change">
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="home-page.js"></script>
    <script src="day-night.js"></script>

</body>

</html>