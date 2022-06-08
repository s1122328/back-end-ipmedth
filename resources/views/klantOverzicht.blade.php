<!doctype html>
<title>Drinks</title>
<link rel="stylesheet" href="/app.css">
<script src="/drinks.js" defer></script>

<body>
<h1>Bar overzicht</h1>
<nav class="navigation">
    <a class="nav_link" href="/drinks">Overzicht bestellingen</a>
    <a class="nav_link current" href="/klanten_overzicht">Overzicht klanten</a>
</nav>
<section class="bestellingen">
    <table class="bestelling_table">
        <tr class="bestelling_row">
            <th class="bestelling_cell bestelling_header">Klant naam</th>
            <th class="bestelling_cell bestelling_header">Volledige bestelling</th>
            <th class="bestelling_cell bestelling_header">Totaal prijs</th>
        </tr>

        <?php foreach ($aantallen as $aantal): ?>
        <?php endforeach; ?>
        <?php foreach ($bestellingen as $key=>$bestelling): ?>
        <tr class="bestelling_row">
            <td class="bestelling_cell"><?php echo $key ?></td>
            <td class="bestelling_cell">
            <?php foreach ($bestelling as $nummer=>$aparteBestelling): ?>
                <?= $nummer; echo " x "; echo $bestelling[$nummer];  ?>
            <?php endforeach; ?>
            </td>
            <td class="bestelling_cell"></td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>
</body>
