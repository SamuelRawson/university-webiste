<?php
    session_start();
    include ("functions.php");
    include ("connections.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $confirm_code = $_POST['confirm_code'];

      
        if(!empty($confirm_code)){
          
          $query = "select * from unidel where confirm_code = '$confirm_code' limit 1";
         
          $result = mysqli_query($con, $query);
      
          if($result){
            if($result && mysqli_num_rows($result) > 0){
              
              $user_data = mysqli_fetch_assoc($result);
              
              if($user_data['confirm_code'] === $confirm_code){
      
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: first_page.php");
                die;
              }
            }
          }
          echo "Wrong username or password!";
        }else{
          echo "Wrong username or password!";
        }
      }
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>

<body style="background: white;">
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
            <a href="login.html" class="nav-link">Login</a>
        </div>
    </nav>
    <header style="width: 60%; margin: 50px auto; 
    box-shadow: 0 0 2px 2px grey;" >
        <div class="home hmm" style=" background: rgb(182, 190, 197);">
            <h1 class="welcome">Login</h1>
            <br>
            <form method="POST">
                <label for="username">User Name or Id</label>
                <input type="text" name="confirm_code" id="username" style="background: transparent";>
                <input class="login" type="submit" value="Login">
            </form>
        </div>
    </header>
    <main>
       
        </main>
    <footer >
            <p class="main-p" style="bottom: 100px;">kofa-Student Management System <br> Copyright &copy; WAeUP Group  <script type="text/javascript">
          renderCurrentYear();
          </script>2022</p>
       
    </footer>
    <script src="js/nav.js"></script>
</body>
</html>