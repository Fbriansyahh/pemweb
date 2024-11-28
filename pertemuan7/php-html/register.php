<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }

        /* Decorative element */
        .register-container:before {
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

        .register-container:after {
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
        .register-title {
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

        /* Link styling */
        .text-center a {
            color: #2575fc;
            text-decoration: none;
            font-weight: 500;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1 class="register-title">Register</h1>
        <form action="./backend/register.php" method="post">
            <div class="mb-3">
                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Anda" required>
            </div>
            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email Anda" required>
            </div>
            <div class="mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password Anda" required>
            </div>
            <div class="mb-3">
                <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success w-100">Register</button>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="./login.php">Login di sini</a></p>
            </div>
        </form>
    </div>
</body>
</html>
