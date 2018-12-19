@extends('Layout.skeleton')

@section('content')
<div class="content-wrapper">

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-danger">
				<div class="box-header with-border">					
					<a href="{{url('datapembeli/create')}}"><button type="button" class="btn btn-danger">Tambah</button></a>
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<input type="text" name="table_search" class="form-control pull-right" placeholder="Search" name="dataanggaran">

							<div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>Nama Pembeli</th>
							<th>Email</th>
							<th>Aksi</th>
						</tr>

						@foreach($pembeli as $key)
						<tr>
							<td>{{ $key->nama_pembeli }}</td>
							<td>{{ $key->email }}</td>
							<td>
								<a href="{{ route('edit',[$key->id])}}">
									<button class="btn bg-green">
										<i class="glyphicon glyphicon-pencil"></i>
									</button>
								</a>

								<a href="#">
									<button class="btn bg-blue">
										<i class="glyphicon glyphicon-folder-open"></i>
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