@extends('layouts.base')

@section('content')
    <section id="project">

        <section class="section-top-60 section-bottom-80 section-md-bottom-150">
            <div class="shell">

                {{--<div class="ratio-four-one-md ratio-two-one">--}}
                {{--<div class="content">--}}
                {{--<img src="{{asset('images/template/blog-02.jpg')}}" alt="" class="img-fill-height">--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="post"><span id="title" class="h1 text-uppercase">{{$p_project['name']}}</span>
                    <div class="post-meta">
                        <div class="meta-line">
                            <span class="material-icons-person">
                                <span class="p">
                                    @foreach($p_project['users'] as $i_indexUser => $i_user)
                                        <a href="{{url('team/' . $i_user['user_id'] . '/' . str_replace(' ', '_', $i_user['user_name']))}}">{{$i_user['user_name']}}</a>@if($i_indexUser+1 < count($p_project['users'])),@endif
                                    @endforeach
                                </span>
                            </span>
                            <span class="material-icons-event_available">
                                <time datetime="">
                                    @if ($p_project['end_date'] == null)
                                        {{date('F Y', (strtotime($p_project['start_date']))) . ' ongoing'}}
                                    @else
                                        {{date('F Y', (strtotime($p_project['start_date']))) . ' - ' . date('F Y', (strtotime($p_project['end_date'])))}}
                                    @endif
                                </time>
                            </span>
                        </div>
                        @if(count($p_project['tags']) > 0)
                            <div class="meta-line">
                                <span class="material-icons-label_outline">
                                    <span class="p">
                                        @foreach($p_project['tags'] as $i_indexTags => $i_tag)
                                            <a href="#">{{$i_tag['name']}}</a>@if($i_indexTags+1 < count($p_project['tags'])),@endif
                                        @endforeach
                                    </span>
                                </span>
                            </div>
                        @endif
                    </div>

                    {{--TODO: investigate why commenting long lines (p2/3) causes error--}}
                    <div class="shell"><div class="range section-xs-top-17">
                            {{--<div class="cell-md-8 text-justify">--}}
                            <div class="cell-md-12 text-justify">
                                {!! $p_project['description'] !!}
                            </div>

                            {{--Related papers--}}
                            {{--<div class="cell-md-4 inset-md-left-54">--}}
                                {{--<div>--}}
                                    {{--<h3 class="text-uppercase text-center">Related Papers</h3>--}}
                                    {{--<div class="divider-bottom divider-4 divider-green"></div>--}}
                                {{--</div>--}}

                                {{--<div class="text-left ">--}}
                                    {{--<div class="post paper section-top-15">--}}
                                        {{--<a class="h6" href="#">Probabilistic Forecasting with Seasonal Ensemble Fuzzy Time-Series</a>--}}
                                        {{--<div class="post-meta">--}}
                                            {{--<div class="meta-line">--}}
                                                {{--<span class="material-icons-event"><time datetime="2017-11-01">November 2017</time></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="post paper section-top-15">--}}
                                        {{--<a class="h6" href="#">Fuzzy Multi-Criteria Decision Making Methods with Uncertainty Scenarios</a>--}}
                                        {{--<div class="post-meta">--}}
                                            {{--<div class="meta-line">--}}
                                                {{--<span class="material-icons-event"><time datetime="2017-11-01">November 2017</time></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="post paper section-top-15   ">--}}
                                        {{--<a class="h6" href="#">REGRESSÃO LINEAR APLICADA NA PREDIÇÃO DE SERIES TEMPORAIS FUZZY</a>--}}
                                        {{--<div class="post-meta">--}}
                                            {{--<div class="meta-line">--}}
                                                {{--<span class="material-icons-event"><time datetime="2017-11-01">October 2017</time></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="section-top-15" style="text-align: center">--}}
                                        {{--<a href="#" class="link link--effect-12">More papers</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        </div></div>

                </div>



                {{--GALERY--}}
                @if(count($p_project['images']) > 0)
                    <section data-lightbox="gallery" class="section-top-65  ">
                        <div class="shell">
                            <div class="range ">
                                <div class="cell-sm-6">
                                    <div class="divider divider-2"></div>
                                    <h2 class="section-top-17 section-bottom-15 text-center">Galery</h2>
                                    <div class="divider divider-2 offset-md-top-20"></div>
                                </div>
                                <div class="cell-sm-6">
                                    <!-- Magnific Popup-->
                                    <a data-lightbox="image"
                                       title="{{$p_project['images'][0]['description']}}"
                                       href="{{asset($p_project['images'][0]['file_path'])}}"
                                       class="thumb">
                                        <img src="{{asset($p_project['images'][0]['file_path'])}}" alt="">
                                        <span class="thumb__overlay"></span>
                                        <div class="thumb-caption material-icons-zoom_in"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="range range-condensed offset-top-0">
                                @foreach($p_project['images'] as $i_index => $i_image)
                                    @if(($i_index <= 3) and ($i_index > 0))
                                        <div class="cell-sm-4">
                                            <!-- Magnific Popup-->
                                            <a data-lightbox="image"
                                               title="{{$i_image['description']}}"
                                               href="{{asset($i_image['file_path'])}}"
                                               class="thumb">
                                                <img src="{{asset($i_image['file_path'])}}" alt="">
                                                <span class="thumb__overlay"></span>
                                                <div class="thumb-caption material-icons-zoom_in"></div>
                                            </a>
                                        </div>
                                    @endif
                                    {{--Third row--}}
                                    @if(($i_index >= 4))
                                        <div class="cell-sm-3">
                                            <!-- Magnific Popup-->
                                            <a data-lightbox="image"
                                               title="{{$i_image['description']}}"
                                               href="{{asset($i_image['file_path'])}}"
                                               class="thumb">
                                                <img src="{{asset($i_image['file_path'])}}" alt="">
                                                <span class="thumb__overlay"></span>
                                                <div class="thumb-caption material-icons-zoom_in"></div>
                                            </a>
                                        </div>
                                    @endif



                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif

                {{--RESOURCES--}}
                @if(count($p_project['resources']) > 0)
                    <div class="shell section-xs-top-105">
                        <div id="resources" class="range">
                            <div class="cell-md-3">
                                <div class="divider divider-8"></div>
                                <h1 class="divider-off text-uppercase section-md-27 text-center">Resources<br class="hidden visible-md-block visible-lg-block"></h1>
                                <div class="divider divider-8"></div>
                            </div>

                            <div class="cell-md-9 section-xs-top-35 section-xs-bottom-35">
                                @foreach($p_project['resources'] as $i_resource)
                                    <div class="shell">
                                        <div class="post paper section-bottom-17 range">
                                            <div class="cell-xs-12">
                                                <a class="h3">{{$i_resource['name']}}</a>
                                            </div>
                                            <div class="cell-md-1"></div>
                                            <div class="cell-md-8">
                                                <div class="post-meta">
                                                    <div class="meta-line">
                                                        <span class="material-icons-person">
                                                            <span class="p">
                                                                <a href="team/3/{{$i_resource['user_id']}}">{{$i_resource['user_name']}}</a>
                                                            </span>
                                                        </span>
                                                        <span class="material-icons-event inset-xs-left-30"><time datetime="2017-11-01">{{date('M d, Y', (strtotime($i_resource['updated_at'])))}}</time></span>
                                                    </div>
                                                </div>
                                                <span class="text-justify">
                                                    {{$i_resource['description']}}
                                                </span>
                                            </div>
                                            <div class="cell-md-3">
                                                <div class="download-div post-meta">
                                                    <a href="{{asset($i_resource['file_path'])}}" class="download-btn" download><span class="material-icons-file_download"><span>Download</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                @endif


            </div>
        </section>


    </section>
@endsection