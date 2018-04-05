@extends('layouts.base')

@section('content')
<section id="resources">

    <section class="section-80">
        <div class="shell">
            <div class="range">

                {{--Title--}}
                <div class="cell-sm-12 section-xs-bottom-27 text-center">
                    <div class="divider divider-2"></div>
                    <h1 class="divider-off text-uppercase section-md-top-17">Projects</h1>
                    <div class="divider-bottom divider-4 divider-green"></div>
                </div>

                {{--List--}}
                @foreach($p_projects as $i_index => $i_project)
                    <div class="cell-md-12 section-bottom-45">
                        <div class="post paper">
                            <span class="h3">{{$i_project['name']}}</span>
                            <div class="post-meta">
                                <div class="meta-line">
                                    <span class="material-icons-person">
                                        <span class="p">
                                            @foreach($p_usersLists[$i_index] as $i_indexUser => $i_user)
                                                <a href="{{url('team/' . $i_user['user_id'] . '/' . str_replace(' ', '_', $i_user['user_name']))}}">{{$i_user['user_name']}}</a>@if($i_indexUser+1 < count($p_usersLists[$i_index])),@endif
                                            @endforeach
                                        </span>
                                    </span>
                                    <span class="material-icons-event inset-xs-left-30">
                                        <time datetime="">
                                            @if ($i_project['end_date'] == null)
                                                {{date('F Y', (strtotime($i_project['start_date']))) . ' ongoing'}}
                                            @else
                                                {{date('F Y', (strtotime($i_project['start_date']))) . ' - ' . date('F Y', (strtotime($i_project['end_date'])))}}
                                            @endif
                                        </time>
                                    </span>
                                </div>
                                @if(count($p_tagsLists[$i_index]) > 0)
                                    <div class="meta-line">
                                        <span class="material-icons-label_outline">
                                            <span class="p">
                                                @foreach($p_tagsLists[$i_index] as $i_indexTags => $i_tag)
                                                    <a href="#">{{$i_tag['name']}}</a>@if($i_indexTags+1 < count($p_tagsLists[$i_index])),@endif
                                                @endforeach
                                            </span>
                                        </span>
                                    </div>
                                @endif
                            </div>
                            {!! explode('</p>', $i_project['description'])[0] !!}
                            <div class="text-center">
                                <a href="{{url('project/' . $i_project['id'])}}" class="link link--effect-12">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</section>
@endsection