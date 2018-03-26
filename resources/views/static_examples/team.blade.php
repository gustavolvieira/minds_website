@extends('layouts.base')

@section('content')
    <section id="team">

        <section class="section-80">
            <div class="shell">
                <div class="range">
                    <div class="cell-sm-12 section-xs-bottom-27">
                        <div class="divider divider-2"></div>
                        <h1 class="divider-off text-uppercase section-md-top-17">Principal Investigators</h1>
                        <div class="divider-bottom divider-4 divider-green"></div>
                    </div>
                    <div class="cell-md-4 col-md-offset-1 cell-sm-6">
                        <div class="text-md-left text-left">
                            <a href="{{url('person_example')}}">
                                <img src="{{asset('images/template/about-05.jpg')}}" alt="">
                                <h5 class="offset-top-16">Frederico Gadelha Guimarães</h5>
                            </a>
                            <p class="offset-top-5 line-height"> Dr. Guimarães has been working with the Department of Electrical Engineering at UFMG, Brazil, since 2010. His main research interests are in the field of computational intelligence, time-series forecasting, optimization, including multiobjective optimization, evolutionary computation, and hybrid algorithms. Dr. Guimarães is a member of the IEEE Computational Intelligence Society, the SBIC (Brazilian Society of Computational Intelligence), and founding member of the INCOSE Brazilian Chapter.
                            </p>
                        </div>
                    </div>
                    <div class="cell-md-4 col-md-offset-2 cell-sm-6">
                        <div class="text-md-left text-left">
                            <a href="#">
                                <img src="{{asset('images/template/about-04.jpg')}}" alt="" class="">
                                <h5 class="offset-top-16">cristiano leite de castro</h5>
                            </a>
                            <p class="offset-top-5 line-height">Possui graduação em Ciência da Computação (2001) pela Universidade Federal de Lavras (UFLA), mestrado e doutorado em Engenharia Elétrica (2004 e 2011) pela Universidade Federal de Minhas Gerais (UFMG), ambos na área de concentração Sistemas de Computação e Telecomunicações. Iniciou a carreira como docente do Ensino Superior em 2004 atuando nas seguintes instituições: UNIBH, PUCMinas e UFLA (entre 2007 e 2013). Atualmente, é professor adjunto no Departamento de Engenharia Elétrica da UFMG. Tem experiência na área de Inteligência Computacional, atuando principalmente nos seguintes temas: agrupamento e previsão de séries temporais, classificação de padrões com dados desbalanceados e não-estacionários (concept drift) e projeto de algoritmos incrementais de aprendizagem de máquina.</p>
                        </div>
                    </div>
                </div>

                {{--Researchers--}}
                <div class="range section-top-35">
                    <div class="cell-md-3">
                        <div class="divider divider-8"></div>
                        <h1 class="divider-off text-uppercase section-md-27">Researchers<br class="hidden visible-md-block visible-lg-block"></h1>
                        <div class="divider divider-8"></div>
                    </div>
                    <div class="cell-md-9 section-xs-top-80">
                        <div class="range">
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-03.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-05.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-06.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-03.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Masters Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Masters Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-05.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Masters Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-06.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Undergraduate Researcher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Collaborators--}}
                <div class="range range-md-reverse">
                    <div class="cell-md-4">
                        <div class="divider divider-7"></div>
                        <h1 class="divider-off text-uppercase section-md-27">Collaborators<br class="hidden visible-md-block visible-lg-block"></h1>
                        <div class="divider divider-7"></div>
                    </div>
                    <div class="cell-md-8 section-xs-top-80">
                        <div class="range">
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-03.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Maria</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Universidad de Colombia</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Hussein </h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-05.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-06.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-4 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Alumni--}}
                <div class="range">
                    <div class="cell-md-3">
                        <div class="divider divider-8"></div>
                        <h1 class="divider-off text-uppercase section-md-27">Alumni<br class="hidden visible-md-block visible-lg-block"></h1>
                        <div class="divider divider-8"></div>
                    </div>
                    <div class="cell-md-9 section-xs-top-80">
                        <div class="range">
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-03.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD, 2013</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD, 2012</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-05.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Doctor Degree, 2015</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-06.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">Masters Degree, 2016</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-03.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-05.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-06.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-03.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                            <div class="cell-md-3 cell-sm-6">
                                <div class="text-md-left text-left">
                                    <a href="#">
                                        <img src="{{asset('images/template/about-04.jpg')}}" alt="">
                                        <h5 class="offset-top-16">Person 1</h5>
                                    </a>
                                    <p class="offset-top-5 line-height">PhD Researcher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection