@extends('template.index')

@section('content')

<div class="container">
	<h3>Tambah Data Category</h3>
	<form action="{{ url('/category') }}" method="post">
		@csrf
		<div class="form-group">
		  <label for="usr">Nama:</label>
		  <input type="text" class="form-control" id="usr" name="category_name">
		</div>
		<div class="form-group">
		  <label for="usr">Text:</label>
		  <input type="text" class="form-control" id="usr" name="category_text">
		</div>
    <button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
@endsection