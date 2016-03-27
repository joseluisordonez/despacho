@extends('base')

@section('contenido')
<h2><i class="fa fa-angle-right"></i> Editar Casos</h2>
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
			
				@if(count($errors)>0)
					<div class="alert alert-danger" role="alert">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif
			
			<section class="unseen">
				{!! Form::open (['route' => ['admin.casos.update',$caso], 'method' => 'PUT', 'class' => 'form-horizontal style-form'])!!}
					<div class="form-group">
						{!! Form::label ('codigo','Caso No.',['class'=>'control-label col-sm-2 col-sm-2'])!!}
						<div class="col-sm-3">
							{!! Form::text('codigo',$caso->codigo, ['class' => 'form-control','required','placeholder'=>'Numero'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('nombre','Nombre',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-6">
							{!! Form::text('nombre',$caso->nombre, ['class' => 'form-control','required','placeholder'=>'Nombre'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('descripcion','Descripción',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-8">
							{!! Form::textarea('descripcion',$caso->descripcion, ['class' => 'form-control', 'placeholder'=>'Descripción'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('fecha','Fecha',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-2">
							{!! Form::date ('fecha',$caso->fecha, ['class' => 'form-control datepicker hasDatepicker', 'required'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('status','Status',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-2">
							{!! Form::select ('status',['activo' =>'Activo','inactivo' => 'Terminado'],$caso->status,['class'=>'form-control'])!!}
						</div>
					</div>
					<div class="showback">
						{!! form::submit('Guardar', ['class'=> 'btn btn-primary'])!!}
						{!! Form::close() !!}
						<a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Eliminar</a>
					</div>
				
				</div>
				<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Eliminar Caso</h4>
						      </div>
						      <div class="modal-body">
						        Seguro que deseas eliminar el caso {{$caso->codigo}}?
						      </div>
						      <div class="modal-footer">

						        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						        <a href="{{Route('admin.casos.destroy',$caso->id)}}" type="button" class="btn btn-danger">Eliminar</a>
						      </div>
						    </div>
						  </div>
						</div>      				
      				</div><!-- /showback -->

				
			{!! Form::close() !!}
				</section>
			
			</div>
		</div>
	</div>
		
	
@endsection