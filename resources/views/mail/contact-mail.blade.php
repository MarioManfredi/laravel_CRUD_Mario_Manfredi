<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    
    <h1>Ciao, {{$username}}</h1>
    <h3>Ecco i tuoi dati</h3>
    <ul>
        <li>email: {{$email}}</li>
        <li>Messaggio: {{$userMessage}}</li>
    </ul>
</body>
</html>