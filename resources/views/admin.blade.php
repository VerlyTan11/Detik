<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	* {font-family: 'Montserrat', sans-serif;}

	body{background-color: #eee;}

	.container{
		background-color: #F7F6FB;
		max-width: 1000px;
	}

	.dropdown button {
		background-color: transparent;
		color: black;
	}

	.dropdown button:hover {
		background-color: #521B79;
		color: white;
	}

	h5 {
		color: #333;
		font-weight: normal;
		font-size: 15px;
	}

	.table {text-align: center;}

	.table img {width: 25px;}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 30px;">
	 	<div class="container-fluid d-flex flex-row-reverse bd-highlight">
	    	<a class="navbar-brand mx-4" href="#"><img src="https://akcdn.detik.net.id/community/media/visual/2019/06/28/2846568b-3057-49c6-8125-ff5135d07312.png?d=1" style="width: 100px;"></a>
	    		<form action="/keluar" method="post">
	    			@csrf
		    		<button type="submit" class="btn btn-light navbar-brand">Logout</button>
		    	</form>
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon"></span>
	    	</button>
	    	<div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="font-size: 18px;">
	      		<div class="navbar-nav">
	        		<a class="nav-link active" aria-current="page" href="<?= url('/admin'); ?>">Home</a>
	        		<a class="nav-link" href="<?= url('/admin1'); ?>">New</a>
	      		</div>
	    	</div>
	  	</div>
	</nav>
	<div class="container mt-4 py-2">
		<h3 class="mb-4">Admin Page</h3>
		<h5 class="mb-3">Admin page hanya diperuntukkan untuk karyawan dan staff yang berkaitan dengan publishing berita atau artikel terbaru. Anda bisa mengedit dan menghapus apa yang anda publish dengan izin yang jelas. Kehilangan data berkas artikel ditanggung pribadi.</h5>
		<h5><i>Admin page is only intended for employees and staff related to publishing the latest news or articles. You can edit and delete what you publish with clear permissions. Loss of article file data is borne personally.</i></h5>

		<hr/>

		<table class="table table-striped">
  			<thead>
			    <tr>
			  		<th scope="col">No</th>
			      	<th scope="col">Judul Berita</th>
			      	<th scope="col">Kategori</th>
			      	<th scope="col">Tanggal Rilis</th>
			      	<th scope="col">Edit</th>
			      	<th scope="col">Hapus</th>
			    </tr>
			</thead>
			<tbody>
				@foreach($judul as $key => $value)
				    <tr>
				     	<th scope="row">{{ $value -> id }}</th>
				      	<td>{{ $value -> judul }}</td>
				      	<td>{{ $value -> kategori }}</td>
				      	<td>{{ $value -> created_at -> format('d-m-Y')}}</td>
				      	<td><a href="{{ url('/edit', $value->id) }}"><img src="/notes.png"></a></td>
				      	<td><a href="{{ url('/hapus', $value->id) }}"><img src="/trash.png"></a></td>
				    </tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>