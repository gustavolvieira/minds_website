@extends('layouts.base')

@section('content')
<section id="home">
    <section>
        <!-- RD Parallax-->
        <div class="rd-parallax">
            {{--<div data-speed="0.2" data-type="media" data-url="{{asset('images/banner-inv.jpg')}}" class="rd-parallax-layer">--}}
            {{--<div data-speed="0.2" data-type="media" data-url="{{asset('images/banner.jpg')}}" class="rd-parallax-layer">--}}
            <div data-speed="0.2" data-type="media" data-url="{{asset('images/banner-home-blue2.jpg')}}" class="rd-parallax-layer">
            {{--<div data-speed="0.2" data-type="media" data-url="{{asset('images/Machine-Learning-1_green.jpg')}}" class="rd-parallax-layer">--}}
                <div id="banner-grad"></div>
            </div>
            <div data-speed="0.3" data-type="html" class="rd-parallax-layer">
                <div class="shell section-120 section-sm-top-262 section-sm-bottom-240">
                    <div class="range banner-text-shadow">
                        <div class="cell-md-7 text-left inset-md-right-22">
                            <h1 class="text-white text-bold text-uppercase inset-md-left-70">
                                Welcome to Minds!
                            </h1>
                            <h4 class="text-white text-bold inset-md-left-70 offset-sm-top-20">
                                Our research on the Machine Intelligence and Data Science Lab encompass Computational Intelligence and Machine Learning, Optimization, Data Visualization, Decision Making and <a href="{{url('about')}}" id="banner-link" class="">much more</a>.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Recent News--}}
    <section class="section-top-120 section-bottom-70">
        <div class="shell">
            {{--<div class="range range-sm-reverse">--}}
            <div class="range">
                <div class="cell-sm-6">
                    <div class="divider divider-2"></div>
                    <h2 class="section-top-17 section-bottom-15">Recent <br class="hidden visible-md-block visible-lg-block">News</h2>
                    {{--<span class="small">What is going on on Minds lately<br class="hidden visible-md-block visible-lg-block">	</span>--}}
                    <div class="divider divider-2 offset-md-top-20"></div>

                    <div class="thumbnail offset-top-50 offset-sm-top-20">
                        <div class="news-image-container">
                            <div class="ratio-two-one">
                                <div class="content">
                                    <img src="{{asset('images/vencedores-Teses.jpg')}}" alt="" class="">
                                </div>
                            </div>
                        </div>
                        <div class="caption text-left">
                            <h3>Best Thesis Award</h3>
                            <p>MINDS contributor <a href="#">Victor Nazário</a> received an award for best thesis in 2017. Victor's work, entitled "Multi-objective microgrid storage planning problem using plug-in electric vehicles", was developd during Victor's doctorate degree at PPGEE-UFMG and oriented by Professor <a href="#">Frederico Gadelha</a>.</p>
                            <a href="#" class="link link--effect-12">read more</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 offset-top-45">
                    <div class="thumbnail">
                        <div class="news-image-container"><img src="{{asset('images/time-series.png')}}" alt=""></div>
                        <div class="caption text-left">
                            <h3> Fuzzy Time Series python library published</h3>
                            <p>PyFTS, the fuzzy time series python library developed by fellow MINDS researcher <a href="#">Petrônio Cândido</a> was published today on the package manager pip. The library offers many FTS capabilities and is under active development.</p><a href="#" class="link link--effect-12">read more</a>
                        </div>
                    </div>
                    <div class="thumbnail">
                        <div class="news-image-container"><img src="{{asset('images/upec.jpg')}}" alt=""></div>
                        <div class="caption text-left">
                            <h3> Post-doc at Université Paris-Est Créteil Val-de-Marne</h3>
                            <p class="inset-lg-right-54">Professor <a href="#">Frederico Gadelha</a>, one of MINDS founding member, was accepted for a post-doc scholarship at UPEC, in Paris. Soon he will be enjoying croissants and macarons under the Eifell tower (besides researching at a prestigious university, of course). </p><a href="#" class="link link--effect-12">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Quote--}}
    <section class="bg-images">
        <div class="shell section-80">
            <div class="range range-xs-center">
                <div class="cell-md-8 text-center inset-md-right-22">
                    {{--<div class="divider divider-3"></div>--}}
                    {{--<h2 class="text-white text-bold text-uppercase divider-off offset-top-20 border-bottom">Quote of the Month</h2>--}}
                    <div class="divider-bottom divider-4"></div>
                    <blockquote class="offset-top-38">
                        <div class="h3 text-center text-white">Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less.<br class="hidden visible-lg-block">
                        </div>
                    </blockquote><span class="decoration text-uppercase text-white small text-bold">Marie Curie</span>
                </div>
            </div>
        </div>
    </section>

    {{--Recent Papers--}}
    <section class="section-80">
        <div class="shell">
            <div class="range">
                <div class="cell-md-4">
                    <div class="divider divider-1"></div>
                    <h1 class="divider-off text-uppercase section-md-27">Recent<br class="hidden visible-md-block visible-lg-block">	Papers
                    </h1>
                    <div class="divider divider-1"></div>
                </div>
                <div class="cell-md-8 cell-sm-12 text-left">
                    <div class="post paper">
                        <a class="h3" href="#">Probabilistic Forecasting with Seasonal Ensemble Fuzzy Time-Series</a>
                        <div class="post-meta">
                            <span class="material-icons-person"><span class="p">
                                    <a href="#">Petrônio Cândido de Lima e Silva</a>,
                                    <a href="#">Marcos Alves</a>,
                                    <a href="#">Carlos Alberto Severiano Junior</a>,
                                    <a href="#">Gustavo Linhares Vieira</a>,
                                    <a href="#">Frederico Gadelha Guimarães</a>,
                                    <a href="#">Hossein Javedani Sadaei</a>
                            </span></span>
                            <span>
                                <span class="material-icons-description"><span class="p"><a href="#">Conference: XIII Brazilian Congress on Computational Intelligence</a></span></span>
                                <span class="material-icons-event inset-xs-left-30"><time datetime="2017-11-01">November 2017</time></span>
                            </span>
                        </div>
                    </div>
                    <div class="post paper">
                        <a class="h3" href="#">REGRESSÃO LINEAR APLICADA NA PREDIÇÃO DE SERIES TEMPORAIS FUZZY</a>
                        <div class="post-meta">
                            <span class="material-icons-person"><span class="p">
                                    <a >Francirley Resendes Borges Costa</a>,
                                    <a href="#">Petrônio Cândido de Lima e Silva</a>,
                                    <a href="#">Frederico Gadelha Guimarães</a>,
                                    <span>Lucas Batista</span>
                            </span></span>
                            <span>
                                <span class="material-icons-description"><span class="p"><a href="#">Conference: XIII Simpósio Brasileiro de Automação Inteligente - SBAI 2017</a></span></span>
                                <span class="material-icons-event inset-xs-left-30"><time datetime="2017-11-01">October 2017</time></span>
                            </span>
                        </div>
                    </div>
                    <div class="post paper">
                        <a class="h3" href="#">Fuzzy Multi-Criteria Decision Making Methods with Uncertainty Scenarios</a>
                        <div class="post-meta">
                            <span class="material-icons-person"><span class="p">
                                    <a href="#">Marcos Alves</a>,
                                    <a href="#">Frederico Gadelha Guimarães</a>
                            </span></span>
                            <span>
                                <span class="material-icons-description"><span class="p"><a href="#">Conference: XIII Brazilian Congress on Computational Intelligence</a></span></span>
                                <span class="material-icons-event inset-xs-left-30"><time datetime="2017-11-01">November 2017</time></span>
                            </span>
                        </div>
                    </div>
                    <div class="section-top-27" style="text-align: center">
                        <a href="#" class="link link--effect-12">More papers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection