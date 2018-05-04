@extends ('layout.blank')

@section ('content')
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
      
             @include('post.post')
      <hr>
      <h2>Comments</h2>
      @if(count($post->comments) )
        <ul>
          @foreach($post->comments as $comment)
          <li>
            <b>{{$comment->user->name}} on {{$comment->created_at->diffForHumans()}}: </b>
            <br>{{$comment->body}}
          </li>
          @endforeach
        </ul>
      @endif
      <hr>
      @if(Auth::check()) 
        @include('post.comment')
      @endif
      <!--    
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
 -->
        </div><!-- /.blog-main -->
@endsection