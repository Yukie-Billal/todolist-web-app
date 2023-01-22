<ul>
    @foreach ($students as $s)
        <li>{{ $s->name }}</li>
    @endforeach
</ul>
