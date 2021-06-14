@extends("app")

@section("content")
    <section>
        <h2>Add Task</h2>
        <form method="post">
            @csrf
            <select value="{{ old("task_list_id")}}" name="task_list_id" id="task_list_id">
                @foreach (App\TaskList::all() as $list)
                    <option value="{{ $list->id }}">{{ $list->title }}</option>
                @endforeach
            </select>
            <label for="task_list_id">Select Board</label>

            <input name="title" id="title" type="text" placeholder="title here" value="{{ old("title") }}">
            <label for="title">Task Title</label>

            @error('title')
                <p>{{ $message }} </p>
            @enderror

            <textarea name="description" id="description" type="text" placeholder="Task Description" value="{{ old("description") }}"></textarea>
            <label for="description">Task Description</label>

            @error('description')
                <p>{{ $message }} </p>
            @enderror
            
            <input value="{{ old("order") }}" name="order" type="number" id="order">
            <label for="order">Order</label>
            @error('order')
                <p>{{ $message }} </p>
            @enderror
            
            <input value="Create Task" type="submit">

        </form>
    </section>
@endsection