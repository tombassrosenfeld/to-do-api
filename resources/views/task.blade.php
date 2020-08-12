@extends("app")

@section("content")
    <section>
        <h2>{{ $task->title }}</h2>
        <p>{{ $task->description }}</p>
    </section>
@endsection