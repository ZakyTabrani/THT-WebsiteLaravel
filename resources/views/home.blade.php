<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Manchester United</title>
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

        .header-right {
            display: flex;
            gap: 15px;
        }

        .main-header nav a {
            text-decoration: none;
            color: red;
            padding: 10px 20px;
            transition: background 0.3s ease, transform 0.2s ease;
            border-radius: 5px;
        }

        .main-header nav a:hover {
            background: red;
            color: black;
            transform: scale(1.05);
        }

        .welcome {
            background-image: linear-gradient(rgba(0, 0, 0, 0.651), rgba(223, 25, 25, 0.658)), url('{{ asset('images/lineup.jpg') }}');
            background-size: cover; 
            background-position: center; 
            color: whitesmoke;
            text-align: center;
            padding: 150px 50px; 
        }

        .welcome h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .welcome p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #d1d1d1;
        }

        .welcome button {
            padding: 10px 30px;
            font-size: 1em;
            background-color: black;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .welcome button:hover {
            background-color: red;
            color: black;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .welcome h1 {
                font-size: 2.5rem;
            }

            .welcome p {
                font-size: 14px;
            }

            .welcome button {
                padding: 12px 25px;
                font-size: 1em;
            }
        }

        .featured-post img {
            border-radius: 8px;
            width: 100%;
            height: auto;
        }

        .featured-post h4 {
            font-size: 1.25rem;
            margin-top: 15px;
            font-weight: bold;
        }

        .text-muted {
            text-align: justify;
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

        .all-posts ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .all-posts ul li {
            padding: 10px 0;
        }

        .content-box {
            padding: 10px 30px;
            font-size: 1em;
            background-color: #f9f9f9;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .content-box:hover {
            background-color: red;
            color: black;
            transform: scale(1.05);
        }

        .about-section {
            background-color: #f9f9f9;
            padding: 20px 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        .about-section h4 {
            font-size: 1rem;
            margin-top: 15px;
        }

        .about-section h3 {
            margin-top: 15px;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .about-section h2 {
            margin-top: 15px;
            font-weight: bold;
            font-size: 2rem;
        }

        .about-section button {
            padding: 10px 30px;
            font-size: 1em;
            background-color: black;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .about-section button:hover {
            background-color: red;
            color: black;
            transform: scale(1.05);
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
<section class="welcome">
    <h1>Welcome to the Manchester United website</h1>
    <p>By <span style="color: yellow">Jack</span> | December 2024</p>
    <p>Discover our amazing team and what makes us awesome <br>
    Join us as we create, innovate, and inspire!</p>
    <a href="https://www.manutd.com/">
        <button>Read More ></button>
    </a>
</section>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <h3 class="mb-4" style="font-weight: bold;">Featured Post</h3>
            <div class="featured-post">
                <img src="{{ asset('images/wincity.jpeg') }}" alt="Featured Post" class="img-fluid">
                <p class="text-muted my-3">By <span style="color: yellow">Jack</span> | December 2024</p>
                <h4>The Manchester derby refers to football matches between Manchester City and Manchester United, first contested in 1881</h4>
                <p class="text-muted">City play at the City of Manchester Stadium in Bradford, east Manchester, while United play at Old Trafford in the borough of Trafford, Greater Manchester; the two grounds are separated by approximately 4 miles (6.4 km). 
                The teams have played 195 matches in all competitions; United winning 80, City 61 and the remaining 54 have been drawn.</p>
                <a href="https://www.manutd.com/">
                    <button>Read More ></button>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <h3 class="mb-4" style="font-weight: bold;">All Posts</h3>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <div class="content-box">
                    <a href="{{ route('post') }}" class="d-block text-decoration-none text-dark">
                        <p class="text-muted small">By <span style="color: yellow">Jack</span> | December 2024</p>
                        <p style="text-align: justify; font-weight: bold;">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</p>
                    </a>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="content-box">
                    <a href="{{ route('post') }}" class="d-block text-decoration-none text-dark">
                        <p class="text-muted small">By <span style="color: yellow">Jack</span> | December 2024</p>
                        <p style="text-align: justify; font-weight: bold;">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</p>
                    </a>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="content-box">
                    <a href="{{ route('post') }}" class="d-block text-decoration-none text-dark">
                        <p class="text-muted small">By <span style="color: yellow">Jack</span> | December 2024</p>
                        <p style="text-align: justify; font-weight: bold;">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</p>
                    </a>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="content-box">
                    <a href="{{ route('post') }}" class="d-block text-decoration-none text-dark">
                        <p class="text-muted small">By <span style="color: yellow">Jack</span> | December 2024</p>
                        <p style="text-align: justify; font-weight: bold;">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</p>
                    </a>
                    </div>
                </li>
                <li class="mb-3">
                    <div class="content-box">
                    <a href="{{ route('post') }}" class="d-block text-decoration-none text-dark">
                        <p class="text-muted small">By <span style="color: yellow">Jack</span> | December 2024</p>
                        <p style="text-align: justify; font-weight: bold;">Interesting Manchester United vs Everton Notes: Red Devils' Big Win and Marcus Rashford's Sharpness</p>
                    </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="about-section container py-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="p-4">
                <div style="border-top: 5px solid red; position: absolute; top: 0; left: 0; right: 0; border-radius: 8px 8px 0 0;"></div>
                <h4>ABOUT US</h4>
                <h2 class="mb-4">Manchester United: The History and Legacy of the Red Devils</h2>
                <p class="text-muted"><strong style="color: red;">Manchester United Football Club</strong>, 
                    commonly referred to as <mark style="background-color: red;"><i>Man United</i> (often stylised as Man Utd)</mark> 
                    or simply <b style="color: red;">United</b>, is a professional football club based in Old Trafford, 
                    Greater Manchester, England. They compete in the Premier League, the top tier of English football. 
                    Nicknamed the Red Devils, they were founded as Newton Heath LYR Football Club in 1878, but changed their name to Manchester United in 1902. 
                    After a spell playing in Clayton, Manchester, the club moved to their current stadium, Old Trafford, in 1910.</p>
                <a href="https://www.manutd.com/">
                    <button>Read More ></button>
                </a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="p-4">
                <div style="border-top: 5px solid red; position: absolute; top: 0; left: 0; right: 0; border-radius: 8px 8px 0 0;"></div>
                <h4>OUR MISSION</h4>
                <h3 class="mb-4">Striving to Be the World's Best Football Club On and Off the Pitch</h3>
                <p class="text-muted">Manchester United's ambition is to be the best football club in the world, 
                    both through achievements on the pitch by winning trophies, and through contributions off the pitch, 
                    such as professional club management, social activities, and global influence in the world of football.</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="footer">
    <p>&copy; 2024 Manchester United. All rights reserved.</p>
</div>
</body>
</html>
