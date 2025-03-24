<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>

    <style>
    </style>
</head>

<body>


    <header class="header">
        <h2 class="logo"><a href="index.html">Web Technologies</a></h2>
        <ul class="navmenu">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="weather.html">Weather Forecast</a></li>
            <li><a href="list.php">Publication</a></li>
            <li><a href="session.php">Login</a></li>
        </ul>
    </header>


    <section class="blue">

        <h1> Welcome!</h1>
    </section>


    <section class="darkblue">


        <h1> Explore my CV</h1>
        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

    </section>




    <section class="bubble">


    </section>

    <section class="dark">

        <h1> Portfolio</h1>
        <p> This website will showcase some of my projects.</p>
    </section>

    <section class="red">
        <h1>Publication system</h1>
        <p>An online repository used to record and retrieve details of scientific publications. This publication system has been developed using PHP and AJAX</p>

        <div class="wave2">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>


    </section>


    <div class="spacer layer1"></div>

    <section></section>
    <div class="spacer layer2 flip"></div>

    <section>


        <div class="blob-content">

            <h1>Weather Forecast</h1>

            <br> <br>
            <br> <br>

            <p>Rendering weather forecast data using JavaScript and the Chart.js library.</p>

        </div>
        <svg class="blob-motion" id="visual" viewBox="0 0 960 540" width="960" height="540"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g transform="translate(450.7256843113689 283.4942824330989)">
                <path id="blob1"
                    d="M148.7 -134.9C193.7 -103.7 231.9 -51.9 232.4 0.6C233 53 196.1 106.1 151.1 128.6C106.1 151.1 53 143 -4.4 147.4C-61.8 151.8 -123.5 168.5 -151.2 146C-178.8 123.5 -172.4 61.8 -172.8 -0.4C-173.1 -62.5 -180.3 -124.9 -152.6 -156.1C-124.9 -187.3 -62.5 -187.1 -5.3 -181.8C51.9 -176.5 103.7 -166 148.7 -134.9"
                    fill="#3c31dd"></path>
            </g>
            <g transform="translate(509.54377535978017 281.49390864595887)" style="visibility: hidden">
                <path id="blob2"
                    d="M115.4 -137.9C137.9 -92.9 136.4 -46.4 133.6 -2.8C130.8 40.8 126.6 81.6 104.1 118.4C81.6 155.2 40.8 188.1 -8.4 196.5C-57.5 204.8 -115 188.7 -151 151.9C-187 115 -201.5 57.5 -190.8 10.7C-180.1 -36.1 -144.1 -72.1 -108.1 -117.1C-72.1 -162.1 -36.1 -216.1 5.2 -221.2C46.4 -226.4 92.9 -182.9 115.4 -137.9"
                    fill="#3c31dd"></path>
            </g>
        </svg>

        <script>
            const tween = KUTE.fromTo(
                '#blob1',
                { path: '#blob1' },
                { path: '#blob2' },
                { repeat: 999, duration: 3000, yoyo: true }
            ).start();
        </script>


    </section>

    <div class="spacer layer2"></div>
</body>

</html>