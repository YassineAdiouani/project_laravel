<x-master title="Accuiel">
    <h3>Accuiel</h3>
    @auth
        {{ auth()->user()->name }}
    @endauth
</x-master>