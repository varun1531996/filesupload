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
    <link href="{{ asset('path/to/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('path/to/owl.theme.default.min.css') }}" rel="stylesheet">
    <style>
        /* Carousel container */
        .owl-carousel {
            position: relative;
            overflow: hidden; /* Hide overflow to maintain shadow effect */
        }

        /* Shadow effect for left and right sides */
        .owl-carousel::before,
        .owl-carousel::after {
            content: '';
            position: absolute;
            top: 0;
            width: 20px; /* Width of shadow area */
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.3), transparent);
            z-index: 10;
            pointer-events: none; /* Ensure shadows do not interfere with interactions */
        }

        .owl-carousel::after {
            right: 0;
            background: linear-gradient(to left, rgba(0,0,0,0.3), transparent);
        }

        /* Style for carousel images */
        .owl-carousel .owl-item img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Style for navigation arrows */
        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .owl-prev, .owl-next {
            background: rgba(0, 0, 0, 0.5);
            color: #FFF;
            border: none;
            padding: 10px;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
        }

        .owl-prev:hover, .owl-next:hover {
            background: rgba(0, 0, 0, 0.8);
        }
    </style>
@endsection

@section('main-content')
<button type="button" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

<main id="k12_hsm" class="smooth_scroll_pages wrapper">

    <section class="banner_block hidden-xs" style="background-image: url('{{ asset($level_twot->inside_icon) }}')">
        <div class="banner-img"></div>
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

    {{-- For mobile --}}
    <section class="banner_block visible-xs" style="background-image: url('{{ asset($level_twot->landing_image) }}')">
        <div class="banner-img"></div>
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

    <!-- Insert body content -->
    <section class="tab-block">
        <div class="container">
            <div class="tab_flex">
                <div class="tab_block">
                    <ul class="tabs-left sideways">
                        @foreach($level_twot->level_three as $lvthree)
                        <li class="{{ Request::is('category/' . $level_onet->slug . '/' . $level_twot->slug . '/' . $lvthree->slug) ? 'active' : 'not-active' }}">
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
                                    <div class="owl-solution owl-carousel owl-theme">
                                        @for ($i = 0; $i < 4; $i++)
                                        <a href="javascript:void(0);" class="" style="cursor: default;">
                                            <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}" class="img-responsive">
                                        </a>
                                        @endfor
                                    </div>
                                    @else
                                    <a href="{{ $card->video_url }}" class="test-popup-link">
                                        <img src="{{ $card->custom_thumbnail }}" alt="{{ $card->title }}" class="img-responsive">
                                        <img src="{{ asset('tools/img/k-12/play.png') }}" alt="" class="img-responsive play_btn">
                                    </a>
                                    @endif
                                </div>
                                <div class="content_txt">
                                    <div class="card_head">
                                        <h3>{{ $card->title }}</h3>
                                    </div>
                                    <div class="card-disc">
                                        <div class="expandDiv">
                                            <p class="video-desc">{!! $card->description !!}</p>
                                        </div>
                                    </div>
                                    <div class="bottom-img">
                                        @foreach(['partner_logo', 'partner_logo_1', 'partner_logo_2', 'partner_logo_3'] as $logo)
                                            @if(isset($card->$logo) && strcmp("hide", $card->{'partner_logo_link_' . $loop->index}) !== 0)
                                                <a href="{{ $card->{'partner_logo_link_' . $loop->index} }}" target="_blank">
                                                    <img src="{{ $card->$logo }}" alt="" class="img-responsive vr-img-inline">
                                                </a>
                                            @endif
                                        @endforeach
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
    <!-- End body content -->
</main>
@endsection

@section('page_js')
    <script src="{{ asset('path/to/jquery.min.js') }}"></script>
    <script src="{{ asset('path/to/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.owl-solution').owlCarousel({
                items: 1, // Show one image at a time
                loop: true, // Loop through items
                nav: true, // Show navigation arrows
                dots: false, // Disable pagination dots
                navText: ['<', '>'], // Customize navigation text
                autoplay: false, // Disable autoplay if not needed
                autoplayHoverPause: true // Pause autoplay on hover
            });

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
        });
    </script>
@endsection
