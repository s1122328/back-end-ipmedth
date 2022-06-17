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
    <h1>Bewerk gebruiker</h1>
    <p>Bril ID bewerken voor gebruiker: {{$user[0]['name']}}</p>
    <form action="/edit" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$user[0]['id']}}">
        <input type="text" name="bril_id" value="{{$user[0]['bril_id']}}">
        <button type="submit">Bewerk bril ID</button>
    </form>
</body>