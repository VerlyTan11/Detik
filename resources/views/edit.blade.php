<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
</style>
<body>
	<form action="{{ url('/edit/'.$dataedit->id) }}" method="post">
		@csrf
		<div class="container mt-4 py-2">
			<h3 class="mb-4">Edit</h3>
			<h5 class="mb-3">Admin page hanya diperuntukkan untuk karyawan dan staff yang berkaitan dengan publishing berita atau artikel terbaru. Anda bisa mengedit dan menghapus apa yang anda publish dengan izin yang jelas. Kehilangan data berkas artikel ditanggung pribadi.</h5>
			<h5><i>Admin page is only intended for employees and staff related to publishing the latest news or articles. You can edit and delete what you publish with clear permissions. Loss of article file data is borne personally.</i></h5>

			<hr/>
			<div class="row">
				<div class="input-group flex-nowrap mb-4">
				  	<span class="input-group-text" id="addon-wrapping">@</span>
				  	<input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping" value="{{ $dataedit->email }}">
				</div>
				<h6>Pilih Kategori Berita</h6>
				<div class="mb-3">
					<select class="form-select" aria-label="Default select example" name="kategori" value="{{ $dataedit->kategori }}" required>
  						<option disabled="disabled" selected value="{{ old('kategori') }}">Kategori</option>
  						<option value="{{ $dataedit->kategori }}" selected>{{ $dataedit->kategori }}</option>
  						<option value="Teknologi">Teknologi</option>
  						<option value="Sport">Sport</option>
  						<option value="Otomotif">Otomotif</option>
  						<option value="Food">Food</option>
  						<option value="Edukasi">Edukasi</option>
  						<option value="Finance">Finance</option>
  						<option value="Entertaiment">Entertaiment</option>
  						<option value="Travel">Travel</option>
  						<option value="Health">Health</option>
					</select>
				</div>

				
				<h6>Pilih Tipe Berita</h6>
				<div class="mb-4">
					<select class="form-select" aria-label="Default select example" name="tipe" value="{{ $dataedit->tipe }}" required>
  						<option disabled="disabled" selected value="{{ old('kategori') }}">Tipe Berita</option>
  						<option value="{{ $dataedit->tipe }}" selected>{{ $dataedit->tipe }}</option>
  						<option value="Heading">Heading</option>
  						<option value="Sub-Heading">Sub-Heading</option>
  						<option value="Header1">Header1</option>
  						<option value="Header2">Header2</option>
					</select>
				</div>
			</div>

			<div class="input-group mb-3">
			  	<input type="file" class="form-control" id="img" name="img" value="{{ $dataedit->img }}">
			</div>

			<h6>Tulis Judul Berita</h6>
			<div class="input-group mb-3">
				<input type="text" class="form-control" id="judul" name="judul" value="{{ $dataedit->judul }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
			</div>

			<h6>Tulis Isi Artikel</h6>
			<div class="input-group">
			  	<textarea class="form-control" aria-label="With textarea" id="teks" name="teks" style="height: 500px;"></textarea>
			  	<button type="submit" class="btn btn-success mt-4 mb-4" style="float: right;">Save</button>
			</div>	
		</div>
	</form>
</body>
</html>