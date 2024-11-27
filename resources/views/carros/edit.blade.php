<form action="{{ url('carros/'.$carros->id) }}" method="POST">
    @csrf
    @method( 'PUT' )
    <input type="number" name="ano" placeholder="Ano" value="{{ $carros->ano }}" required>
    <input type="text" name="modelo" placeholder="Modelo" value="{{ $carros->modelo }}" required>
    <input type="text" name="marca" placeholder="Marca" value="{{ $carros->marca }}" required>
    
    <button type="submit">Edit Carro</button>
</form> 