<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="Adduser.css">
    <link rel="stylesheet" href="Addorder.css">
    <link rel="stylesheet" href="companyinfo.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="setting.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Addproduct.css">
    <link rel="stylesheet" href="AddGroup.css">
    


    <title>Admin Dashboard</title>
</head>

<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse"
            data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="#"
                            class="navbar-brand text-white d-block mx-auto text-center py-2 mb-3 bottom-border">ABC
                            Restaurent</a>
                        <div class="bottom-border pb-2">
                            <img src="  " width="50" class="rounded-circle mr-3">
                            <a href="#" class="text-white"></a>
                        </div>

                        <ul class="menu-ul flex-column mt-4">
                            <li class="nav-item"><a href="Dashboard.php" class="nav-link text-white p-2 mb-1 sidebar-link "><i
                                        class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                            <li id="user-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link ">
                              <i class="fas fa-user text-light fa-lg mr-3"></i>Users<span
                                        class="sub-arrow"></span></a>
                                <div class="sub-menu-1">
                                    <ul>
                                        <li class="nav-item"><a href="#"
                                                class="nav-link text-white p-2 mb-1 sidebar-link current"><i
                                                    class="text-light fa-lg mr-3"></i>Add User</a></li>
                                        <li class="nav-item"><a href="ManageUser.php"
                                                class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                    class="text-light fa-lg mr-3"></i>Manage User</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li id="Group-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                    class="fas fa-comments text-light fa-lg mr-3"></i>Groups<span
                                    class="sub-arrow"></span></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li class="nav-item"><a href="AddGroup.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Add Group</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Manage Group</a> </li>
                                </ul>
                            </div>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-home text-light fa-lg mr-3"></i>Stores</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-file-alt text-light fa-lg mr-3"></i>Tables</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-table text-light fa-lg mr-3"></i>Catagory</a></li>
                            <li id="product-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-table text-light fa-lg mr-3"></i>Products<span
                                        class="sub-arrow"></span></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li class="nav-item"><a href="Addproduct.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Add Product</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Manage Product</a> </li>
                                </ul>
                            </div>
                            </li>
                            <li id="Order-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-table text-light fa-lg mr-3"></i>Orders<span
                                        class="sub-arrow"></span></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li class="nav-item"><a href="Addorder.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Add Order</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Manage Order</a> </li>
                                </ul>
                            </div>
                            </li>
                            <li id="Report-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-chart-line text-light fa-lg mr-3"></i>Reports<span
                                        class="sub-arrow"></span></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Product Wise</a></li>
                                    <li class="nav-item"><a href="#"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Total Store Wise</a> </li>
                                </ul>
                            </div>
                            </li>
                            <li class="nav-item"><a href="companyinfo.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-file-alt text-light fa-lg mr-3"></i>Company Info</a></li>
                            <li class="nav-item"><a href="profile.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-user text-light fa-lg mr-3"></i>Profile</a></li>
                            <li class="nav-item"><a href="setting.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>

                        </ul>
                    </div>
                    <!-- end of sidebar -->

                    <!-- top-nav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-0 top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h5 class="text-light text-uppercase mb-0">Dashboard</h5>
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" placeholder="Search....">
                                        <button type="button" class="btn btn-white search-button"><i
                                                class="fas fa-search text-danger"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i
                                                class="fas fa-bell text-muted fa-lg"></i></a></li>
                                                <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Logout </button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>

<?php
include("connection.php");
error_reporting(0);
?>
<?php



$err_uname="";
$username="";
$data="";
$pass="";
$err_pass1="";
$pass3="";
$query="";
$err_uname="";
$fname="";
$err_fname="";
$lname="";
$err_lname="";
$Pnumber="";
$err_Pnumber1="";
$err_Pnumber2="";
$error="";
$error1="";
$confirmpass="";
$err_cpass1="";
$err_cpass2="";
$email2="";
$err_email1="";
$email4="";
$err_email3="";
$gendervalue="";
$err_gender="";
$err_group="";
$group="";
$Group="";
if (isset($_POST['Save'])) {
    if (empty($_POST['group'])) {
        $err_group="*Group Required";
    } elseif ($selectOption = $_POST['group']) {
        $Group=$selectOption;
    }

         
            
    if (empty($_POST['uname'])) {
        $err_uname="*Username Required";
    } else {
        $username=htmlspecialchars($_POST['uname']);
        //apatoto user dia bujhassi tui group a boshaia nish
    }


    if (empty($_POST['fname'])) {
        $err_fname="*firstName Required";
    } else {
        $fname=htmlspecialchars($_POST['fname']);
    }
            
    if (empty($_POST['lname'])) {
        $err_lname="*lastName Required";
    } else {
        $lname=htmlspecialchars($_POST['lname']);
    }
    if (empty($_POST['email'])) {
        $err_email1="*Email is Required";
    } elseif (strpos($_POST['email'], '@')!== false && strpos($_POST['email'], '.')!== false) {
        $email2=htmlspecialchars($_POST['email']);
        $email4="*Email is Valid";
    } else {
        $err_email3="*Invalid email ,try again";
    }
            
    if (empty($_POST['Pnumber'])) {
        $err_Pnumber1="*PhoneNo Required";
    } elseif (!is_numeric($_POST['Pnumber'])) {
        $err_Pnumber2="*only number input";
    } else {
        $Pnumber=htmlspecialchars($_POST['Pnumber']);
    }
    if (empty($_POST['pass'])) {
        $err_pass1="*PhoneNo Required";
    } else {
        $pass=htmlspecialchars($_POST['pass']);
        $pass3="*Password is Valid";
    }
            
    if (empty($_POST['confirmpass'])) {
        $err_cpass1="*confirm password Required";
    } elseif (($_POST['pass'])!=($_POST['confirmpass'])) {
        $err_cpass2="*Invalid  Confirm password";
    } else {
        $confirmpass=htmlspecialchars($_POST['confirmpass']);
    }
             
    if (isset($_POST['gender'])) {
        $gendervalue=htmlspecialchars($_POST['gender']);
    } else {
        if (empty($_POST['gendervalue'])) {
            $err_gender="You must select a gender!";
        }
    }
    


    $query="insert into dbsign values('$Group','$username',' $email2','$pass','$confirmpass' ,' $fname',' $lname','$Pnumber','$gendervalue')";
        
    $data=mysqli_query($conn, $query);
    echo $data;
    
    if ($data==true) {
        echo "<script>window.location.href='/RS/ManageUser.php'</script>";
        // $error = "this is happeing!!!";
        // header("Location: Dashboard.php?msg=Please+Login+Again.");
        exit();
    } else {
        $error= "Data is not insert";
    }
}


    
     ?>
	
    <div class='orderinner'>
   
   <h1 class="userh1"> <b>Add User </b> </h1>
   <form class="user_form" action="" method="post">
        <br>  

        Group:<br>			
			<select name="group" class="Group">
                <option  disabled selected>Select A User.</option>
<option value="stuff"<?php if ($Group == 'stuff') { ?>selected="selected" <?php } ?>>Staff</option>
				<option value="members" <?php if ($Group== 'members') { ?>selected="selected" <?php } ?> >Members</option>
            </select><br> <br>
           Username <br>  <input id="uname"  type="text" value="<?php echo $username;?>"name="uname" placeholder="Enter Username"><br>
              <br>   <span style="color:red"><?php echo $err_uname;?></span> <br>
              
              

           Email <br> <input id="email"  type="text" value="<?php echo $email2;?>"name="email" placeholder="Enter Email">
                    <br> <br><span  > <?php echo "" ;?></span>
                    <span style="color:green"><?php echo $email4;?></span>
                    <span style="color:red"><?php echo $err_email1;?></span>   
                    <span style="color:red"><?php echo $err_email3;?></span>  <br>
				
                    Password <br>   <input  type="password" value="<?php echo $pass;?>"  name="pass" placeholder="Enter Password"> <br> 
                    <br> 	<span style="color:red"><?php echo $err_pass1;?></span> 
					<span style="color:green"><?php echo $pass3;?></span> 
					<br> 
                    Confirm Password <br>   <input type="password"  value="<?php echo $confirmpass;?>"  name="confirmpass" placeholder="Confirm Password" required> <br> 
					<br><span style="color:red"><?php echo $err_cpass1;?></span> 
					<span style="color:red"><?php echo $err_cpass2;?></span> <br>
					
		            First name <br>    <input class="input" type="text" value="<?php echo $fname;?>" name="fname" placeholder="Enter First Name"><br>
                    <br>   <span style="color:red"><?php echo $err_fname;?></span> <br>
		           	Last name <br>   <input class="input" type="text" value="<?php echo $lname;?>"name="lname" placeholder="Enter Last Name"><br>
                       <br>   <span style="color:red"><?php echo $err_lname;?></span> <br>
		           	Phone No <br> <input class="input"  type="text" value="<?php echo $Pnumber;?>" name="Pnumber"placeholder="Enter Phone Number" ><br>
                       <br><span style="color:red"><?php echo $err_Pnumber1;?></span> 
				   	<span style="color:red"><?php echo $err_Pnumber2;?></span> <br>
                      
                    Gender <br>
<input class="inputradio" type="radio" name="gender" value="male" <?php if ($gendervalue == 'male') { ?>checked <?php } ?>> Male <input  class="inputradio" type="radio" name="gender" value="female" <?php if ($gendervalue == 'female') { ?>checked <?php } ?>> Female
    				<br><span style="color:red"><?php echo $err_gender;?></span> 
					   
                       <br> <span style="color:red"><?php echo $error;?></span> 
                       <br> <span style="color:red"><?php echo $error1;?></span> 
					
					
                       <p>	<input class="save" type="submit" name="Save" value="Save"></p>

                      
		</form>
   
        </div>
</body>
</html>














            



