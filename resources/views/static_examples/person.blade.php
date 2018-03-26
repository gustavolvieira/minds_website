@extends('layouts.base')

@section('content')
<section id="person">

    <section>
        <div class="shell section-80 section-md-0">
            <div class="range section-md-top-65 section-sm-top-45">
                <div class="cell-md-4 cell-lg-4">
                    <img src="{{asset('images/template/about-05.jpg')}}" alt="" class="img-width section-md-bottom-27 section-sm-bottom-17">
                    <div class="hidden-sm hidden-xs post text-left">
                        <div class="post-meta inset-md-left-10">
                            <span class="material-icons-mail"><span class="p">emailname@institution.br</span></span><br>
                            <span class="material-icons-phone"><span class="p">+55 31 99123 1212</span></span><br>
                            <span class="material-icons-link"><span class="p">Lattes: <a href="#">http://sdasd.com.ce</a></span></span><br>
                            <span class="material-icons-link"><span class="p">ResearchGate: <a href="#">http://sdasd.com.ce</a></span></span><br>
                            <span class="material-icons-link"><span class="p">Teaching: <a href="#">http://sdasd.com.ce</a></span></span><br>
                            <span class="material-icons-flag"><span class="p">Brazil</span></span><br>
                        </div>
                    </div>
                </div>

                <div class="cell-md-8 cell-lg-8 text-left inset-md-left-45 section-md-top-45">
                    <div>
                        <h1 class="text-uppercase">Frederico Gadelha Guimarães</h1>
                        <div class="post">
                            <div class="post-meta inset-xs-left-54">
                                <span class="material-icons-remove"><span class="p">Principal Investigator (2015 ongoing)</span></span><br>
                                <span class="material-icons-remove"><span class="p">PhD Researcher (2013 - 2015)</span></span><br>
                            </div>
                        </div>
                        <div class="section-md-top-27 section-sm-top-17">
                            <p>
                                Dr. Guimarães has been working with the Department of Electrical Engineering at UFMG, Brazil, since 2010. His main research interests are in the field of computational intelligence, time-series forecasting, optimization, including multiobjective optimization, evolutionary computation, and hybrid algorithms. Dr. Guimarães is a member of the IEEE Computational Intelligence Society, the SBIC (Brazilian Society of Computational Intelligence), and founding member of the INCOSE Brazilian Chapter. .
                            </p>

                        </div>
                    </div>
                </div>

                <div class="cell-md-3 cell-lg-4 hidden-lg visible-sm visible-xs">
                    <div class="post text-left">
                        <div class="post-meta inset-left-0">
                            <span class="material-icons-mail"><span class="p">emailname@institution.br</span></span><br>
                            <span class="material-icons-phone"><span class="p">+55 31 99123 1212</span></span><br>
                            <span class="material-icons-link"><span class="p">Lattes: <a href="#">http://sdasd.com.ce</a></span></span><br>
                            <span class="material-icons-link"><span class="p">ResearchGate: <a href="#">http://sdasd.com.ce</a></span></span><br>
                            <span class="material-icons-link"><span class="p">Teaching: <a href="#">http://sdasd.com.ce</a></span></span><br>
                            <span class="material-icons-flag"><span class="p">Brazil</span></span><br>
                        </div>
                    </div>
                </div>

            </div>

            <div class="range section-md-bottom-45" id="news-papers">
                <div class="cell-md-6 inset-md-right-40">
                    <div>
                        <div class="divider divider-2"></div>
                        <h2 class="text-uppercase section-top-15">Related News</h2>
                        <div class="divider-bottom divider-4 divider-green"></div>
                    </div>

                    <div class="text-left">
                        <div class="post paper">
                            <a class="h5" href="#">Fuzzy Time Series python library published</a>
                            <div class="post-meta">
                                {{--<span class="material-icons-bookmark_border"><span class="inset-left-10"><a href="#">News</a></span></span>--}}
                                <span class="material-icons-event"><time datetime="2017-11-01">2017-11-01</time></span>
                            </div>
                        </div>
                        <div class="post paper">
                            <a class="h5" href="#">Best Thesis Award</a>
                            <div class="post-meta">
                                {{--<span class="material-icons-bookmark_border"><span class="inset-left-10"><a href="#">News</a></span></span>--}}
                                <span class="material-icons-event"><time datetime="2017-11-01">2017-11-01</time></span>
                            </div>
                        </div>
                        <div class="post paper">
                            <a class="h5" href="#">Post-doc at Université Paris-Est Créteil Val-de-Marne</a>
                            <div class="post-meta">
                                {{--<span class="material-icons-bookmark_border"><span class="inset-left-10"><a href="#">Event</a></span></span>--}}
                                <span class="material-icons-event"><time datetime="2017-11-01">2017-11-01</time></span>
                            </div>
                        </div>
                        <div class="section-top-15" style="text-align: center">
                            <a href="#" class="link link--effect-12">More news</a>
                        </div>
                    </div>
                </div>

                <div class="cell-md-6 inset-md-left-40 section-xs-top-27 section-md-top-0">
                    <div>
                        <div class="divider divider-2"></div>
                        <h2 class="text-uppercase section-top-15">Featured Papers</h2>
                        <div class="divider-bottom divider-4 divider-green"></div>
                    </div>

                    <div class="text-left ">
                        <div class="post paper">
                            <a class="h5" href="#">Probabilistic Forecasting with Seasonal Ensemble Fuzzy Time-Series</a>
                            <div class="post-meta">
                                <span class="material-icons-description"><span class="inset-left-10"><a href="#">Conference: XIII Brazilian Congress on Computational Intelligence</a></span></span><br>
                                <span class="material-icons-event"><time datetime="2017-11-01">November 2017</time></span>
                            </div>
                        </div>
                        <div class="post paper">
                            <a class="h5" href="#">Fuzzy Multi-Criteria Decision Making Methods with Uncertainty Scenarios</a>
                            <div class="post-meta">
                                <span class="material-icons-description"><span class="inset-left-10"><a href="#">Conference: XIII Brazilian Congress on Computational Intelligence</a></span></span><br>
                                <span class="material-icons-event"><time datetime="2017-11-01">November 2017</time></span>
                            </div>
                        </div>
                        <div class="post paper">
                            <a class="h5" href="#">REGRESSÃO LINEAR APLICADA NA PREDIÇÃO DE SERIES TEMPORAIS FUZZY</a>
                            <div class="post-meta">
                                <span class="material-icons-description"><span class="inset-left-10"><a href="#">Conference: XIII Simpósio Brasileiro de Automação Inteligente - SBAI 2017</a></span></span><br>
                                <span class="material-icons-event"><time datetime="2017-11-01">October 2017</time></span>
                            </div>
                        </div>
                        <div class="section-top-15" style="text-align: center">
                            <a href="#" class="link link--effect-12">More papers</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

</section>
@endsection