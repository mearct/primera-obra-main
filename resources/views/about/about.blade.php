@extends('layouts.app')
@section('title', 'About')

@section('content')

    <!-- Heading -->
        <div class="heading">
            <h2 class="head-text">
                <span>PRIMERA-OBRA</span>
                <span> ART GALLERY</span>
            </h2>

        </div>
    <!-- /Heading -->
    <!-- About Me-->
        <div class="about-me">
            <div class="line"></div>
            <div class="row">
                <div class="content-box">
                    <div class="team-photo col-md-4 col-sm-12">
                        <img src="{{ asset('primera-obra-main/assets/images/primera-obra_logo.jpg') }}" alt="image description">
                    </div>
                    <div class="team-info col-md-8 col-sm-12">
                        <h2>Dan Canullas Valencerina
                        </h2>
                        <span>CEO</span>
                        <p>Inspired by the love and passion for the arts, Primera-Obra is committed to bringing you a step closer to well-curated works of art. At the comfort of your homes, you are now just a click away to owning that dream masterpiece! .</p>

                    </div>
                </div>

            </div>
        </div>
    <!-- /About Me-->

@endsection
