@extends("app")

@section("content")
    <section>
        <h2>Boards</h2>
        <ul>
            @foreach (App\Board::all() as $board)
                <li>
                    <a href="/boards/{{ $board->id }}">{{ $board->title }}</a>
                    <p>Length: {{ $board->numberOftasks() }}</p>
                </li>
            @endforeach
        </ul>
    </section>
@endsection