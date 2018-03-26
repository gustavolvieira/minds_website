@extends('layouts.base')

@section('content')
<section id="person">

    <section>
        <div class="shell">
            <div class="range section-md-top-65 section-sm-top-45 section-xs-top-80 section-top-80">
                <div class="cell-md-4 cell-lg-4 cell-sm-8 col-sm-offset-2 col-md-offset-0">
                    <div class="ratio-one-one">
                        <div class="content">
                            <?php
                                if($p_user['photo_url'] == null){
                                        $p_user['photo_url'] = 'images/defaults/user-image.png';
                                    }
                            ?>
                            <img src="{{asset($p_user['photo_url'])}}" alt="{{$p_user['full_name'] . ' picture'}}" class="img-width">
                        </div>
                    </div>
{{--                    <img src="{{asset($p_user['photo_url'])}}" alt="{{$p_user['full_name'] . ' picture'}}" class="img-width section-md-bottom-27 section-sm-bottom-17">--}}
                    <div class="hidden-sm hidden-xs post text-left section-md-top-27">
                        <div class="post-meta inset-md-left-10">
                            @if($p_user['email'] != null)
                                <div class="meta-line"><span class="material-icons-mail"><span class="p">{{$p_user['email']}}</span></span></div>
                            @endif
                            @if($p_user['phone'] != null)
                                <div class="meta-line"><span class="material-icons-phone"><span class="p">{{$p_user['phone']}}</span></span></div>
                            @endif
                            @if($p_user['affiliation'] != null)
                                <div class="meta-line"><span class="material-icons-account_balance"><span class="p">{{$p_user['affiliation']}}</span></span></div>
                            @endif
                            @if($p_user['lattes_url'] != null)
                                <div class="meta-line"><span class="material-icons-link"><span class="p"><a href="{{$p_user['lattes_url']}}">{{$p_user['lattes_url']}}</a></span></span></div>
                            @endif
                            @if($p_user['researchgate_url'] != null)
                                <div class="meta-line"><span class="material-icons-link"><span class="p"><a href="{{$p_user['researchgate_url']}}">{{$p_user['researchgate_url']}}</a></span></span></div>
                            @endif
                            @if($p_user['webpage_url'] != null)
                                <div class="meta-line"><span class="material-icons-link"><span class="p"><a href="{{$p_user['webpage_url']}}">{{$p_user['webpage_url']}}</a></span></span></div>
                            @endif
                            @if($p_user['country'] != null)
                                <div class="meta-line"><span class="material-icons-flag"><span class="p">{{$p_user['country']}}</span></span></div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="cell-md-8 cell-lg-8 text-left inset-md-left-45 section-md-top-45">
                    <div>
                        <h1 class="text-uppercase">{{$p_user['full_name']}}</h1>
                        <div class="post">
                            <div class="post-meta inset-xs-left-54">
                                @foreach($p_associations as $i_association)
                                    <?php
                                        if($i_association['is_visiting'] == false){
                                            $v_visiting = '';
                                        }
                                        else{
                                            $v_visiting = ', exchange';
                                        }

                                        if(substr($i_association['start_date'],0, 4) == substr($i_association['end_date'],0, 4)){
                                            $v_date = substr($i_association['start_date'],0, 4);
                                        }
                                        elseif ($i_association['end_date'] == null)
                                            $v_date = substr($i_association['start_date'],0, 4) . ' ongoing';
                                        else{
                                            $v_date = substr($i_association['start_date'],0, 4) . ' - ' . substr($i_association['end_date'],0, 4);
                                        }
                                    ?>
                                    <div class="meta-line">
                                        <span class="material-icons-remove"><span class="p">{{$i_association['label'] . ' (' . $v_date . $v_visiting. ')'}}</span></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="section-md-top-27 section-sm-top-17">
                            <p>
                                {!! $p_user['description'] !!}
                            </p>

                        </div>
                    </div>
                </div>

                <div class="cell-md-3 cell-lg-4 hidden-lg visible-sm visible-xs">
                    <div class="post text-left section-sm-top-17">
                        <div class="post-meta inset-left-0">
                            @if($p_user['email'] != null)
                                <div class="meta-line"><span class="material-icons-mail"><span class="p">{{$p_user['email']}}</span></span></div>
                            @endif
                            @if($p_user['phone'] != null)
                                <div class="meta-line"><span class="material-icons-phone"><span class="p">{{$p_user['phone']}}</span></span></div>
                            @endif
                            @if($p_user['lattes_url'] != null)
                                <div class="meta-line"><span class="material-icons-link"><span class="p"><a href="{{$p_user['lattes_url']}}">{{$p_user['lattes_url']}}</a></span></span></div>
                            @endif
                            @if($p_user['researchgate_url'] != null)
                                <div class="meta-line"><span class="material-icons-link"><span class="p"><a href="{{$p_user['researchgate_url']}}">{{$p_user['researchgate_url']}}</a></span></span></div>
                            @endif
                            @if($p_user['webpage_url'] != null)
                                <div class="meta-line"><span class="material-icons-link"><span class="p"><a href="{{$p_user['webpage_url']}}">{{$p_user['webpage_url']}}</a></span></span></div>
                            @endif
                            @if($p_user['country'] != null)
                                <div class="meta-line"><span class="material-icons-flag"><span class="p">{{$p_user['country']}}</span></span></div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            <div class="range section-xs-bottom-70" id="news-papers">

                @if($p_papers == null || $p_relatedNews == null)
                    <div class="cell-md-3 inset-md-right-40">
                    </div>
                @endif
                @if($p_relatedNews != null)
                <div class="cell-md-6 inset-md-right-40 text-center">
                    <div>
                        <div class="divider divider-2"></div>
                        <h2 class="text-uppercase section-top-15">Related News</h2>
                        <div class="divider-bottom divider-4 divider-green"></div>
                    </div>

                    <div class="text-left">
                        @foreach($p_relatedNews as $i_index => $i_post)
                            @if($i_index <= 3)
                                <div class="post paper">
                                    <a class="h5" href="#">{{$i_post['title']}}</a>
                                    <div class="post-meta">
                                        <div class="meta-line"><span class="material-icons-event"><time datetime="{{$i_post['created_at']}}">{{date('d/m/Y', (strtotime($i_post['created_at'])))}}</time></span></div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @if(count($p_relatedNews) > 3)
                            <div class="section-top-15" style="text-align: center">
                                <a href="{{'news?user=' . $p_user['id']}}" class="link link--effect-12">More news</a>
                            </div>
                        @endif
                    </div>
                </div>
                @endif

                @if($p_papers != null)
                <div class="cell-md-6 inset-md-left-40 section-xs-top-27 section-md-top-0 text-center">
                    <div>
                        <div class="divider divider-2"></div>
                        <h2 class="text-uppercase section-top-15">Featured Papers</h2>
                        <div class="divider-bottom divider-4 divider-green"></div>
                    </div>

                    <div class="text-left ">
                        @foreach($p_papers as $i_index => $i_paper)
                            @if($i_index <= 3)
                                <div class="post paper">
                                    <a class="h5" href="#">{{$i_paper['title']}}</a>
                                    <div class="post-meta">
                                        <div class="meta-line"><span class="material-icons-description"><span class="inset-left-10"><a href="#">{{$i_paper['venue']}}</a></span></span><br></div>
                                        <div class="meta-line"><span class="material-icons-event"><time datetime="{{$i_paper['published_at']}}">{{date('d/m/Y', (strtotime($i_post['published_at'])))}}</time></span></div>
                                    </div>
                            </div>
                            @endif
                        @endforeach
                        @if(count($p_papers) > 3)
                            <div class="section-top-15" style="text-align: center">
                                <a href="{{'publications?user=' . $p_user['id']}}" class="link link--effect-12">More papers</a>
                            </div>
                        @endif
                    </div>
                </div>
                @endif

            </div>
            {{--<div class="section-27" style="text-align: left">--}}
                {{--<a href="{{url('team')}}" class="link link--effect-12 ">Back to Team</a>--}}
            {{--</div>--}}
        </div>
    </section>

</section>
@endsection