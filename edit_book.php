<?php
require_once 'db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);
$book = $result->fetch_assoc();

if (!$book) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $author = $_POST['author'];
    $stock = $_POST['stock'];

    $sql = "UPDATE books SET title='$title', price=$price, category='$category', publisher='$publisher', author='$author', stock=$stock WHERE id=$id";
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
    <title>Edit Book</title>
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
                <h1 class="text-center mb-4">Edit Book</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control" placeholder="Book Title" value="<?php echo $book['title']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" value="<?php echo $book['price']; ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="category" class="form-control" placeholder="Category" value="<?php echo $book['category']; ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="publisher" class="form-control" placeholder="Publisher" value="<?php echo $book['publisher']; ?>">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="author" class="form-control" placeholder="Author" value="<?php echo $book['author']; ?>">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="stock" class="form-control" placeholder="Stock" value="<?php echo $book['stock']; ?>">
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-custom w-100">Update Book</button>
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