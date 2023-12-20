<?php
session_start();
include("connections.php");
include("functions.php");

$error = array();
$error = array();


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $dcode = $_POST['dcode'];
  $password = $_POST['password'];

  if(!empty($dcode)&& !empty($password)){
    
    $query = "select * from unidel where dcode = '$dcode' limit 1";
   
    $result = mysqli_query($con, $query);

    if($result){
      if($result && mysqli_num_rows($result) > 0){
        
        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password){

          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: data.php");
          die;
        }
      }
    }
    else{
        $error[] = "invalid credentials";
            $resp['msg'] = $error;
            $resp['status'] = false;
            echo json_encode($resp);
            exit;
    }
  
  }else{
    $error[] = "invalid credentials";
    $resp['msg'] = $error;
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
}
}
