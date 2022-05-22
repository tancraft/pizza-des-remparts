<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
      <div>{{session('success')}}</div>
    @endif
<form action="{{ route('register') }}" method="post" >
    @csrf

  <input type="text" name="name">
  <input type="email" name="email">

  <input type="password" name="password">
  <button type="submit">Register</button>
</form>
</body>
</html> 