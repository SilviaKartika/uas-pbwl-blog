@extends('template.index')

@section('content')

<div class="container">
	<h3>Tambah Data Album</h3>
	<form action="{{ url('/album') }}" method="post">
		@csrf
		<div class="form-group">
		  <label for="usr">Nama:</label>
		  <input type="text" class="form-control" id="usr" name="album_name">
		</div>
		<div class="form-group">
		  <label for="usr">Text:</label>
		  <input type="text" class="form-control" id="usr" name="album_text">
		</div>
		<div class="form-group">
		  <label for="usr">ID Photo:</label>
		  <input type="text" class="form-control" id="usr" name="photo_id">
		</div>
    <button type="submit" class="btn btn-primary">Simpan</button>
	
</div>
@endsection