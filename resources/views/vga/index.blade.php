@extends('/template/layout')

@section('title', 'Homepage')

@section('subtitle', 'Home Page')

@section('content')
  <h3>VGA List</h3>
  <a href="/vga/create" class="btn btn-primary"> + Tambah VGA Baru</a>

	<p>Cari Data VGA :</p>
	<form action="/vga/search" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari VGA ..">
		<input type="submit" value="Cari" class="btn btn-info">
	</form>
	<br/>
 
	<table class="table table-striped table-hover">
		<tr>
			<th>id</th>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
      <th>Action</th>
		</tr>

		@foreach($vga as $v)
		<tr>
			<td>{{ $v->id }}</td>
			<td>{{ $v->merk_vga }}</td>
			<td>{{ $v->harga_vga }}</td>
			<td>{{ $v->tersedia == 1 ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $v->berat }}</td>
			<td>
        <a href="/vga/detail/{{ $v->id }}" class="btn btn-primary">Detail</a> 
				<a href="/vga/edit/{{ $v->id }}" class="btn btn-success">Edit</a> 
				<a href="/vga/delete/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
  {{ $vga->links() }}
@endsection 
