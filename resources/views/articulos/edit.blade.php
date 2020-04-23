@extends ('inicio')
@section ('title','Editar Articulo: '.$articulo->descripcion)

@section ('contenido')
	
	{!! Form::open(['route'=>['articulos.update',$user],'method'=>'PUT']) !!}
		
				<br>
		<div class="row" align="left" style="font-family: sans-serif;color:#000000">
            <div class="box">
            	<div class="col-lg-1"></div>
	            	<div class="col-lg-5 col-md-5 col-sm-5 mbform-group" >
						{!! Form::label('name','descripcion')!!}
						{!! Form::text('descripcion',$articulo->descripcion,['class'=>'form-control','placeholder'=>'Nombre Completo','required'=>''])!!}
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 form-group">
						{!! Form::label('precio','Precio')!!}
						{!! Form::text('precio',$articulo->precio,['class'=>'form-control','placeholder'=>'Email','required'])!!}
					</div>
            </div>
        </div>
        <div class="row" align="left" style="font-family: sans-serif;color:#000000">
            <div class="box">
            	<div class="col-lg-1"></div>
	            	<div class="col-lg-5 col-md-5 col-sm-5 form-group">
						{!! Form::label('stock','Contraseña') !!}
						{!! Form::password('password',['class'=>'form-control','placeholder'=>'*******','required']) !!}
					</div>
            </div>
        </div>
        <div class="row" align="center" style="font-family: sans-serif;">
            <div class="box">
            	<div class="col-lg-2"></div>
            	<div class="col-lg-2"></div>
            	<div class="col-lg-2"></div>
				<div class="col-lg-2"></div>
				<div class="col-lg-1"></div>
	            	<div class="col-lg-2 col-md-5 col-sm-10 form-group">
	            		<a href="" onclick="return confirm('¿Segura que desea editarlo?')">
						{!! Form::submit('Editar',['type'=>'button','class'=>'btn btn-primary btn-lg btn-block'])!!}
						</a>
					</div>
            </div>
        </div>
		<br><br><br><br><br><br><br><br> 
	{!! Form::close() !!}

@endsection
