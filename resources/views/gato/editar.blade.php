<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form action="{{route('gatos.update',$gato)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="container">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">editar</h5>
		       
		      </div>
		      <div class="modal-body">
		         <div class="form-group">
				    <label for="exampleInputEmail1">Nombre</label>
				    <input type="text" class="form-control" aria-describedby="emailHelp" name="nombre" value="{{$gato->nombre}}" >
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Raza</label>
				    <input type="text" class="form-control" aria-describedby="emailHelp" name="raza" value="{{$gato->raza}}">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Fecha de Nacimiento</label>
				    <input type="date" class="form-control" aria-describedby="emailHelp" name="fecha" value="{{$gato->fecha_nacimiento}}">
				  </div>
		      </div>
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