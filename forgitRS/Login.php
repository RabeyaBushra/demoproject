<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Website </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" herf="css/font-awesome.min.css">

    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="js/script.js" ></script>
    <script src="js/fontawesome.min.js" ></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	
	
</head>
<body>
    <?php
    include("connection.php");
 
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_invalid="";
    $has_error=false;
    $query="";
    $total="";
    $err="";
	
    if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
			
			
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
			
        }
    
		else
		{
            $pass=$_POST['pass'];
        }
        if (!$has_error) {
            $query=mysqli_query($conn, "SELECT * FROM dbsign  WHERE username='$uname' AND Password='$pass'");
            $query1=mysqli_query($conn, "SELECT * FROM staff WHERE Username='$uname' AND password='$pass'");
           
            $total=mysqli_num_rows($query);
            $total1=mysqli_num_rows($query1);
           
            if ($total==true) {
                echo "successful";
            
                header("location:Dashboard.php");
            } 

            elseif($total1==true) {
                echo "successful";
            
                header("location:StaffDashboard.php");
            } 


          else {
                
            $err="*Please Try Again*";
               
            } 
        }
        
        
            }   
		
		

?>
			
    <section >  
        <div class="loginbox">
        <img src="images/img8.jpg"  class="Log">
        <h1>Login Here</h1>
        <h4> ABC Restaurent </h4>
        <form method="post" >
            <p > <b>Username </b></p>
            <input type="text" value="<?php echo $uname;?>" name="uname" >
            <br><span id="username"><?php echo $err_uname;?></span>
            
            <p>Password</p>
            <input type="password" value="<?php echo $pass;?>" name="pass" >
            &nbsp; <span id="pass"><?php echo $err_pass;?></span> <br> <br>
        
            <input type="submit" value="Submit" name="submit">
            <br><span id="error"><b><?php echo $err;?></b></span>
            
            
    
        </form>
        </div>
          
    </section>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
</body>

</html>