@extends('layouts.base')

@section('content')
<section id="wip">

    <div class="shell">
        <div class="range range-sm-reverse section-md-80 section-sm-60 section-xs-80">
            <div class="cell-md-7 cell-sm-8 text">
                <h2>Under Construction</h2>
                <p>This page is still under construction. Please check back in a few days.
                    <br>
                    In the meantime, you can access <a href="team">our members'</a> profiles for links to their ResearchGate or Lattes pages.
                </p>
            </div>

            <div class="cell-md-5 cell-sm-4">
                <img src="{{asset('images/wip-robot.png')}}" class="img-width">
            </div>

        </div>
    </div>

    
</section>
@endsection