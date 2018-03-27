<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/nice.css">
  <title></title>
</head>
<body>

<div class="container">
<center><h1>DATA BARANG</h1></center>
<table>
  <thead>
<table>
	<thead>
	<table class="table table-hover">
    <tr class="table-primary">
      		<th scope="row">Kode Barang</th>
      		<th>Nama Barang</th>
      		<th>Merk</th>
      		<th>Harga Barang</th>
         	<th>Stok Barang</th>
      		<th>Aksi</th>

    </tr>
	</thead>
	<tbody>
		@foreach($barangs as $barang)
		<tr>
			<td>{{$barang->kode}}</td>
			<td>{{$barang->nama_barang}}</td>
			<td>{{$barang->merk->merk}}</td>
			<td align="right">Rp.{{$barang->harga}}</td>
      <td align="right">{{$barang->stok}}</td>
			<td>
				<div class="row">
				<a type="button" class="btn btn-success" href="{{route('Barang.index')}}/{{$barang->id}}/edit">Edit</a>
				<form action="/Barang/{{$barang->id}}" method="POST" id="form-hapus">
					{{ csrf_field() }}
					{{ method_field('DELETE')}}
					<button type="submit" name="" class="btn btn-danger">Delete</button>
				</form>
				</div>
				</td>
            </tr>
            <tr>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<a type="button" class="btn btn-primary" href="{{route('Barang.create')}}">Tambah Barang</a>
</body> 
</html>