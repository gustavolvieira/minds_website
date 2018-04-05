@extends('layouts.base')

@section('content')
<section id="team">

    <section class="section-80">
        <div class="shell">
            <div class="range">
                <div class="cell-sm-12 section-xs-bottom-27 text-center">
                    <div class="divider divider-2"></div>
                    <h1 class="divider-off text-uppercase section-md-top-17">Principal Investigators</h1>
                    <div class="divider-bottom divider-4 divider-green"></div>
                </div>
                @foreach($p_coordinators as $i_index => $i_user)
                    <?php
                        if($i_user['photo_url'] == null){
                                $i_user['photo_url'] = 'images/defaults/user-image.png';
                            }
                    ?>
                    @if($i_index%2 == 0)
                    <div class="cell-md-4 col-md-offset-1 cell-sm-6">
                    @else
                    <div class="cell-md-4 col-md-offset-2 cell-sm-6">
                    @endif
                        <div class="text-md-left text-left">
                        <a href="{{url('team/' . $i_user['user_id'] . '/' . str_replace(' ', '_', $i_user['full_name']))}}">
                            <div class="ratio-four-three">
                                <div class="content">
                                    <img src="{{asset($i_user['photo_url'])}}" alt="{{$i_user['full_name'] . ' picture'}}">
                                </div>
                            </div>
                            <h5 class="offset-top-16">{{$i_user['full_name']}}</h5>
                        </a>
                        <p class="offset-top-5 line-height">{!! $i_user['description'] !!}</p>
                    </div>
                    </div>
                @endforeach


            {{--Researchers--}}
            <div class="shell">
            <div class="range section-top-35">
                <div class="cell-md-3 text-center">
                    <div class="divider divider-8"></div>
                    <h1 class="divider-off text-uppercase section-md-27">Researchers<br class="hidden visible-md-block visible-lg-block"></h1>
                    <div class="divider divider-8"></div>
                </div>
                <div class="cell-md-9 section-xs-top-35 section-xs-bottom-35">
                    <div class="shell">
                        <div class="range">
                            @foreach($p_researchers as $i_user)
                              <?php
                                  if($i_user['photo_url'] == null){
                                          $i_user['photo_url'] = 'images/defaults/user-image.png';
                                      }
                              ?>
                              <div class="cell-md-4 cell-sm-6">
                                  <div class="text-md-left text-left">
                                      <a href="{{url('team/' . $i_user['user_id'] . '/' . str_replace(' ', '_', $i_user['full_name']))}}">
                                          <div class="ratio-four-three">
                                              <div class="content">
                                                  <img src="{{asset($i_user['photo_url'])}}" alt="{{$i_user['full_name'] . ' picture'}}">
                                              </div>
                                          </div>
                                          <h5 class="offset-top-16">{{$i_user['full_name']}}</h5>
                                      </a>
                                      <p class="offset-top-5 line-height">{{$i_user['label']}}</p>
                                  </div>
                              </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{--Collaborators--}}
            <div class="range range-md-reverse">
                <div class="cell-md-4 text-center">
                    <div class="divider divider-7"></div>
                    <h1 class="divider-off text-uppercase section-md-27">Collaborators<br class="hidden visible-md-block visible-lg-block"></h1>
                    <div class="divider divider-7"></div>
                </div>
                <div class="cell-md-8 section-xs-top-35 section-xs-bottom-35">
                    <div class="shell">
                        <div class="range">
                            @foreach($p_collaborators as $i_user)
                                <?php
                                    if($i_user['photo_url'] == null){
                                            $i_user['photo_url'] = 'images/defaults/user-image.png';
                                        }
                                ?>
                                <div class="cell-md-4 cell-sm-6">
                                    <div class="text-md-left text-left">
                                        <a href="{{url('team/' . $i_user['user_id'] . '/' . str_replace(' ', '_', $i_user['full_name']))}}">
                                            <div class="ratio-four-three">
                                                <div class="content">
                                                    <img src="{{asset($i_user['photo_url'])}}" alt="{{$i_user['full_name'] . ' picture'}}">
                                                </div>
                                            </div>
                                            <h5 class="offset-top-16">{{$i_user['full_name']}}</h5>
                                        </a>
                                        <p class="offset-top-5 line-height">{{$i_user['affiliation']}}, {{$i_user['country']}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{--Alumni--}}
            <div class="range">
                <div class="cell-md-3 text-center">
                    <div class="divider divider-8"></div>
                    <h1 class="divider-off text-uppercase section-md-27">Alumni<br class="hidden visible-md-block visible-lg-block"></h1>
                    <div class="divider divider-8"></div>
                </div>
                <div class="cell-md-9 section-xs-top-35 section-xs-bottom-35">
                    <div class="shell">
                        <div class="range">
                            @foreach($p_alumni as $i_user)
                                <?php
                                    if($i_user['photo_url'] == null){
                                            $i_user['photo_url'] = 'images/defaults/user-image.png';
                                        }
                                ?>
                                <div class="cell-md-3 cell-sm-6">
                                    <div class="text-md-left text-left">
                                        <a href="{{url('team/' . $i_user['user_id'] . '/' . str_replace(' ', '_', $i_user['full_name']))}}">
                                            <div class="ratio-four-three">
                                                <div class="content">
                                                    <img src="{{asset($i_user['photo_url'])}}" alt="{{$i_user['full_name'] . ' picture'}}">
                                                </div>
                                            </div>
                                            <h5 class="offset-top-16">{{$i_user['full_name']}}</h5>
                                        </a>
                                        <p class="offset-top-5 line-height">{{$i_user['label'] . ', ' . $i_user['end_year']}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</section>
@endsection