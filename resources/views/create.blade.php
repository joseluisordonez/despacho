@extends('base')

@section('contenido')
<h2><i class="fa fa-angle-right"></i> Agregar Casos</h2>
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
				{!! Form::open (['route' => 'admin.casos.store', 'method' => 'POST', 'class' => 'form-horizontal style-form'])!!}
					<div class="form-group">
						{!! Form::label ('codigo','Caso No.',['class'=>'control-label col-sm-2 col-sm-2'])!!}
						<div class="col-sm-3">
							{!! Form::text('codigo',null, ['class' => 'form-control','required','placeholder'=>'Numero'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('nombre','Nombre',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-6">
							{!! Form::text('nombre',null, ['class' => 'form-control','required','placeholder'=>'Nombre'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('descripcion','Descripción',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-8">
							{!! Form::textarea('descripcion',null, ['class' => 'form-control', 'placeholder'=>'Descripción'])!!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label ('fecha','Fecha',['class'=>'control-label col-sm-2'])!!}
						<div class="col-sm-2">
							{!! Form::date ('fecha',null, ['class' => 'form-control datepicker hasDatepicker', 'required'])!!}
						</div>
					</div>
					<div class="form-actions">
						{!! form::submit('Guardar', ['class'=> 'btn btn-primary'])!!}
					</div>
				</div>

				
			{!! Form::close() !!}
				</section>
			
			</div>
		</div>
	</div>	
@endsection