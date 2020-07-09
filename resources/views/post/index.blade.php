@extends('template.index')

@section('content')
<div class="container">
  <h3>Daftar Post</h3>
  <p></p>
  <table class="table" >
    <thead class="thead-dark">
      <tr>
		<th>Date</th>
		<th>Slug</th>
		<th>Title</th>
		<th>Txt</th>
		<th>ID Category</th>
		<th>Hapus</th>
		<th>Edit</th>
      </tr>
    </thead>
    <tbody>
     @foreach($rows as $row)
	<tr>
		<td>{{ $row->post_date }}</td>
		<td>{{ $row->post_slug }}</td>
		<td>{{ $row->post_title }}</td>
		<td>{{ $row->post_text }}</td>
		<td>{{ $row->category_id }}</td>
	<td><form action="{{ url('post/' . $row->post_id) }}" method="POST"> 
 		<input name="_method" type="hidden" value="DELETE"> 
 	@csrf 
 	<button class="btn-danger">Hapus</button> 
</form></td>
<td><a href="{{ url('post/' . $row->post_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
	</tr>
	@endforeach
    </tbody>
  </table>
  
</div>
@endsection