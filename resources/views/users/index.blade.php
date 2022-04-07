<x-app-layout title="Home">

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center">
                    <h1>
                        All Users
                    </h1>
                </div>
                <div class="card-body">
                 <ol class="list-group">
                    @foreach ($users as $user)
                     <li class="list-group-item mt-2 rounded d-flex justify-content-between align-items-center">
                        {{ $user->name }}
                        <a href="{{ route('users.show', $user) }}" class="btn btn-primary">show detail</a>
                     </li>
                    @endforeach
                 </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
