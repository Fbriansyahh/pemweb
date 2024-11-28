<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 10px;
            padding: 10px;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 20px;
            transition: transform 0.2s, background-color 0.3s;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Produk</h1>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?= $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga:</label>
                <input type="text" id="price" name="price" class="form-control" value="<?= $row['price']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar URL:</label>
                <input type="text" id="image" name="image" class="form-control" value="<?= $row['image']; ?>">
            </div>
            <div class="text-center">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
