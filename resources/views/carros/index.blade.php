@foreach($carros as $entity)
    <div>
        <h3>{{ $entity->ano }}</h3>
        <p>{{ $entity->modelo }}</p>
        <p>{{ $entity->marca }}</p>	
        <a href="{{ url('carros/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('carros/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

@endforeach