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
    <hr>
    <p>Hier is het huidige overzicht te zien van de gebruikers die gekoppeld zijn aan een bril. Door op de knop 'Bewerken' te drukken opent er een nieuw scherm waarin het ID van de bril van de gebruiker kan worden aangepast.</p>
    <table class="bestelling_table">
        <tr class="bestelling_row">
            <th class='bestelling_cell bestelling_header'>Klantnaam</th>
            <th class='bestelling_cell bestelling_header'>Toegewezen</th>
            <th class='bestelling_cell bestelling_header'>Bril ID</th>
            <th class='bestelling_cell bestelling_header'>Bewerken</th>
        </tr>
        @foreach ($users as $key=>$user)
            <tr class="bestelling_row">
                <td class='bestelling_cell'>{{$user['name']}}</td>
                <td class='bestelling_cell'>{{$user['toegewezen']}}</td>
                @if ($user['bril_id'] > 0) 
                    <td class='bestelling_cell'>{{$user['bril_id']}}</td>
                    @else 
                    <td class='bestelling_cell'></td>
                @endif
                <td class="bestelling_cell"><a href={{"edit/".$user['id']}}>Bewerken</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>