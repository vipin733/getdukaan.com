<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Getdukaan is a simple but powerfull website for your local store where you can upload your local store item images and users can know local store information.">
  <meta name="keywords" content="Free , Getdukaan, mini website , free website for local store , unlimited, any dukaan, store">
  <meta name="author" content="Vipin kumar, and Getdukaan Team">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	{{ HTML::style('packages/css/fresco.css') }}
	{{ HTML::style('packages/css/main.css') }}
  {{ HTML::style('packages/css/slider.css') }}
  {{ HTML::style('packages/css/social.css') }}
</head>
<body>
    @include('layouts.partials.nav')
  
   @include('layouts.partials.alert')

   <div class="container">
   
   	  @yield('content')

   </div>

   <div class="container">
   
      @yield('users')

   </div>

   @include('layouts.partials.footer')

   <!-- Go to www.addthis.com/dashboard to customize your tools -->
   @yield('share')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
{{ HTML::script('packages/js/fresco.js') }}
{{ HTML::script('packages/js/ajax.js') }}

</body>
</html>