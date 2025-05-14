<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $author = $_POST['author'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO books (title, price, category, publisher, author, stock) 
            VALUES ('$title', $price, '$category', '$publisher', '$author', $stock)";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3>Bookstore System</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-light me-2" href="#">Home</a>
                        <a class="btn btn-outline-light" href="aboutus.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4">Add New Book</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control" placeholder="Book Title" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" step="0.01" name="price" class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="category" class="form-control" placeholder="Category">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="publisher" class="form-control" placeholder="Publisher">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="author" class="form-control" placeholder="Author">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="stock" class="form-control" placeholder="Stock">
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-custom w-100">Add Book</button>
                                <a href="index.php" class="btn btn-secondary w-100">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>