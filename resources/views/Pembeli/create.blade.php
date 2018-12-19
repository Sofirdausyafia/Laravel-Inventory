@extends('Layout.skeleton')
@section('content')
<div class="content-wrapper">
	<section class="content">

		<!-- general form elements -->
		<div class="box box-danger">
			<!-- form start -->
			<form action="{{ url('datapembeli/create') }}" method="POST" role="form">
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
								<label for="exampleInputEmail">Nama :</label>
								<input name="nama_pembeli" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Pembeli">
							</div>

							
							<div class="form-group">
								<label for="exampleInputEmail">Email :</label>
								<input name="email" type="text" class="form-control" id="exampleInputEmail" placeholder="Email">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">No Telepon :</label>
								<input name="no_telepon" type="text" class="form-control" id="exampleInputEmail" placeholder="No Telepon">
							</div>


							<div class="form-group">
								<label for="exampleInputEmail">Alamat :</label>
								<textarea name="alamat_pembeli" type="text" class="form-control" id="exampleInputEmail" rows="3" placeholder="Alamat"></textarea>
							</div>
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