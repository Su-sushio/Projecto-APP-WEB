@extends('layouts.app')

@section('content')

    
<div class="container">

<h2>Imagens</h2>

        <div id="carouselImages" class="carousel slide" data-ride="carousel">
            
            
            <div class="carousel-inner" >
                @foreach( $images as $photo )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-interval="5000">
                        <img class="d-block w-100" src="/{{ $photo->path }}">
                        <div class="carousel-caption d-none d-md-block">
            
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselImages"  role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
         </div>


<div>

@endsection