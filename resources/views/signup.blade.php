<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Manchester United</title>
    <link rel="icon" href="{{ asset('images/Manchester_United_FC_crest.svg.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Sen', sans-serif;
            height: 100vh;
            background: linear-gradient(to bottom, rgb(0, 0, 0), rgb(255, 0, 0));
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            max-width: 1200px;
            width: 100%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }

        .image-side {
            flex: 1;
            background-image: url('{{ asset('images/sigup.jpeg') }}');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #fff;
            padding: 20px;
        }

        .image-side h4, .image-side p {
            margin: 0;
        }

        .form-side {
            flex: 1;
            padding: 50px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-side h1 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #333;
        }

        .form-side p {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        .form-side form {
            display: flex;
            flex-direction: column;
        }

        .form-side form input {
            margin-bottom: 15px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-side form button {
            background-color: rgb(255, 0, 30);
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .form-side form button:hover {
            background-color: rgb(0, 0, 0);
            transform: scale(1.05);
        }

        .form-side .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .form-side .footer a {
            color: rgb(255, 0, 30);
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s ease;
        }

        .form-side .footer a:hover {
            color: rgb(0, 0, 0);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-side">
            <div class="top-menu"></div>
            <div>
                <h4>Manchester United</h4>
                <p>By <span style="color: yellow">Jack</span> | December 2024<br>Web Developer</p>
            </div>
        </div>

        <div class="form-side">
            <h1>Create Account</h1>
            <p>Join the Manchester United community</p>
            <form action="/signup" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Sign Up</button>
            </form>
            <div class="footer">
                Already have an account? <a href="{{ route('signin') }}">Sign In</a>
            </div>
        </div>
    </div>
</body>
</html>
