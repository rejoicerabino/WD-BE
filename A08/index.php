<?php

include('connect.php');
include("classes.php");

$islandOfPersonalityContainers = array();

$islandOfPersonalityQuery = "SELECT * FROM islandsofpersonality";
$islandOfPersonalityResults = executeQuery($islandOfPersonalityQuery);

while ($islandOfPersonality = mysqli_fetch_assoc($islandOfPersonalityResults)) {
    $iop = new islandOfPersonality(
        $islandOfPersonality['islandOfPersonalityID'],
        $islandOfPersonality['image'],
        $islandOfPersonality['name'],
        $islandOfPersonality['color'],
        $islandOfPersonality['shortDescription']
    );

    array_push($islandOfPersonalityContainers, $iop);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Core Memories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/carton-six" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="shared/assets/css/style.css">
    <link rel="icon" href="assets/images/iopIcon.png" type="image/x-icon">
    <style>
        .sub-message {
            font-family: "Montserrat", sans-serif;
        }

        body,
        html {
            height: 100%
        }

        .bgimg {
            background-image: url('assets/images/iobg.png');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            overflow: hidden;
        }

        .welcome-message {
            font-family: 'Carton Six', sans-serif;
            text-align: center;
            background: linear-gradient(45deg, #FF8C00 0%, #FFD700 35%, #00CED1 70%, #FF1493 100%);
            -webkit-background-clip: text;
            color: transparent;
        }

        .iop {
            background-color: #133E87;
        }

        .index-title {
            font-family: 'Carton Six', sans-serif;
            background: linear-gradient(45deg, #0000FF, #8A2BE2, #FFFF00, #FF4500);
            -webkit-background-clip: text;
            color: transparent;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-middle">
            <h1 class="welcome-message w3-jumbo w3-animate-top">Welcome to Reji's Island of Personality</h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <p class="sub-message w3-large w3-center">Will you join me as I take a stroll down her memory lane?</p>
        </div>
    </div>

    <div class="iop container-fluid">
        <h1 class="index-title display-3 text-center p-5">ISLANDS OF PERSONALITY</h1>
        <div class="row align-items-center mt-2">
            <?php foreach ($islandOfPersonalityContainers as $islandOfPersonalityContainer) { ?>
                <?php echo $islandOfPersonalityContainer->buildIslandOfPersonalityContainer(); ?>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>