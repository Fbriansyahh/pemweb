<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background gradient */
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        /* Container styling */
        .product-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            position: relative;
        }

        /* Decorative element */
        .product-container:before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.3), rgba(37, 117, 252, 0.3));
            border-radius: 50%;
            z-index: -1;
        }

        .product-container:after {
            content: '';
            position: absolute;
            bottom: -10%;
            left: -10%;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, rgba(106, 17, 203, 0.2), rgba(37, 117, 252, 0.2));
            border-radius: 50%;
            z-index: -1;
        }

        /* Title styling */
        .product-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        /* Input field styling */
        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 10px rgba(37, 117, 252, 0.5);
        }

        /* Button styling */
        .btn-success {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
        }

        /* Link button styling */
        .btn-primary {
            background: linear-gradient(to right, #007bff, #0056b3);
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #0056b3, #007bff);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }
    </style>
</head>
<body>
    <div class="product-container">
        <h1 class="product-title">Tambah Produk</h1>
        <a href="show.php" class="btn btn-primary">Lihat Data Produk</a>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Produk" required>
            </div>
            <div class="mb-3">
                <input type="number" id="price" name="price" class="form-control" placeholder="Harga Produk" required>
            </div>
            <div class="mb-3">
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success w-100" name="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
