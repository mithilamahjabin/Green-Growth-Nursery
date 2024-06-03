@extends('frontend.master')

@section('content')

<!-- <h1 style="text-align: center;">Products under a {{$category->name}}</h1> -->
<div class="slider">


</div>

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul style="background-color: green" class="nav nav-tabs nav-product-tabs">

            <li><a style="background-color: green" data-toggle="tab" style="text-align: center;">Products under {{$category->name}}</a></li>
            <li style="background-color: green" class="pull-right collection-url"><a>All <i></i></a></li>
        </ul>
        <div class="tab-content">
        <div class="tab-pane active" id="trending">

            @foreach($category->products as $product)
            <div class="col-md-4 col-sm-2">

<div style="border-color: green" class="single-product">

    <div class="product-block">

        <img src="{{url('/uploads/products/'.$product->image)}}" alt="" class="thumbnail"style="width: 355px; height: 305px;">

        <div class="product-description text-center">

        <p style="background-color: green" class="title">{{$product->name}}</p>

        <p style="background-color: green" class="price">{{$product->price}} BDT</p>


        </div>

        <div class="product-hover">

            <ul>

                <li><a href="{{route('website.product-details',$product->id)}}"><i class="fa fa-arrows-h"></i></a></li>

            </ul>

        </div>

    </div>

</div>

</div>
@endforeach
</div>

</div>

</div>

</div>

</div>


</div>

@endsection
