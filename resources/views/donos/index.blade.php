@foreach($donos as $entity)
    <div>
        <h3>{{ $entity->nome }}</h3>
       
        <a href="{{ url('donos/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('donos/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

@endforeach