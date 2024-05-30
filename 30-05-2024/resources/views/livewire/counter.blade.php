
<div>
    <p>Sono all'interno della vista</p>
    <div>
        <h2>{{$count}}</h2>
        <button wire:click="increment">+</button>
        <button wire:click="decrement">-</button>
        <button wire:click="azzera">Azzera</button>
        <input type="number" wire:model="count">
        <input type="number" wire:model.live="count">        
        <input type="number" wire:model.blur="count">
        <input type="number" wire:model.live.debounce.2000ms="count">
        <input type="number" wire:model.live.throttle.2000ms="count">
        <input type="number" wire:model.change="count">

        <div x-data="{ number: '0'}">
            <input type="number" x-model="number">
            <button wire:click="setcounter(number)">setta</button>
        </div>
    </div>
</div>

