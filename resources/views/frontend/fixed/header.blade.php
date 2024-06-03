
<div style="background-color: rgb(55, 141, 52);padding:30px 0px!important;min-height:100px" class="header">

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-sm-2">

                <div class="logo" style="padding: 0!important">

                    <a style="color: Black;">
                        <a></a>

                        <img src="{{ url('img/nlogo.png') }}" style="width: 80px; height: 80px">

                        <a style="text-align: center;color: white;font-weight: bolder;"> Green Growth Nursery </a>
                    </a>


                </div>

            </div>

            <div class="right col-md-6" style="padding: 0!important">

                <div class="search-form" style="padding: 0!important">

                    <form action="{{ route('search') }}" class="navbar-form" role="search">

                        <div class="form-group">

                            <input style="border-color: white; " name="search" type="text" class="form-control"
                                placeholder="Search...">

                        </div>

                        <button style="background-color: white;" type="submit" class="btn"><i
                                class="fa fa-search"></i></button>

                    </form>


                </div>

            </div>
            <div class="col-md-2"><a style="color:white" href="{{ route('cart.view') }}"><i class="fa fa-shopping-cart">
                        CART</i></a>
                <br>
                <a style="text-align: center;color:white  ">
                    {{ session()->has('cart') ? count(session()->get('cart')) : 0 }} <br> Items </br> </a>
            </div>
            <!-- <div class="col-md-2 col-sm-3">

                    <div class="cart">

                        <div style="background-color: green;" class="cart-icon">

                            <a  href="{{ route('cart.view') }}"><i class="fa fa-shopping-cart"></i></a>

                        </div>

                        <div class="cart-text">

                             CART

                            <br>

                            {{ session()->has('cart') ? count(session()->get('cart')) : 0 }} items

                             </br>


                        </div>

                    </div>

                </div> -->

        </div>

    </div>

</div>

<div class="navigation">


    <nav style="background-color: green;" class="navbar navbar-theme">



        <div class="container">

            <div class="shop-category nav navbar-nav navbar-left">

                <div class="btn-group">

                    <button type="button" class="btn btn-shop-category dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

                        Category <span class="caret"></span>

                    </button>

                    <ul style="background-color: green;" class="dropdown-menu">

                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('category.products', $category->id) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach

                    </ul>


                </div>

            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar">

                <ul class="nav navbar-nav navbar-right">

                    <li> <a style="background-color: green;" href="{{ route('home') }}">Home</a></li>


                    <li><a style="background-color: green;" href="{{ route('website.all-products') }}">Products</a></li>

                    <li><a style="background-color: green;" href="{{ route('about') }}">About</a></li>

                    <li><a style="background-color: green;" href="{{ route('contact') }}">Contact</a></li>
                    @if (auth('customer')->guest())
                        <li><a style="background-color: green;" href="{{ route('customer.registration') }}"><i
                                    class="fa fa-user"></i> Register</a></li>
                        <li><a style="background-color: green;" href="{{ route('customer.login') }}"><i
                                    class="fa fa-key"></i> Login</a></li>
                    @endif

                    <!-- <li> <a class="cart-text"> <br> items  </br></a> </li> -->
                    <!-- <nav class="navbar navbar-theme">

          <div class="container"> -->

                    <div class="shop-category nav navbar-nav navbar-right">
                        <div class="btn">
                            @if (auth('customer')->user())
                                <button style="color: green" class="shop-category-btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    {{ auth('customer')->user()->name }}
                                </button>
                                <ul style="background-color: green" class="dropdown-menu">
                                    <li>
                                        <a style="text-align:center;"
                                            href="{{ route('customer.profile') }}">Profile</a>
                                        <a style="text-align:center;"
                                            href="{{ route('my.order', auth('customer')->user()->id) }}">My Order</a>
                                        <a style="text-align:center;" href="{{ route('customer.logout') }}">Logout</a>

                                    </li>

                                </ul>
                            @endif


                        </div>

                    </div>

                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->



    </nav>

</div>
