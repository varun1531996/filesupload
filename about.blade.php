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

@if(count($aboutUs) > 0)
<div class="about-page-why-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about-page-why-heading text-center">why <span class="number font-change">edutech?</span></h1>
            </div>
        </div>
            <div class="row about-space-btwn">
                <div class="owl-solution owl-carousel owl-theme"> 
                    @foreach($aboutUs as $val)
                    <div class="col-md-12">
                        <img src="{{$val->img_url}}" alt="" class="img-responsive img-mid">
                        <h3 class="about-why-subhead text-center">{{$val->name}}</h3>
                        <p class="about-why-desc">{!! $val->description !!}</p>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-12">
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
                    </div> --}}
                </div>
            </div>
    </div>
</div>
@endif

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
                            @if(count($stemEducation)>0)
                                @foreach($stemEducation as $val)
                                <div class="col-md-3 cutting-border ">
                                    <img src="{{$val->logo}}" alt=""
                                        class="img-responsive img-mid">
                                </div>
                                @endforeach
                            @else    
                                <div class="alert alert-danger" role="alert">
                                There is no partners
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane fade" id="engineering" role="tabpanel" aria-labelledby="tab2">
                        <div class="row">
                            @if(count($engineeringLabs)>0)
                                @foreach($engineeringLabs as $val)
                                <div class="col-md-3 cutting-border ">
                                    <img src="{{$val->logo}}" alt=""
                                        class="img-responsive img-mid">
                                </div>
                                @endforeach
                            @else    
                            <div class="alert alert-danger" role="alert">
                                There is no partners
                              </div>
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane fade" id="k-12" role="tabpanel" aria-labelledby="tab3">
                        <div class="row">

                            @if(count($edtechSolutions)>0)
                                @foreach($edtechSolutions as $val)
                                <div class="col-md-3 cutting-border ">
                                    <img src="{{$val->logo}}" alt=""
                                        class="img-responsive img-mid">
                                </div>
                                @endforeach
                            @else    
                                <div class="alert alert-danger" role="alert">
                                There is no partners
                                </div>
                            @endif
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