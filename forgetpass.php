<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
           function redirect()
           {
            window.location="homepage.php";
           }
           </script>
	<title>Forget password</title></head>
    <?php
    include 'db.php';
if (isset($_POST['update_pass'])) {

$username = $_POST['uname'];

$new_pass = $_POST['new_pass']; 
$con_pass = $_POST['con_pass'];

$error= array();

$old = mysqli_query($connection, "SELECT * FROM user WHERE username='$username'");

$row = mysqli_fetch_array($old); 

if (empty($username)) {

$error['p']= "Enter Username";

}else if (empty($new_pass)){ $error['p']="Enter New Password";

}else if(empty($con_pass)){

$error['p'] ="Confirm Password";

}else if($new_pass!= $con_pass){
    $error['p']="Both password does not match";}

    if (count($error)==0) {

$query= "UPDATE user SET passwordd='$new_pass' WHERE username='$username'";

mysqli_query($connection,$query);}}

if (isset($error['p'])) {

$e = $error['p'];

$show="<h5 class='text-center alert

alert-danger'>$e</h5>";

}else{

$show ="";
}

?>

     <form method="post" style="margin-left:40px"> <h5 class="text-center my-4"> </h5>
         <div>
         <?php
         echo $show; ?>
        </div>
        <div class="box " style="height:90%;width: 30%;  margin-left: 450px;margin-top: 250px;border:
                             solid 3px black;background-color:yellow;">

<div class="form-group">

<label>Username <br></label> <input type="text" name="uname" class="form-control">

</div>

<div class="form-group"> <label>New Password<br></label> <input type="password" name="new_pass" class=" form-control">

</div>

<div class="form-group">

<label>Confirm Password<br></label> <input type= "password" name="con_pass" class=" form-control"> </div>

<input type="submit" name="update_pass" value=" Update Password" class="btn btn-info">
<input type = "button" value = "Home" onclick = "redirect();" />

  </div>
<body>

</body>
</html>