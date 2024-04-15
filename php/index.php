<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Views\header.css">
    <link rel="stylesheet" href="..\Views\footer.css">
    <link rel="stylesheet" href="..\Views\index.css">
    <script src="https://kit.fontawesome.com/0c3005efe7.js" crossorigin="anonymous"></script>
    <title>ROC-TILBURG</title>
</head>
<body>
    <?php
        require_once("../Views/header.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="imagen">
                <img src="../public/Tilburgo.jpeg" alt="Imagen 1" class = "foto">
                <h3>Info about Tilburg</h3>
            </div>
            <div class="imagen">
                <img src="../public/hockey.jpg" alt="Imagen 2" class = "foto">
                <h3>Common activities</h3>
            </div>
        </div>
        <div class="row">
            <div class="imagen">
                <img src="../public/chapel.jpg" alt="Imagen 3" class = "foto">
                <h3>Point of interest</h3>
            </div>
            <div class="imagen">
                <img src="../public/project.jpg" alt="Imagen 4" class = "foto">
                <h3>Out project</h3>
            </div>
        </div>
    </div>
    <?php
        require_once("../Views/footer.php");
    ?>
</body>
</html>