@extends ('adminlte::frontweb.master_layout.master')
@section('title')
Edutech- What do we do?
@endsection

@section('description')
Edutech serves educational institutions with education technology solutions in labs, classrooms, libraries, in
educational campuses in Middle East.
@endsection

@section('keywords')
stem education, education solutions, virtual learning management, lecture capture system, vocational training programs,
stem and education, stem for kids, stem program, stem learning, lecture capture, stem technology
@endsection

@section('page_css')
<link href="{{ asset('tools/css/form.css') }}" rel="stylesheet">
<style type="text/css">
.owl-carousel .owl-item img {
    width: auto !important;
}
</style>
@endsection

@section('main-content')
<div class="about-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center no-padd">
                <h1 class="contact-page-heading">
                    <div class="big-contact-c">a</div>
                    <div class="inner-about-heading">about <span class="number font-change">us</span></div>
                    <!-- <div class="para-about-heading">Pioneers in EdTech solutions</div> -->
                </h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 para">
                @if($ip['country_name'] != 'Qatar')
                <p class="about-desc">Envisioning the role of technology in transforming education, we serve educational
                    institutions with hands-on and technology based learning solutions across classrooms, libraries,
                    innovation centers, STEM labs, science and engineering labs in educational campuses and
                    organizations in the Middle East.</p>
                @else
                <p class="about-desc">Envisioning the role of technology in transforming education, we serve educational
                    institutions with hands-on and technology based learning solutions across classrooms,libraries,
                    innovation centers, STEM labs, science and engineering labs in educational campuses and
                    organizations in Qatar.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="about-page-why-bg">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="about-page-why-heading text-center">why <span class="number font-change">edutech?</span></h1>
            </div>
        </div>
    
            <div class="row about-space-btwn">
                <div class="owl-solution owl-carousel owl-theme"> 
                    <div class="col-md-12">
                        <img src="tools/img/why/pioneers.png" alt="" class="img-responsive img-mid">
                        <h3 class="about-why-subhead text-center">EdTech Pioneers</h3>
                        <p class="about-why-desc">Since 1991, we continue to believe in the power of technology to transform the
                            education process and the power of education to build innovative future generations.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="tools/img/why/lifelong.png" alt="" class="img-responsive img-mid">
                        <h3 class="about-why-subhead text-center">Lifelong Learning</h3>
                        <p class="about-why-desc">We believe in lifelong learning and hence provide learning solutions across
                            the spectrum from K-12 Education, Vocational Education, Higher Education and Corporate Learning.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="tools/img/why/deep.png" alt="" class="img-responsive img-mid">
                        <h3 class="about-why-subhead text-center">Deep Understanding</h3>
                        <p class="about-why-desc">Our deep understanding of education and technology systems help us to
                            effectively address learning needs at all levels.</p>
                    </div>
                    <div class="col-md-12">
                        <img src="tools/img/why/effective.png" alt="" class="img-responsive img-mid">
                        <h3 class="about-why-subhead text-center">Customer Success</h3>
                        <p class="about-why-desc">Our primary focus has always been to ensure successful learning outcomes and
                            improved performance for our customers. </p>
                    </div>
                    <div class="col-md-12">
                        <img src="tools/img/why/future.png" alt="" class="img-responsive img-mid">
                        <h3 class="about-why-subhead text-center">Future Forward</h3>
                        <p class="about-why-desc">We continuously think future forward and strive to provide solutions that
                            empower youth and nations to be productive and prosperous in the Fourth Industrial era.</p>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="container-fluid about-page-solution-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="solution-heading text-center">sectors <span class="number">we serve</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="solution_item">
                    {{-- <div class="owl-solution owl-carousel owl-theme"> --}}
                        @foreach($level_ones as $level_one)
                        <div class="item">
                            <a href="{{ route('category.get.level-two', ['slug' => $level_one->slug]) }}">
                                <img src="{{ $level_one->icon }}" class="img-responsive img-mid">
                                <h6 class="why-img-head text-center">{{ $level_one->name }}</h6>
                            </a>
                        </div>
                        @endforeach

                        @php
                        $industrialMainCategories = \App\Models\IndustrialMainCategory::status()->get();
                        @endphp


                        @foreach ($industrialMainCategories as $imc)
                        <div class="item">
                            <a href="{{ route('category.industrial.main', ['slug' => $imc->slug]) }}">
                                <img src="{{ asset($imc->icon) }}" class="img-responsive img-mid">
                                <h6 class="why-img-head text-center">{{ $imc->name }}</h6>
                            </a>
                        </div>
                        @endforeach


                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="container-fluid client-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="partner-heading text-center">our <span class="number">clients</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($ip['country_name'] != 'Qatar')
                    <div class="owl-carousel owl-six owl-theme">

                        <div class="item active">
                            <div class="col-md-12 cutting-border ">
                                <img src="tools/img/clients/1.png" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/5.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/9.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border ">
                                <img src="tools/img/clients/2.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/6.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/10.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border ">
                                <img src="tools/img/clients/3.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/7.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/11.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/4.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/8.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/12.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-md-12 cutting-border right-border">
                                <img src="tools/img/clients/13.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border right-border">
                                <img src="tools/img/clients/17.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border right-border">
                                <img src="tools/img/clients/21.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/14.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/18.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/22.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/15.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/19.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/23.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/16.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/20.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/24.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>


                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/25.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/29.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/33.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border right-border">
                                <img src="tools/img/clients/26.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border right-border">
                                <img src="tools/img/clients/30.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border right-border">
                                <img src="tools/img/clients/34.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/27.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/31.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/35.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/28.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/32.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/36.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>


                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/37.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/41.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border bottom-border">
                                <img src="tools/img/clients/40.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/38.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border">
                                <img src="tools/img/clients/42.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12 cutting-border right-border">
                                <img src="tools/img/clients/39.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-12 cutting-border right-border">
                                <img src="tools/img/clients/43.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>

                    </div>
                    @else
                        <div class="owl-carousel owl-six owl-theme">

                            <div class="item active">
                                <div class="col-md-12 cutting-border ">
                                    <img src="tools/img/qatar-logo/11.png" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border">
                                    <img src="tools/img/qatar-logo/1.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border bottom-border">
                                    <img src="tools/img/qatar-logo/3.jpg" alt="" class="img-responsive img-mid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 cutting-border ">
                                    <img src="tools/img/qatar-logo/10.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border">
                                    <img src="tools/img/qatar-logo/9.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border bottom-border">
                                    <img src="tools/img/qatar-logo/7.jpg" alt="" class="img-responsive img-mid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 cutting-border ">
                                    <img src="tools/img/qatar-logo/2.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border">
                                    <img src="tools/img/qatar-logo/12.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border bottom-border">
                                    <img src="tools/img/qatar-logo/13.jpg" alt="" class="img-responsive img-mid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 cutting-border">
                                    <img src="tools/img/qatar-logo/14.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border">
                                    <img src="tools/img/qatar-logo/15.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border bottom-border">
                                    <img src="tools/img/qatar-logo/16.jpg" alt="" class="img-responsive img-mid">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-12 cutting-border right-border">
                                    <img src="tools/img/qatar-logo/8.jpg" alt="" class="img-responsive img-mid">
                                </div>
                                <div class="col-md-12 cutting-border right-border">
                                    <img src="tools/img/qatar-logo/4.jpg" alt="" class="img-responsive img-mid">
                                </div>
                            </div>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}


<div class="partner-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="partner-heading text-center">our <span class="number">partners</span></h1>
            </div>
        </div>
    </div>
</div>

<div class="partner-bg-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav abt-nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#stem" role="tab"
                            aria-controls="stemeducation" aria-selected="true">STEM Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#engineering" role="tab"
                            aria-controls="engineeringsolutions" aria-selected="false">Engineering Labs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab3" data-toggle="tab" href="#k-12" role="tab"
                            aria-controls="edtechsolutions" aria-selected="false">EdTech Solutions </a>
                    </li>
                    <!-- <li class="nav-item">
                          <a class="nav-link" id="tab4" data-toggle="tab" href="#highereducation" role="tab" aria-controls="highereducation" aria-selected="false">Higher Education</a>
                        </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="partner-bg-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active" id="stem" role="tabpanel" aria-labelledby="tab1">
                        <div class="row">
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/stemsolutions/stem1.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/stemsolutions/stem2.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/stemsolutions/stem3.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/stemsolutions/stem4.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/stemsolutions/stem5.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/stemsolutions/stem6.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/stemsolutions/stem7.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/stemsolutions/stem9.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/stemsolutions/stem10.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/stemsolutions/stem11.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/stemsolutions/stem12.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/stemsolutions/stem13.jpg" alt=""
                                    class="img-responsive img-mid">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="engineering" role="tabpanel" aria-labelledby="tab2">
                        <div class="row">
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/1.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/engineering/2.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/3.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/engineering/4.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/5.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/engineering/6.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/7.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/engineering/8.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/9.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/engineering/10.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/11.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/engineering/12.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/13.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/engineering/14.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/engineering/15.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/engineering/16.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="k-12" role="tabpanel" aria-labelledby="tab3">
                        <div class="row">

                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/edtech/edtech1.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border">
                                <img src="tools/img/partners/edtech/edtech2.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/edtech/edtech3.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border right-border">
                                <img src="tools/img/partners/edtech/edtech4.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech5.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech6.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech7.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech8.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 cutting-border ">
                                <img src="tools/img/partners/edtech/edtech9.jpg" alt="" class="img-responsive img-mid">
                            </div>

                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech10.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech11.jpg" alt="" class="img-responsive img-mid">
                            </div>
                            <div class="col-md-3 cutting-border bottom-border">
                                <img src="tools/img/partners/edtech/edtech12.jpg" alt="" class="img-responsive img-mid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_js')

@endsection