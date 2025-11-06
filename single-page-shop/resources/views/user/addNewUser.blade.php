@extends('masterBackend')

@section('title')
    Add New User
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Add New User</h1>
    </div>

    <div class="container">
        <div>
            <form class="form-horizontal" method="post">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" placeholder="Enter username"
                            name="username">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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
                        <input type="text" class="form-control" id="address" placeholder="Enter address"
                            name="address">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Phone Number:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone_number" placeholder="Enter phone number"
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
                        <button type="submit" class="btn btn-default">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
