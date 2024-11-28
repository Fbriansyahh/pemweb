<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Berhasil Ditambahkan</title>
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
            text-align: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-out;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
        }
        .btn {
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
            color: #fff;
        }
        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.4);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-white">Produk Berhasil Ditambahkan!</h1>
        <p class="mt-3">Produk <strong><?= htmlspecialchars($_GET['name']); ?></strong> telah berhasil ditambahkan ke dalam table produk.</p>
        <div class="mt-4">
            <a href="create.php" class="btn btn-success mx-2">Tambah Produk Lain</a>
            <a href="show.php" class="btn btn-primary mx-2">Lihat Data Produk</a>
        </div>
    </div>
</body>
</html>
