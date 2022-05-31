<!doctype html>
<title>Drinks</title>
<link rel="stylesheet" href="/app.css">
<script src="/drinks.js" defer></script>

<body>
<h1>Bar overzicht</h1>
    <?php foreach ($drinks as $drink): ?>
        <div class="bestelling">
            <h5>Bestel id: <?= $drink->id ?></h5>
            <p>Naam: <?= $drink->drank ?></p>
            <p>Categorie: <?= $drink->categorie ?></p>
            <p>Besteld door: <?= $drink->besteld_door ?></p>
            <p>Status: <?= $drink->status?></p>
        </div>
    <?php endforeach; ?>
</body>