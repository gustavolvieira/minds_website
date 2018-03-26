@extends('layouts.base')

@section('content')
<section id="about">

    {{--Welcome--}}
    <section id="welcome">
        <div class="shell section-80 section-md-0">
            <div class="range section-md-top-45 section-md-bottom-35">
                <div class="cell-md-3 cell-lg-4">
                    <div class="divider divider-1 hidden-sm hidden-xs"></div>
                    <img src="{{asset('images/logo-white-bg.jpg')}}" alt="" class="img-width section-15">
                    <div class="divider divider-1 hidden-sm hidden-xs"></div>
                </div>
                <div class="cell-md-9 cell-lg-8 text-left inset-md-left-45 flex-left-center">
                    <div>
                        <h1 class="">WELCOME!</h1>
                        <p>
                            The Machine Intelligence and Data Science (MINDS) Laboratory is a research lab at the Department of Electrical Engineering of Universidade Federal de Minas Gerais (UFMG). Founded in 2014 by professors <a href="{{url('team/1')}}">Dr. Frederico Gadelha Guimarães</a> and <a href="{{url('team/2')}}">Dr. Cristiano Leite de Castro</a>, MINDS team now counts with {{$p_currentMembersCount}} members and collaborators and {{$p_alumniCount}} alumni, from {{$p_nationalities}} different countries.
                        </p>
                        <p>
                            MINDS Lab develops multidisciplinary research on the fields of machine learning and computational intelligence, data science, pattern recognition, time-series prediction, optimization, decision-making, robotics, data visualization and data mining. MINDS research projects encompass both in theoretical developments and practical applications in engineering, technology and information sciences.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--Areas--}}
    <section class="section-top-80 section-sm-top-65 section-bottom-80 text-center">
        <div class="shell section-top-17">
            <div class="range">
                <div class="cell-md-3 cell-lg-4">
                    <div class="divider divider-8"></div>
                    <h2 class="divider-off text-uppercase section-md-27">Research<br class="hidden visible-md-block visible-lg-block"></h2>
                    <div class="divider divider-8"></div>
                </div>
                <div class="cell-lg-8 cell-md-9 section-sm-top-80">
                    <div class="range">
                        <div class="cell-md-4 cell-sm-4">
                            <div class="material-icons-grain icon icon-md border text-primary offset-top-45 offset-xs-top-0"></div>
                            <div class="caption">
                                <div class="text-md-left text-center offset-top-16"><a href="{{url('publications?tag=optimization')}}" class="h5">- Optimization</a>
                                    <p>Multiobjective optimization, evolutionary programming, robust optimization and multicriteria decison making.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-4 cell-sm-4">
                            <div class="material-icons-photo_size_select_small icon icon-md border text-primary offset-top-45 offset-xs-top-0"></div>
                            <div class="caption">
                                <div class="text-md-left text-center offset-top-16"><a href="{{url('publications?tag=visualization')}}" class="h5">- Data Visualization</a>
                                    <p>Many objective visualization on high dimensionality problems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-4 cell-sm-4">
                            <div class="material-icons-blur_on icon icon-md border text-primary offset-top-45 offset-xs-top-0"></div>
                            <div class="caption">
                                <div class="text-md-left text-center offset-top-16"><a href="{{url('publications?tag=machine-learning')}}" class="h5">- Machine Learning</a>
                                    <p>Pattern recognition applied to facial expressions and hand gestures; big data algorithms and methods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="range">
                        <div class="cell-md-4 cell-sm-4">
                            <div class="material-icons-android icon icon-md border text-primary"></div>
                            <div class="caption">
                                <div class="text-md-left text-center offset-top-16"><a href="{{url('publications?tag=robotics')}}" class="h5">- Robotics</a>
                                    <p>Robots path planning and multiagent system coordination.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-4 cell-sm-4">
                            <div class="material-icons-insert_chart icon icon-md border text-primary offset-top-45 offset-xs-top-0"></div>
                            <div class="caption">
                                <div class="text-md-left text-center offset-top-16"><a href="{{url('publications?tag=fts')}}" class="h5">- Fuzzy Time Series</a>
                                    <p>Time series prediction applied to solar energy, stock data and smart cities; probabilistic prediction methodologies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-4 cell-sm-4">
                            {{--<div class="material-icons-blur_on icon icon-md border text-primary offset-top-45 offset-xs-top-0"></div>--}}
                            {{--<div class="caption">--}}
                                {{--<div class="text-md-left text-center offset-top-16"><a href="#" class="h5">- Machine Learning</a>--}}
                                    {{--<p>Pattern recognition applied to facial expressions and hand gestures; big data algorithms and methods.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-images">
        <div class="shell section-120 section-sm-top-220 section-sm-bottom-200">
            <div class="range">
                <div class="cell-md-3 text-center cell-xs-6">
                    <div class="count-to">
                        <div data-from="0" data-to="{{$p_years}}" data-speed="1000" class="counter text-primary"></div>
                        <h3>years</h3>
                    </div>
                </div>
                <div class="cell-md-3 text-center cell-xs-6 offset-top-150 offset-xs-top-0">
                    <div class="count-to">
                        <div data-from="0" data-to="{{$p_userCount}}" data-speed="2000" class="counter text-primary"></div>
                        <h3>contributors</h3>
                    </div>
                </div>
                <div class="cell-md-3 text-center cell-xs-6 offset-top-150 offset-md-top-0">
                    <div class="count-to">
                        <div data-from="0" data-to="{{$p_nationalities}}" data-speed="1000" class="counter text-primary"></div>
                        <h3>nationalities</h3>
                    </div>
                </div>
                <div class="cell-md-3 text-center cell-xs-6 offset-top-150 offset-md-top-0">
                    <div class="count-to">
                        <div data-from="0" data-to="9999" data-speed="20000" class="counter text-primary"></div>
                        <h3>coffees</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Collaboration--}}
    <section class="section-top-80 section-bottom-80 section-md-bottom-120 section-md-top-120">
        <div class="shell">
            <div class="range">
                <div class="cell-sm-12 cell-md-4 text-center">
                    <div class="divider divider-2"></div>
                    <h2 class="section-top-17 section-bottom-15">Colaborating<br class="hidden visible-md-block visible-lg-block">	with MINDS
                    </h2>
                    <div class="divider divider-2 offset-md-top-20"></div>
                </div>
                <div class="cell-sm-12 cell-md-8 flex-left-center text-left">
                    <div>
                        <p>
                            At MINDS, we welcome researchers who would like to collaborate and research with us. The Department of Electric Engineering receives applications for the Master program twice a year, and PhD applications any time. Additional information is available at the <a href="https://www.ppgee.ufmg.br/selecao.php">department page</a>. Fell free to contact one of our coordinators if you are interested in working with us.</p>
                        <p>
                            Undergraduate students interested in working with us should talk with any of our coordinators as well.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection