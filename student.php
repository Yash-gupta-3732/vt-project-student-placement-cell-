<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="list2.css">
    <link rel="stylesheet" href="list6.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
    </style>
</head>

<body>
    <div class="container">
       <?php include 'left.php'?>
        <div class="right">
           <div class="nav-bar edge-radius bg-change">
                <h1 class="heading-2">STUDENT'S LIST</h1>
                <div class="navigation">
                    <a href="index.html" class="text-gray text-deco-none">Home</a>
                    <span class="text-gray">></span>
                    <a href="comp-list.html" class="text-gray text-deco-none">Company</a>
                    <span class="text-gray">></span>
                    <a href="applied.html" class="text-gray text-deco-none">Student's</a>
                </div>
            </div>
            <div class="lower edge-radius bg-change">
                <div class="add-new">
                    <h2 class="heading2">NO.OF STUDENT'S</h2>
                    <div>
                        <input type="search" placeholder="&#xf002; search " class="sch">
                    </div>
                    <div class="btn2"><button>ADD NEW STUDENT <img class="add-icon" src="add.png" alt=""></button></div>
                </div>
                <div class="heading-bar font-white">
                    <div class="head-name">NAME</div>
                    <div class="head-branch">BRANCH</div>
                    <div class="head-section">SECTION</div>
                    <div class="head-usn">USN</div>
                    <div class="head-cgpa">CGPA</div>
                    <div class="head-more-info">MORE INFO</div>
                </div>
                <div class="list-container">
                    <ul class="lists">
                        <li>
                            <div class="list-bar font-white">
                                <div class="name-email-icon">
                                    <div class="icons-box-3">SM</div>
                                    <div class="name-email-info">
                                        <p class="stu-name z">Sandeep M</p>
                                        <p class="stu-email text-gray">1js19cs145@jssateb.ac.in</p>
                                    </div>
                                </div>
                                <div class="stu-branch z">CSE</div>
                                <div class="stu-section z">C</div>
                                <div class="stu-usn z">1js19cs146</div>
                                <div class="stu-cgpa box-green">8.5</div>
                                <div class="stu-more-info"><a href="http://127.0.0.1:3000/companydetail1.html"><button
                                            class="info-btn"><i class="fa-solid fa-circle-info lg"></i></button></a>
                                </div>
                            </div>
                            <hr class="line">
                        </li>
                        <li>
                            <div class="list-bar font-white">
                                <div class="name-email-icon">
                                    <div class="icons-box-3">SM</div>
                                    <div class="name-email-info">
                                        <p class="stu-name z">Sandeep M</p>
                                        <p class="stu-email text-gray">1js19cs145@jssateb.ac.in</p>
                                    </div>
                                </div>
                                <div class="stu-branch z">CSE</div>
                                <div class="stu-section z">C</div>
                                <div class="stu-usn z">1js19cs146</div>
                                <div class="stu-cgpa box-green">8.5</div>
                                <div class="stu-more-info"><a href="http://127.0.0.1:3000/companydetail1.html"><button
                                            class="info-btn"><i class="fa-solid fa-circle-info lg"></i></button></a>
                                </div>
                            </div>
                            <hr class="line">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</body>

</html>