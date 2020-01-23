@extends('Front.main')
@section('content')
<!-- MAIN SECTION -->
<section id="article-section" class="line">
    <div class="margin">
        <!-- ARTICLES -->
        <div class="s-12 l-12">
            <!-- ARTICLE 1 -->
            <article class="margin-bottom">
                <div class="post-1 line">
                    
                    <!-- date -->
                    @php
                    $date=new\Carbon\Carbon($men->created_at);
                    $day=$date->format('d');
                    $month=$date->format('M');



                    @endphp
                    <div class="s-12 l-1 post-date">
                        <p class="date">{{$day}}</p>
                        <p class="month">{{$month}}</p>
                    </div>
                </div>
                <!-- text -->
                <div class="post-text">
                    <h2>{{$men->title}}</h2>
                    {!! $men->content !!}}


                </div>
            </article>

        </div>
        <!-- SIDEBAR -->

    </div>
</section>

</body>
</html>

@endsection
