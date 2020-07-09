@extends('template.index')

@section('content')
<div class="container">
  <h2>Daftar Category</h2>
  <p></p>
  <table class="table" >
    <thead class="thead-dark">
      <tr>
        <th>Nama</th>
        <th>Text</th>
        <th>Hapus</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rows as $row)
	<tr>
		<td>{{ $row->category_name }}</td>
		<td>{{ $row->category_text }}</td>
	<td><form action="{{ url('category/' . $row->category_id) }}" method="POST"> 
 		<input name="_method" type="hidden" value="DELETE"> 
 	@csrf 
 	<button class="btn-danger">Hapus</button> 
</form></td>
<td><a href="{{ url('category/' . $row->category_id . '/edit') }}"><button class="btn-primary">Edit</button></a></td>
	</tr>
@endforeach
    </tbody>
  </table>
  
</div>
@endsection