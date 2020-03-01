@extends('template.template')

@section('contenido')
    <div class="container">
        <div class="row">
           <div class="col-8" id="posteos" >
               @foreach($posts as $p)
                <div class="card" id="post">
                  <div class="card-header text-center">
                    {{$p->titulo}}
                  </div>
                  <div class="card-body text_container" >
                    <blockquote class="blockquote mb-0">
                      <p>{{$p->contenido}}</p>
                      <footer class="blockquote-footer"><cite title="Source Title">{{$p->usuario}}</cite></footer>
                    </blockquote>
                  </div>
                  <div class="card-footer text-muted">
                    <a href="" class="btn btn-danger"><i class="fas fa-heart"></i> 59 </a> <a href="" class="btn btn-secondary"><i class="fas fa-heart-broken"></i> 5  </a> <a href="" class="btn btn-light"><i class="fas fa-comment-dots"></i> Comentario(s)</a>
                  </div>
                </div>
               @endforeach
           </div>
           <div class="col-3" id="tendencias">
           </div>
        </div>
    </div>
@endsection