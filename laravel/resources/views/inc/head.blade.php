<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>{{config('app.name','HZ-Electronics')}} @if (isset($title)) | {{$title}} @endif</title>

        
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


     


 		 		<!-- Custom stlylesheet -->
		 <link rel="stylesheet" href=" {{ asset('storage/css/app.css') }}">
                 <link href="{{ asset('storage/css/lightbox.css') }}" rel="stylesheet">

		 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"  type="text/javascript"></script>
		

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
        <style>
                .w3-sidebar a {font-family: "Roboto", sans-serif}
                body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
                </style>
    </head>