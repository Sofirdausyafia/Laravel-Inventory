@extends('Layout.skeleton')
@section('content')
<div class="content-wrapper">

	<section class="content">

		<!-- general form elements -->
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Data Produk</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form action="{{ url('dataproduk/create') }}" method="POST" role="form" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="id">
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail">Kode Produk :</label>
								<input name="kode_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Kode Produk">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Nama Produk :</label>
								<input name="nama_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Merk Produk :</label>
								<input name="merk_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Kategori :</label>
								<input name="kategori" type="text" class="form-control" id="exampleInputEmail" placeholder="Kategori">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail">Sub Kategori :</label>
								<input name="sub_kategori" type="text" class="form-control" id="exampleInputEmail" placeholder="Sub Kategori">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Stok :</label>
								<input name="stok_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Stok">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Harga :</label>
								<input name="harga_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Harga">
							</div>

							<div class="form-group">
				                <label for="exampleInputFile">Gambar Produk</label>
				                <input type="file" id="exampleInputFile" name="gambar_barang">
				                <p class="help-block">Masukkan contoh / gambar produk</p>
				            </div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail">Deskripsi :</label>
								<textarea name="deskripsi_barang" type="text" class="form-control" id="exampleInputEmail" rows="3" placeholder="Deskripsi"></textarea>
							</div>
						</div>
						<!-- /.box-body -->

						</div>
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-danger">Submit</button>
					</div>

				</form>
			</div>	
	</section>
</div>

@endsection