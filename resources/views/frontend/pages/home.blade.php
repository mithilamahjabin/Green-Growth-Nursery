@extends('frontend.master')


@section('content')



<div class="slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{url('img/slider-1.jpg')}}" style="width: 1280px; height: 410px" alt="">
            <div class="carousel-caption">
              <br><br> <br><br> <br><br><br><br><br><br><br><br><br><br>
              {{-- <h3 style="text-align: start;">Los Angeles</h3>
              <p style="text-align: start;">LA is always so much fun!</p> --}}
            </div>
          </div>

          <div class="item">
          <img src="{{url('img/slider-2.jpg')}}" style="width: 1280px; height: 410px" alt="">
            <div class="carousel-caption">
            <br><br> <br><br> <br><br><br><br><br><br><br><br><br><br>
            {{-- <h3 style="text-align: start;">Los Angeles</h3>
              <p style="text-align: start;">LA is always so much fun!</p> --}}
            </div>
          </div>

          <div class="item">
          <img src="{{url('img/slider-3.jpg')}}" style="width: 1280px; height: 410px" alt="">
            <div class="carousel-caption">
            <br><br> <br><br> <br><br><br><br><br><br><br><br><br><br>
            {{-- <h3 style="text-align: start;">Los Angeles</h3>
              <p style="text-align: start;">LA is always so much fun!</p> --}}
            </div>
          </div>


          <div class="item">
          <img src="{{url('img/slider-4.jpg')}}" style="width: 1280px; height: 410px" alt="">
            <div class="carousel-caption">
            <br><br> <br><br> <br><br><br><br><br><br><br><br><br><br>
            {{-- <h3 style="text-align: start;">Los Angeles</h3>
              <p style="text-align: start;">LA is always so much fun!</p> --}}
            </div>
          </div>

        </div>




        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>









      </div>


</div>

<div class="featured-items">

<div class="container">

    <div class="row">

        <ul style="background-color: green" class="nav nav-tabs nav-product-tabs">

            <li><a style="background-color: green"  data-toggle="tab">Gallery </a></li>




            <li style="background-color:green "  class="pull-right collection-url"><a>All <i></i></a></li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="trending">
            @foreach($allProducts as $product)
                <div class="col-md-4 col-sm-2">

                    <div style="border-color: green" class="single-product">

                        <div class="product-block">

                            <img src="{{url('/uploads/products/'.$product->image)}}"  alt="" class="thumbnail" style="width: 355px; height: 305px;">

                            <div class="product-description text-center">

                            <p style="background-color:green "  class="title">{{ucfirst($product->name)}}</p>

                            <p style="background-color: green"  class="price">{{$product->price}} BDT</p>


                            </div>

                            <div class="product-hover">

                                <ul>

                               <!-- <li>
                                <form action="{{route('add.to.cart',$product->id)}}" method="post">
                                    @csrf
                                        <button type="submit"><i class="fa fa-cart-arrow-down"></i></button>

                                </form>
                                 </li> -->

                                    <li><a style="background-color:green "  href="{{route('website.product-details',$product->id)}}"><i class="fa fa-arrows-h"></i></a></li>

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
