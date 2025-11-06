@extends('masterFrontend')

@section('content')
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <section class="page-section portfolio" id="products">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Products</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Product Modal-->
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                            data-bs-target="#productModal{{ $product->id }}">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ $product->image }}" alt="..."
                                style="width:500px;height:300px;" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio Modal 1-->
    @foreach ($products as $product)
        <div class="portfolio-modal modal fade" id="productModal{{ $product->id }}" tabindex="-1"
            aria-labelledby="productModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                        {{ $product->product_name }}
                                    </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ $product->image }}" alt="..."
                                        style="width:500px;height:300px;" />
                                    <!-- Portfolio Modal - Text-->

                                    <form action="{{ route('order.store') }}" method="post">
                                        @csrf
                                        <p class="mb-4">
                                        <table class="table">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Published Status</th>
                                            </tr>
                                            <tr>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->amount }}</td>
                                                <td>{{ $product->status }}</td>
                                                <td>{{ $product->published_status }}</td>
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="product_name"
                                                    value="{{ $product->product_name }}">
                                            </tr>
                                        </table>
                                        </p>
                                        {{-- <button class="btn btn-primary" data-bs-dismiss="modal">
                                            <i class="fas fa-xmark fa-fw"></i>
                                            Close Window
                                        </button> --}}
                                        <button class="btn btn-primary" type="submit">Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
