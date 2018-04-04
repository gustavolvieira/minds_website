@extends('layouts.base')

@section('content')
<section id="resources">

    <section class="section-80">
        <div class="shell">
            <div class="range">

                {{--Title--}}
                <div class="cell-sm-12 section-xs-bottom-27 text-center">
                    <div class="divider divider-2"></div>
                    <h1 class="divider-off text-uppercase section-md-top-17">Resources</h1>
                    <div class="divider-bottom divider-4 divider-green"></div>
                </div>

                {{--List--}}
                @foreach($p_resources as $i_index => $i_resource)
                    <div class="cell-md-6">
                        <div class="post paper">
                            <span class="h3">{{$i_resource['name']}}</span>
                            <div class="post-meta">
                                <div class="meta-line">
                                    <span class="material-icons-person"><span class="p">
                                        <a href="team/3/{{$i_resource['user_id']}}">{{$i_resource['user_name']}}</a>
                                    </span></span>
                                    <span class="material-icons-event inset-xs-left-30"><time datetime="2017-11-01">{{date('M d, Y', (strtotime($i_resource['updated_at'])))}}</time></span>
                                </div>
                                <div class="meta-line">
                                    <span class="material-icons-dashboard"><span class="p"><a href="{{url('project/' . $i_resource['project_id'])}}">Project: {{$i_resource['project_name']}}</a></span></span>
                                </div>
                            </div>
                            <p>{{$i_resource['description']}}</p>
                            <div class="download-div post-meta section-xs-top-15">
                                <a href="{{asset($i_resource['file_path'])}}" class="download-btn" download><span class="material-icons-file_download"><span>Download</span></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</section>
@endsection