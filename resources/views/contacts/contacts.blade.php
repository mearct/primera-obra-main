@extends('layouts.app')
@section('title', 'Contacts')

@section('content')
    <!-- Header -->
        <div class="heading">
            <h2 class="head-text">
                <span>Contact</span>
                <span>The soul never thinks without an image.</span>
            </h2>
            <ul class="breadcrumb page-transition">
                <li><a href="index.html">home</a></li>
                <li class="current-crumb"><a href="#">Contact</a></li>
            </ul>
        </div>
    <!-- /Header -->
    <!-- Contact -->
        <div class="contact">
            <div class="line"></div>
            <div class="row">
                <div class="content-box">
                    <div class="contact-info col-sm-12 col-md-6">
                        <h2>info contact</h2>
                        <div class="contact-details">
                        <div class="col-md-12">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            SMDC Grace Residencesc Cayetano Avenue, Ususan
                            </div>
                        <div class="col-md-12">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            0286371640
                        </div>
                        <div class="col-md-12">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            danvalencerina@primeraobra.com
                        </div>
                        </div>
                    </div>
                    <div class="contact-form col-sm-12 col-md-6">
                        <h2>keep in touch</h2>
                        <p>Nunc nec iaculis ipsum, a egestas ante.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.189977864383!2d121.05870525070317!3d14.531123282620731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c97ee1a574a5%3A0x817c9ed40d98c524!2sGrace%20Residences%20Tower%202!5e0!3m2!1sen!2sph!4v1663212886562!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Contact -->

@endsection
