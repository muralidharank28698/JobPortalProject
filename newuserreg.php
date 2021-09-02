<?php
 include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>New user Registration</title>
    <link rel="stylesheet" href="./NewUserRegStyle.css">
   
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
    
    <div id="container">
      
                
                    
                    <form method="POST" action="newuserreg.php">
                    <table id="LoginTable" >
                            <tr>
                            <th>FirstName </th>
                                <td><input type="text" name="fname" id="fname" placeholder="enter your Firstname" required></td>
                            </tr>
                            <tr>
                            <th>LastName </th>
                                <td><input type="text" name="lname" id="lname" placeholder="enter your Lastname" required></td>
                            </tr>
                            <tr>
                            <th>Username</th>
                                <td><input type="text" name="username" id="uname" placeholder="enter username" required></td>
                            </tr>
                            <tr>
                            <th>Password</th>
                                <td><input type="password" name="password" id="pass" placeholder="enter password" required></td>
                            </tr>
                            <tr>
                            <th>MailId</th>
                                <td><input type="mailid" name="mailid" id="mid" placeholder="enter MailId" required></td>
                            </tr>
                            <tr>
                            <th>Mobile No</th>
                                <td><input type="text" name="mobileNo" id="mobileNo" placeholder="enter Mobile Number" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="Register" value="Register"></td>
                            </tr>
                            
                        </table>
                    </form>
                
                
            
       
    


<?php
    if(isset($_POST['Register']))
    {

        
        $FirstName = $_POST["fname"];
        $LastName = $_POST["lname"];
        $Username = $_POST["username"];
        $Password = $_POST["password"];
        $MailId = $_POST["mailid"];
        $Mobile = $_POST["mobileNo"];
        
    $query = "insert into user_reg_det_table (FirstName, LastName, Username,Password,MailId,MobileNo) values ('".$FirstName ."', '".$LastName."', '".$Username."', '".$Password."', '".$MailId."' ,'".$Mobile."')";
    $res = $conn->query($query);
    if($res == TRUE) {
        echo '<h1> <center>"Record Inserted success"</center></h1>';
        
        echo '<h2><center>"click <a href="./login.php">here</a>to go to login page..."</center></h2>';
    } else {
        echo'<h1><center>"Failed to Insert"</center></h1>';
    }
    // echo "$query";
}


    ?>

</div>
    <div id="footer">
        <center>
            Copyright &copy; 2022 | Design By dharanarjun28698@gmail.com
            
        </center>
    </div>
</body>
</html>