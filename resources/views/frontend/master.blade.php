
<!DOCTYPE HTML>

<html lang="en-US">

<head>

	<meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Green Growth Nursery</title>

	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Google Font -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="http://labs.bootstrapthemes.co/demo/html/Orani/css/style.css">

    <link rel="stylesheet" href="http://labs.bootstrapthemes.co/demo/html/Orani/css/responsive.css">

</head>

<body>



@include('frontend.fixed.header')


        @yield('content')


    @include('frontend.fixed.footer')

	<!-- jQuery Library -->

	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Script -->

	<script src="http://labs.bootstrapthemes.co/demo/html/Orani/js/script.js"></script>
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	{!! Toastr::message() !!}
</body>

</html>
