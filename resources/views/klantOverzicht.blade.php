<!doctype html>
<title>Drinks</title>
<link rel="stylesheet" href="/app.css">
<script src="/drinks.js" defer></script>

<body>
<h1>Bar overzicht</h1>
<nav class="navigation">
    <a class="nav_link" href="koppel">Bril koppelen</a>
    <a class="nav_link" href="/drinks">Overzicht bestellingen</a>
    <a class="nav_link current" href="/klanten_overzicht">Overzicht klanten</a>
</nav>
<hr>
<section class="bestellingen">
    <p>In het onderstaande overzicht staat aangegeven wat de volledige bestelling is per klant.</p>
    <table class="bestelling_table">
        <tr class="bestelling_row">
            <th class="bestelling_cell bestelling_header">Klant naam</th>
            <th class="bestelling_cell bestelling_header">Volledige bestelling</th>
            <th class="bestelling_cell bestelling_header">Totaal prijs</th>
        </tr>
            <?php foreach ($aantallenEnDrankjes as $key => $bestelling): ?>
                <tr class="bestelling_row">
                    <td class="bestelling_cell"><?= $users[$key] ?></td>
                    <?php 
                        echo "<td class='bestelling_cell'>";
                        foreach ($bestelling as $nummer => $losseBestelling) {
                            if (count($bestelling) > 1) {
                                if ($nummer == 0) {
                                    echo $losseBestelling;
                                } else {
                                    echo ", ";
                                    echo $losseBestelling;
                                }
                            } else {
                                echo $losseBestelling;
                            }
                        }
                        echo "</td>";
                    ?>
                    <?php
                        echo "<td class='bestelling_cell'>";
                        foreach ($totaalPrijs[$key] as $key => $prijs) {
                            $laatstePrijs = $prijs;
                        }
                        echo "€ ";
                        echo $laatstePrijs;
                        echo "</td>";
                    ?>
                </tr>
            <?php endforeach; ?>
    </table>
</section>
</body>