<!DOCTYPE html>
<html>
<head>
	<title>Detik.com</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	* {font-family: 'Montserrat', sans-serif;}

	body{background-color: #F7F6FB;}

	.col-lg-8 img {display: block;}

	.thumbnail {
		position: relative;
		display: inline-block;
	}

	.caption {
		position: absolute;
		transform: translate(1%, -110% );
	}

	.display-6 {font-weight: 600;}

	.col-sm-4 img{width: 180px;}

	.col-sm-4 p {font-size: 12px;}

	.col-sm-4 h6 {font-size: 15px;}

	.col-sm-4, .mb-5{margin-bottom: 2.8rem !important;}

	.col h6 {
		margin-top: 10px;
		text-align: center;
	}

	.col p {
		text-align: center;
		font-size: 13px;
	}

	.container {margin-bottom: 20px;}

	.col-6 h4 {
		text-align: center;
		margin-top: 10px;
	}

	.col-6 p {text-align: center;}

	.col-6 img {width: 550px;}

	.card {
    	border: none;
    	box-shadow: 5px 6px 6px 2px #e9ecef;
    	border-radius: 4px;
	}

	.dots {
	    height: 4px;
	    width: 4px;
	    margin-bottom: 2px;
	    background-color: #bbb;
	    border-radius: 50%;
	    display: inline-block;
	}

	.badge {
	    padding: 7px;
	    padding-right: 9px;
	    padding-left: 16px;
	    box-shadow: 5px 6px 6px 2px #e9ecef;
	}

	.user-img {margin-top: 4px;}

	.reply {margin-left: 12px;}

	.reply small {color: #b7b4b4;}

	.reply small:hover {
	    color: green;
	    cursor: pointer;
	}

	.btn, .btn-light {
		font-size: 15px;
		border: 1px solid #eee;
	}

	.welcome {
		text-align: center;
		font-size: 15px;
		color: #545252;
		white-space: nowrap;
	}
</style>
<body oncontextmenu='return false' class='snippet-body'>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 30px;">
	 	<div class="container-fluid d-flex flex-row-reverse bd-highlight">
	    	<a class="navbar-brand mx-4" href="#"><img src="https://akcdn.detik.net.id/community/media/visual/2019/06/28/2846568b-3057-49c6-8125-ff5135d07312.png?d=1" style="width: 100px;"></a>
	    	@auth
	    		<form action="/logout" method="post">
	    			@csrf
		    		<button type="submit" class="btn btn-light navbar-brand">Logout</button>
		    	</form>
	    		<h5 class="welcome" style="margin-right: 30px;">Welcome back, {{ auth() -> user() -> name }}</h5>
	    	@else
	    		<a href="<?= url('/login'); ?>" type="button" class="btn btn-light navbar-brand">Login</a>
	    		<a href="<?= url('/regist'); ?>" type="button" class="btn btn-light navbar-brand">Register</a>
	    	@endauth
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon"></span>
	    	</button>
	    	<div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="font-size: 18px;">
	      		<div class="navbar-nav">
	        		<a class="nav-link active" aria-current="page" href="#">Home</a>
	        		<li class="nav-item dropdown">
	          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            			Kategori
	         				</a>
	          			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	            			@foreach($kategori->unique('kategori') as $key=>$value)
            					<li><a class="dropdown-item" href="{{ url('/kategori', $value->kategori) }}">{{ $value->kategori }}</a></li>
           					@endforeach
	         	 		</ul>
	        		</li>
	      		</div>
	    	</div>
	  	</div>
	</nav>
	

	<div class="container">
    	<div class="row">
      		<div class="col-lg-8">
      			@foreach ($heading as $key => $value)
        		<div class="thumbnail">
          			<img src="/{{ $value->img }}" class="img-fluid" style="width: 730px; max-height: 400px;">
          			<div class="caption">
            			<h1 class="fw-bolder"><mark>{{ $value -> judul }}</mark></h1>
            			<h6><mark>{{ $value -> kategori }} | {{ $value -> created_at -> format('d-m-Y') }}</mark></h6>
          			</div>
        		</div>
        		@endforeach
      		</div>
      
    		<div class="col-sm-4">
    			@foreach ($subheading as $key => $value)
      			<img src="/{{ $value->img }}" style="max-width: 180px;" class="mb-5">
      			<div class="col-md-5 float-sm-end">
      				<h6>{{ $value -> judul }}</h6>
	        		<p class="text-muted">{{ $value -> kategori }} | {{ $value -> created_at -> format('d-m-Y') }}</p>
      			</div>
      			@endforeach
    		</div>
  		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach ($header1 as $key => $value)
			<div class="col">
				<center><img src="/{{ $value->img }}" class="img-fluid"></center>
				<h6>{{ $value -> judul }}</h6>
				<p class="text-muted">{{ $value -> kategori }} | {{ $value -> created_at -> format('d-m-Y') }}</p>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach ($header2 as $key => $value)
			<div class="col-6 order-1">
				<img src="/{{ $value->img }}" class="img-fluid">
				<h4>{{ $value -> judul }}</h4>
				<p class="text-muted">{{ $value -> kategori }} | {{ $value -> created_at -> format('d-m-Y') }}</p>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container">
		<hr/>
		<div class="col">
			<h5 style="color: #21409A; font-weight: bolder; margin-bottom: 10px; text-align: center;">Komentar</h5>
			@auth
			<form method="post" action="{{ url('index') }}">
				@csrf
				<div class="input-group">
	  				<textarea class="form-control" aria-label="With textarea" name="komentar" id="komentar" placeholder="Tulis Komentar..."></textarea>
				</div>
				<button type="submit" class="btn btn-success float-right mt-2">Kirim</button>
				<input type="hidden" name="user" value="{{ auth() -> user() -> name }}">
			</form>	
			@else
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			  	<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
			    	<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
			  	</symbol>
			</svg>
			<div class="alert alert-primary d-flex align-items-center" role="alert">
			  	<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
			  	<div>
			    	Silahkan login terlebih dahulu jika ingin menulis komentar.
			  	</div>
			</div>
			<div class="input-group">
  				<textarea class="form-control" value="" aria-label="With textarea" disabled="disabled" placeholder="Tulis Komentar..."></textarea>
			</div>
			<button type="submit" class="btn btn-secondary float-right mt-2" disabled="disabled">Kirim</button>
			@endauth
		</div>
	</div>

	<div class="container mt-5">
	    <div class="row d-flex justify-content-center">
	        <div class="col">
	            @foreach($comment as $key => $value)
	            <div class="card p-3 mt-4">  
	                <div class="action d-flex justify-content-between mt-2 align-items-center">
	                    <div class="reply">
	                    	<small>{{ $value -> user }}</small>
	                    </div>
	                    <small>{{ $value -> created_at -> format('d F Y') }}</small>
	                </div>
	                <div class="d-flex justify-content-between align-items-center">
	                    <div class="user d-flex flex-row align-items-center">
	                    	<span>
	                    		<small class="font-weight-bold mx-4">{{ $value -> komentar }}</small>
	                    	</span> 
	                    </div>
	                    <small>{{ $value -> created_at -> format('H:i') }}</small>    
	                </div>
	            </div>
	            @endforeach
	        </div>
	    </div>
	</div>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>