@extends('layouts.app')

@section('content')
    <div class="container py-5">
        @include('components.items-list')
        <div class="d-flex mt-5 justify-content-between" style="width: 100%;flex: 1">

            @include('components.nav-produto')

            <div class="products flex-1  col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-none">
                        <li class="breadcrumb-item font-weight-bold "><a href="#">Home</a></li>
                        <li class="breadcrumb-item font-weight-bold "><a href="#">Produtos</a></li>
                    </ol>
                </nav>
                <div class="body-product mt-3">
                    <section class="mt-3 d-flex flex-wrap">

                        <div class="d-flex justify-content-between">
                            <a href="{{route('detail')}}">
                                <div class="mr-2 card-product" style="">
                                    <img
                                        src="https://a-static.mlcdn.com.br/618x463/iphone-xr-64gb-preto-apple/apple10/312127/cad808bbfb68ba810ab38ca2820aa8af.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">
                                            iPhone XR Apple 64GB Preto 6,1” 12MP iOS
                                        </p>
                                        <h4>R$ 3.254,50</h4>
                                        <p>Lorem ipsum dolor sit amet, consecteturlibero eros.</p>
                                    </div>
                                </div>
                            </a>


                    </section>

                    <nav aria-label="Page navigation example" class="mt-5">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

@endsection