<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore System</title>
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
    <div class="container-fluid flex-grow-1">
        <div class="row justify-content-center">
            <main class="col-12 col-md-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3">Book Details</h1>
                    <a href="add_book.php" class="btn btn-custom">+ Add New Book</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Book Title</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Publisher</th>
                                <th>Author</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0): ?>
                                <?php $index = 1; while($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $index++; ?></td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td>$<?php echo $row['price']; ?></td>
                                        <td><?php echo $row['category']; ?></td>
                                        <td><?php echo $row['publisher']; ?></td>
                                        <td><?php echo $row['author']; ?></td>
                                        <td><span class="badge bg-info"><?php echo $row['stock']; ?></span></td>
                                        <td>
                                            <a href="edit_book.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm me-2">Edit</a>
                                            <a href="delete_book.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan="8" class="text-center">No books found.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>