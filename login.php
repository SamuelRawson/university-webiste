<?php
session_start();
include("connections.php");
include("functions.php");

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
        }else{
            echo "<div style=' width: 80%; margin: 10px; margin-left: 20px; position: absolute; 
            height: 50px; color: rgba(237, 53, 53, 0.687);
            background: hsla(0, 35%, 66%, 0.315);
            border-radius: 5px; padding-left: 30px; padding-top:10px;
            border: 1px solid #e79e9e;' > You enter invalid credentials</div>";
            echo "<h1 id='myss'></h1>";
        }
      }
    }

  
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>

<body>
    <nav>
        <div class="unidel">
            <a href="index.html" class="unidel-link">UNIDEL</a>
            <div class="span"><i class="navber" onclick="toggleAside()" title="Menu">
                    &equiv;</i></div>
        </div>
        <div class="nav-content" id="navContent">
            <a href="#" class="nav-link">Application</a>
            <div class="dropdown earth" style="background: none;"> <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">
               <img src="media/earth.png" alt=""></a>
                <div class="dropdown-content" id="myDropdown">
                    <a href="https://unidel.waeup.org/students/D1000626/@@change_language?lang=en&amp;view_name=index">English</a>
                 <a class="dropdown-content-link" href="https://unidel.waeup.org/students/D1000626/@@change_language?lang=fr&amp;view_name=index">Français</a>
              <a class="dropdown-content-link" href="https://unidel.waeup.org/students/D1000626/@@change_language?lang=de&amp;view_name=index">Deutsch</a>
              <a class="dropdown-content-link" href="https://unidel.waeup.org/students/D1000626/@@change_language?lang=ha&amp;view_name=index">Hausa</a>
              <a class="dropdown-content-link" href="https://unidel.waeup.org/students/D1000626/@@change_language?lang=yo&amp;view_name=index">Yoruba</a>
              <a class="dropdown-content-link" href="https://unidel.waeup.org/students/D1000626/@@change_language?lang=ig&amp;view_name=index">Igbo</a>
                </div>
            </div>
            <a href="#" class="nav-link">Enquuiries</a>
            <a href="login.php" class="nav-link">Login</a>
        </div>
    </nav>
    <header>
        <div class="home hmm">
            <br>
            <h1 class="welcome" id="myss">Login</h1>
            <br>
            <form id="form" action="login.php" method="POST">
                <div class="nat">
                <label for="dcode">User Name or Id</label>
                <input type="text" name="dcode" id="dcode">
                </div>
                <div class="nat">
                <label for="password">Password</label>
                <input type="password" class="natt" name="password" id="password">
                </div>
                <p class="write-up up" style="color: red; font-family: sans-serif;">Note: User names, Ids and passwords are case sensitive.</p>
                <input class="login" type="submit" id="login" value="Login">
            </form>

            <p class="write-up">Don't forget to logout or exist your broswer when you're done. if you 
                are having trouble logging in, make sure to enable cookies in your broswer.
            </p>
            <p class="write-up">You don't have an account because you are a fresh student, or your student record
                has just been created?<button class="init"><a style="text-decoration: none;
                    color: aliceblue;" href="signup.html">initialize your student account.</a></button></p>
            <p class="write-up">Or simply forgot your student id, applicant id, or password?<button class="init">Request a new password.</button></p>
            <p class="write-up">You are student parents and you want to monitor study progress of your child?<button class="init">
                Request a temporary parents password.
            </button>  Prerequisite for getting parents access is that you have a valide email address and 
            has been entered by student into the parents email  address field. </p>
            <br>
            <br>
        </div>
    </header>
    <main>
       
        </main>
    <footer>
        <div class="main-content">
            <p class="main-p">kofa-Student Management System <br> Copyright &copy; WAeUP Group  <script type="text/javascript">
                renderCurrentYear();
                </script>2022</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="js/nav.js"></script>
   
</body>
</html>