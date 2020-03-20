@extends('template.template')

@section('contenido')
<div class="container" style="margin-top: 10%;">
	<div class="row  justify-content-center" >
		<div class="col-8">
			<form action="/newpost" method="POST">
	 		@csrf
	 		<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"> Titulo </span>
			  </div>
			  <input type="text" name="titulo" id="titulo" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
			</div>

			<div class="input-group mb-3">
			  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
			  <div class="input-group-append">
			    <span class="input-group-text" id="basic-addon2"> Usuario </span>
			  </div>
			</div>

			<label for="basic-url">URL Video Youtube</label>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon3">Link</span>
			  </div>
			  <input type="text" id="vmovil" name="vmovil" class="form-control" placeholder="https://www.youtube.com/watch?v=y5v56KBLbdA" aria-describedby="basic-addon3">
			</div>

			<label for="basic-url">URL Video Youtube para web</label>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon3">https://www.youtube.com/watch?v=</span>
			  </div>
			  <input type="text" class="form-control" id="vweb" name="vweb" aria-describedby="basic-addon3">
			</div>

			<label for="basic-url">URL de imagen</label>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon3">Link</span>
			  </div>
			  <input type="text" class="form-control" id="imagen" name="imagen" aria-describedby="basic-addon3">
			</div>

			<div class="input-group">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Contenido Post</span>
			  </div>
			  <textarea class="form-control" name="contenido" aria-label=""></textarea>
			</div>
			<br>
			<br>
			<button class="btn btn-success btn-block" type="submit">Agregar Post</button>
			</form>
		</div>
	</div>
</div>
@endsection 