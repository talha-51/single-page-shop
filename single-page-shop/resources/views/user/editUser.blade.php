@extends('masterBackend')

@section('title')
    Edit User
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Edit User</h1>
    </div>

    <div>
        <div class="container">
            <form class="form-horizontal" method="post">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" value="{{ $user->username }}"
                            name="username">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}"
                            name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Address:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" value="{{ $user->address }}"
                            name="address">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Phone Number:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone_number" value="{{ $user->phone_number }}"
                            name="phone_number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">User Type:</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="user_type" name="user_type">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
