@extends ('adminlte::frontweb.master_layout.master')

@section('title')
    {{ $level_threet->seo_title or '' }}
@endsection

@section('description')
    {{ $level_threet->meta_description or '' }}
@endsection

@section('keywords')
    {{ $level_threet->meta_tags or '' }}
@endsection

@section('page_css')
    <link href="{{ asset('tools/css/form.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"> --}}
    <style type="text/css">

        .mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {
            color: #FFF;
            right: 5px;
            text-align: right;
            padding-right: 6px;
            width: 100%;
            top: 0px;
        }

        .owl-stage-outer {
            margin: 0 auto;
        }

        @media only screen and (max-width: 767px) {
            .owl-stage-outer {
                width: 100%;
                margin: 0 auto;
            }

        }

        .owl-carousel .owl-item img {

width: auto !important;

}

    </style>
@endsection

@section('main-content')
<button type="button" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

<main id="k12_hsm" class="smooth_scroll_pages wrapper">



    <section class="banner_block hidden-xs" style="background-image: url('{{ asset($level_twot->inside_icon) }}')">

        <div class="banner-img">

                <!--

                <picture>

                    <source media="(max-width:767px)" srcset="tools/img/k-12-education/banner767.jpg">

                    <img src="tools/img/k-12-education/banner.jpg" class="img-responsive" alt="">

                </picture>

-->

                <!--                <img src="tools/img/k-12-education/banner.jpg" class="img-responsive" alt="">-->

                {{-- <img src="{{ asset($level_twot->inside_icon) }}" class="img-responsive hidden-xs" alt=""> --}}

            </div>

        <div class="banner-text">

            <div class="banner-head">

                <img src="{{ asset($level_twot->landing_icon) }}" alt="">

                <h2>{{ $level_twot->title }}<br class="hidden-xs">

                <span>{!! $level_twot->description !!}</span></h2>

            </div>

            <div class="banner-para">

                <p>{{ $level_twot->longInsideDescription }}</p>

            </div>

        </div>

    </section>

    {{-- for mobile --}}


    <section class="banner_block visible-xs" style="background-image: url('{{ asset($level_twot->landing_image) }}')">

        <div class="banner-img">


            </div>

        <div class="banner-text">

            <div class="banner-head">

                <img src="{{ asset($level_twot->landing_icon) }}" alt="">

                <h2>{{ $level_twot->title }}<br class="hidden-xs">

                <span>{!! $level_twot->description !!}</span></h2>

            </div>

            <div class="banner-para">

                <p>{{ $level_twot->longInsideDescription }}</p>

            </div>

        </div>

    </section>

    <!--  insert body content  -->

    <section class="tab-block">

        <div class="container">

            <div class="tab_flex">

                <div class="tab_block">

                    <ul class="tabs-left sideways">

                        @foreach($level_twot->level_three as $lvthree)

                        <li class="<?= Request::is('category/' . $level_onet->slug . '/' . $level_twot->slug . '/' . $lvthree->slug) ? 'active' : 'not-active' ?>">
                            <a href="{{ route('category.get.level-three', ['slug' => $level_onet->slug, 'slug_2' => $level_twot->slug, 'slug_3' => $lvthree->slug]) }}"> 

                            <div class="flex_main">
                                <div class="img_bot">
                                    <img src="{{ $lvthree->icon }}" alt="">
                                </div>
                                <div class="txt">{{ $lvthree->title }}</div>
                            </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>

                </div>

                <div class="content_block">

                    <div class="tab-content">

                        <div class="tab-area">


                            @foreach($cards as $card)

                            <div class="card_box">

                                <div class="img_sec">

                                    @if(!isset($card->video_url))
                                 
                                        {{-- <a href="javascript:void(0);" class="" style="cursor: default;">
                                            <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}"
                                                class="img-responsive">
                                        </a> --}}



                                        <div class="owl-image owl-carousel owl-theme"> 
                                            <div class="col-md-12">
                                                <a href="javascript:void(0);" class="" style="cursor: default;">
                                                    <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}"
                                                        class="img-responsive">
                                                </a>
                                            </div>
                                           
                                            <div class="col-md-12">
                                                <a href="javascript:void(0);" class="" style="cursor: default;">
                                                    <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}"
                                                        class="img-responsive">
                                                </a>
                                            </div>

                                            <div class="col-md-12">
                                                <a href="javascript:void(0);" class="" style="cursor: default;">
                                                    <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}"
                                                        class="img-responsive">
                                                </a>
                                            </div>

                                            <div class="col-md-12">
                                                <a href="javascript:void(0);" class="" style="cursor: default;">
                                                    <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}"
                                                        class="img-responsive">
                                                </a>
                                            </div>
                                           
                                          
                                        </div>



                                    @else
                                       
                                            <div class="owl-image owl-carousel owl-theme"> 
                                                <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}" class="img-responsive">
                                                <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}" class="img-responsive">
                                                <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}" class="img-responsive">
                                                <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}" class="img-responsive">
                                            </div>    
                                            <a href="{{ $card->video_url }}" class="test-popup-link">
                                            <img src="{{ asset('tools/img/k-12/play.png') }}" alt="" class="img-responsive play_btn">
                                             </a>
                                    @endif

                                </div>

                                <div class="content_txt">

                                    <div class="card_head">

                                        <h3>{{ $card->title }}  <button type="button" class="btn btn-primary btn-md float-right">Brochure</button></h3>

                                    </div>

                                    <div class="card-disc">

                                        <div class="expandDiv">
                                            <p class="video-desc">{!!  $card->description !!}</p>
                                        </div>
                                    </div>

                                    <div class="bottom-img">


                                        @if(isset($card->partner_logo))
                                            @if(strcmp("hide", $card->partner_logo_link))
                                                <a href="{{ $card->partner_logo_link }}" target="_blank"><img
                                                            src="{{ $card->partner_logo }}" alt=""
                                                            class="img-responsive vr-img-inline"></a>
                                            @endif
                                        @endif

                                        @if(isset($card->partner_logo_1))
                                @if(strcmp("hide", $card->partner_logo_link_1))
                                    <a href="{{ $card->partner_logo_link_1 }}" target="_blank"><img
                                                src="{{ $card->partner_logo_1 }}" alt=""
                                                class="img-responsive vr-img-inline"></a>
                                @endif
                            @endif

                            @if(isset($card->partner_logo_2))
                                @if(strcmp("hide", $card->partner_logo_link_2))
                                    <a href="{{ $card->partner_logo_link_2 }}" target="_blank"><img
                                                src="{{ $card->partner_logo_2 }}" alt=""
                                                class="img-responsive vr-img-inline"></a>
                                @endif

                            @endif
                            @if(isset($card->partner_logo_3))
                                @if(strcmp("hide", $card->partner_logo_link_3))
                                    <a href="{{ $card->partner_logo_link_3 }}" target="_blank"><img
                                                src="{{ $card->partner_logo_3 }}" alt=""
                                                class="img-responsive vr-img-inline"></a>
                                @endif
                            @endif

                            

                                    </div>

                                </div>

                            </div>

                            @endforeach




                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--  end body content -->

</main>

   
@endsection

@section('page_js')
    <script>
        $('.test-popup-link').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                    }
                }
            }
        });


        // $(window).load(function () {
        //     var owl = $('.owl-carousel');
        //     owl.owlCarousel();
        //     var pos = $(".center-itm").parents(".item.item-inner").attr('data-position');
        //     owl.trigger('to.owl.carousel', [pos]);
        // });


        
        $('.moreless-button').click(function() {

$(this).prev('.moretext').slideToggle();

if ($('.moreless-button').html() == "Read more <span>+</span>") {

    $(this).html("Read less <span>-</span>")

} else {

    $(this).html("Read more <span>+</span>")

}

});

        /*$("#mform").submit(function () {
            document.getElementById("returnURL").value=document.getElementById("returnURL").value+"&lead_id="+document.getElementById("Email").value;
            alert(document.getElementById("returnURL").value);
        });*/


    </script>
@endsection

<style>
    .float-right{float: right;}

    .btn-primary {
    color: #fff;
    background-color: #ff772d !important;
    border-color: #ff772d!important;
}

.btn-primary:focus,.btn-primary.focus {
    color: #fff;
    background-color: #ff772d !important;
    border-color: #ff772d !important;
}

.btn-primary:hover {
    color: #fff;
    background-color: #933807!important;
    border-color: #933807 !important;
}
</style>