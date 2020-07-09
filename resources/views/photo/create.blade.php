@extends('template.index')

@section('content')

<div class="container">
	<h3>Tambah Data Photo</h3>
	<form action="{{ url('/photo') }}" method="post">
		@csrf
		<div class="form-group">
		  <label for="usr">Date</label>
		  <input type="date" class="form-control" id="usr" name="photo_date">
		</div>
		<div class="form-group">
		  <label for="usr">Title:</label>
		  <input type="text" class="form-control" id="usr" name="photo_title">
		</div>
		<div class="form-group">
		  <label for="usr">Text</label>
		  <input type="text" class="form-control" id="usr" name="photo_text">
		</div>
		<div class="form-group">
		  <label for="usr">Upload</label>
		  <input type="file" name="photo_upload">
		</div>
		<div class="form-group">
		  <label for="usr">ID Post</label>
		  <input type="text" class="form-control" id="usr" name="post_id">
		</div>
		<button type="submit" class="btn btn-primary">SIMPAN</button>
		
	</form>
</div>
@endsection