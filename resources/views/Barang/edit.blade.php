@extends('Layout.skeleton')
@section('content')
<div class="content-wrapper">

	<section class="content">

		<!-- general form elements -->
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Ubah Data Produk</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form action="{{ url('dataproduk/edit') }}" method="POST" role="form" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{$barang->id}}">
				<input type="hidden" name="kode_barang" value="{{$barang->kode_barang}}">
				<div class="box-body">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail">Nama Produk :</label>
								<input name="nama_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk" value="{{$barang->nama_barang}}">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Merk Produk :</label>
								<input name="merk_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk" value="{{$barang->merk_barang}}">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Kategori :</label>
								<input name="kategori" type="text" class="form-control" id="exampleInputEmail" placeholder="Kategori" value="{{$barang->kategori}}">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Sub Kategori :</label>
								<input name="sub_kategori" type="text" class="form-control" id="exampleInputEmail" placeholder="Sub Kategori" value="{{$barang->sub_kategori}}">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Stok :</label>
								<input name="stok_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Stok" value="{{$barang->stok_barang}}">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Harga :</label>
								<input name="harga_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Harga" value="{{$barang->harga_barang}}">
							</div>


							<div class="form-group">
								<label for="exampleInputEmail">Deskripsi :</label>
								<textarea name="deskripsi_barang" type="text" class="form-control" id="exampleInputEmail" rows="3" value="{{$barang->deskripsi_barang}}" placeholder="Deskripsi"></textarea>
							</div>

							<div class="form-group">
				                <label for="exampleInputFile">Gambar Produk</label>
				                <input type="file" id="exampleInputFile" name="gambar_barang" value="{{$barang->gambar_barang}}">
				                <p class="help-block">Masukkan contoh / gambar produk</p>
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