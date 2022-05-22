<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($errors->all() as $item )
        <div>{{ $item }}</div>
    @endforeach
    <form action="{{ route('authenticate') }}" method="post">
    @csrf
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <input type="submit" value="envoyer">
</form>
</body>
</html>