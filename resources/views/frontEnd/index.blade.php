@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontEnd.layouts.category_menu')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--tous les articles-produits-->
                        <h2 class="title text-center">Fournitures</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                  <!--noms  des articles -->
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">Voir Article</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
