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
    <link rel="stylesheet" href="./JobApplyStylePage.css">
</head>
<body>
    <div class="topic">
        
        <nav>
        <div id="head">
        <h1>job <span>portal</span></h1>
        </div>
            <ul>
                <li><a href="./viewapplication.php">View Application</a></li>
                <li><a href="./1stHomePage.php">Home</a></li>
            </ul>
        </nav>
    </div>
    <div id="Aform">
        <h1>Application Form</h1>
    </div>
           
    <div id="content">
        <form action="CandidateJobApplyDetial.php" method="POST">
            <table id="userdet"  >
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><input type="text" name="age" id=""></td>
                </tr>
                <tr>
                    <th>MailId</th>
                    <td><input type="mailid" name="mailid" id=""></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="male">Female</label></td>
                </tr>
                <tr>
                    <th>PhoneNo</th>
                    <td><input type="text" name="phoneno" id=""></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><textarea name="Address" cols="40" rows="6"></textarea></td>
                </tr>
                <tr>
                    <th>10th Board</th>
                    <td><select name="_10thboard" id="">
                        <option value="stateboard">None</option>
                        <option value="stateboard">State Board</option>
                        <option value="cbse">CBSE</option>
                        <option value="other">Other</option>
                    </select></td>
                </tr>
                <tr>
                    <th>10th percentage</th>
                    <td><input type="text" name="_10thper" id=""></td>
                </tr>
                <tr>
                    <th>12th Board</th>
                    <td><select name="_12thboard" id="">
                        <option value="stateboard">None</option>
                        <option value="stateboard">State Board</option>
                        <option value="cbse">CBSE</option>
                        <option value="other">Other</option>
                    </select></td>
                </tr>
                <tr>
                    <th>12th percentage</th>
                    <td><input type="text" name="_12hper" id=""></td>
                </tr>
                <tr>
                    <th>UG percentage</th>
                    <td><input type="text" name="ugper" id=""></td>
                </tr>
                <tr>
                    <th>PG percentage</th>
                    <td><input type="text" name="pgper" id=""></td>
                </tr>
                <tr>
                <th>Upload Your CV</th>
                    <td>

                        <input type="file" name="file">
                    </td>
                </tr>
                <tr>
                    
                    <td colspan="2" align="center"><button id="btn" name="submit">Submit</button></td>
                </tr>
               
            </table>
         </form>
    </div>

<?php

if(isset($_POST['submit']))
{

    
    $Name = $_POST["name"];
    $Age = $_POST["age"];
    $MailId = $_POST["mailid"];
    $Gender = $_POST["gender"];
    $PhoneNo = $_POST["phoneno"];
    $Address = $_POST["Address"];
    $Board10th = $_POST["_10thboard"];
    $percentage10th = $_POST["_10thper"];
    $Board12th = $_POST["_12thboard"];
    $percentage12th = $_POST["_12hper"];
    $ugpercentage = $_POST["ugper"];
    $pgpercentage = $_POST["pgper"];
    $cv = $_POST["file"];





    $query = "insert into  person_job_apply_det_table (Name, Age, MailId,Gender,PhoneNo,Address,10thBoard,10thpercentage,12thBoard,12thpercentage,UGpercentage,	PGpercentage,UploadYourCV) values ('".$Name ."','".$Age."','".$MailId."','".$Gender."','".$PhoneNo."','".$Address."','".$Board10th."','".$percentage10th."','".$Board12th."','".$percentage12th."','".$ugpercentage."','".$pgpercentage."','".$cv."')";
     
    $res = $conn->query($query);
    if($res == TRUE) {
        echo '<h1> <center>"Applied successfull"</center></h1>';
        
        // echo '<h2><center>"click <a href="./login.php">here</a>to go to login page..."</center></h2>';
    } else {
        echo'<h1><center>"Failed to Apply"</center></h1>';
    }
    // echo "$query";
}

?>

</body>
</html>