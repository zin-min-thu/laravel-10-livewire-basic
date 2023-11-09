<div>
    <p>
        Name: <input type="text" wire:model.debounce.1000ms="name">
    </p>

    <p>
        Message: <textarea id="" cols="30" rows="10" wire:model="message"></textarea>
    </p>

    <p>
        Marital Status: <br>
        Single <input type="radio" value="Single" wire:model="marital_status">
        Married <input type="radio" value="Married" wire:model="marital_status">
    </p>

    <p>
        Favourite Color: <br>
        Red <input type="checkbox" value="Red" wire:model="colors">
        Green <input type="checkbox" value="Green" wire:model="colors">
        Blue <input type="checkbox" value="Blue" wire:model="colors">
    </p>

    <p>
        Favourite Fruit: <br>
        <select wire:model="fruit">
            <option value="">Select Fruit</option>
            <option value="Apple">Apple</option>
            <option value="Mango">Mango</option>
            <option value="Banana">Banana</option>
        </select>
    </p>

    <hr>
    <p>Name: {{ $name }}</p>
    <p>
        Message: {{ $message }}
    </p>
    <p>
        Marital Status: {{ $marital_status }}
    </p>
    <p>
        Favourite Colors
        <ol>
            @foreach ($colors as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ol>
    </p>
    <p>
        Favourite Fruits: {{ $fruit }}
    </p>
</div>
