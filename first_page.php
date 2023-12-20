<?php
    session_start();
    include ("functions.php"); 
    include ("connections.php");

    $user_data = check_login($con);
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
            <a href="login.html" class="nav-link">Login</a>
        </div>
    </nav>
    <header>
        <div class="home hmm">
            <br>
            <div style="width: 75%; margin: 10px; margin-left: 20px; height: 50px; background: rgb(194, 240, 182);
            border-radius: 5px; border: 1px solid rgb(19, 189, 70);">
                <p style="color: rgb(13, 139, 51); padding: 14px 40px;">You logged in.</p>
            </div>
            <br>
            <div style="width: 75%; margin: 10px; margin-left: 20px; background: rgb(194, 240, 182);
            border-radius: 5px; border: 1px solid rgb(19, 189, 70);">
                <div style="color: rgb(13, 139, 51); padding: 14px 40px;"><h4 style="display: inline-block;">Congratulations!</h4> You have been offered
                provisional admission into the 2023/2024 Academic secssion of the University of Delta, Agbor.
            Your student record has been created for you/ Please, logout again and proceeed to the login page of the
        portal. Then enter your new student credentials: User name = <?php echo $user_data['dcode']?>,  password = <?php echo $user_data['password']?>. Change your password when you have logged in.</div>
       </div>
            <br>
            <h1 class="welcome">Admission screening Exercise 2023/2024</h1>
            <br>
        </div>
    </header>
    <main>
       
        </main>
    <footer>
       
            <p class="main-p">kofa-Student Management System <br> Copyright &copy; WAeUP Group 2022</p>
        
    </footer>
    <script src="js/nav.js"></script>
</body>
</html>