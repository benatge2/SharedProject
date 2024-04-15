<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points of Interest in Tilburg</title>
    <link rel="stylesheet" href="../views/PuntosDeInteres.css">
    <link rel="stylesheet" href="../views/header.css">
    <link rel="stylesheet" href="../views/footer.css">
</head>
<body>
<?php
        require_once("../Views/header.php");
    ?>
    <header>
        <h1>Points of Interest in Tilburg</h1>
    </header>
    <main>
        <section class="interest-section">
            <div class="interest-item">
                <img src="../public/Tilburg_kerk.jpg" alt="Tilburg Castle">
                <h2>Tilburg Castle</h2>
                <p>This medieval castle is one of the most emblematic monuments of the city, offering a glimpse into the rich history of Tilburg.</p>
            </div>
            <div class="interest-item">
                <img src="../public/MuseoTilburg.jpg" alt="Tilburg Museum">
                <h2>Tilburg Museum</h2>
                <p>This museum houses a collection of modern and contemporary art, including works by artists such as Picasso and Van Gogh. It's a must-visit for art enthusiasts and history buffs alike.</p>
            </div>
            <div class="interest-item">
                <img src="../public/DierenparkDeOliemeulen.jpg" alt="Oliemeulen Zoo and Theme Park">
                <h2>Oliemeulen Zoo and Theme Park</h2>
                <p>The Oliemeulen Zoo and Theme Park offers a unique experience for visitors, with a wide variety of animals and attractions. It's known for its collection of exotic animals, including a two-headed snake, an owl, a gecko, and a miniature horse. The park also features a nursery with various small animals and demonstrations with snakes and tarantulas, making it a fascinating destination for families and wildlife enthusiasts.</p>
            </div>
        </section>
    </main>
<?php
        require_once("../Views/footer.php");
    ?>
</body>
</html>