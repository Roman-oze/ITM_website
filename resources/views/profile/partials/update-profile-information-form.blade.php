{{--



    <form method="post" action="{{ route('profile.update') }}" class="space-y-4 mt-6">
        @csrf
        @method('patch')

        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
        </div>
        @endif

        <div class="form-group">
            <label for="name" class="text-white">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="name"class="text-white">Email</label>
            <input type="email" class="form-control" name="email"    value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group">
            <label for="" class="text-white">Password</label>
            <input type="password" class="form-control" name="password" value="{{$users->password}}" required>
        </div>
        <br>
        <br>

        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
</section> --}}
