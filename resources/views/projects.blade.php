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
                            <span class="h3">{{$i_project['title']}}</span>
                            <div class="post-meta">
                                <div class="meta-line">
                                    <span class="material-icons-person"><span class="p">
                                        <a href="team/3/Petrônio_Cândido_de_Lima_e_Silva">Ivan etc etc</a>
                                    </span></span>
                                    <span class="material-icons-event inset-xs-left-30">
                                        <time datetime="">
                                            <?php
                                                if ($i_project['end_date'] == null)
                                                    $i_date = date('M Y', (strtotime($i_project['start_at']))) . ' ongoing';
                                                else{
                                                    $i_date = date('M Y', (strtotime($i_project['start_at']))) . ' - ' . date('M Y', (strtotime($i_project['end_at'])));
                                                }
                                            ?>
                                            {{$i_date}}
                                        </time>
                                    </span>
                                </div>
                                <div class="meta-line">
                                    <span class="material-icons-label_outline"><span class="p">
                                        <a href="#">Multiobjective Optimization,</a>
                                        <a href="#">Visualization,</a>
                                        <a href="#">Manyobjective Optimization</a>
                                    </span></span>
                                </div>
                            </div>
                            <p>Data Visualization in high-dimensional spaces is a great challenge and an important tool for decision-making.  The method of Aggregation Trees was an important step in visualization in MaOPs, allowing a greater understanding of the problem. This method is based on the sequential aggregation of objectives, which is visually represented into a tree, based on a measure of conflict between pairs of (groups of) objectives. The method allows the visualization of a hierarchy for aggregation of the objectives, with poss ...</p>
                            <div class="text-center">
                                <a href="#" class="link link--effect-12">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</section>
@endsection