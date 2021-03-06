@extends('layout.app')
@section ('content')
<h1>Posts</h1>
@if (count($posts)>0)

    @foreach ($posts as $post)
                <div class="well">
                  
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}"/>

                        </div>
                        <br><br>
                        <div class="col-md-8 col-sm-8">    
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>

                    <small>created on {{$post->created_at}}</small>
                    <small> by {{strtoupper(substr($post->user->name,0,1)).substr($post->user->name,1,strlen($post->user->name))}}</small>
                </div>
            </div>
            </div>
            <br><br>
     @endforeach
     

@else 
<p>no posts found</p>
@endif

@endsection