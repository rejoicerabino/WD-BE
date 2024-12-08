<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejoice's Portfolio</title>
    <link rel="stylesheet" href="https://use.typekit.net/waq3sfu.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="images/hpIcon.png" type="image/x-icon">

    <style>
        .card-container {
            display: flex;
            gap: 30px;
            width: 100%;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
            position: relative;
            list-style: none;
            width: 300px;
            height: 400px;
            aspect-ratio: 3 / 4;
            padding-bottom: 33.33vw;
            transition: 0.3s ease;
            overflow: hidden;
            border-radius: 20px;
        }

        .card-background {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
            border-radius: 20px;
            background-size: cover;
            background-position: center;
            filter: brightness(0.9) saturate(1) contrast(1);
            transition: 0.3s ease;
            background-color: #A59D84;
        }

        .card:hover .card-background {
            transform: scale(1.15);
            background-size: 120%;
        }

        .card-container:hover .card:not(:hover) {
            transform: scale(0.9);
        }

        .card-container:hover>.card:not(:hover) .card-background,
        .card-container:hover>.card:not(:hover) .card-category {
            filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
        }

        .content {
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            padding: 25px;
            position: absolute;
            text-align: center;
        }

        .card-category {
            color: antiquewhite;
            font-size: 2rem;
            font-weight: 200;
            font-style: italic;
            /* margin-left: 1vw; */
            text-transform: uppercase;
        }

        .card-heading {
            color: antiquewhite;
            font-size: 3rem;
            line-height: 1;
            text-shadow: 2px 2px 20px rgba (0, 0, 0, 0.2);
        }
    </style>

</head>

<body
    style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-image: url('img/bg.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; color: #333; display: flex; flex-direction: column; min-height: 100vh; text-align: center; overflow-x: hidden;">

    <header>
        <h1 class="display-4 fade-in"
            style="font-family: 'Bricolage-grotesque', sans-serif; font-weight: bold; color: #333; margin-top: 40px;">
            Welcome to my Portfolio
        </h1>
    </header>

    <div class="container fade-in"
        style="min-height: 80vh; display: flex; justify-content: center; align-items: center;">
        <div class="row about-me mt-0 align-items-center justify-content-center"
            style="text-align: left; width: 100%; max-width: 1200px;">
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <img src="img/pfp.jpg" alt="Rejoice's Photo" class="fade-in img-fluid"
                    style="border-radius: 100%; width: 100%; max-width: 300px; height: auto; margin-bottom: 20px;">
            </div>
            <div class="col-12 col-md-8 d-flex flex-column justify-content-center text-center">
                <p class="h1 fade-in"
                    style="font-family: 'Bricolage-grotesque', sans-serif; font-weight: bold; color: #333; margin: 10px 0; align-items: center">
                    Rejoice M. Rabino
                </p>
                <p class="h5 fade-in"
                    style="font-family: 'Bricolage-grotesque', sans-serif; font-weight: bold; color: #333; margin: 10px 0; align-items: center;">
                    A Bit About Me
                </p>
                <p class="h5"
                    style="font-family: 'Lato', sans-serif; text-align: justify; max-width: 500px; margin: 0 auto;">
                    I'm an IT student with a strong interest in technology, coding, and problem-solving. Currently
                    pursuing my degree in Information Technology at Polytechnic University of the Philippines. I
                    enjoy working on projects that allow me to apply my technical and creativity skills.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid fade-in" style="flex: 1; padding: 50px;">
        <div class="col-md-12 projects">
            <p class="h4 fade-in"
                style="font-family: 'Bricolage-grotesque', sans-serif; font-weight: bold; color: #333; margin-bottom: 20px;">
                Explore my Projects Below!
            </p>
        </div>
    </div>
    <div class="card-container col-lg-6 col-md-12 col-sm-12">
        <a href="A08/index.php" class="card">
            <div class="card-background" style="background-image: url('img/iop.png');"></div>
            <div class="content">
                <p class="card-category">ACTIVITY 08</p>
                <h2 class="card-heading">Island of Personality</h2>
            </div>
        </a>
        <a href="index.php" class="card">
            <div class="card-background" style="background-image: url('images/p2.jpg');"></div>
            <div class="content">
                <p class="card-category">ACTIVITY 09</p>
                <h2 class="card-heading">Coming Soon...</h2>
            </div>
        </a>
        <a href="index.php" class="card">
            <div class="card-background" style="background-image: url('images/p3.jpg');"></div>
            <div class="content">
                <p class="card-category">ACTIVITY 10</p>
                <h2 class="card-heading">Coming Soon...</h2>
            </div>
        </a>
    </div>
  
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center"
            style="border-bottom: 2px solid #5B3A29; padding-bottom: 3px; margin-bottom: 3px; width: calc(100% - 80px); margin-left: 40px; margin-right: 40px;">
        </ul>
        <p class="text-center text-body-secondary">Polytechnic University of the Philippines</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src='https://widgets.sociablekit.com/instagram-feed/widget.js' async defer></script>
    <script>
        function changeColor(event, element) {
            event.preventDefault();
            element.style.backgroundColor = "#6F5B3E";

            setTimeout(() => {
                element.style.backgroundColor = "#C4AE78";
                window.location.href = element.href;
            }, 150);
        }
    </script>

    <style>
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 2s ease forwards;
        }

        .about-me img {
            transition: transform 0.3s ease;
        }

        .about-me img:hover {
            transform: scale(1.1);
        }
    </style>

</body>

</html>