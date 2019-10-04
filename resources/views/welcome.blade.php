@section('titulo')
R.R.H.H
@endsection

@extends('plantilla.main')

@section('contenido')

<div class="container">

  <div align="center" class="container-fluid">

    <h1>RECURSOS HUMANOS </h1>

    <!--<img src="{{asset('img/recurso.jpg')}}" width="50%" height="40%">	-->


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner" role="listbox">


        <div class="item active">
          <img class="first-slide" src="{{asset('img/recurso.png')}}" alt="First slide">
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('img/recurso02.png')}}" alt="Third slide">
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('img/recurso3.png')}}" alt="Third slide">
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('img/recurso4.png')}}" alt="Third slide">
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('img/recurso5.png')}}" alt="Third slide">
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('img/recurso6.png')}}" alt="Third slide">
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('img/recurso7.png')}}" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



  </div>


</div>


@endsection