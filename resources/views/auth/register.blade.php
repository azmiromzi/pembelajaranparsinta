<x-app-layout title="register">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">Create new account</div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
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
                            <label for="username" class="form-label">Username</label>
                            <input type="username" name="username" value="{{ old('username') }}"  id="username" class="form-control ">
                            @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                           </div>

                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-control ">
                            @error('name')
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

                            <button class="btn btn-primary">create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
