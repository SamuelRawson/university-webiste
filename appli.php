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
    
    <header>
        <div class="header">
          
            <div class="home">
                    
                <h1 class="welcome" style="font-size:40px; font-weight: 500;"><?php echo $user_data['first_name'];?> <?php echo $user_data['middle_name']; ?>
                <?php echo $user_data['surname']; ?> : Base Data</h1>
                <div class="database">
                    <ul class="base-data">
                        <li class="look">student id:</li>
                        <li class="look">first name:</li>
                        <li class="look">middle name:</li>
                        <li class="look">last name (surname)</li>
                        <li class="look">gender:</li>
                        <li class="look">Registration number:</li>
                        <li class="look">matriculation number:</li>
                        <li class="look">PWD activation code:</li>
                        <li class="look">email:</li>
                        <li class="look">phone:</li>
                        <li class="look">parents' email:</li>
                        <li class="look">staff member:</li>
                        <li class="look">financailly cleared by:</li>
                        <li class="look">financail clearance date:</li>
                        <li class="look">password:</li>
                        <li class="look">passport picture:</li>
                    </ul>
                    <ul class="base">
                        <li><?php echo $user_data['dcode'] ?></li>
                        <li><?php echo $user_data['first_name']; ?></li>
                        <li><?php echo $user_data['middle_name']; ?></li>
                        <li><?php echo $user_data['surname']; ?></li>
                        <li><?php echo $user_data['gender']; ?></li>
                        <li><?php echo $user_data['user_id']?></li>
                        <br>
                        <br>
                        <br>
                        <br>
                        <li><?php echo $user_data['email']?></li>
                        <li><?php echo $user_data['phone']; ?></li>
                        <br>
                        <li>no</li>
                        <br>
                        <br>
                        <br>
                        <br>
                        <li>set</li>
                        <li><input type="file"></li>
                    </ul>
                </div>
            

    
            </div>
            <br>
        </div>
    </div>
    </header>
</body>
</html>