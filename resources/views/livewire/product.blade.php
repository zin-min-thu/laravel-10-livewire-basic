<div>
    <p>
        Title: <input type="text" wire:model="title">
    </p>
    <p>
        Name: <input type="text" wire:model="name">
    </p>
    <hr>

    <h4>Title: {{ $title }}</h4>
    <h4>Name: {{ $name }}</h4>

    <h1>Lifecycle hook methods</h1>
    <ul>
        @foreach ($infos as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
