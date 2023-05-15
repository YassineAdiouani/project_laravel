{{-- @extends('Layouts.master')
@section('title')profile @endsection

@section('body')
    <h1>profile</h1>
@endsection --}}


<x-master title="profile">
    <h5>this is cart section</h5>
    <div class="row">
        @if ($profiles->isEmpty())
            <span class="text-danger text-center my-5 border border-danger fs-4">Non profile maintenent <a class="text-danger" href="{{ Route('profiles.create') }}">Ajoute</a></span>
        @endif
        @foreach ($profiles as $one)
            <x-profilComponent :profile="$one" />
        @endforeach
    </div>
</x-master> 

