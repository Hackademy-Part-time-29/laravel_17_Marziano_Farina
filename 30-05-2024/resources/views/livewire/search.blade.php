<div>
    <br>
    <br>
    <input type="text" placeholder="Cerca per utenti" wire:model.live="q">
    <h2>Utenti filtrati:</h2>
    @foreach ($users as $user)
        <p>{{$user->name}}</p>
    @endforeach
</div>