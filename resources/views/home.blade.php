@extends('layouts.app')

@section('title')
Home Page
@endsection
@section('content')
<div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>Modern School</h1>
      <p>Welcome to Modern School Website. We are happy because you trust us</p>
      <a class="banner_btn" href="{{url('/about')}}">Read More</a> </div>
  </div>
</div>
<div class="main">
<div class="content_white">
  <h2>Featured Services</h2>
</div>
<div class="featured_content" id="feature">
  <div class="container">
    <div class="row text-center">
      <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-cog fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Easy Contact</a></h3>
        <p class="m_2">It's easy contact with admistrator and teachers in few minutes. You can get access to your profile.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
      <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-comments-o fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Continuation</a></h3>
        <p class="m_2">You can see your child progress throw our secure system and some advices for him.<p>
        <a href="services.html" class="feature_btn">More</a> </div>
      <div class="col-md-3 col-xs-3 feature_grid1"> <i class="fa fa-globe fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Best Teachers</a></h3>
        <p class="m_2">We have the best effecient Teachers who have certifaction on every field.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
      <div class="col-md-3 col-xs-3 feature_grid2"> <i class="fa fa-history fa-3x"></i>
        <h3 class="m_1"><a href="services.html">Place</a></h3>
        <p class="m_2">The Place of teaching is so important so we are interested in place appearance.</p>
        <a href="services.html" class="feature_btn">More</a> </div>
    </div>
  </div>
</div>
<div class="about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="block-heading-two">
          <h2><span>About Our School</span></h2>
        </div>
        <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
        <br>
        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <a class="banner_btn" href="about.html">Read More</a> </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>
</div>
<div class="content_white">
  <h2>Our Great Teachers</h2>
</div>
<div class="highlight-info">
  <div class="overlay spacer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6">
          <img class="teacher-img img-circle" src="images/teachers/teacher1.jpg" />
          <h4>Mr.Ahmed Motaz</h4>
        </div>
        <div class="col-sm-3 col-xs-6">
          <img class="teacher-img img-circle" src="images/teachers/teacher2.jpg" />
          <h4>Ms.Eman Ali</h4>
        </div>
        <div class="col-sm-3 col-xs-6">
          <img class="teacher-img img-circle" src="images/teachers/teacher3.jpg" />
          <h4>Mr.Khaled Ibrahim</h4>
        </div>
        <div class="col-sm-3 col-xs-6">
          <img class="teacher-img img-circle" src="images/teachers/teacher4.jpg" />
          <h4>Ms.Mona Fawzy</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>Best Students</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>The best student in Math</p>
            <p><strong>Mina Atef</strong></p>
          </div>
          <div class="item">
            <p>The best Student in Science</p>
            <p><strong>Ahmed Khaled</strong></p>
          </div>
          <div class="item">
            <p>The best student in Arabic</p>
            <p><strong>Asmaa Ali</strong></p>
          </div>
          <div class="item">
            <p>The best student in English</p>
            <p><strong>Beshoy Nabeih</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
