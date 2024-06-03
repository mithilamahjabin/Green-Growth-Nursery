@extends('frontend.master')
@section('content')
<link rel="stylesheet" href="{{url('/frontend/invoice/invoice.css')}}">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="row" id="productReport">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Plant Nursery</strong>
                        <br>
                        <strong>Customer Name:</strong> {{auth('customer')?->user()?->name}}
                        <br>
                        <strong>Customer Email:</strong> {{auth('customer')?->user()?->email}}
                        <br>
                        <strong>Phone:</strong> {{auth('customer')?->user()?->phone}}

                    </address>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: {{ date('d-m-Y') }}</em>
                    </p>
                    <p>
                        <button style="background-color: green" onclick="printDiv('productReport')" class="btn btn-success">Print</button>

                    </p>
                </div>
            </div>
            {{-- @dd($order_items) --}}
            <div class="row">
                <div class="text-center">
                    <h1>Customer Invoice</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($order_items as $key=>$item )
                                     {{-- @dd($item->product->name) --}}
                                     <tr>
                                        <td class="col-md-9"><em>{{$item->product->name}}</em></h4></td>
                                        <td class="col-md-1" style="text-align: center"> {{$item->qty}} </td>
                                        <td class="col-md-1 text-center">{{$item->price}}TK</td>
                                        <td class="col-md-1 text-center">{{$item->subtotal}}TK</td>
                                        @php
                                            $total+=($item->price*$item->qty)
                                            @endphp
                                    </tr>

                        @endforeach




                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total:{{$total}}BDT</strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>

                            </strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button style="background-color: green" type="button" class="btn btn-success btn-lg btn-block">
                    Thank You
                </button></td>
            </div>
        </div>
    </div>
    <script>
        function printDiv(divId){
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

@endsection
