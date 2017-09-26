<div class="blog-content classic-view">
  <div class="blog-posts">
    @php $posts = App\Post::all(); @endphp

    @foreach($posts as $post)
      <div class="post">
        <div class="post-content">
          <figure class="overlay">
            <a href="{{ $post->link() }}"><img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}" /></a>
          </figure>
          
          <div class="text-center"><span class="category"><em class="purple"><a href="#">Fashion</a></em></span></div>
          <h2 class="post-title text-center"><a href="{{ $post->link() }}">{{ $post->title }}</a></h2>
          <div class="meta text-center"><span class="date">12 Nov 2014</span><span class="author">By <a href="#">Juno</a></span><span class="comments"><a href="#">7 Comments</a></span></div>
          
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia odio. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl et. Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies.</p>
          <p>Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus... </p>
          <div class="text-center"><a href="#" class="more">Continue Reading</a></div>
        </div>
        <!-- /.post-content --> 
        
      </div>
      <!-- /.post -->
      <hr />
    @endforeach
    
  </div>
  <!-- /.blog-posts --> 
  
</div>
<!-- /.classic-view -->