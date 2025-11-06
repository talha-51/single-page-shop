@extends('masterBackend')

@section('title')
    Add New Product
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Add New Product</h1>
    </div>

    <div class="container">
        <div>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Product Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name"
                            name="product_name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Amount:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="product_name"
                            placeholder="Enter Amount [0-999, and max 2 digits after decimal point]" name="amount">
                    </div>
                    <label class="control-label col-sm-2"></label>
                    <div class="col-sm-10">
                        <div class="form-text text-danger">{{ $errors->first('amount') }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="imageUpload" name="image">
                    </div>
                    <label class="control-label col-sm-2"></label>
                    <div class="col-sm-10">
                        <div class="form-text text-danger">{{ $errors->first('image') }}</div>
                    </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Status:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                    value="active" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                    value="inactive">
                                <label class="form-check-label" for="gridRadios2">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <label class="control-label col-sm-2">Published Status:</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label="Default select example" name="published_status">
                            <option selected value="pending">Pending</option>
                            <option value="published">Published</option>
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
