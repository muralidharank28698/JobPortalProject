<?php
include("conn.php");
//  echo $_GET['id'];
 ?>
<!-- update form -->
<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- <link rel="stylesheet" href="./style.css" /> -->
   
   <style>
        body{
          background-color:red;
        }
        h1 {
            text-align: center;
            color:#ff9f43;
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            text-transform:capitalize;
        }
        .form{
            width:100%;
            /* font-size:200px; */
            margin-top:30px;
            border-radius: 10px;
            /* margin-left:340px; */
            /* padding:100px; */
         }
         
        /* #input-text input[type="text"]{
            width:500px;
            height:40px;
            border-radius:10px;
            margin-left:22%;
            font-size: 30px;
            color: #273c75;
            float: left;
        } */
        /* #btn button{
            width: 150px;
            height:45px;
            border-radius: 8px;
            border: 2px solid rgb(59, 15, 15);
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 30px;
            color: #2f3542;
            background-color: lightblue;
            line-height: 6px;
            float:right;
            margin-right:26%;
        } */
        /* #btn button:hover{
            color:#f1f2f6;
            background-color: #576574;
        } */
        /* .lab label{
            font-size: 32px;
            color: #6F1E51;
            text-align: center;
            margin-left:10px;
        } */
        /* .lab input[type="text"],input[type="mailid"]{
            font-size: 20px;
            color: #222f3e;
            width: 550px;
            height:45px;
            margin-left:10px;
            border-radius: 8px;
        } */
        /* #detial a{
            color:green;
            font-size: 30px;
            
            font-family:Georgia, "Times New Roman", Times, serif;
 
        } */
        /* #detial a:hover{
            color:#5f27cd;
            text-decoration:none;

        } */
        
        #data {
            margin: 30px auto;
            font-size: 22px;
            width: 600px;
            height: 300px;
            box-shadow:2px 1px 20px 1px #888888;

            /* background-color:gray; */
            /* margin: 50px; */
        }
            #data input[type="text"],
            #data input[type="file"],
            #data input[type="mailid"]
            {
            width: 420px;
            height: 35px;
            border-radius: 4px;
            font-size: 20px;
            color: #222f3e;
            box-shadow: 2px 2px 1px gray;
            /* align:right; */
            /* text-align:right; */
            padding:4px;
            }
            button{
            width: 130px;
            height: 40px;
            border-radius: 8px;
            background-color: #40407a;
            color:white;
            font-size: 25px;


            }
            #data  th {
            padding: 20px;
            color:#192a56;
            }
            #data button:hover {
            color: green;
            background: #F8EFBA;
}

    </style>






   
  </head>
  <body>
      <h1>Edit your Detials</h1>
      <hr style="height:3px;border-width:0;color:red;background-color:green">
    <div class="form">
<!-- select data from table by id -->
    <?php
    $sql = "SELECT * from person_job_apply_det_table where id = ".$_GET['id']."";
    $res = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    ?>
<form action="" method="POST">
<!-- <hr> -->
                        <table id="data">
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="name" value="<?php echo $row['Name'];?>"></td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td><input type="text" name="age" value="<?php echo $row['Age'];?>"></td>
                        </tr>
                        <tr>
                            <th>Mail Id</th>
                            <td><input type="mailid" name="mailid" value="<?php echo $row['MailId'];?>"></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><input type="text" name="gender" value="<?php echo $row['Gender'];?>"></td>
                        </tr>
                        <tr>
                            <th>PhoneNo</th>
                            <td><input type="text" name="phoneno" value="<?php echo $row['PhoneNo'];?>"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><input type="text" name="Address" value="<?php echo $row['Address'];?>"></td>
                        </tr>
                        <tr>
                            <th>10thBoard</th>
                            <td><input type="text" name="_10thboard" value="<?php echo $row['10thBoard'];?>"></td>
                        </tr>
                        <tr>
                            <th>10thpercentage</th>
                            <td><input type="text" name="_10thper" value="<?php echo $row['10thpercentage'];?>"></td>
                        </tr>
                        <tr>
                            <th>12thBoard</th>
                            <td><input type="text" name="_12thboard" value="<?php echo $row['12thBoard'];?>"></td>
                        </tr>
                        <tr>
                            <th>12thpercentage</th>
                            <td><input type="text" name="_12hper" value="<?php echo $row['12thpercentage'];?>"></td>
                        </tr>
                        <tr>
                            <th>UGpercentage</th>
                            <td><input type="text" name="ugper" value="<?php echo $row['UGpercentage'];?>"></td>
                        </tr>
                        <tr>
                            <th>PGpercentage</th>
                            <td><input type="text" name="pgper" value="<?php echo $row['PGpercentage'];?>"></td>
                        </tr>
                        <tr>
                            <th>YourCV</th>
                            <td><input type="text" name="file" value="<?php echo $row['UploadYourCV'];?>"></td>
                        </tr>
                        <tr>
                            <td align="right" colspan=2><button class="btn" name="update">update</button></td>
                        </tr>
                        
                        
                        <!-- <div class="lab">
                            <label for="">Name</label><br>
                            <input type="text" name="name" value="<?php 
                            // echo $row['Name'];
                            ?>">
                        </div>
                        <div class="lab">
                            <label for="">Age</label><br>
                            <input type="text" name="age" value="<?php 
                            // echo $row['Age'];
                            ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">Mail Id</label><br>
                            <input type="mailid" name="mailid" value="<?php 
                            // echo $row['MailId'];
                            ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">Gender</label><br>
                            <input type="text" name="gender" value="<?php 
                            // echo $row['Gender'];
                            ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">PhoneNo</label><br>
                            <input type="text" name="phoneno" value="<?php
                            //  echo $row['PhoneNo'];
                             ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">Address</label><br>
                            <input type="text" name="Address" value="<?php
                            //  echo $row['Address'];
                             ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">10thBoard</label><br>
                            <input type="text" name="_10thboard" value="<?php 
                            // echo $row['10thBoard'];
                            ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">10thpercentage</label><br>
                            <input type="text" name="_10thper" value="<?php
                            //  echo $row['10thpercentage'];
                             ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">12thBoard</label><br>
                            <input type="text" name="_12thboard" value="<?php
                            //  echo $row['12thBoard'];
                             ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">12thpercentage</label><br>
                            <input type="text" name="_12hper" value="<?php
                            //  echo $row['12thpercentage'];
                             ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">UGpercentage</label><br>
                            <input type="text" name="ugper" value="<?php 
                            // echo $row['UGpercentage'];
                            ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">PGpercentage</label><br>
                            <input type="text" name="pgper" value="<?php 
                            // echo $row['PGpercentage'];
                            ?>">
                        </div> -->
                        <!-- <div class="lab">
                            <label for="">YourCV</label><br>
                            <input type="text" name="file" value="<?php 
                            // echo $row['UploadYourCV'];
                            ?>">
                        </div> -->

                        </table>

       
      </form>
</div>

<?php
// include("conn.php");
   

    // $Name = $_POST["name"];
    // $Age = $_POST["age"];
    // $MailId = $_POST["mailid"];
    // $Gender = $_POST["gender"];
    // $Mobileno = $_POST["phoneno"];
    // $Address = $_POST["Address"];
    // // $PhoneNo = $_POST["Age"];
    // $_10thBoard = $_POST["10thboard"];
    // $_10thpercentage = $_POST["10thper"];
    // $_12thBoard = $_POST["12thboard"];
    // $_12thpercentage = $_POST["12hper"];
    // $UGpercentage = $_POST["ugper"];
    // $PGpercentage = $_POST["pgper"];
    // $YourCV = $_POST["file"];
   
//update data from table
 if(isset($_POST['update']))
    {

    $sql = "UPDATE person_job_apply_det_table SET Name='$_POST[name]',
    Age='$_POST[age]',MailId='$_POST[mailid]',Gender='$_POST[gender]',
    PhoneNo='$_POST[phoneno]',Address='$_POST[Address]',10thBoard='$_POST[_10thboard]',
    10thpercentage='$_POST[_10thper]',12thBoard='$_POST[_12thboard]',12thpercentage='$_POST[_12hper]',
    UGpercentage='$_POST[ugper]',PGpercentage='$_POST[pgper]',UploadYourCV='$_POST[file]' where id = ".$_GET['id']."";
//  echo $sql;

        $res = $conn->query($sql);
        if($res == TRUE)
        {
                echo '<script type="text/javascript">alert("Data Updated Successfully...")</script>';
        }
        else{
                echo '<script type="text/javascript">alert("Data Not Updated")</script>';
        }
    }
//  $res = $conn->query($sql);
//  // echo $res;
//  if($res == TRUE) {
//      echo '<h1 style="color:green;text-align:center;">"Record updated success"</h1>';
//     } else {
//         // echo '<h1>"Failed to update"</h1>';
//     }
?>


</body>
</html>









