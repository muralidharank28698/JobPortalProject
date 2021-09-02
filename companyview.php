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


<style>
    body{
  background-color: #d1ccc0;

    }
    table {
  border-collapse: separate;
  border-spacing: 0px 25px;
}

th {
  background-color: #353b48;
  color: white;
  font-size:18px;
  height:40px;
}


td {
  width: 150px;
  text-align: center;
  border: 1px solid orange;
  padding: 5px;
  font-size:18px;
  font-weight:bold;
  
}

h1 {
  color: brown;
  font-size:40px;
  text-align:center;
  text-transform:capitalize;
  
}
a{
    font-size:25px;
    text-decoration:none;
}
a:hover{
color:green;
}
</style>

</head>
<body>
<div id="naivigation">
                <nav>
                    <div id="logo">
                        <p>job <span>portal</span></p>
                        <!-- <img src="./images/p2.jpg" alt=""> -->
                    </div>
                    <ul>
                        <li><a href="./1stHomePage.php">Home</a></li>
                        <li><a class="active" href="companies.php">companies</a></li>
                        <!-- <li><a href="./login.php">Login</a></li> -->
                        <li><a href="./login.php">Logout</a></li>

                    </ul>
        
                 </nav>
        </div>
        
    <center>
        <form action="" method="POST" enctype="multiple/form-data">
            <!-- <table>
                <thead>
                    <tr>
                        <th>Company Image</th>
                        <th>Company Name</th>
                        <th>Role</th>
                        <th>Package</th>
                        <th>Location</th>
                        <th>click here to apply</th>
                    </tr>
                </thead> -->
                <?php
                    
                    $choice=$_POST['job-catogory'];
                    if($choice==""){
                        echo '<script type="text/javascript">alert("First you need to select some Job...")</script>';


                    }else{
                        ?>
                        <h1>Your related jobs...</h1>
                    <table>
                <thead>
                    <tr>
                        <th>Company Image</th>
                        <th>Company Name</th>
                        <th>Role</th>
                        <th>Package</th>
                        <th>Location</th>
                        <th>click here to apply</th>
                    </tr>
                </thead>
                

                     <?php
                    // echo $choice;
                        $sql="select * from companies where role='$choice'";
                        
                        $res=$conn->query($sql);
                        while($row=$res->fetch_assoc())
                            {
                                ?>
                                <tr>
                                    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['Com_image']).'" alt="comimage" style="width:250px;height:250px;" >'; ?></td>
                                    
                                    <td><?php echo $row['com_name'];?></td>
                                    <td><?php echo $row['Role'];?></td>
                                    <td><?php echo $row['Package'];?></td>
                                    <td><?php echo $row['Location'];?></td>
                                    <td><a href="CandidateJobApplyDetial.php">Apply</a></td>
                                    
                                </tr>
                                <?php
                            }
                       
                ?>
                <?php
                 }
                //  else{
                //      echo"there is no record";
                //  }
                 ?>
            </table>
        </form>
    </center>
</body>
</html>



<?php 
        // echo $_POST['job-catogory'];
        
        // if(!isset($_POST['job-catogory'])){
        //     header("location: ./companies.php");
        // }


    ?>