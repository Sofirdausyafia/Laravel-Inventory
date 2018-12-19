@extends('Layout.skeleton')
@section('content')
<div class="content-wrapper">
	<section class="content">

		<!-- general form elements -->
		<div class="box box-danger">
			<!-- form start -->
			<form action="{{ url('datapembeli/edit') }}" method="POST" role="form">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{$pembeli->id}}">
				<input type="hidden" name="id_pembeli" value="{{$pembeli->id_pembeli}}">
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail">Nama :</label>
								<input name="nama_pembeli" type="text" class="form-control" id="exampleInputEmail" placeholder="Nama Pembeli" value="{{$pembeli->nama_pembeli}}">
							</div>

							
							<div class="form-group">
								<label for="exampleInputEmail">Email :</label>
								<input name="email" type="text" class="form-control" id="exampleInputEmail" placeholder="Email" value="{{$pembeli->email}}">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail">No Telepon :</label>
								<input name="no_telepon" type="text" class="form-control" id="exampleInputEmail" placeholder="No Telepon" value="{{$pembeli->no_telepon}}">
							</div>


							<div class="form-group">
								<label for="exampleInputEmail">Alamat :</label>
								<textarea name="alamat_pembeli" type="text" class="form-control" id="exampleInputEmail" rows="3" placeholder="Alamat">{{$pembeli->alamat_pembeli}}"</textarea>
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