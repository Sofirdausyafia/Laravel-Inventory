@extends('Layout.user_skeleton')
@section('content')
<div class="content-wrapper">

	<section class="content">

		<!-- general form elements -->
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Proses Checkout</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form action="{{ url('checkout/create') }}" method="POST" role="form">
				{{ csrf_field() }}
				<input type="hidden" name="id">
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail">ID Pembeli :</label>
								<input name="id_pembeli" type="text" class="form-control" id="exampleInputEmail" placeholder="ID Pembeli">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Kode Produk :</label>
								<input name="kode_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Kode Produk">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Nama Produk :</label>
								<input name="nama_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Produk">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Jumlah Pesanan :</label>
								<input name="jumlah_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Stok">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">Harga :</label>
								<input name="harga_barang" type="text" class="form-control" id="exampleInputEmail" placeholder="Harga">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail">Alamat Pengiriman :</label>
								<textarea name="alamat_pengiriman" type="text" class="form-control" id="exampleInputEmail" rows="3" placeholder="Deskripsi"></textarea>
							</div>
							<!-- /.box-body -->
						</div>


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