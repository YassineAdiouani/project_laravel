<x-master title="Ajoute">
    <h5>Ajoute profile</h5>
    @if ($errors->any())
        <x-i3lan type="danger">
            <h6>Errors :</h6>
            @foreach ($errors->all() as $err)
                <li> {{$err}} </li>
            @endforeach
        </x-i3lan>
    @endif
    <form action="{{route('profiles.store')}}" method="post" class="my-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">name :</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Entre full name...">
            @error('name')
                <span class="text text-danger"> {{$message}} </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email :</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Entre full email...">
            @error('email')
                <span class="text text-danger"> {{$message}} </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">password :</label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Entre your password...">
            @error('password')
                <span class="text text-danger"> {{$message}} </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirme password :</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme password...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">description :</label>
            <textarea class="form-control" name="bio" cols="15" rows="5" placeholder="write and bio...">{{old('bio')}}</textarea>
            @error('bio')
                <span class="text text-danger"> {{$message}} </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">image :</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Ajoute</button>
    </form>
</x-master>