@extends('Layout.skeleton')

@section('content')
<div class="content-wrapper">
<section class="content-header">
	<h1>Data Produk
	<small>Hasil Pencarian</small>
	</h1>
</section> 
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header with-border">					
					<h2 class="box-title">Hasil Pencarian</h2>
					<a href="{{url('/dataproduk')}}"><button class="btn btn-primary pull-right">Kembali</button></a>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					@if (count($name) > 0)
					<table class="table table-hover">
						<tr>
							<th>Kode Barang</th>
							<th>Nama Produk</th>
							<th>Merk</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>

						@foreach($name as $data)
						<tr>
							<td>{{ $data->kode_barang }}</td>
							<td>{{ $data->nama_barang }}</td>
							<td>{{ $data->merk_barang }}</td>
							<td>{{ $data->kategori }}</td>
							<td>
								<a href="{{ route('edit',[$data->id])}}">
									<button class="btn bg-green">
										<i class="glyphicon glyphicon-pencil"></i>
									</button>
								</a>

								<a href="{{ route('detailp',[$data->id])}}">
									<button class="btn bg-blue">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</a>

								<a href="{{ route('deletep',[$data->id])}}">
									<button class="btn bg-red">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</a>
							</td>
						</tr> 
						@endforeach
					</table>
				</div>

					@else 
					<div class="box-body">
						<div class="callout callout-danger">
							<h4>Maaf, data tidak ditemukan.</h4>
						</div>
					</div>
					@endif
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>

</div>
@endsection