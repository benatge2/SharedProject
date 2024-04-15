<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntos de Interés en Tilburg</title>
    <link rel="stylesheet" href="../views/PuntosDeInteres.css">
    <link rel="stylesheet" href="../views/header.css">
    <link rel="stylesheet" href="../views/footer.css">
</head>
<body>
<?php
        require_once("../Views/header.php");
    ?>
    <header>
        <h1>Puntos de Interés en Tilburg</h1>
    </header>
    <main>
        <section class="interest-section">
            <div class="interest-item">
                <img src="../public/Tilburg_kerk.jpg" alt="Castillo de Tilburg">
                <h2>Castillo de Tilburg</h2>
                <p>Este castillo medieval es uno de los monumentos más emblemáticos de la ciudad.</p>
            </div>
            <div class="interest-item">
                <img src="../public/MuseoTilburg.jpg" alt="Museo de Tilburg">
                <h2>Museo de Tilburg</h2>
                <p>Este museo alberga una colección de arte moderno y contemporáneo, incluyendo obras de artistas como Picasso y Van Gogh.</p>
            </div>
            <div class="interest-item">
                <img src="../public/DierenparkDeOliemeulen.jpg" alt="Dierenpark de Oliemeulen">
                <h2>Dierenpark de Oliemeulen</h2>
                <p>El Dierenpark de Oliemeulen es un zoológico y parque temático que ofrece una experiencia única para los visitantes, con una amplia variedad de animales y atracciones.</p>
            </div>
        </section>
    </main>
<?php
        require_once("../Views/footer.php");
    ?>
</body>
</html>