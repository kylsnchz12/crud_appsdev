@extends('users.user')
    @section('main')
    <h1>All Users</h1>
    <p><a href="{{ route('users.create') }}">Add new user</a></p>
    @if ($users->count())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Name</th>
                </tr>
            </thead>
 
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->name }}</td>
                        <td><a href="{{ route('users.edit',$user->id) }}" class="btn btninfo">Edit</a>
                        <td>
                            <form action="{{ route('users.destroy',$user->id) }}"method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    {{ $users->links() }}
    @else
        There are no users
    @endif
@stop