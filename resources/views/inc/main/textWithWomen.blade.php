    <div class="inverse-wrapper inner bp0">
        <div class="container">
            @foreach($data6 as $el)
            <div class="thin text-center">
                <div class="headline text-center">
                    <h2>{{$el->textUp}}</h2>
                    <p class="lead">{{$el->textDown}}</p>
                </div>
                <div class="divide30"></div>
                <figure>
                    <img style="width: auto;" src="{{asset('storage/'.$el-> photo)}}" alt="">
                </figure>
            </div>
            @endforeach
        </div>
    </div>

