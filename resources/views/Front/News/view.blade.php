@extends('Front.main')
@section('content')
    <section id="article-section" class="line">
        <div class="margin">

            <!-- ARTICLES -->
            <div class="s-12 l-9">
                <!-- ARTICLE 1 -->
                <article class="margin-bottom">
                    <div class="post-1 line">
                        <!-- image -->
                        <div class="s-12 l-11 post-image">
                            <img src="{{asset('images/news/'. \App\Models\News::find($news->id )->img_url) }}" alt="Fashion">
                        </div>
                        <!-- date -->
                        <div class="s-12 l-1 post-date">
                            @php
                            $date=new\Carbon\Carbon($news->created_at);
                            $day=$date->format('d');
                            $month=$date->format('M');

                            @endphp
                            <p class="day">{{$day}}</p>
                            <p class="month">{{$month}}</p>


                        </div>
                    </div>
                    <!-- text -->
                    <div class="post-text">
                        <h1>{{$news->title}}</h1>
                        {!! $news->content !!}
                    </div>
                </article>



        </div>
            <!-- SIDEBAR -->
            <div class="s-12 l-3">

                @foreach($news2 as $new)
                    <aside>
                        <!-- NEWS 1 -->
                        <img src="{{asset('images/news/'. \App\Models\News::find($new->id )->img_url) }}" alt="News 1">
                        <div class="aside-block margin-bottom">
                            <h3>{{$new->title}}</h3>
                            <p> {!! substr(strip_tags($new->content),0,100) . '...' !!}</p>
                        </div>


                    </aside>
                @endforeach
            </div>
    </div>
</section>


@endsection
