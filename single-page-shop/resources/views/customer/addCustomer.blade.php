@extends('template')

@section('title')
    Add New Customer
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Add New Customer</h1>
    </div>

    <div class="container">
        <p>
            <a href="{{ route('customers.index') }}"><input type="button" value="Back"></a>
        </p>
        <div>
            <form class="form-horizontal" method="post" action="{{ route('customers.store') }}">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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
