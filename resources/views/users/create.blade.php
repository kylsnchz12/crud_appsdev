@extends('users.user')
@section('main')
<h1>Create User</h1>
<form action="{{ route('users.store') }}" method="post">
    {{ csrf_field() }}
    <ul>
        <li>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </li>
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username">
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </li>
        <li>
            <label for="password_confirm">Confirm Password:</label>
            <input type="password" name="password_confirm">
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="text" name="email">
        </li>
        <li>
            <label for="phone">Phone:</label>
            <input type="text" name="phone">
        </li>
        <li>
            <input type="submit" value="Submit" class="btn btn-info">
            <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
        </li>
    </ul>
</form>

@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li class="error">'.':message'.'</li>')) !!}
    </ul>
@endif

@stop
