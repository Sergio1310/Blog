@extends('template.template')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
          <div class="rounded col-8" id="bar">
            <br>
            <div class="form-row">
              <div class="input-group col-5">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="">Ver</label>
                </div>
                <select class="custom-select" id="">
                  <option selected>Todos</option>
                  <option value="1">Eliminados</option>
                  <option value="2">De alta</option>
                </select>
              </div>
              <div class="input-group col-4">
                <div class="input-group-prepend">
                  <div class="input-group-text">Buscar</div>
                </div>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="input-group col-3">
                <a href="/newpost" class="btn btn-success btn-block">Agregar</a>
              </div>
            </div>
            <br>
          </div>
           <div class="col-8" id="posteos" >
               @foreach($posts as $p)
                <div class="card" id="post">
                  <div class="card-header text-center">
                    {{$p->titulo}} 
                  </div>
                  <div class="card-body text_container" style="color: black;">
                    <blockquote class="blockquote mb-0">
                      @if($p->contenido == null)
                      <p>{{substr($p->contenido, 0,100)}}</p>
                      @else
                      <p>{{substr($p->contenido, 0,100)}}...<a href=""> Ver mas</a></p>
                      @endif
                      <img src="{{$p->imagen}}" style="width: 685px; height: 400px;">
                      <br>
                      <br>
                      @if($p->videoWeb == null)
                      @else
                      <iframe width="685" height="400" src="https://www.youtube.com/embed/{{$p->videoWeb}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      @endif
                      <footer class="blockquote-footer"><cite title="Source Title">{{$p->usuario}}</cite></footer>
                      <br>
                      <input type="hidden" value="{{$p->id}}">
                      <a href="" class="btn btn-danger"><i class="fas fa-heart"></i> {{ $p->nlike }} </a> 
                      <a href="" class="btn btn-secondary"><i class="fas fa-heart-broken"></i> {{ $p->ndislike }}  </a>
                      <a href="" class="btn btn-light"><i class="fas fa-comment-dots"></i> Comentario(s)</a>
                      @if($p->status == 1)
                      <button type="button" id="botonCambiar" class="btn btn-danger " value="{{$p->id}}"><i class="far fa-window-close"> Dar de baja post</i></button>
                      @else
                      <button type="button" id="botonCambiar2" class="btn btn-success " value="{{$p->id}}"><i class="fas fa-upload"></i> Resubir post</button>
                      @endif
                    </blockquote>
                  </div>
                </div>
               @endforeach
           </div>
        </div>
    </div>
<script>
  $('#botonCambiar').on('click', function(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var route = "{{route('cambiar.status')}}";
      var id = $('#botonCambiar').val();
      $.ajax({
        url: route,
          type:     'get',
          data:      {_token: CSRF_TOKEN, id: id},
          success:function(data){
            location.reload();
          }
      });
  });
  $('#botonCambiar2').on('click', function(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var route = "{{route('cambiar.status2')}}";
      var id = $('#botonCambiar2').val();
      $.ajax({
        url: route,
          type:     'get',
          data:      {_token: CSRF_TOKEN, id: id},
          success:function(data){
            location.reload();
          }
      });
  });
 </script>
@endsection