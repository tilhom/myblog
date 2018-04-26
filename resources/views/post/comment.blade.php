 <div class="card">
  <div class="card-block">
    <form action="/posts/{{$post->id}}/comments" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <textarea name="body" id="body" class="form-control" placeholder="Your comment here.."></textarea>
      </div>
      @include('layout.messages')
      <div class="form-group  text-center">
        <button type="submit" class="btn btn-outline-primary">Add comment</button>
      </div>
    </form>
  </div>
</div>