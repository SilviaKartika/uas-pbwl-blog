@extends('template.index')

@section('content')

<div class="container">
<h3>Daftar Photo</h3>
<table class="table" >
    <thead class="thead-dark">
      <tr>
		<th>Date</th>
		<th>Title</th>
		<th>Text</th>
		<th>Upload</th>
		<th>ID post</th>
		<th>Hapus</th>
		<th>Edit</th>
      </tr>
    </thead>
    <tbody>
     @foreach($rows as $row)
	<tr>
		<td>{{ $row->photo_date }}</td>
		<td>{{ $row->photo_title }}</td>
		<td>{{ $row->photo_text }}</td>
		<td>{{ $row->photo_upload }}</td>
		<td>{{ $row->post_id }}</td>
	<td><form action="{{ url('photo/' . $row->photo_id) }}" method="POST"> 
 		<input name="_method" type="hidden" value="DELETE"> 
 	@csrf 
 	<button class="btn-danger">Hapus</button> 
</form></td>
<td><a href="{{ url('photo/' . $row->photo_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
	</tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection