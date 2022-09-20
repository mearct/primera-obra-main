@extends('layouts.app')
@section('title', 'News')

@section('content')

    <!-- Header -->
        <div class="heading">
            <h2  class="head-text">
                <span>New's</span>
            </h2>
        </div>
    <!-- /Header -->
    <!--News-->
        <div class="news">
            <div class="line"></div>
            <div class="row desc">
                <p class="col-md-12">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            </div>
            <article class="news-list page-transition">
                <ul>
                    <li>
                        <a href="https://salcedoauctions.com" class="news-info row">
                            <div class="news-date col-md-2 col-sm-12"><p>17 September 2022</p></div>
                            <div class="news-title col-md-10 col-sm-12">
                                <h2>Still Life by Manny Garibay is up for steal at Salcedo Auctions on Sept 17, 2022 at NEX Tower, Ayala Avenue, Makati City. Online catalog is now available. Click to direct to Salcedo Auctions: .</h2>
                                <span>https://salcedoauctions.com</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </article>
        </div>
    <!--/News-->
@endsection
