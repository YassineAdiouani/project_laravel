<x-master title="login">
    <h5>Authentification</h5>
    <form action="{{route('login')}}" method="post" class="my-5">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">email</label>
            <input type="email" name="email" class="form-control" placeholder="entry email...">
            @error('login')
                <span class="text text-danger"> {{$message}} </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">password</label>
            <input type="password"class="form-control" name="password" placeholder="entry password...">
        </div>
        <button class="btn btn-primary">Connect</button>
    </form>
</x-master>