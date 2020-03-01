@extends('template.template')

@section('contenido')
    <div class="container">
        <div class="row">
           <div class="col-8" id="posteos" >
               @foreach($posts as $p)
                <div class="card">
                  <div class="card-header text-center">
                    {{$p->titulo}} 
                  </div>
                  <div class="card-body text_container" >
                    <blockquote class="blockquote mb-0">
                      <p>{{$p->contenido}}</p>
                      <footer class="blockquote-footer"><cite title="Source Title">{{$p->usuario}}</cite></footer>
                      <br>
                      <input type="hidden" value="{{$p->id}}">
                      <a href="" class="btn btn-danger"><i class="fas fa-heart"></i> {{$p->nlike}} </a> 
                      <a href="" class="btn btn-secondary"><i class="fas fa-heart-broken"></i> {{$p->ndislike}}  </a>
                      <a href="" class="btn btn-light"><i class="fas fa-comment-dots"></i> Comentario(s)</a>
                    </blockquote>
                  </div>
                </div>
               @endforeach
           </div>
        </div>
    </div>
@endsection