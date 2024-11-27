<form action="{{ url('donos/'.$donos->id) }}" method="POST">
    @csrf
    @method( 'PUT' )

    <input type="text" name="nome" placeholder="Nome" value="{{ $donos->Nome }}" required>
    
    <button type="submit">Edit Nome</button>
</form> 