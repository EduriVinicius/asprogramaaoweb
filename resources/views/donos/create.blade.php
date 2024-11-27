<form action="{{ url('donos') }}" method="POST">
    @csrf
   
    <input type="text" name="nome" placeholder="Nome" required>
   
    
    <button type="submit">Create Dono</button>
</form> 