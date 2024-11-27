<form action="{{ url('carros') }}" method="POST">
    @csrf
    <input type="number" name="ano" placeholder="Ano" required>
    <input type="text" name="modelo" placeholder="Modelo" required>
    <input type="text" name="marca" placeholder="Marca" required>
    
    <button type="submit">Create Carro</button>
</form> 