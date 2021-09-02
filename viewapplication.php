<?php
include("conn.php");

    //select data from table
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Management System</title>
    <style>
        body{
          background-color:#f5f6fa;
        }
        h1 {
            text-align: center;
            color:#ff9f43;
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            text-transform:capitalize;
        }
        #detial{
            width:600px;
            font-size:30px;
            margin-top:120px;
            border-radius: 10px;
            margin-left:340px;
            padding:10px;
         }
        #input-text input[type="text"]{
            width:500px;
            height:40px;
            border-radius:10px;
            margin-left:22%;
            font-size: 30px;
            color: #273c75;
            float: left;
        }
        #btn button{
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
        }
        #btn button:hover{
            color:#f1f2f6;
            background-color: #576574;
        }
        .lab label{
            font-size: 32px;
            color: #6F1E51;
            /* text-align: center; */
            margin-left:10px;
        }
        .lab input[type="text"],input[type="mailid"]{
            font-size: 20px;
            color: #222f3e;
            width: 550px;
            height:45px;
            margin-left:10px;
            border-radius: 8px;
        }
        #detial a{
            color:green;
            font-size: 22px;
           
        }
        #detial a:hover{
            color:#5f27cd;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <h1>Candidates detials</h1>
    <hr>
    <form action="" method="GET">
            <div id="input-text">
                <input type="text" name="Name" value="<?php if(isset($_GET['Name'])){echo $_GET['Name'];} ?>">
            </div>
            <div id="btn">
                <button type="submit">view</button>
            </div>
            
    </form>
    
        
    
    <div id="detial">
       
        <?php
            if(isset($_GET['Name']))
            {
                $can_name=$_GET['Name'];
                $sql="select * from person_job_apply_det_table where Name='$can_name'";
                
                $res=$conn->query($sql);
                while($row=$res->fetch_assoc())
                    {
                    ?>
                        
                        <div class="lab">
                            <label for="">Name</label><br>
                            <input type="text" value="<?php echo $row['Name'];?>">
                        </div>
                        <div class="lab">
                            <label for="">Age</label><br>
                            <input type="text" value="<?php echo $row['Age'];?>">
                        </div>
                        <div class="lab">
                            <label for="">Mail Id</label><br>
                            <input type="mailid" value="<?php echo $row['MailId'];?>">
                        </div>
                        <div class="lab">
                            <label for="">Gender</label><br>
                            <input type="text" value="<?php echo $row['Gender'];?>">
                        </div>
                        <div class="lab">
                            <label for="">PhoneNo</label><br>
                            <input type="text" value="<?php echo $row['PhoneNo'];?>">
                        </div>
                        <div class="lab">
                            <label for="">Address</label><br>
                            <input type="text" value="<?php echo $row['Address'];?>">
                        </div>
                        <div class="lab">
                            <label for="">10thBoard</label><br>
                            <input type="text" value="<?php echo $row['10thBoard'];?>">
                        </div>
                        <div class="lab">
                            <label for="">10thpercentage</label><br>
                            <input type="text" value="<?php echo $row['10thpercentage'];?>">
                        </div>
                        <div class="lab">
                            <label for="">12thBoard</label><br>
                            <input type="text" value="<?php echo $row['12thBoard'];?>">
                        </div>
                        <div class="lab">
                            <label for="">12thpercentage</label><br>
                            <input type="text" value="<?php echo $row['12thpercentage'];?>">
                        </div>
                        <div class="lab">
                            <label for="">UGpercentage</label><br>
                            <input type="text" value="<?php echo $row['UGpercentage'];?>">
                        </div>
                        <div class="lab">
                            <label for="">PGpercentage</label><br>
                            <input type="text" value="<?php echo $row['PGpercentage'];?>">
                        </div>
                        <div class="lab">
                            <label for="">YourCV</label><br>
                            <input type="text" value="<?php echo $row['UploadYourCV'];?>">
                        </div>
                        <center><a href="">Edit Application</a></center>
                        <?php
                     }
            }
         ?>
    </div>
</body>
</html>




































































































































    





