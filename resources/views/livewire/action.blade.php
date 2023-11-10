<div>
    <button type="button" wire:click="addTwoNumber(1,3)">Sum</button>
    <br>
    <textarea wire:keydown.enter="displayMessage($event.target.value)" cols="30" rows="5"></textarea>

    <p>
        <form wire:submit.prevent="sum">
            Number One <input type="text" wire:model="num1">
            Number Two <input type="text" wire:model="num2">
            <input type="submit" value="Submit">
        </form>
    </p>

    <hr>

    <p>
        Sum: {{ $sum }}
    </p>

    <p>
        Message: {{ $message }}
    </p>
</div>
