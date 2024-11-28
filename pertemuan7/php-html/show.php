<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
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
        .data-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 900px;
        }

        /* Title styling */
        .data-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        /* Table styling */
        .table {
            border-radius: 10px;
            overflow: hidden;
            background: white;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table tbody tr:hover {
            background-color: rgba(37, 117, 252, 0.1);
        }

        /* Button styling */
        .btn {
            border-radius: 20px;
            padding: 5px 15px;
            transition: all 0.3s ease;
        }

        .btn-info {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            border: none;
            color: white;
        }

        .btn-info:hover {
            background: linear-gradient(to right, #0072ff, #00c6ff);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 114, 255, 0.3);
        }

        .btn-warning {
            background: linear-gradient(to right, #f6d365, #fda085);
            border: none;
            color: white;
        }

        .btn-warning:hover {
            background: linear-gradient(to right, #fda085, #f6d365);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(253, 160, 133, 0.3);
        }

        .btn-danger {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            border: none;
            color: white;
        }

        .btn-danger:hover {
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 65, 108, 0.3);
        }
    </style>
</head>
<body>
    <div class="data-container">
        <h1 class="data-title">Data Produk</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect, "SELECT * FROM products");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($products)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td>Rp <?= number_format($row['price'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="<?= htmlspecialchars($row['image']); ?>" target="_blank" class="btn btn-info btn-sm">Unduh</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
