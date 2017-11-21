<form method="POST" action="{{ route('comprobar') }}">
    {{ csrf_field() }}
    <label for="nombre">Usuario:</label>
    <br>
    <br>
    <input id="nombre" name="nombre" placeholder="Introduce tu usuario" type="text"/>
    <br>
    <br>
    <input type="submit" value="Enviar"/>
    <br>
    <br>
    <a href="{{ url('/') }}">Home</a>
</form>