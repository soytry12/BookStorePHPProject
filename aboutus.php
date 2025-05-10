<?php
// Database connection (if needed)
require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Bookstore System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #2c3e50;
            /* background: -webkit-linear-gradient(90deg, rgb(0, 0, 0) 0%, rgb(9, 87, 133) 100%); */
        }
        .main-content {
            flex: 1;
            padding: 40px 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 1200px;
            width: 100%;
        }
        .about-section {
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 30px;
        }
        .about-text-content {
            flex: 1;
            min-width: 300px;
        }
        .about-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .about-text {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .contact-btn {
            background-color: #f39c12;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-btn:hover {
            background-color: #e67e22;
        }
        .about-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            color: #2c3e50;
            margin-right: 15px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #f39c12;
        }
    </style>
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
                        <a class="btn btn-outline-light" href="index.php">Home</a>
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
                        <p class="about-text"><p>Welcome to our Bookstore System! This project is designed to help manage books easily and efficiently. Whether you're adding new titles, updating stock, or browsing by category, our system provides a simple and user-friendly interface. Built with PHP and MySQL, it’s perfect for libraries, small bookshops, or anyone who wants to organize their book collection. Thank you for using our system!</p>
                        </p>
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