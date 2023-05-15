<div class="col-md-3 my-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> {{$profile->id}} </h4>
            <h6 class="card-subtitle text-muted"> {{$profile->name}} </h6>
        </div>
        <img src="{{ asset('storage/'.$profile->image) }}" alt="none">
        <a href="{{route('profiles.show',$profile->id)}}" class="btn btn-primary m-2">link</a>
        <div class="d-flex align-items-center justify-content-center">
            <form action="{{ route('profiles.destroy',$profile->id) }}" method="POST" class="card-footer">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Supprimer</button>
            </form>
            <form action="{{ route('profiles.edit',$profile->id) }}" method="get">
                @csrf
                <button class="btn btn-primary">Modifie</button>
            </form>
        </div>
    </div>
</div>