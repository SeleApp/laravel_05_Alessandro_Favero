<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatto ricevuto</title>
</head>
<body>
    <h1>Grazie per averci contattato</h1>
    <h2>Ti ricontatteremo al piu presto dal nostro team.</h2>

    <p><strong>Nome:</strong> {{ $user }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Riepilogo del tuo messaggio:</strong> {{ $message }}</p>
</body>
</html>
