<?php
include("connect.php");
include("classes.php");

$islandHeaderContainer = array();
$islandContentContainer = array();

$islandOfPersonalityID = $_GET['id'];

$islandHeaderQuery = "SELECT name, shortDescription, color FROM `islandsofpersonality` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$islandHeaderResults = executeQuery($islandHeaderQuery);

while ($islandHeader = mysqli_fetch_assoc($islandHeaderResults)) {
    $ih = new contentHeader(
        $islandHeader['name'],
        $islandHeader['color'],
        $islandHeader['shortDescription'],
    );
    array_push($islandHeaderContainer, $ih);
}

$islandContentQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
$islandContentResults = executeQuery($islandContentQuery);

while ($islandContent = mysqli_fetch_assoc($islandContentResults)) {
    $ic = new islandContent(
        $islandContent['islandContentID'],
        $islandContent['islandOfPersonalityID'],
        $islandContent['image'],
        $islandContent['content'],
        $islandContent['color'],
    );
    array_push($islandContentContainer, $ic);
}
?>
<!DOCTYPE html>

<head>
    <title>Island Content</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.cdnfonts.com/css/lexend" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/carton-six" rel="stylesheet">
    <link rel="icon" href="assets/images/iopIcon.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($islandHeaderContainer as $islandHeader) { ?>
                <?php echo $islandHeader->buildHeader(); ?>
            <?php } ?>
        </div>
        <div class="content row align-items-center">
            <?php foreach ($islandContentContainer as $islandContent) { ?>
                <?php echo $islandContent->buildContentContainer(); ?>
            <?php } ?>
        </div>
    </div>

</body>

</html>