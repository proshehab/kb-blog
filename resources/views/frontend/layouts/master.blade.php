<!DOCTYPE html>
<html lang="en">

  <head>

     @include('frontend.includes.head')

  </head>

  <body>
    @include('frontend.includes.nav')

    

    <!-- Header -->
   

    <!-- Page Content -->
    <!-- Banner Starts Here -->
      
      @yield('banner')
    <!-- Banner Ends Here -->

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @yield('content')
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
            @include('frontend.includes.sidebar')
        </div>
      </div>
    </section>

      @include('frontend.includes.footer')

      @include('frontend.includes.script')
    
  </body>
</html>