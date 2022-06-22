<!doctype html>
<title>Drinks</title>
<link rel="stylesheet" href="/app.css">
<script src="/drinks.js" defer></script>

<body>
<h1>Bar overzicht</h1>
<nav class="navigation">
    <a class="nav_link" href="koppel">Bril koppelen</a>
    <a class="nav_link current" href="/drinks">Overzicht bestellingen</a>
    <a class="nav_link" href="/klanten_overzicht">Overzicht klanten</a>
</nav>
<hr>
<section class="bestellingen">
    <table class="bestelling_table">
        <tr class="bestelling_row">
            <th class="bestelling_cell bestelling_header">Bestel ID</th>
            <th class="bestelling_cell bestelling_header">Klantnaam</th>
            <th class="bestelling_cell bestelling_header">Bestelling</th>
            <th class="bestelling_cell bestelling_header">Toegevoegd op</th>
            <th class="bestelling_cell bestelling_header">Status</th>
        </tr>
        <?php foreach ($drinks as $drink): ?>
        <tr class="bestelling_row">
            <td class="bestelling_cell"><?=$drink->bestel_id ?></td>
            <td class="bestelling_cell"><?=$drink->besteld_door ?></td>
            <td class="bestelling_cell"><?=$drink->aantal?>x <?=$drink->drank ?></td>
            <td class="bestelling_cell"><?=$drink->created_at?></td>
            <?php if ($drink->status != 'Onderweg'): ?>
                <td class="bestelling_cell"><a class="status_bewerken" href={{"bewerkStatus/".$drink['bestel_id']}}><?=$drink->status?></a></td>
            <?php else: ?>
                <td class="bestelling_cell"><?=$drink->status?></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</section>
</body>
