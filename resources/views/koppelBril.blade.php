<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koppel bril</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/drinks.js" defer></script>
</head>
<body>
    <h1>Bar overzicht</h1>
    <nav class="navigation">
        <a class="nav_link current" href="koppel">Bril koppelen</a>
        <a class="nav_link" href="/drinks">Overzicht bestellingen</a>
        <a class="nav_link" href="/klanten_overzicht">Overzicht klanten</a>
    </nav>
    <section>
        <form action="AssignId" method="post">
            <label for="klantnaam">Klant naam: </label>
            <input type="text" id="klantnaam">
            <label for="brilId">Bril ID: </label>
            <input type="text" id="brilId">
            <button>Koppel</button>
        </form>
    </section>
</body>
</html>