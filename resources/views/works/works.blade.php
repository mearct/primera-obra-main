@extends('layouts.app')
@section('title', 'Works')

@section('content')
    <!-- Header -->
        <div class="heading">
            <h2 class="head-text">
                <span>work's</span>
            </h2>
        </div>
    <!-- /Header -->
    <!--Works-->
        <div class="works">
            <div class="line"></div>
            <div class="works-content page-transition">
                <ul class="grid">
                    <li class="grid-item col-md-6 col-sm-6 col-xs-12 sort-1">
                        <a href="project-image.html">
                            <img src="{{ asset('primera-obra-main/assets/images/gallery/image_01.png') }}" alt="img-desc">
                            <div class="grid-overlay">
                                <div class="work-text">
                                    <span class="work-cat">Poster</span>
                                    <div class="work-name">
                                        <h3>Lorem Ipsum</h3>
                                        <span class="triangle">
                                            <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-md-6 col-sm-6 col-xs-12 sort-2">
                        <a href="project-image.html">
                            <img src="{{ asset('primera-obra-main/assets/images/gallery/image_02.png') }}" alt="img-desc">
                            <div class="grid-overlay">
                                <div class="work-text">
                                    <span class="work-cat">Poster</span>
                                    <div class="work-name">
                                        <h3>Lorem Ipsum</h3>
                                        <span class="triangle">
                                            <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-md-6 col-sm-6 col-xs-12 sort-1">
                        <a href="project-image.html">
                            <img src="{{ asset('primera-obra-main/assets/images/gallery/image_03.png') }}" alt="img-desc">
                            <div class="grid-overlay">
                                <div class="work-text">
                                    <span class="work-cat">Poster</span>
                                    <div class="work-name">
                                        <h3>Lorem Ipsum</h3>
                                        <span class="triangle">
                                            <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-md-6 col-sm-6 col-xs-12 sort-2">
                        <a href="project-image.html">
                            <img src="{{ asset('primera-obra-main/assets/images/gallery/image_04.png') }}" alt="img-desc">
                            <div class="grid-overlay">
                                <div class="work-text">
                                    <span class="work-cat">Poster</span>
                                    <div class="work-name">
                                        <h3>Lorem Ipsum</h3>
                                        <span class="triangle">
                                            <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <!--/Works-->

@endsection
