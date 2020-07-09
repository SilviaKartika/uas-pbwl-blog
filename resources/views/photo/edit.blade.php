@extends('template.index')

@section('content')

<div class="container">
	<h3>Edit Data Photo</h3>
		<form action="{{ url('/photo/' . $row->photo_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<div class="form-group">
		  <label for="usr">Date</label>
		  <input type="date" class="form-control" id="usr" name="photo_date"  value="{{ $row->photo_date }}">
		</div>
		<div class="form-group">
		  <label for="usr">Title:</label>
		  <input type="text" class="form-control" id="usr" name="photo_title"  value="{{ $row->photo_title }}">
		</div>
		<div class="form-group">
		  <label for="usr">Text</label>
		  <input type="text" class="form-control" id="usr" name="photo_text" value="{{ $row->photo_text }}">
		</div>
		<div class="form-group">
		  <label for="usr">Upload</label>
		  <input type="file" name="photo_upload"  value="{{ $row->photo_upload }}">
		</div>
		<div class="form-group">
		  <label for="usr">ID Post</label>
		  <input type="text" class="form-control" id="usr" name="post_id" value="{{ $row->post_id }}">
		</div>
		<button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
@endsection