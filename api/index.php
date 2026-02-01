<?php
$project = "Student Information";
$name = "Name: Nhel Andrian Pendijito";
$Nickname = "Andrian";
$Age = "Age: 22"; 
$Year = "Year: 2nd Year";
$program = "Program: BSIT";
$Section = "Section: IT22C"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #1e1e2f;
            color: #f5f5f5;
        }

        .container {
            max-width: 500px;
            margin: 80px auto;
            background: #2c2c3c;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.6);
            padding: 40px;
            text-align: center;
            border: 2px solid #00c6ff;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 25px;
            color: #00c6ff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .profile-info {
            margin: 15px 0;
            padding: 12px;
            border-radius: 10px;
            background: #3a3a4d;
            transition: transform 0.3s ease;
        }

        .profile-info:hover {
            transform: scale(1.05);
            background: #44445a;
        }

        .highlight {
            font-weight: bold;
            color: #ff6b6b;
        }

        p {
            font-size: 18px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $project; ?></h1>
        <div class="profile-info"><p class="highlight"><?php echo $name; ?></p></div>
        <div class="profile-info"><p>Nickname: <?php echo $Nickname; ?></p></div>
        <div class="profile-info"><p><?php echo $Age; ?></p></div>
        <div class="profile-info"><p><?php echo $Year; ?></p></div>
        <div class="profile-info"><p><?php echo $program; ?></p></div>
        <div class="profile-info"><p><?php echo $Section; ?></p></div>
    </div>
</body>
</html>
