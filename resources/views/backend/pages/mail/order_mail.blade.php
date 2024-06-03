<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        body {
            background-color: #ffe8d2;
            font-family: 'Montserrat', sans-serif
        }

        .card {
            border: none
        }

        .logo {
            background-color: #eeeeeea8
        }

        .totals tr td {
            font-size: 13px
        }

        .footer {
            background-color: #eeeeeea8
        }

        .footer span {
            font-size: 12px
        }

        .product-qty span {
            font-size: 12px;
            color: #dedbdb
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="invoice p-5">
                        <h5>Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello,
                            {{ $order->name }}</span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>
                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>

                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Email:</span>
                                                <span>{{ $order->email }}</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Shiping Address</span>
                                                <span>{{ $order->address }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>Green Growth Nursery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
