@extends('theme::pages.layout.master')

@section('content')

  <div class="light-wrapper">
    <div class="swiper-container-wrapper image-blog-wide-wrapper blog-carousel-wrapper blog-carousel-wrap">
      <div class="swiper-container image-blog-wide blog-carousel">
        <div class="swiper-wrapper">
          
          @foreach($featured_posts as $post)
            <div class="swiper-slide">
              <figure>
                <div class="caption">
                  <div class="info">
                    <div class="text">
                      <div class="text-left"><span class="category"><em class="blue"><a href="#">Conceptual</a></em></span></div>
                      <h2 class="post-title text-left"><a href="{{ $post->link() }}">{{ $post->title }}</a></h2>
                      <div class="meta text-center"><span class="date">12 Nov 2014</span><span class="author">By <a href="#">Juno</a></span><span class="comments"><a href="#">3 Comments</a></span></div>
                    </div>
                  </div>
                </div>
                <img src="{{ Voyager::image($post->image) }}" alt="" /> </figure>
            </div>
          @endforeach

        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next btn"></div>
      <div class="swiper-button-prev btn"></div>
    </div>
    <div class="container inner">
      <div class="blog row">
        <div class="col-sm-8">
          
          @include('theme::pages.partials.loop')
          
          <div class="grid-view">
            <div class="row blog-posts blog-content">
              <div class="post col-sm-12 col-md-6">
                <figure class="overlay"><a href="#"> <img src="/themes/pages/assets/images/art/b1.jpg" alt="" /></a></figure>
                <div class="post-content">
                  <div class="text-center"><span class="category"><em class="rose"><a href="#">Urban</a></em></span></div>
                  <h3 class="post-title"><a href="blog-post.html">Ligula Tristique Malesuada Venenatis</a></h3>
                  <div class="meta text-center"><span class="date">12 Nov 2014</span><span class="author">By <a href="#">Juno</a></span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 6</a></span></div>
                  <p>Duis mollis, est non commodo luctus nisi erat ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel porttitor.</p>
                  <div class="text-center"><a href="#" class="more">Continue Reading</a></div>
                </div>
                <!-- /.post-content --> 
                
              </div>
              <!-- /.post -->
              <hr />
              <div class="post col-sm-12 col-md-6">
                <figure class="overlay"><a href="#"><img src="/themes/pages/assets/images/art/b2.jpg" alt="" /></a></figure>
                <div class="post-content">
                  <div class="text-center"><span class="category"><em class="orange"><a href="#">Still Life</a></em></span></div>
                  <h3 class="post-title"><a href="blog-post.html">Tellus Adipiscing Nibh Mattis</a></h3>
                  <div class="meta text-center"><span class="date">12 Nov 2014</span><span class="author">By <a href="#">Juno</a></span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 7</a></span></div>
                  <p>Aenean lacinia bibendum nulla sed integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque consectetur.</p>
                  <div class="text-center"><a href="#" class="more">Continue Reading</a></div>
                </div>
                <!-- /.post-content --> 
                
              </div>
              <!-- /.post -->
              <hr />
              <div class="post col-sm-12 col-md-6">
                <figure class="overlay"><a href="#"><img src="/themes/pages/assets/images/art/b3.jpg" alt="" /></a></figure>
                <div class="post-content">
                  <div class="text-center"><span class="category"><em class="forest"><a href="#">Photography</a></em></span></div>
                  <h3 class="post-title"><a href="blog-post.html">Ultricies Fusce Porta Elit</a></h3>
                  <div class="meta text-center"><span class="date">12 Nov 2014</span><span class="author">By <a href="#">Juno</a></span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 5</a></span></div>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
                  <div class="text-center"><a href="#" class="more">Continue Reading</a></div>
                </div>
                <!-- /.post-content --> 
                
              </div>
              <!-- /.post -->
              <hr />
              <div class="post col-sm-12 col-md-6">
                <figure class="overlay"><a href="#"><img src="/themes/pages/assets/images/art/b4.jpg" alt="" /></a></figure>
                <div class="post-content">
                  <div class="text-center"><span class="category"><em class="lime"><a href="#">Nature</a></em></span></div>
                  <h3 class="post-title"><a href="blog-post.html">Fringilla Quam Bibendum Magna</a></h3>
                  <div class="meta text-center"><span class="date">12 Nov 2014</span><span class="author">By <a href="#">Juno</a></span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 3</a></span></div>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Curabitur blandit tempus porttitor pharetra augue.</p>
                  <div class="text-center"><a href="#" class="more">Continue Reading</a></div>
                </div>
                <!-- /.post-content --> 
                
              </div>
              <!-- /.post -->
              
              <hr />
            </div>
            <!-- /.blog-posts --> 
            
          </div>
          <!-- /.grid-view -->
          
          <div class="page-navi meta"> <a href="#" class="pull-left"><i class="ion-android-arrow-back rp5"></i> Older Posts</a> <a href="#" class="pull-right">Newer Posts <i class="ion-android-arrow-forward lp5"></i></a> </div>
          <!-- /.page-navi -->
          <div class="clearfix"></div>
        </div>
        <!-- /.blog-content -->
        
        <aside class="col-sm-4 sidebar">
          <div class="sidebox widget">
            <h3 class="widget-title section-title">About Us</h3>
            <figure> <img src="/themes/pages/assets/images/art/about.jpg" class="img-auto" alt="" /> </figure>
            <div class="divide10"></div>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.</p>
            <ul class="social">
              <li> <a href="#"><i class="ion-social-rss"></i></a> </li>
              <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
              <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
              <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
              <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li>
              <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- /.widget -->
          
          <div class="sidebox widget">
            <h3 class="widget-title section-title">Popular Posts</h3>
            <ul class="post-list">
              <li>
                <figure class="overlay small"> <a href="blog-post.html"><img src="/themes/pages/assets/images/art/a1.jpg" alt="" /> </a> </figure>
                <div class="post-content">
                  <h4 class="post-title"> <a href="blog-post.html">Magna Mollis Ultricies Mauris</a> </h4>
                  <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 3</a></span></div>
                </div>
              </li>
              <li>
                <figure class="overlay small"> <a href="blog-post.html"><img src="/themes/pages/assets/images/art/a2.jpg" alt="" /> </a> </figure>
                <div class="post-content">
                  <h4 class="post-title"> <a href="blog-post.html">Ornare Nullam Risus Cursus</a> </h4>
                  <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 5</a></span></div>
                </div>
              </li>
              <li>
                <figure class="overlay small"> <a href="blog-post.html"><img src="/themes/pages/assets/images/art/a3.jpg" alt="" /> </a> </figure>
                <div class="post-content">
                  <h4 class="post-title"> <a href="blog-post.html">Euismod Nullam Fusce Dapibus</a> </h4>
                  <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#"><i class="ion-chatbubbles"></i> 7</a></span></div>
                </div>
              </li>
            </ul>
            <!-- /.post-list --> 
          </div>
          <!-- /.widget -->
          
          <div class="sidebox widget">
            <h3 class="widget-title section-title">Categories</h3>
            <ul class="list circled">
              <li><a href="#">Lifestyle (21)</a></li>
              <li><a href="#">Photography (19)</a></li>
              <li><a href="#">Journal (16)</a></li>
              <li><a href="#">Works (7)</a></li>
              <li><a href="#">Conceptual (12)</a></li>
              <li><a href="#">Videography</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          
          <div class="sidebox widget">
            <h3 class="widget-title section-title">Tags</h3>
            <ul class="tag-list">
              <li><a href="#" class="btn">Still Life</a></li>
              <li><a href="#" class="btn">Urban</a></li>
              <li><a href="#" class="btn">Journal</a></li>
              <li><a href="#" class="btn">Nature</a></li>
              <li><a href="#" class="btn">Landscape</a></li>
              <li><a href="#" class="btn">Macro</a></li>
              <li><a href="#" class="btn">Workshop</a></li>
              <li><a href="#" class="btn">Photography</a></li>
              <li><a href="#" class="btn">Wedding</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="sidebox widget">
            <h3 class="widget-title section-title">Instagram</h3>
            <div class="tiles instagram">
              <div id="instafeed-widget" class="items row row-offset-0"></div>
            </div>
            <!--/.tiles --> 
          </div>
          <!-- /.widget -->
          <div class="sidebox widget">
            <h4 class="widget-title">Search</h4>
            <form class="searchform" method="get">
              <input type="text" id="s1" name="s" value="Search something" onfocus="this.value=''" onblur="this.value='Search something'">
            </form>
          </div>
          <!-- /.widget --> 
        </aside>
        <!-- /column .sidebar --> 
        
      </div>
      <!-- /.blog --> 
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
@endsection