
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
    <link rel="stylesheet" href="./LoginFileStyle.css">

</head>
<body>
    <div id="header">
        <div id="logoimg">
            <img src="./images/logo.jpg" alt="logoimage">
        </div>
        <div id="topic">
            <h1>Online Job Portal Management</h1>
        </div>
        
    </div>
    <div id="navigation">
        <center>
            <ul id="nav_list">
                <li><a href="./1stHomePage.php">Home</a></li>
                <li><a class="active" href="./login.php">Login</a></li>
                <li><a href="./aboutUs.php">About us</a></li>
                
                
            </ul>
        </center>
    </div>
    
    <div id="container">
      
                <fieldset id="LoginForm">
                    <legend>Login Form</legend>
                    <form method="POST" action="">
                    <table id="LoginTable">
                            <tr>
                            <th>Username </th>
                                <td><input type="text" name="uname" id="uname" placeholder="enter username" required></td>
                            </tr>
                            <tr>
                            <th>Password</th>
                                <td><input type="password" name="password" id="pass" placeholder="enter password" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="Login" value="Login"></td>
                            </tr>
                            <tr>
                                <td><a href="./newuserreg.php">New User Registration</a></td>
                            </tr>
                        </table>
                    </form>
            </fieldset>
       
    </div>
    <div id="footer">
        <center>
            Copyright &copy; 2022 | Design By dharanarjun28698@gmail.com
            
        </center>
    </div>

        
                
                <!-- <script>
                
                function nextpage(){
                    //            console.log("working");
                    document.location.href="companies.php";
                }
                </script> -->
            
    <!-- nextpage(); -->
</body>
</html>



<?php
// if(isset($_POST['Login']))
// {

    if(!empty($_POST['Login']))
    {
        $uname=$_POST['uname'];
        $pass=$_POST['password'];

        $sql="select * from user_reg_det_table where Username='$uname' and Password='$pass'";
                        
        $res=$conn->query($sql);
        if($row=$res->fetch_assoc())
        {
            header("location: ./companies.php");
        
            // echo "success";
        }
        else{
            echo '<script type="text/javascript">alert("Username or Password is Invalid...")</script>';

        }

    }
// }    

?>


<?php
//  if(isset($_POST['Login']))
//  {
    // header("location:./companies.php");    
     
//     // echo '<h2><center>"click <a href="./aboutUs.php">here</a>to go to login page..."</center></h2>';
// echo"working";
// echo "hello";
//  }

 ?>