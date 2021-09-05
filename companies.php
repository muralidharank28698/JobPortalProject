<?php
include("conn.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Management System</title>
    <link rel="stylesheet" href="./companiesPageStyle.css">
</head>
<body>
    <!-- <h1>working</h1> -->
    <!-- <div id="header"> -->
        <!-- <div id="logoimg">
            <img src="./images/logo.jpg" alt="logoimage">
        </div> -->
        <!-- <div id="topic">
            <h1>Online Job Portal Management</h1>
        </div> -->
        
        <!-- </div> -->
        <!-- <div class="header"> -->
        <!-- <div id="head">
                <h1>job portal system</h1>
        </div> -->
        <div id="naivigation">
                <nav>
                    <div id="logo">
                        <p>job <span>portal</span></p>
                        <!-- <img src="./images/p2.jpg" alt=""> -->
                    </div>
                    <ul>
                        <li><a href="./1stHomePage.php">Home</a></li>
                        <!-- <li><a class="" href="#">companies</a></li> -->
                        <li><a href="./adminaddcompany.php">Admin</a></li>
                        <li><a href="./login.php">Logout</a></li>

                    </ul>
                    

                 </nav>
        </div>
    <div id="bimage">
        <div id="Image-content">
            <h1>find your job...</h1>
            <form action="companyview.php" method="POST">
                <select name="job-catogory" id="category">
                    <option value="">All catagory</option>
                    <option value="Software developer">Software developer</option>
                    <option value="Front End Developer">FrontEnd Developer</option>
                    <option value="Back End Developer">Backend Developer</option>
                    <option value="Full stack Developer">Fullstack Developer</option>
                    <option value="Systems analyst">Systems analyst</option>
                    <option value="Network engineer">Network engineer</option>
                    <option value="Data scientist">Data scientist</option>
                    <option value="Database administrator">Database administrator</option>
                    <option value="software engineer">software engineer</option>
                </select>
                <button>search</button>
                </form>
        </div>
    <img src="./images/aboutpage.jpg" alt="">
    </div>
    <!-- <div id="navigation">
       <ul id="nav_list">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./aboutUs.php">About us</a></li>
           </ul>
    </div> -->
    <!-- </div> -->

    <div id="innercontent">
    <div id="inimage">
        <img src="./images/inimage.jpg" alt="">
    </div>    
    <div id="incontent">
        <h2>Who can apply..</h2>
        <li>UG, PG and Diploma students in their pre-final and final year</li>
        <li>Students with any degree and specialisation/discipline</li>
        <li>Freshers with less than 2 years of experience</li>
        <h2>Steps for applying to a job..</h2>
        <li>Visit the career center. ...</li>
        <li>Search for jobs you want to apply to. ...</li>
        <li>Revise your resume. ...</li>
        <li>Get references. ...</li>
        <li>Work on your cover letter. ...</li>
        <li>Build up your portfolio.</li>
    </div>    
    </div>
    <div id="topic">
        <h1>Journey to a Dream Job</h1>
        <div id="step">
            <div class="flex-item item-1">
                <h3>step 1</h3>
                <hr>
                <p>Register</p>
            </div>
            <div class="flex-item item-2">
               <h3>step 2</h3>
               <hr>
               <p>Prepare the Test </p>
            </div>
            <div class="flex-item item-3">
                <h3>step 3</h3>
                <hr>
                <p>Take the test</p>
            </div>
            <div class="flex-item item-4">
                 <h3>step 4</h3>
                 <hr>
                <p>Get a benchmark score with a validity of 2 years</p>
            </div>
            <div class="flex-item item-5">
            <h3>step 5</h3>
            <hr>
                <p>Apply for corporate jobs as per their eligibility criteria</p>

            </div>
            <!-- <div class="flex-item item-6">
            <h3>step 2</h3>
                <p>Register</p>
            </div> -->
  </div>
    </div>
    <div id="footer">
            
            <center> Copyright &copy; 2022 | Design By dharanarjun28698@gmail.com</center>
                
        
        </div>



        

</body>
</html>