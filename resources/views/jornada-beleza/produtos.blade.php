@extends('layouts.app')

@section('content')
    <style type="text/css">
        .ajax-load {
            /*background: #e1e1e1;*/
            padding: 10px 0px;
            width: 100%;
        }
    </style>
    <div class="container py-5">
        @include('components.items-list')
        <div class="d-flex mt-5 justify-content-between" style="width: 100%;flex: 1">

            @include('components.nav-produto')

            <div class="products flex-1  col">
                <nav aria-label="breadcrumb">
                    {{ Breadcrumbs::render('produtos-salao') }}
                </nav>
                <div class="body-product mt-3">
                    <section class="mt-3 d-flex flex-wrap products-list">
                        @include('components.lista-produtos')
                    </section>
                    <div class="ajax-load text-center" style="display:none">
                        <img src="{{asset('images/loading.gif')}}" width="100px !important">
                    </div>

                    {{--                    {{$produtos->render()}}--}}
                    {{--                    <nav aria-label="Page navigation example" class="mt-5">--}}
                    {{--                        <ul class="pagination">--}}
                    {{--                            <li class="page-item">--}}
                    {{--                                <a class="page-link" href="#" aria-label="Previous">--}}
                    {{--                                    <span aria-hidden="true">&laquo;</span>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                    {{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                    {{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                    {{--                            <li class="page-item">--}}
                    {{--                                <a class="page-link" href="#" aria-label="Next">--}}
                    {{--                                    <span aria-hidden="true">&raquo;</span>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </nav>--}}
                </div>

            </div>
        </div>
    </div>

@endsection
