<x-app-layout title="register">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                           <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control ">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                           </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control ">
                            @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                            </div>

                            <button class="btn btn-primary">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
