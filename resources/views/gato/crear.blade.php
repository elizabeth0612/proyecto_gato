<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form action="{{route('gatos.store')}}" method="POST">
		@csrf
		<div class="container">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Agregar</h5>
		       
		      </div>
		      <div class="modal-body">
		         <div class="form-group">
				    <label for="exampleInputEmail1">Nombre</label>
				    <input type="text" class="form-control" aria-describedby="emailHelp" name="nombre" value="{{old('nombre')}}" >
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Raza</label>
				    <input type="text" class="form-control" aria-describedby="emailHelp" name="raza"  value="{{old('raza')}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Fecha de Nacimiento</label>
				    <input type="date" class="form-control" aria-describedby="emailHelp" name="fecha"  value="{{old('fecha')}}">
				  </div>
		      </div>
		      @if (count($errors) > 0)
			    <div class="alert alert-danger">
			    	<p>Corrige los siguientes errores:</p>
			        <ul>
			            @foreach ($errors->all() as $message)
			                <li>{{ $message }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		      <div class="modal-footer">
		       
		        <input type="submit"  class="btn btn-primary" value="GUARDAR">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>

	</div>
	</form>
	
</body>
</html>