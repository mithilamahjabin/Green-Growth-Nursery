@extends('frontend.master')
@section('content')
    <div class="breadcumbs">

        <div class="short-description">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <div class="product-thumbnail">

                            <div class="col-md-2 col-sm-2 col-xs-2">

                                <ul class="thumb-image">

                                    <li class="active"><a href="images/single-product-1.jpg"><img style="border-color: green"
                                                src="{{ url('/uploads/products/' . $singleShow->image) }}" alt=""></a>
                                    </li>

                                    <li><a href="images/single-product-2.jpg"><img style="border-color: green"
                                                src="{{ url('/uploads/products/' . $singleShow->image) }}" alt=""></a>
                                    </li>

                                    <li><a href="images/single-product-3.jpg"><img style="border-color: green"
                                                src="{{ url('/uploads/products/' . $singleShow->image) }}" alt=""></a>
                                    </li>

                                    <li><a href="images/single-product-4.jpg"><img style="border-color: green"
                                                src="{{ url('/uploads/products/' . $singleShow->image) }}" alt=""></a>
                                    </li>

                                    <li><a href="images/single-product-5.jpg"><img style="border-color: green"
                                                src="{{ url('/uploads/products/' . $singleShow->image) }}" alt=""></a>
                                    </li>

                                </ul>

                            </div>

                            <div class="col-md-10 col-sm-10 col-xs-10">

                                <div class="thumb-main-image"><a href=""><img
                                            src="{{ url('/uploads/products/' . $singleShow->image) }}" alt=""></a>
                                </div>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div class="col-md-6">

                        <h1 class="product-title">{{ $singleShow->name }}</h1>


                        <br> </br>

                        <div class="product-info">

                            <p><span class="strong-text">Categories:</span> {{ $singleShow->category_data->name }}</p>

                        </div>

                        <p>
                            <span class="product-avilability"><span class="strong-text">Availability:</span> In Stock (
                                {{ $singleShow->quantity }} )</span>
                        </p>

                        <p class="short-info"> {{ $singleShow->description }} </p>

                        <div class="price">

                            <span>{{ $singleShow->price }} BTD</span>

                        </div>

                        <form action="{{ route('add.to.cart', $singleShow->id) }}" method="post" class="purchase-form">
                            @csrf
                            <div class="qt-area">



                                <input type="number" name="quantity" class="qt" value="1" min="1">



                            </div>
                            @if ($singleShow->quantity > 0)
                                <!-- <a class="btn btn-theme" href="{{ route('add.to.cart', $singleShow->id) }}" role="button">Add to cart</a> -->
                                <button style="background-color: green" type="submit" class="btn btn-theme">Add to
                                    cart</button>
                            @endif
                        </form>



                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="single-product-tabs">

                    <ul style="background-color: green" class="nav nav-tabs nav-single-product-tabs">

                        <li class="active"><a style="background-color:  green" href="#description"
                                data-toggle="tab">Description</a></li>

                        <!-- <li><a href="#reviews" data-toggle="tab">Reviews</a></li> -->

                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane active" id="description">

                            <div class="product-desc">

                                <h2>Product Description</h2>

                                <p> {{ $singleShow->description }}</p>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>
    @endsection
