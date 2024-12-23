<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Grid</title>
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

/* Photo Grid styles */
.photo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap:100px;
    padding: 10px;
}

.grid-item img {
    width: 450px;
    height: 400px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.grid-item img:hover {
    transform: scale(1.05);
}

/* Lightbox styles */
.lightbox {
    display: none;
    position: fixed;
    z-index: 10;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

.lightbox-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
}

.close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
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
    <hr><br><h2><p align = "center">GYM</p></h2><br><hr>
    <section class="photo-grid">
        
        <div class="grid-item"><img src="gym.jpg" alt="Photo 1"></div>
        <div class="grid-item"><img src="gym1.jpg" alt="Photo 2"></div>
        <div class="grid-item"><img src="gym2.jpg" alt="Photo 3"></div>
    
    </section>

    <hr><br><h2><p align = "center">LIBRARY</p></h2><br><hr>
    <section class="photo-grid">
        <div class="grid-item"><img src="library.jpg" alt="Photo 4"></div>
        <div class="grid-item"><img src="library1.jpg" alt="Photo 5"></div>
        <div class="grid-item"><img src="library2.jpg" alt="Photo 6"></div>
        </section>

    <hr><br><h2><p align = "center">CANTEEN</p></h2><br><hr>
    <section class="photo-grid">
        <div class="grid-item"><img src="canteen.jpg" alt="Photo 7"></div>
        <div class="grid-item"><img src="canteen1.jpg" alt="Photo 8"></div>
        <div class="grid-item"><img src="canteen2.jpg" alt="Photo 9"></div>
        </section>
        
    <hr><br><h2><p align = "center">INDOOR GAMES</p></h2><br><hr>
    <section class="photo-grid">
        <div class="grid-item"><img src="indoor_games3.jpg" alt="Photo 10"></div>
        <div class="grid-item"><img src="indoor_games1.jpg" alt="Photo 11"></div>
        <div class="grid-item"><img src="indoor_games2.jpg" alt="Photo 12"></div>
    </section>  

    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-content" id="lightbox-image">
    </div>

    <script>
        // JavaScript for lightbox functionality
document.addEventListener('DOMContentLoaded', function() {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const close = document.querySelector('.close');
    const images = document.querySelectorAll('.grid-item img');

    images.forEach(image => {
        image.addEventListener('click', function() {
            lightbox.style.display = 'flex';
            lightboxImage.src = this.src;
        });
    });

    close.addEventListener('click', function() {
        lightbox.style.display = 'none';
    });

    lightbox.addEventListener('click', function(event) {
        if (event.target !== lightboxImage) {
            lightbox.style.display = 'none';
        }
    });
});

    </script>
</body>
</html>
