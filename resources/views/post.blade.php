@extends('layouts.base')

@section('content')
<section id="post">

    <section class="section-top-60 section-bottom-80 section-md-bottom-150">
        <div class="shell">

            <div class="range offset-top-0">
                <div class="cell-xs-12 text-left">
                    <div class="ratio-two-one">
                        <div class="content">
                            <img src="{{asset($p_post['image_url'])}}" alt="" class="">
                        </div>
                    </div>
                    <div class="post"><a class="h3">{{ $p_post['title'] }}</a>
                        <div class="post-meta">
                            <div class="meta-line">
                                <span class="material-icons-event_available"><time datetime="{{$p_post['created_at']}}">{{date('d/m/Y', (strtotime($p_post['created_at'])))}}</time></span>
                                {{--<span class="material-icons-person inset-xs-left-54"><span class="p"><a href="{{url('team/' . $p_post['user_id'])}}">{{$p_post['user_name']}}</a></span></span>--}}
                            </div>
                        </div>
                        {!! $p_post['text'] !!}
                        <div class="section-top-27">
                            <a href="{{url('news')}}" class="link link--effect-12 ">Back to News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</section>
@endsection