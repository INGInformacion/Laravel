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
								<label class="col-md-4 control-label">FECHA DE NACIMIENTO </label>
									<div class="col-md-6">
										<input type="date" class="form-control" name="F_NAC" value="{{ $info['F_NAC'] }}">
									</div>
							</div>
						
						
							
										<br> <br>
							<div class="form-group">
								<label class="col-md-4 control-label">CEDULA</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="CEDULA" value="{{ $info['CEDULA'] }}" >
									</div>
							</div>
						
								<br> <br>
										<div class="form-group">
											<label class="col-md-4 control-label">DESCRIPCION</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="DESCRIPCION" value="{{ $info['DESCRIPCION'] }}" placeholder="Escribe una breve descripcón">
											</div>
										</div>

									</div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<button type="submit" class="btn btn-primary">
												Aceptar
												</button>
												<br>
												
						</div>
					</div>


					




					</form>
					<table class="listar">
						<tr class="boldcenter"><td>NOMBRE</td><td>APELLIDO</td><td>F.NACIMIENTO</td><td>CEDULA</td><td>DESCRIPCION</td><td>EDITAR</td><td>ELIMINAR</td></tr>
						@foreach(App\Prueba::all() as $prueba)
							<tr><td>{{$prueba->NOMBRE}}</td><td>{{$prueba->APELLIDO}}</td><td>{{$prueba->F_NAC}}</td>
							<td>{{$prueba->CEDULA}}</td><td>{{$prueba->DESCRIPCION}}</td>
							<td><a href="{{route('rol.edit', $prueba->ID)}}">Editar</a></td>
							<td><a href="{{route('rol.destroy', $prueba->ID)}}">Eliminar</a></td></tr>
									
						@endforeach
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection