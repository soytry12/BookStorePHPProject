<?php
require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><h3>Bookstore System</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-light me-2" href="index.php">Home</a>
                        <a class="btn btn-outline-light" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid flex-grow-1">
        <div class="row justify-content-center">
            <main class="col-12 col-md-10 main-content">
                <div class="about-section">
                    <div class="about-text-content">
                        <h1 class="about-heading">About Us</h1>
                        <p class="about-text">Hello, my name is <b>PHON SOYTRY</b>. This project is designed to help manage books. Built with <b>PHP, Bootstrap and MySQL</b>. Thank you for using our system!</p>
                        <button class="contact-btn">Contact Now</button>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/phonsoytry12" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://github.com/soytry12/BookStorePHPProject" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@phonsoytry" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgeWX8Gl3zxhgid1d5H_0ZvME_odASanaXoo6Ja6FrxKtVvYvGVeUCq8kbKeH3O0ekmBxbWvvqPVyUKaunuSyA-r-ycELp9iDlrdZkYZRgb70CjQxsh0-2F0I0r_tweUiriu3g_Kea2KEPvPD9_UUfrygiiJ5UKKwGWFl5CXZHLcKePb3tRRolCByCQ=s1600" alt="Team Illustration" class="about-image">
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>