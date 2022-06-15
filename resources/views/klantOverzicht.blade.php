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
<section class="bestellingen">
    <table class="bestelling_table">
        <tr class="bestelling_row">
            <th class="bestelling_cell bestelling_header">Klant naam</th>
            <th class="bestelling_cell bestelling_header">Volledige bestelling</th>
            <th class="bestelling_cell bestelling_header">Totaal prijs</th>
        </tr>

        <?php 
            foreach ($aantallenEnDrankjes as $key => $bestelling) {
                foreach ($bestelling as $number => $aparteBestelling) {
                    if ((count($bestelling) % 2) === 0) {
                        echo "is nul?";
                    }
                    echo $aparteBestelling;
                }
            }
        ?>
        
    </table>
</section>
</body>
