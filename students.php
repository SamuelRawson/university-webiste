<?php
    session_start();
    include("connections.php");
    include("functions.php");
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
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="unidel">
            <a href="indexs.html" class="unidel-link">UNIDEL</a>
            <div class="span"><i class="navber" onclick="toggleAside()" title="Menu">
                    &equiv;</i></div>
        </div>
        <div class="nav-content" id="navContent">
            <a href="institute.html" class="nav-link">Institutions</a>
            <div class="dropdown ld"> <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">my data</a>
            <i class="fa fa-caret-down"></i>
                <div class="dropdown-content" id="myDropdown">
                    <a class="dropdown-content-link" href="institute.html">application slip</a>
                    <a class="dropdown-content-link" href="data.php">base data</a>
                    <a class="dropdown-content-link" href="#">clearance data</a>
                    <a class="dropdown-content-link" href="students.php">personal data</a>
                    <a class="dropdown-content-link" href="#">study course</a>
                    <a class="dropdown-content-link" href="#">payments</a>
                    <a class="dropdown-content-link" href="#">accomodation data</a>
                    <a class="dropdown-content-link" href="history.php">history</a>
                </div>
            </div>
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
            <a href="#" class="nav-link">Contact</a>
            <a href="logout.php" class="nav-link">Logout</a>
        </div>
    </nav>
    <header>
        <div class="header">
            <div class="header-holder">
                <div class="header-content">
                    <a class="header-link" href="indexs.html">home</a>
                    <div class="line">/</div>
                    <a class="header-link" href="data.php">Students</a>
                    <div class="line">/</div>
            <a class="header-link" href="data.php"><?php echo $user_data['first_name']; ?>
                <?php echo $user_data['surname']; ?><?php echo $user_data['middle_name']; ?></a>
                    <a class="header-link" href="data.php"></a>
                </div>
                <div class="header-container">
                    <div class="data"><?php echo $user_data['dcode'] ?> . Courses validated</div>
                
                </div>
            </div>
            <div class="home">
                <button class="fee"><a style="text-decoration:none; color: black;" href="edit.html">Edit</a></button>
                <br>
            <h1 class="welcome" style="font-size:40px; font-weight: 500;"><?php echo $user_data['first_name'];?><?php echo $user_data['middle_name']; ?>
            <?php echo $user_data['surname']; ?> : Personal Data</h1>
            <div class="database">
                <ul class="base-data">
                    <li class="look">Updated:</li>
                    <li class="look">Permanet Address:</li>
                    <li class="look">middle name:</li>
                    <li class="look">Next of kin name</li>
                    <li class="look">Next of kin Relationship:</li>
                    <li class="look">Next of kin phone:</li>
                    <li class="look">next of phone:</li>
                    <li class="look">marital status:</li>
                    <li class="look">religion:</li>
                    <li class="look">disabled:</li>
                </ul>
                <ul class="base">
                    <li><?php echo $user_data['dcode'] ?></li>
                    <li><?php echo $user_data['first_name']; ?></li>
                    <li><?php echo $user_data['middle_name']; ?></li>
                    <li><?php echo $user_data['surname']; ?></li>
                    <li><?php echo $user_data['gender']; ?></li>
                    <li>Registration number:</li>
                    <li>matriculation number:</li>
                    <li>PWD activation code:</li>
                    <li>email:</li>
                    <li><?php echo $user_data['phone']; ?></li>
                 
                </ul>
            </div>
            <br>

    
            </div>
            <br>
        </div>
    </header>
    <main>
       
        </main>
    <footer>
        <div class="main-content">
            <p class="main-p">kofa-Student Management System <br> Copyright &copy; WAeUP Group 2022</p>
        </div>
    </footer>
    <script src="js/nav.js"></script>
</body>
</html>