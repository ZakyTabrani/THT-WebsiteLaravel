<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Manchester United</title>
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

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 40px;
        }

        .grid-item {
            background-color:rgb(0, 0, 0);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(54, 54, 54, 0.66);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .grid-container .grid-item:last-child {
            grid-column: span 4;
            text-align: center;
            font-size: 1.5em;
        }

        .grid-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(54, 54, 54, 0.66);
        }

        .grid-item img {
            width: 60%;
            margin: 0 auto 15px;
            border-radius: 50%;
        }

        .grid-item h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: red;
        }

        .grid-item p {
            font-size: 1rem;
            color: yellow;
            text-align: center;
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
    <main>
        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('images/jennie.jpeg') }}" alt="Profile Picture">
                <h3>Jennie Kim</h3>
                <p>South Korean singer and rapper</p>
            </div>
            <div class="grid-item">
                <h3>Genres</h3>
                <p>K-pop | Dance-Pop | Hip Hop</p>
            </div>
            <div class="grid-item">
                <h3>Occupations</h3>
                <p>Singer | Rapper | Actress</p>
            </div>
            <div class="grid-item">
                <h3>Organization</h3>
                <p>Odd Atelier</p>
            </div>
            <div class="grid-item">
                <h3>Profiles</h3>
                <p style="text-align: justify">Born and raised in South Korea and New Zealand, Jennie successfully auditioned for YG Entertainment in 2010, eventually debuting as a member of the South Korean girl group Blackpink in August 2016.</p>
            </div>
            <div class="grid-item">
                <h3>Member of</h3>
                <p> <span style="color: white">Black</span><span style="color: pink">pink</span></p>
            </div>
            <div class="grid-item">
                <h3>Labels</h3>
                <p>YG | Interscope | Odd Atelier | Columbia</p>
            </div>
            <div class="grid-item">
                <h3>Live performances</h3>
                <p>Superpop Japan | Coachella Valley Music and Arts Festival</p>
            </div>
            <div class="grid-item">
                <h3>#GGMU | <span style="color: pink">Blackpink in Your Area</span> | <span style="color: yellow">do what you like. like what you do.</span></h3>
            </div>
        </div>
    </main>
<div class="footer">
    <p>&copy; 2024 Manchester United. All rights reserved.</p>
</div>
</body>
</html>
