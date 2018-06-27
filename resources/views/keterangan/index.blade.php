@extends('layouts.template')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Data Keterangan
			  	<div class="panel-title pull-right"><a href="{{ route('keterangan.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Keterangan</th>
					  <th>Siswa</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($k as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->keterangan }}</td>
				    	<td>@foreach($data->Absensi as $b)<li>{{ $b->id_siswa }}@endforeach</li></td>


<td>
              <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('keterangan.edit',$data->id) }}"><i class="zmdi zmdi-edit"></i></a>
            </td>

<td>
	<form method="post" action="{{ route('keterangan.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

	<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection