@extends('template.index')

@section('content')

<div class="container">
	<h3>Edit Data Album</h3>
		<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
	@csrf
	<div class="form-group">
		  <label for="usr">Nama:</label>
		  <input type="text" class="form-control" id="usr" name="album_name" value="{{ $row->album_name }}">
		</div>
		<div class="form-group">
		  <label for="usr">Text:</label>
		  <input type="text" class="form-control" id="usr" name="album_text" value="{{ $row->album_text }}">
		</div>
		<div class="ID Photo">
		  <label for="usr">Text:</label>
		  <input type="text" class="form-control" id="usr" name="photo_id" value="{{ $row->photo_id }}">
		</div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
@endsection