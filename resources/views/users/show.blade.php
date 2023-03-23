@extends('users.user');

@section('main')

<h1>Show User Details</h1>
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" value="{{ $user->username }}" readonly="readonly">
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $user->email }}" readonly="readonly">
        </li>
        <li>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="{{ $user->phone }}" readonly="readonly">
        </li>
        <li>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" readonly="readonly">
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="btn btn-info">Back</a>
        </li>
    </ul>
@stop