@extends('layouts.front_base')

@section('content')
    {{-- 3COLUMNS --}}
    <section class="section bg-light">
        <div class="container">
            <div class="row mt-1">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="card border-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                        <div class="card-body p-0">
                            <div class="image-frame image-frame-style-3">
                                <img src="assets/web/img/generic/generic-wide-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="icon-box icon-box-style-8 icon-box-pull-top position-relative">
                                <div class="icon-box-icon bg-light border-0 border-radius-0 w-50 mb-1">
                                    <object class="animated-icon" type="image/svg+xml" data="assets/web/vendor/linear-icons/tag.svg" width="42" style="height: 42px; opacity: 1;"></object>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h2 class="text-4">Brand Solutions</h2>
                                    </div>
                                    <p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                    <a href="#" class="btn btn-link font-weight-semibold text-decoration-none align-items-center text-0 d-inline-flex">VIEW MORE <i class="fas fa-angle-right text-3 ml-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="card border-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                        <div class="card-body p-0">
                            <div class="image-frame image-frame-style-3">
                                <img src="assets/web/img/generic/generic-wide-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="icon-box icon-box-style-8 icon-box-pull-top position-relative">
                                <div class="icon-box-icon bg-light border-0 border-radius-0 w-50 mb-1">
                                    <object class="animated-icon" type="image/svg+xml" data="assets/web/vendor/linear-icons/tablet.svg" width="42" style="height: 42px; opacity: 1;"></object>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h2 class="text-4">Mobile Apps</h2>
                                    </div>
                                    <p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                    <a href="#" class="btn btn-link font-weight-semibold text-decoration-none align-items-center text-0 d-inline-flex">VIEW MORE <i class="fas fa-angle-right text-3 ml-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                        <div class="card-body p-0">
                            <div class="image-frame image-frame-style-3">
                                <img src="assets/web/img/generic/generic-wide-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="icon-box icon-box-style-8 icon-box-pull-top position-relative">
                                <div class="icon-box-icon bg-light border-0 border-radius-0 w-50 mb-1">
                                    <object class="animated-icon" type="image/svg+xml" data="assets/web/vendor/linear-icons/magnifier.svg" width="42" style="height: 42px; opacity: 1;"></object>
                                </div>
                                <div class="icon-box-info">
                                    <div class="icon-box-info-title">
                                        <h2 class="text-4">SEO Optimization</h2>
                                    </div>
                                    <p>Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                    <a href="#" class="btn btn-link font-weight-semibold text-decoration-none align-items-center text-0 d-inline-flex">VIEW MORE <i class="fas fa-angle-right text-3 ml-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- DATA INFO --}}
    <div class="section section-height-2 bg-primary appear-animation" data-appear-animation="fadeIn" data-appear-animation-duration="1s">
        <div class="container">
            <div class="counters counters-light">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="counter">
                            <strong data-to="25000" data-append="+">0</strong>
                            <label class="font-weight-light">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="counter">
                            <strong data-to="15">0</strong>
                            <label class="font-weight-light">Years in Business</label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="counter">
                            <strong data-to="352">0</strong>
                            <label class="font-weight-light">Answered Tickets</label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="counter">
                            <strong data-to="178">0</strong>
                            <label class="font-weight-light">Development Hours</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- PERSONAL INFO --}}
    <section class="section pb-0">
        <div class="container">
            <div class="row text-center pb-2 mb-4">
                <div class="col">
                    <div class="overflow-hidden">
                        <span class="top-sub-title text-color-primary d-block appear-animation" data-appear-animation="maskUp">LOREM IPSUM DOLOR SIT</span>
                    </div>
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Services & Features</h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="lead appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-5 mb-5">
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-1-5 mb-4">
                    <div class="card card-style-2 card-style-3 bg-light-5 border-0 text-center appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <div class="card-body p-4">
                            <i class="lnr lnr-database text-color-dark text-10"></i>
                            <h3 class="font-weight-bold text-2 mt-2">DATABASE</h3>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-1-5 mb-4">
                    <div class="card card-style-2 card-style-3 bg-light-5 border-0 text-center appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <div class="card-body p-4">
                            <i class="lnr lnr-earth text-color-dark text-10"></i>
                            <h3 class="font-weight-bold text-2 ws-nowrap mt-2">GLOBALIZATION</h3>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-1-5 mb-4">
                    <div class="card card-style-2 card-style-3 bg-light-5 border-0 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="card-body p-4">
                            <i class="lnr lnr-bug text-color-dark text-10"></i>
                            <h3 class="font-weight-bold text-2 mt-2">BUG FIXES</h3>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-1-5 mb-4 mb-md-0">
                    <div class="card card-style-2 card-style-3 bg-light-5 border-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="card-body p-4">
                            <i class="lnr lnr-heart text-color-dark text-10"></i>
                            <h3 class="font-weight-bold text-2 mt-2">PERFORMANCE</h3>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-md-5 col-lg-4 col-xl-1-5">
                    <div class="card card-style-2 card-style-3 bg-light-5 border-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="card-body p-4">
                            <i class="lnr lnr-cloud text-color-dark text-10"></i>
                            <h3 class="font-weight-bold text-2 mt-2">CLOUD</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-4">
                    <div class="icon-box icon-box-style-4 mb-4 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="icon-box-icon bg-primary">
                            <i class="lnr lnr-tablet"></i>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <h4 class="text-2">RESPONSIVE DESIGN</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-style-4 mb-4 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="icon-box-icon bg-primary">
                            <i class="lnr lnr-magic-wand"></i>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <h4 class="text-2">FULLY CUSTOMIZABLE</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="icon-box icon-box-style-4 mb-4 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <div class="icon-box-icon bg-primary">
                            <i class="lnr lnr-layers"></i>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <h4 class="text-2">PARALLAX EFFECTS</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-style-4 mb-4 mb-lg-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <div class="icon-box-icon bg-primary">
                            <i class="lnr lnr-briefcase"></i>
                        </div>
                        <div class="icon-box-info">
                            <div class="icon-box-info-title">
                                <h4 class="text-2">PORTFOLIO LAYOUTS</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-right pr-md-0 overflow-hidden">
                    <img src="assets/web/img/others/man-1.png" class="img-fluid appear-animation" alt="" data-appear-animation="fadeInUpShorter" />
                </div>
            </div>
        </div>
    </section>
@endsection