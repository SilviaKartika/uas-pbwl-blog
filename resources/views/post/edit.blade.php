@extends('template.index')

@section('content')

<div class="container">
	<h3>Edit Data Photo</h3>
		<form action="{{ url('/post/' . $row->post_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<div class="form-group">
		  <label for="usr">Date</label>
		  <input type="date" class="form-control" id="usr" name="post_date" value="{{ $row->post_date }}>
		</div>
		<div class="form-group">
		  <label for="usr">Slug</label>
		  <input type="date" class="form-control" id="usr" name="post_slug" value="{{ $row->post_slug }}">
		</div>
		<div class="form-group">
		  <label for="usr">Title:</label>
		  <input type="text" class="form-control" id="usr" name="post_title" value="{{ $row->post_title }}">
		</div>
		<div class="form-group">
		  <label for="usr">Text</label>
		  <input type="file" name="post_text" value="{{ $row->post_text }}">
		</div>
		<div class="form-group">
		  <label for="usr">ID Category</label>
		  <input type="text" class="form-control" id="usr" name="category_id" value="{{ $row->category_id }}">
		</div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection