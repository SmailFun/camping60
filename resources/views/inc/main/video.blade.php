<div class="outer-wrap inverse-wrapper">
    <div id="video-wrap" class="video-wrap" style="position: relative; overflow: hidden; z-index: 10; width: 1416px; height: 500px;">
        @foreach($data2 as $el)
        <video preload="metadata" playsinline="" autoplay="" muted="" loop="" id="video-office" style="position: absolute; z-index: 1; width: 1713.78px; height: 964px; transform: translate3d(-149px, -50px, 0px);">
            <source src="{{asset('storage/'.$el-> video)}}" type='video/webm; codecs="vp8, vorbis"'>
        </video>

        <div class="content-overlay container">
            <div class="headline text-center">
                <h2>{{$el->textUp}}</h2>
            </div>
        </div>
        @endforeach
    </div>
</div>

