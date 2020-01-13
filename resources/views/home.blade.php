@extends('layouts.app')

@section('content')
    <!--Slider-->
    <div class="bd-example slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://trumanpartners.com/wp-content/themes/tru/images/sliders/TMAN-Site-Image-Home-Slider1.gif" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>First slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://trumanpartners.com/wp-content/themes/tru/images/sliders/TMAN-Site-Image-Home-Slider2a.gif" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://trumanpartners.com/wp-content/themes/tru/images/sliders/TMAN-Site-Image-Home-Slider3a.gif" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--SECOND SECTION-->
    <div class="second-section-home">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Integrity.gif') }}">
                        <h3>Integrity</h3>
                    </div>
                    
                    <div class="content">
                        <p>Our work stands for itself. We take pride in our history of dedicated, effective client guidance and overall portfolio performance.</p>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Insight.gif') }}">
                        <h3>Insight</h3>
                    </div>
                    
                    <div class="content">
                        <p>Informed by our core values of integrity and objectivity tempered by deep market experience, Truman Partners offers insights that truly enrich our clients.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Courage.gif') }}">
                        <h3>Courage</h3>
                    </div>
                    
                    <div class="content">
                        <p>Our advisors and research staff are committed to delivering the right recommendations irrespective of market whimsy and faddish trends.</p>
                    </div>
                </div>
            </div>
            <div class="margin_top7"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Experience.gif') }}">
                        <h3>Experience</h3>
                    </div>
                    
                    <div class="content">
                        <p>Truman Partners develops long standing relationships with its partners, its clients, and the industry at large. Our longevity gives you the edge.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Objectivity.gif') }}">
                        <h3>Objectivity</h3>
                    </div>
                    
                    <div class="content">
                        <p>As a fee-based wealth advisor, our suggestions are based on unbiased market examination filtered through your objectives.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Transparency.gif') }}">
                        <h3>Transparency</h3>
                    </div>
                    
                    <div class="content">
                        <p>Truman Partners prides itself on simple, direct, timely communication and regular reporting. We are available to discuss your account whenever you like.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--THIRD SECTION-->
    <div class="parallax_section4">
        <div id="sec2" class="container">
            <h1>Truman Partners</h1>
            <p>Truman Partners is a group of fellow expatriates dedicated to your financial success. Our capabilities are typified by a combination of real-word experience, complete transparency, thoughtful investing, and industry leadership.</p>
            <a href="#" class="button transp2">Read More</a>
        </div>
    </div>
@endsection
