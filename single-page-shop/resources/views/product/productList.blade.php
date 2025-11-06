@extends('masterBackend')

@section('title')
    Product List
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Product List</h1>
    </div>

    <p>
        <a href="{{ route('product.addProduct') }}"><input type="button" value="Add New Product"></a>
    </p>
    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Amount</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Published Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->amount }}</td>
                        <td><img src="{{ $product->image }}" style="width:120px;height:50px;"></td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->published_status }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}"> Edit </a> |
                            <a href="{{ route('product.delete', $product->id) }}"> Delete </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
