<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.head')  
</head>
<body>
  <div class="top-nav">
    @include('partials.nav')  
  </div>
    <!-- Page Header-->
    <header class="masthead border" style="background-image: url('assets/img/home-bg.jpg')">
      <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="site-heading">
                      <h1>Clean Blog</h1>
                      <span class="subheading">A Blog Theme by Start Bootstrap</span>
                  </div>
              </div>
          </div>
      </div>
  </header>  
  @yield('content')
    
    @include('partials.footer')

    @include('partials.footer-sceript')
</body>
</html>