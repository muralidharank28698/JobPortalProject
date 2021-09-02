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
    <!-- <link rel="stylesheet" href="./JobApplyStylePage.css"> -->
    <style>
        * {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
        body{
            background-color: #dcdde1;
  
        }
        #container{
            /* background-color: red; */
            width: 50%;
            height: 60%;
            margin:40px auto;
            border:2px solid white;
            box-shadow:5px 4px 20px 1px #888888;
        }
        #table-data{
            /* background-color: green; */
            margin: 30px auto;
  /* width: 500px;
  height: 300px; */
  /* margin: 50px; */
  font-size: 25px;

        }
        #table-data input[type="text"],
#table-data input[type="file"]
 {
  width: 350px;
  height: 35px;
  border-radius: 5px;
  font-size: 20px;
  color: #222f3e;
}
button{
    width: 160px;
  height: 40px;
  border-radius: 8px;
  background-color: #54a0ff;
  color:white;
  font-size: 30px;


}
h1{
  color: #341f97;
   text-align:center;
  font-size: 36px;
  text-transform:capitalize;

}
#table-data  th {
  padding: 20px;
  color:#192a56;
}
#table-data button:hover {
  color: orange;
  background: #353b48;
}
#naivigation {
  width: 100%;
  height: 90px;
}
nav {
  width: 100%;
  height: 80px;
  background-color: rgb(46, 43, 43);
  line-height: 80px;
  padding: 0px 100px;
  position: fixed;
  z-index: 1;
}
nav #logo {
  font-size: 30px;
  font-weight: bold;
  letter-spacing: 1.4px;
  text-shadow: 2px 2px #ff0000;
}
nav #logo p {
  float: left;
  color: rgb(247, 247, 223);
  text-transform: uppercase;
  font-family: Georgia, "Times New Roman", Times, serif;
}
nav ul {
  float: right;
}
nav ul li {
  display: inline-block;
  list-style: none;
}
nav ul li a {
  color: white;
  text-decoration: none;
  font-size: 20px;
  text-transform: uppercase;
  padding: 0px 25px;
}
nav ul li a:hover {
  color: rgb(21, 241, 21);
}
#logo span {
  color: rgb(10, 230, 29);
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 40px;
  /* font-style: italic; */
  text-shadow: 6px 2px blue;
}
nav ul li .active {
  color: rgb(241, 190, 21);
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
                        <!-- <li><a href="./1stHomePage.php">Home</a></li> -->
                        <!-- <li><a class="" href="#">companies</a></li> -->
                        <li><a class="active" href="">Admin</a></li>
                        <li><a href="./login.php">Logout</a></li>

                    </ul>
                    

                 </nav>
        </div>
    <h1>Admin add the company</h1>
   <div id="container">
        <form action="adminaddcompany.php" method="POST" enctype="multipart/form-data">
            
              <table id="table-data">
                  <tr>
               <th>Company image</th>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                <th>Company Name</th>
                    <td> <input type="text" name="companyName" id=""></td>
                </tr>

                <tr>
                <th>Role</th>
                    <td><input type="text" name="role" id=""></td>
                </tr>
                <tr>
                <th>Package</th>
                    <td><input type="text" name="package" id=""></td>
                </tr>
                <tr>
                <th>Location</th>
                    <td><input type="text" name="location" id=""></td>
                </tr>
                    
                     
               <tr>

                   <td colspan="2" align="right"><button id="btn" name="insert"  value="insert">insert</button></td>
               </tr>
               </table>  
         
         </form>
         </div>

    <?php
//  $msg="";
 
 if(isset($_POST['insert']))
 {
 
     
    //  $target = "images/".basename($_FILES['file']['name']);
 
 
 
    //  $cimage=$_FILES['file'];
     
    
     $cimage=addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
     $companyName = $_POST["companyName"];
     $Role = $_POST["role"];
     $Package = $_POST["package"];
     $Location = $_POST["location"];
   
     
//    echo $_FILES["file"]["tmp_name"];
 

 
 
     $query = "insert into  companies (Com_image,com_name, Role, Package,Location) values ('".$cimage."','".$companyName."','".$Role."','".$Package."','".$Location."')";
    //   mysqli_query($conn,$query);
    // echo  $query;
    $res = $conn->query($query);
     if($res == TRUE) {
        //  echo '<h1> <center>"records inserted successfull"</center></h1>';
         echo '<script type="text/javascript">alert("Image uploaded")</script>';
         // echo '<h2><center>"click <a href="./login.php">here</a>to go to login page..."</center></h2>';
     } else {
        //  echo'<h1><center>"Failed to insert"</center></h1>';
        echo '<script type="text/javascript">alert("Image not uploaded")</script>';

     }
     // echo "$query";
    //  if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
    //      $msg="image upload success";
    //  }else{
    //      $msg="there was problem";
    //  }
 }
 
 
 

?>
</body>
</html>





<!-- <div id="content">
        <form action="adminaddcompany.php" method="POST" enctype="multipart/form-data">
            <table id="">
            <tr>
                <th>Company image</th>
                    <td>

                        <input type="file" name="file">
                    </td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td><input type="text" name="role" id=""></td>
                </tr>
                <tr>
                    <th>Package</th>
                    <td><input type="text" name="package" id=""></td>
                </tr>
               
                <tr>
                    <th>Location</th>
                    <td><input type="text" name="location" id=""></td>
                </tr>
               
                <tr>
                    
                    <td colspan="2" align="center"><button id="btn" name="insert">insert</button></td>
                </tr>
               
            </table>
         </form>
    </div> -->
