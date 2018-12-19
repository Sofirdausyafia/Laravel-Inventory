@extends('Layout.skeleton')

@section('content')
<div class="content-wrapper">
<section class="content-header">
	<h1>Data Produk
	<small>Semua Produk</small>
	</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header with-border">					
					<a href="{{url('dataproduk/create')}}"><button type="button" class="btn btn-danger">Tambah</button></a>
					<div class="box-tools">
					<form action="{{ url('')}}/hasil" action="GET">
						<div class="input-group input-group-sm" style="width: 150px;">
							<input type="text" id="cari" name="cari" class="form-control pull-right" placeholder="Search">

							<div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>Kode Barang</th>
							<th>Nama Produk</th>
							<th>Merk</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>

						@foreach($barang as $key)
						<tr>
							<td>{{ $key->kode_barang }}</td>
							<td>{{ $key->nama_barang }}</td>
							<td>{{ $key->merk_barang }}</td>
							<td>{{ $key->kategori }}</td>
							<td>
								<a href="{{ route('edit',[$key->id])}}">
									<button class="btn bg-green">
										<i class="glyphicon glyphicon-pencil"></i>
									</button>
								</a>

								<a href="{{ route('detailp',[$key->id])}}">
									<button class="btn bg-blue">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</a>

								<a href="{{ route('deletep',[$key->id])}}">
									<button class="btn bg-red">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</a>
							</td>
						</tr> 
						@endforeach
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>

</div>
@endsection