<h1>
    {{ auth()->user()->name }}
</h1>

<a href="#" onclick="document.getElementById('logout-form').submit()">
    <form action="{{ route('/') }}" method="post" id="logout-form">@csrf</form>
    deconnexion
</a>