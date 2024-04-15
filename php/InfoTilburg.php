<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Tilburg</title>
    <link rel="stylesheet" href="../views/PuntosDeInteres.css">
    <link rel="stylesheet" href="../views/header.css">
    <link rel="stylesheet" href="../views/footer.css">
</head>
<body>
<?php
    require_once("../Views/header.php");
?>
    <header>
        <h1>About Tilburg</h1>
    </header>
    <main>
        <section class="interest-section">
            <div class="interest-item">
                <img src="../public/TilburgoGeo.jpg" alt="Geography Image">
                <h2>Geography</h2>
                <p>Tilburg is located in the southern part of the Netherlands, in the province of North Brabant. It is situated in the heart of the Brabantian region, known for its rich agricultural heritage and the presence of the River Dommel.</p>
            </div>
            <div class="interest-item">
                <img src="../public/poblaciontilburg.jpg" alt="Population Image">
                <h2>Population</h2>
                <p>As of 2023, Tilburg has a population of approximately 200,000 inhabitants. It is the fourth-largest city in the Netherlands, after Amsterdam, Rotterdam, and The Hague.</p>
            </div>
            <div class="interest-item">
                <img src="../public/HistoTilburg.jpg" alt="History Image">
                <h2>History</h2>
                <p>Tilburg has a rich history dating back to the 11th century. It was granted city status in 1227 and has since become a significant cultural and economic hub in the Netherlands.</p>
            </div>
            <div class="interest-item">
                <img src="../public/ecoTilburg.jpg" alt="Economy Image">
                <h2>Economy</h2>
                <p>Tilburg's economy is characterized by a mix of industries, including manufacturing, services, and agriculture. The city is home to several universities and research institutions, contributing to its status as an educational and research center.</p>
            </div>
        </section>
    </main>
<?php
    require_once("../views/footer.php");
?>
</body>
</html>