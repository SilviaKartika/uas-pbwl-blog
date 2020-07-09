@extends('template.index')

@section('content')

<div class="container">
	<h3>Tambah Data Category</h3>
	<form action="{{ url('/post') }}" method="post">
		@csrf
		<div class="form-group">
		  <label for="usr">Date</label>
		  <input type="date" class="form-control" id="usr" name="post_date">
		</div>
		<div class="form-group">
		  <label for="usr">Slug</label>
		  <input type="date" class="form-control" id="usr" name="post_slug">
		</div>
		<div class="form-group">
		  <label for="usr">Title:</label>
		  <input type="text" class="form-control" id="usr" name="post_title">
		</div>
		<div class="form-group">
		  <label for="usr">Text</label>
		  <input type="file" name="post_text">
		</div>
		<div class="form-group">
		  <label for="usr">ID Category</label>
		  <input type="text" class="form-control" id="usr" name="category_id">
		</div>
    <button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
@endsection