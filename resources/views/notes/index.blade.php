<h1>Task List</h1>
<ul>
    @foreach ($notes as $note)
        <li>{{ $note->name }}</li>
    @endforeach
</ul>
