<?php 
session_start();

// Cek apakah session role sudah di-set
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        h3 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        h5 {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .btn {
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: transform 0.2s, background-color 0.3s;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.1);
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.1);
        }
        .mt-4 a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h3>Selamat Datang Administrator</h3>
        <h5>Halo, <?= htmlspecialchars($_SESSION['name']); ?>!</h5>

        <div class="mt-4">
            <a href="show.php" class="btn btn-primary">Lihat Data Produk</a>
            <a href="create.php" class="btn btn-success">Tambah Produk</a>
        </div>

        <div class="mt-4">
            <a href="./backend/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>
