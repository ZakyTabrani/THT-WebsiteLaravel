<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post | Manchester United</title>
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

        .blog-container {
            padding: 3rem 2rem;
            max-width: 800px;
            margin: auto;
        }

        .blog-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .blog-header img {
            margin: 1rem auto;
            width: 100%;
            height: auto;
        }

        .blog-meta {
            color: gray;
            font-size: 0.9rem;
        }

        .blog-content {
            margin: 2rem 0;
        }

        .blog-content p {
            margin-bottom: 1rem;
        }

        .blog-content ul {
            margin-left: 2rem;
        }

        .related-posts {
            padding: 2rem;
            background: #f9f9f9;
        }

        .related-posts h2 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .post-list {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .post-item {
            max-width: 300px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .post-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .post-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .post-item a {
            display: block;
            text-decoration: none;
            color: inherit;
            padding: 15px;
        }

        .post-item h3 {
            font-size: 1rem;
            font-weight: bold;
            margin: 0.5rem 0;
            color: #333;
        }

        .post-item p {
            font-size: 0.9rem;
            color: #555;
        }

        .post-item a:hover {
            background-color: red;
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
        <img src="{{ asset('images/Manchester_United_FC_crest.svg.png') }}" alt="Manchester United Logo">
        <h1>Manchester United</h1>
    </div>
    <nav class="header-right">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('signin') }}">Sign Out</a>
    </nav>
</header>
<div class="blog-container">
    <div class="blog-header">
        <p class="blog-meta">By <span style="color: yellow;">Jack</span> | December 2024</p>
        <h2>Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</h2>
        <img src="{{ asset('images/blogmu.jpeg') }}" alt="Manchester United vs Everton">
    </div>
    <div class="blog-content">
        <h2>Manchester United returned to winning ways in the Premier League by beating Everton. Here are the interesting notes from this match:</h2>
        <p>Man United beat Everton 4-0 in the match week 13 of the Premier League 2024/2025. This match took place at Old Trafford on Sunday (1/12/2024) night WIB.</p>
        <p>Marcus Rashford and Joshua Zirkzee became the heroes of the Red Devils' victory by scoring two goals each. This victory is very meaningful for the Red Devils after a draw against promotion team Ipswich Town last week.</p>
        <p>An additional three points made Man United move up to ninth in the Premier League standings with 19 points. They are still four points behind Brighton who are in the top four.</p>
    </div>
</div>
<section class="related-posts">
    <h2>What to Read Next</h2>
    <div class="post-list">
        <div class="post-item">
            <a href="{{ route('post') }}" class="text-decoration-none text-dark">
                <img src="{{ asset('images/wincity.jpeg') }}" alt="Post 1">
                <p class="text-muted my-3">By <span style="color: yellow;">Jack</span> | December 2024</p>
                <h3>The Manchester derby refers to football matches between Manchester City and Manchester United</h3>
                <p>City play at the City of Manchester Stadium in Bradford...</p>
            </a>
        </div>
        <div class="post-item">
            <a href="{{ route('post') }}" class="text-decoration-none text-dark">
                <img src="{{ asset('images/wincity.jpeg') }}" alt="Post 2">
                <p class="text-muted my-3">By <span style="color: yellow;">Jack</span> | December 2024</p>
                <h3>The Manchester derby refers to football matches between Manchester City and Manchester United</h3>
                <p>City play at the City of Manchester Stadium in Bradford...</p>
            </a>
        </div>
        <div class="post-item">
            <a href="{{ route('post') }}" class="text-decoration-none text-dark">
                <img src="{{ asset('images/wincity.jpeg') }}" alt="Post 3">
                <p class="text-muted my-3">By <span style="color: yellow;">Jack</span> | December 2024</p>
                <h3>The Manchester derby refers to football matches between Manchester City and Manchester United</h3>
                <p>City play at the City of Manchester Stadium in Bradford...</p>
            </a>
        </div>
    </div>
</section>
<br>
<div class="footer">
    <p>&copy; 2024 Manchester United. All rights reserved.</p>
</div>
</body>
</html>
