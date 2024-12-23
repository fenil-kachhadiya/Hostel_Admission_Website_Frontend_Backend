<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshine Hostel</title>
    <style>
        /* CSS styles go here */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 2.5rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 1rem;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem;
            font-size: 1.25rem;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .login-btn {
            background-color: #ffa500;
            border-radius: 4px;
            color: #fff;
            padding: 0.5rem 1rem;
            margin-left: 1rem;
        }

        .login-btn:hover {
            background-color: #ff8c00;
        }

        /* .content {
            display: flex;
            /* justify-content: center; 
            margin :10rem;
            padding: 10rem;
        }

        .image {
            width: 100%;
            height : 10%;
            text-align: center;
        }

        .slider {
            max-width: 100%;
            max-height:70%;
            align:center;
            position: relative;
            overflow: hidden;
        }

        .slider img {
            width: 100%;
            height: 100%;
            display: none;
        }

        .slider img.active {
            display:flex;
            width :100%;
            size : 100px;
            
        } */

        .form {
            width: 50%;
            background-color: #f2f2f2; /* Grey background color */
            padding: 1rem;
            border-radius: 5px;
        }

        .form h2 {
            margin-bottom: 1rem;
        }

        .form input {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form button {
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form button:hover {
            background-color: #555;
        }

        /* Hero section styles */
        .hero {
            background-color: #f4f4f4;
            padding: 4rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .hero .btn {
            background-color: #333;
            color: #fff;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
        }

        .hero .btn:hover {
            background-color: #555;
        }

        .slider-frame{
            overflow: hidden;
            height: 800px;
            width: 1200px;
            margin-left: 290px;
            margin-top: 20px;
        }
        
        /---------- SLIDE ANIMATION --------------/
        
        
        @keyframes slide_animation{
            0% {left:0px;}
            10% {left:0px;}
            20% {left:1200px;}
            30% {left:1200px;}
            40% {left: 2400px;}
            50% {left: 2400px;}
            60% {left: 1200px;}
            70% {left: 1200px;}
            80% {left: 0px;}
            90% {left: 0px;}
            100% {left:0px;}
        }
        
        @-webkit-keyframes slide_animation{
            0% {left:0px;}
            10% {left:0px;}
            20% {left:1200px;}
            30% {left:1200px;}
            40% {left: 2400px;}
            50% {left: 2400px;}
            60% {left: 1200px;}
            70% {left: 1200px;}
            80% {left: 0px;}
            90% {left: 0px;}
            100% {left:0px;}
        }
        
        .slide-images{
            width: 3600px;
            height: 800px;
            margin: 0 0 0 -2400px;
            position: relative;
            -webkit-animation-name: slide_animation;
            animation-name: slide_animation;
            -webkit-animation-duration: 25s;
            animation-duration: 25s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            animation-direction: alternate;
            -webkit-animation-play-state: running;
            animation-play-state: running;
        }
        
        .img-container{
            height: 800px;
            width: 1200px;
            position: relative;
            float: left;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">Sunshine Hostel</a>
            </div>
            <ul>
                <li><a href="fdemo.php">HOME</a></li>
                <li><a href="registration.php">SIGN-UP</a></li>
                <li><a href="index.php">USER-LOGIN</a></li>
                <li><a href="admin/">ADMIN-LOGIN</a></li>
                <li><a href="photo.php">PHOTOS</a></li>
            </ul>
        </nav>
    </header>
    
        <br>    

    <div class = "slider-frame">
        <div class = "slide-images">
            <div class = "img-container">
                <img src = "Mess_2_Street_View-Large.jpg" height = "800px" width = "1000px">
            </div>
            <div class = "img-container">
                <img src = "one.jpg" height = "1000px" width = "1000px">
            </div>
            <div class = "img-container">
                <img src = "two.jpg" height = "1000px" width = "1000px">
            </div>
        </div>
    </div>

    <!-- Hero section -->
    <section class="hero">
        <h1>Welcome to Sunshine Hostel</h1>
        <p>Experience comfortable and affordable student accommodation.</p>
        <a href="registration.php" class="btn">Apply Now</a>
    </section>

    
</body>
</html>