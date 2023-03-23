@extends('users.user')

@section('main')

<h1>Edit User</h1>
<form action="{{ route('users.update',$user->id) }}" method="post">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" value="{{ $user->username }}">
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $user->email }}">
        </li>
        <li>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="{{ $user->phone }}">
        </li>
        <li>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </li>
        <li>
            <input type="submit" value="Update" class="btn btn-info">
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
        </li>
    </ul>
</form>

@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
    </ul>
@endif

@stop