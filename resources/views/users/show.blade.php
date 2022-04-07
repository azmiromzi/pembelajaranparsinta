<x-app-layout title="">

<h1>{{ $user->name }}</h1>
<a href="{{ route('users.index') }}">back to all users</a>
</x-app-layout>
