@extends ('inicio')
@section('title','Registrar Empleados')

@section ('contenido')

{!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
	<div style="margin-left: 400px; margin-top: 20px;">
		<div  align="left" style="font-family: sans-serif;color:#000000">

            	<div class="col-lg-1"></div>
	            	<div class="col-lg-5 col-md-5 col-sm-5 mbform-group" >
	            		<label><strong>Nombre </strong></label>
						<input type="text" name="name" placeholder="Nombre " class="form-control" required="">
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 form-group">
	            		<label><strong>Gmail</strong></label>
						<input type="email" name="email" placeholder="email" class="form-control" required="" >
					</div>

        </div>
        <div  align="left" style="font-family: sans-serif;color:#000000">
            <div class="box">
            	<div class="col-lg-1"></div>
	            	<div class="col-lg-5 col-md-5 col-sm-5 form-group">
	            		<label><strong>Contraseña</strong></label>
						<input type="password" name="password" placeholder="contraseña" class="form-control" required="">

					</div>
            </div>
        </div>
        <div  align="left" style="font-family: sans-serif;color:#000000">
            <div class="box">
            		<div class="col-lg-1"></div>
	            	<div class="col-lg-3 col-md-5 col-sm-10 form-group" style="margin-top: 15px;">
						{!! Form::submit('Registrar Cliente',['type'=>'button','class'=>'btn btn-primary btn-lg btn-block'])!!}
					</div>
            </div>
        </div>
	</div>
	
	
@endsection


