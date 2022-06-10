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

        <?php foreach ($aantallenEnDrankjes as $key=>$bestelling): ?>
        <tr class="bestelling_row">
            <td class="bestelling_cell"><?php echo $key ?></td>
            <td class="bestelling_cell">
                <?php foreach ($bestelling as $nummer=>$aparteBestelling): ?>
                    <?= $aparteBestelling ?>
                    <?php foreach ($$aparteBestelling as $anderNummer => $losseBestelling): ?>
                        <?= $losseBestelling ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </td>
        </tr>
        <?php endforeach ?>;

        <!-- <?php foreach ($aantallenEnDrankjes as $key=>$bestelling): ?>
        <tr class="bestelling_row">
            <td class="bestelling_cell"><?php echo $key ?></td>
            <td class="bestelling_cell">
            <?php foreach ($bestelling as $nummer=>$aparteBestelling): ?>
                <?= $bestelling[$nummer];  ?>
            <?php endforeach; ?>
            </td>
            <td class="bestelling_cell"></td>
        </tr>
        <?php endforeach; ?> -->


            <!-- <?php foreach ($aantallenEnDrankjes as $key =>$aantal) {
                echo "<tr class='bestelling_cell'>";
                foreach ($aantal as $nummer => $apartAantal) {
                    echo "<td>";
                    echo $apartAantal;
                    echo "</td>";
                }
                echo "</tr>";
            }; 
            ?> -->
        </tr>
        
    </table>
</section>
</body>
