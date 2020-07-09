@extends('template.index')

@section('content')

<div class="container">
	<h3>Edit Data Category</h3>
		<form action="{{ url('/category/' . $row->category_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<div class="form-group">
		  <label for="usr">Nama:</label>
		  <input type="text" class="form-control" id="usr" name="category_name" value="{{ $row->category_name }}">
		</div>
		<div class="form-group">
		  <label for="usr">Text:</label>
		  <input type="text" class="form-control" id="usr" name="category_text" value="{{ $row->category_text }}">
		</div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
@endsection