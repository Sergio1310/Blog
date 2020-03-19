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
                      <iframe width="685" height="400" src="https://www.youtube.com/embed/{{$p->videoWeb}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <footer class="blockquote-footer"><cite title="Source Title">{{$p->usuario}}</cite></footer>
                      <br>
                      <input type="hidden" value="{{$p->id}}">
                      <a href="" class="btn btn-danger"><i class="fas fa-heart"></i> {{$p->nlike}} </a> 
                      <a href="" class="btn btn-secondary"><i class="fas fa-heart-broken"></i> {{$p->ndislike}}  </a>
                      <a href="" class="btn btn-light"><i class="fas fa-comment-dots"></i> Comentario(s)</a>
                      @if($p->status == 1)
                      <a href="" class="btn btn-danger "><i class="far fa-window-close"> Dar de baja post</i></a>
                      @else
                      <a href="" class="btn btn-success"><i class="fas fa-upload"></i> Resubir post</a>
                      @endif
                    </blockquote>
                  </div>
                </div>
               @endforeach
           </div>
        </div>
    </div>
@endsection