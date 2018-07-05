@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h2><center>Universitas</h2></center>
			  	</div>
				</div>
		<br>
			  <div class="row">
          <div class="col-lg-9">
         <h2 class="title-1 s-b-2"><a href="{{ route('kategori.create') }}">Tambah</a></h2>
      <div class="table-responsive table--no-card m-b-40">
             <table class="table table-borderless table-striped table-earning">
              <thead>
			  		<tr>
			  		  <th>No</th>
					  <th>UNiversitas</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($kategori as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->Tempat_Wisata }}</td>
</td>
<td>
	<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<button type="submit" class="btn btn-danger">Delete</button>
		<a class="btn btn-warning" href="{{ route('kategori.edit',$data->id) }}">Edit</a>
	</form>
</td>
<td>
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