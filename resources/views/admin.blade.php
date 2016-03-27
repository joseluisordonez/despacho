@extends('base')

@section('contenido')
	<h2><i class="fa fa-angle-right"></i>{{$x}}</h2>
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				@include('flash::message')
				<div class="form-group">
					<h4 class="col-sm-1 control-label">Buscar:</h4>
					<div class="col-sm-3"><input class="form-control" type="text" id="buscar-tabla"></div>
				</div>
				<br><br>
			<section class="unseen">
					<table class="table table-bordered table-striped table-condensed" id="tabla-datos">
						<thead>
						  <tr>
							  <th>Caso</th>
							  <th>Nombre</th>
							  <th>Fecha</th>
							  <th>Status</th>                                          
						  </tr>
					  </thead>  
					  <tbody>
					  	@foreach($casos as $caso)
						<tr onclick="location.href='{{ route('admin.casos.edit',$caso->id)}}'">
							<td>{{$caso->codigo}}</td>
							<td >{{$caso->nombre}}</td>
							<td >{{ \Carbon\Carbon::createFromFormat('Y-m-d',$caso->fecha)->format('d/m/Y')}}</td><!-- codigo para cambiar formato fecha de año-mes-dia a dia/mes/año-->
							<td >
							@if ($caso->status =='activo')
								<span class="label label-success">Activo</span>
							@else
								<span class="label label-warning">Terminado</span>
							@endif
							</td>                                       
						</tr>                   
					@endforeach  
					  </tbody>
					</table>
					{!!$casos->render()!!}
				</section>
			</div>
		</div>
	</div>
	
@endsection