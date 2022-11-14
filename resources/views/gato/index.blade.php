<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<br>
	<br>

	<div class="container">
		<br>
		<div>
			<a class="btn btn-primary" href="{{route('gatos.create')}}" role="button">AGREGAR</a>
		</div>
		<br>

		<h1 class="text-center">Lista de gatos</h1>

		<br>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Raza</th>
		      <th scope="col">Nacimiento</th>
		      <th scope="col">EDITAR</th>
		      <th scope="col">ELIMINAR</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($gatos as $gato)
		    <tr>
		      <th scope="row">{{$gato->id_gato}}</th>
		      <td>{{$gato->nombre}}</td>
		      <td>{{$gato->raza}}</td>
		      <td>{{$gato->fecha_nacimiento}}</td>
		      <td>
		      	<a class="btn btn-warning" href="{{route('gatos.edit',$gato)}}" role="button">EDITAR</a>

		      </td>
		      <td>
		      	<form action="{{route('gatos.destroy',$gato)}}" method="POST">
		      		@csrf
		      		@method('DELETE')
		      		<input class="btn btn-primary" type="submit" value="eliminar">
		      	</form>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		
	</div>
</body>
</html>