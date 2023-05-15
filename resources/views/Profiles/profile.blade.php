<x-master title="profile">
    <div class="container m-5">
        <div class="card w-75 m-auto">
            <div class="card text-start text-center">
                <img style="object-fit:cover;width:200px"  src="{{ asset('storage/'.$profile->image) }}" alt="Avatar" class="border border-5 border-primary rounded-circle m-auto">
                <div class="card-body">
                    <h4 class="card-title">{{ $profile->name }}</h4>
                    <small class="card-text"> {{ $profile->email }} </small>
                </div>
                <div class="card-footer">
                    <small class="card-text"> {{ $profile->created_at->format('d-m-y') }} </small>
                    <hr>
                    <p class="card-text">{{ $profile->bio }}</p>
                </div>
            </div>
        </div>
    </div>
</x-master>

