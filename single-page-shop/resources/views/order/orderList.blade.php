@extends('masterBackend')

@section('title')
    Order List
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Order List</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Added By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->product_id }}</td>
                            <td>{{ $order->product_name }}</td>
                            <td>{{ $order->added_by }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#editModal{{ $order->id }}">Edit</button>
                                <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="d-flex justify-content-center mt-3">
            {{ $orders->links('pagination::bootstrap-4') }}
        </div> --}}
    </div>

    <!-- Edit Order Modal -->
    @foreach ($orders as $order)
        <form class="form-horizontal" action="{{ route('order.update', $order->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="modal fade" id="editModal{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <div class="form-group">
                                <label class="control-label col-sm-6" for="product_id">Product ID:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="product_id"
                                        value="{{ $order->product_id }}" name="product_id">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-6" for="email">Product Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="product_name"
                                        value="{{ $order->product_name }}" name="product_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-6" for="email">Added by:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="added_by"
                                        value="{{ $order->added_by }}" name="added_by">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
