<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Manchester United</title>
    <link rel="icon" href="{{ asset('images/Manchester_United_FC_crest.svg.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Sen', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #000;
            color: red;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-left img {
            width: 50px;
            height: 50px;
        }

        .header-left h1 {
            font-size: 1.5em;
            margin: 0;
            color: red;
        }

        .header-right a {
            text-decoration: none;
            color: red;
            padding: 10px 20px;
            transition: background 0.3s ease, transform 0.2s ease;
            border-radius: 5px;
        }

        .header-right a:hover {
            background: red;
            color: black;
            transform: scale(1.05);
        }

        .featured-post {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 2rem;
            background-color: #f9f9f9;
        }

        .featured-post img {
            width: 300px;
            height: auto;
            margin-left: 2rem;
            flex: 1;
        }

        .featured-post div {
            flex: 2;
        }

        .featured-post button {
            padding: 10px 30px;
            font-size: 1em;
            background-color: black;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .featured-post button:hover {
            background-color: red;
            color: black;
            transform: scale(1.05);
        }

        .post-container {
            margin: 0 auto; 
            padding: 0 5px; 
            max-width: 1200px;
        }

        .post-item {
            display: flex;
            align-items: flex-start;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-bottom: 1rem;
        }

        .post-item:hover {
            background-color:rgb(255, 0, 0);
            transform: scale(1.02);
        }

        .post-image {
            flex: 0 0 200px;
            height: 160px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .post-content {
            flex: 1;
            padding: 15px;
            text-align: left;
            
        }

        .post-category {
            font-size: 0.9em;
            font-weight: bold;
            color: #007BFF;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }

        .post-title {
            font-size: 1.4em;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .post-description {
            font-size: 1em;
            color: #555;
            line-height: 1.5;
        }

        a.d-flex {
            display: flex;
            gap: 15px;
            width: 100%;
        }

        .footer {
            background-color: black;
            color: red;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="main-header">
    <div class="header-left">
        <img src="{{ asset('images/Manchester_United_FC_crest.svg.png') }}" alt="logo">
        <h1>Manchester United</h1>
    </div>
    <nav class="header-right">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('signin') }}">Sign Out</a>
    </nav>
</header>
<section class="featured-post">
    <div>
        <h2>The Manchester derby refers to football matches between Manchester City and Manchester United, first contested in 1881</h2>
        <p class="text-muted my-3">By <span style="color: yellow">Jack</span> | December 2024</p>
        <p>City play at the City of Manchester Stadium in Bradford, east Manchester, while United play at Old Trafford...</p>
        <a href="https://www.manutd.com/">
            <button>Read More ></button>
        </a>
    </div>
    <img src="{{ asset('images/wincity.jpeg') }}" alt="Featured Post" class="img-fluid">
</section>
<br>
<section class="post-container">
    <h2>All Posts</h2>
    <div class="post-item">
        <a href="{{ route('post') }}" class="d-flex text-decoration-none text-dark">
            <div class="post-image">
                <img src="{{ asset('images/blogmu.jpeg') }}" alt="Post Image">
            </div>
            <div class="post-content">
                By <span style="color: yellow">Jack</span> | December 2024
                <h3 class="post-title">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</h3>
                <p class="post-description">Manchester United got back to winning ways in the Premier League by beating Everton...</p>
            </div>
        </a>
    </div>
    <div class="post-item">
        <a href="{{ route('post') }}" class="d-flex text-decoration-none text-dark">
            <div class="post-image">
                <img src="{{ asset('images/blogmu.jpeg') }}" alt="Post Image">
            </div>
            <div class="post-content">
                By <span style="color: yellow">Jack</span> | December 2024
                <h3 class="post-title">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</h3>
                <p class="post-description">Manchester United got back to winning ways in the Premier League by beating Everton...</p>
            </div>
        </a>
    </div>
    <div class="post-item">
        <a href="{{ route('post') }}" class="d-flex text-decoration-none text-dark">
            <div class="post-image">
                <img src="{{ asset('images/blogmu.jpeg') }}" alt="Post Image">
            </div>
            <div class="post-content">
                By <span style="color: yellow">Jack</span> | December 2024
                <h3 class="post-title">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</h3>
                <p class="post-description">Manchester United got back to winning ways in the Premier League by beating Everton...</p>
            </div>
        </a>
    </div>
    <div class="post-item">
        <a href="{{ route('post') }}" class="d-flex text-decoration-none text-dark">
            <div class="post-image">
                <img src="{{ asset('images/blogmu.jpeg') }}" alt="Post Image">
            </div>
            <div class="post-content">
                By <span style="color: yellow">Jack</span> | December 2024
                <h3 class="post-title">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</h3>
                <p class="post-description">Manchester United got back to winning ways in the Premier League by beating Everton...</p>
            </div>
        </a>
    </div>
    <div class="post-item">
        <a href="{{ route('post') }}" class="d-flex text-decoration-none text-dark">
            <div class="post-image">
                <img src="{{ asset('images/blogmu.jpeg') }}" alt="Post Image">
            </div>
            <div class="post-content">
                By <span style="color: yellow">Jack</span> | December 2024
                <h3 class="post-title">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</h3>
                <p class="post-description">Manchester United got back to winning ways in the Premier League by beating Everton...</p>
            </div>
        </a>
    </div>
</section>
<br>
<div class="footer">
    <p>&copy; 2024 Manchester United. All rights reserved.</p>
</div>
</body>
</html>
