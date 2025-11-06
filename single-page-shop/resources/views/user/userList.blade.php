@extends('masterBackend')

@section('title')
    User List
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>User List</h1>
    </div>

    <p>
        <a href="{{ route('user.addNewUser') }}"><input type="button" value="Add New User"></a>
    </p>
    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->user_type }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}"> Edit </a> |
                            <a href="{{ route('user.deleteUserInfo', $user->id) }} "> Delete </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
