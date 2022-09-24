<?php
  
include_once "db.php";

session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($connection, $userQuery);
    $user = mysqli_fetch_assoc($result);
}
else{
    header('Location:Receptionist.php');
  }
  
include_once "header2.php";
include_once "sidebar2.php";

 if (isset($_GET['room_mang1'])){
    include_once "room_mang1.php";
}
elseif (isset($_GET['dashboard'])){
    include_once "dashboard.php";
}
elseif (isset($_GET['reservation'])){
    include_once "reservation.php";
}

elseif (isset($_GET['add_emp'])){
    include_once "add_emp.php";
}

elseif (isset($_GET['emp_history'])){
    include_once "emp_history.php";
}
else{
    include_once "room_mang1.php";
}

include_once "footer.php";
?>