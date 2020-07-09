@extends('template.index')

@section('content')

<div class="container">
<h3>Daftar Album</h3>
<table class="table" >
    <thead class="thead-dark">
      <tr>
		<th>Nama</th>
		<th>Text</th>
		<th>Photo ID</th>
		<th>Hapus</th>
		<th>Edit</th>
      </tr>
    </thead>
    <tbody>
     @foreach($rows as $row)
	<tr>
		<td>{{ $row->album_name }}</td>
		<td>{{ $row->album_text }}</td>
		<td>{{ $row->photo_id }}</td>
		<td><form action="{{ url('album/'.$row->album_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button class="btn-danger">Hapus</button> 
		</form></td>
		<td><a href="{{ url('album/'.$row->album_id.'/edit') }}"><button class="btn-primary">Edit</button></a></td>
	</tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection