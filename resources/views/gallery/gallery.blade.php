@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
    <!-- Header -->
        <div class="heading">
            <h2 class="head-text">
                <span>Primer Obra gallery</span>
            </h2>
        </div>
    <!-- /Header -->
    <!-- Gallery col. 2 Image -->
        <div class="works">
            <div class="line"></div>
            <div class="works-content">
                <ul class="grid list-unstyled row" id="lightgallery">
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_01.png') }}" data-sub-html="<p>>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_01.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-1" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_02.png') }}" data-sub-html="<p>>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_02.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-1" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_03.png') }}" data-sub-html="<p>>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_03.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_04.png') }}" data-sub-html="<p>>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_04.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-1" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_05.png') }}" data-sub-html="<p>>Descript Here</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_05.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_06.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_06.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_07.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_07.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_08.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_08.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_09.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_09.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_10.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_10.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_11.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_11.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_12.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_12.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_13.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_13.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_14.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_14.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_15.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_15.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                    <li class="grid-item col-xs-6 col-sm-6 col-md-6 sort-2" data-src="{{ asset('primera-obra-main/assets/images/gallery/image_16.png') }}" data-sub-html="<p>Descript Here.</p>">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('primera-obra-main/assets/images/gallery/image_16.png') }}" alt="Thumb">
                            <div class="grid-overlay">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    <!-- /Gallery col. 2 Image -->

@endsection
