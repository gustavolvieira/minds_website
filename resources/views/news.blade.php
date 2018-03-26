@extends('layouts.base')

@section('content')
<section id="news">

    <section class="section-top-86 section-bottom-80 section-md-bottom-150">
        <div class="shell">
            <div class="range range-sm-reverse">
                <div class="cell-md-6 text-center">
                    <div class="divider divider-2"></div>
                    <h2 class="section-top-17 section-bottom-15" id="title">News <br class="hidden visible-md-block visible-lg-block">	& <br class="hidden visible-md-block visible-lg-block">Events
                    </h2>
                    <div class="divider divider-2 offset-md-top-4"></div>
                </div>
                <div class="cell-md-6">
                    <div class="ratio-two-one">
                        <div class="content">
                            <img src="{{asset($p_news[0]['image_url'])}}" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="range offset-top-0">
                @foreach($p_news as $i_index => $i_post)
                    <div class="cell-xs-12 text-left">
                        @if($i_index > 0)
                        <div class="ratio-four-one-md ratio-two-one offset-md-top-90 offset-top-50">
                            <div class="content">
                                <img src="{{asset($i_post['image_url'])}}" alt="" class="">
                            </div>
                        </div>
                        @endif
                        <div class="post"><a href="{{url('news/' . $i_post['id'])}}" class="h3">{{$i_post['title']}}</a>
                            <div class="post-meta">
                                <div class="meta-line">
                                    <span class="material-icons-event_available"><time datetime="{{$i_post['created_at']}}">{{date('d/m/Y', (strtotime($i_post['created_at'])))}}</time></span>
                                    {{--<span class="material-icons-person inset-xs-left-54"><span class="p"><a href="{{url('team/' . $i_post['user_id'])}}">{{$i_post['user_name']}}</a></span></span>--}}
                                </div>
                            </div>
                            {!! explode('</p>', $i_post['text'])[0] .'</p>' !!}
                            <a href="{{url('news/' . $i_post['id'])}}" class="link link--effect-12">read more</a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{--TODO: load more news--}}
            {{--<div class="section-top-60">--}}
                {{--<a href="{{url('news/' . $i_post['id'])}}" class="link link--effect-12">more news</a>--}}
            {{--</div>--}}

        </div>
    </section>

    
</section>
@endsection