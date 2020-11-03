@extends('layouts.client')

@section('title')
    Trang chủ
@endsection

@section('content')
<!-- Features -->
<div class="section-seperator">
    @include('client.components.banner')
    <div class="content-md container">
        <div class="row">
            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h3>Hospital</h3>
                    <p>Autonomous Mobile robot solutions to transport and deliver lab samples, medication, hospital
                        supplies and much more enabling the staff to focus on ‘caring’</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                    <h3>Hospitality </h3>
                    <p>Dynamic autonomous navigation with round the clock delivery of linen, food supplies and anything
                        a customer could request from the room. Our Multi-point delivery robots are a perfect solution
                        for your hotel which can handle 3 deliveries in one trip.</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <h3>Office</h3>
                    <p>Requires no facility modifications and available with many customization options. Create an
                        efficiency work environment by automating delivery of documents, office facilities,…</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
                    <h3>Retail</h3>
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers. All
                        this made possible even with less staff. Our robots are a boost to your business.</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4 sm-margin-b-50">
                <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".2s">
                    <h3>Logistics</h3>
                    <p>AMR has the capability of moving materials and clinical supplies almost anywhere you need. High
                        payload, cart automatic pickup, inventory tracking, etc. </p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                    <h3>Events</h3>
                    <p>From transporting high-value chips, serving drinks and food, to being an attraction in itself,
                        our robot solutions are a perfect investment for events</p>
                    <a class="link" href="#">Read More</a>
                </div>
            </div>
        </div>
        {{-- end row --}}
    </div>
</div>
<!-- End Features -->

<!-- Work -->


<div class="bg-color-sky-light overflow-h">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>WORKING SCENARIOS</h2>
            </div>
        </div>
        <!--// end row -->

        <!-- Masonry Grid -->
        <div class="masonry-grid">
            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="{{ asset('assets/client/img/800x400/01.jpg') }}"
                            alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Art Of Coding</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x400/01.jpg') }}"
                            alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x300/01.jpg') }}"
                            alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x300/02.jpg') }}"
                            alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x300/03.jpg') }}"
                            alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div  class="masonry-grid-item col-xs-12 col-sm-12 col-md-12">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img style="height: 400px" class="full-width img-responsive" src="{{ asset('assets/client/img/800x400/01.jpg') }}"/>
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
        </div>
        <!-- End Masonry Grid -->
    </div>
</div>
<!-- End Work -->


<!-- Team -->
<div class="bg-color-sky-light">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>ARARBOT ADVANTAGES </h2>
            </div>
        </div>

        <div class="row">
            <div style="margin: 0" class="col-sm-4">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x300/03.jpg') }}"
                                alt="Portfolio Image"> 
                </div>
            </div>
            <div style="margin: 0" class="col-sm-4">
                <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                    <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x300/03.jpg') }}"
                                alt="Portfolio Image">
                </div>
            </div>
            <div style="margin: 0" class="col-sm-4">
                <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".3s">
                    <img class="full-width img-responsive" src="{{ asset('assets/client/img/397x300/03.jpg') }}"
                                alt="Portfolio Image">
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
@endsection