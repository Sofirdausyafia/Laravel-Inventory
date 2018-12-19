@extends('Layout.skeleton')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
	<style type="text/css">
		.gambar{
			height:200px;
			width: 300px;
		}
	</style>
</head>
<body>
<div class="content-wrapper">
<section class="content">
	<div class="col-md-12">
		<div class="box box-default">
			<div class="box-header with-border">
				<i class="fa fa-search"></i>
				<h3 class="box-title">Detail Produk {{$barang->nama_barang}}</h3>

				<a href="{{url('/dataproduk')}}"><button class="btn btn-primary pull-right">Kembali</button></a>
			
			</div>
			<div class="row">
				<div class="box-body">
					<div class="callout col-md-5">
						<img class="gambar" src="{{asset('gambar_barang/'. $barang->gambar_barang)}}" alt="Card image cap">
					</div>

					<div class="col-md-7">
						<div class="box">
							<div class="box-body no-padding">
								<table class="table">
									<tbody>
										<tr>
											<th>Nama Produk</th>
											<td>{{$barang->nama_barang}}</td>
											<th>Merk</th>
											<td>{{$barang->merk_barang}}</td>
										</tr>

										<tr>
											<th>Kategori</th>
											<td>{{$barang->kategori}}</td>
											<th>Sub Kategori</th>
											<td>{{$barang->sub_kategori}}</td>
										</tr>

										<tr>
											<th>Stok Produk</th>
											<td>{{$barang->stok_barang}}</td>
											<th>Harga Produk</th>
											<td>{{$barang->harga_barang}}</td>
										</tr>
										<tr>
											<th>Deskripsi</th>
											<td colspan="3">{{$barang->deskripsi_barang}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
</body>
</html>
@endsection