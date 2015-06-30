@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Registro</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@foreach(App\Prueba::all() as $prueba)
						{{$prueba->NOMBRE}} <a href="{{route('Prueba.edit', $Prueba->id)}}">Editar</a><br>
					@endforeach
					<form class="form-horizontal" role="form" method="{{$info['metodo']}}" action="{{ $info['ruta'] }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
						<div class="form-group">
							<label class="col-md-4 control-label">NOMBRE</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="NOMBRE" value="{{ $info['NOMBRE'] }}">
							</div>
						</div>			
							
						<div class="form-group">
							<label class="col-md-4 control-label">APELLIDO</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="APELLIDO" value="{{ $info['APELLIDO'] }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">CEDULA</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="CEDULA" value="{{ $info['CEDULA'] }}" >
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-4 control-label">DIA</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="DIA" value="{{ $info['DIA'] }}" placeholder="dd">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-4 control-label">MES</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="MES" value="{{ $info['MES'] }}" placeholder="mm">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">AÑO</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="ACNO" value="{{ $info['ACNO'] }}" placeholder="aa">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">CEDULA</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="CEDULA" value="{{ $info['CEDULA'] }}" placeholder="cedula">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">descripcion</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="descripcion" value="{{ $info['descripcion'] }}" placeholder="Descripcion">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									REGISTRAR
								</button>
								<br>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
