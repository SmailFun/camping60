<div class="light-wrapper">
    <div class="container inner">
        @foreach($data3 as $el)
        <div class="section-title text-center">
            <h3 class="title">Новости</h3>
        </div>
        <div class="timeline">
            <div class="row">
                <div class="col-sm-6 timeline-item
                                                ">
                    <div class="arrow"></div>
                    <div class="post-content">
                        <div class="row">
                            <div class="col-sm-3 col-md-5">
                                <figure>
                                    <img src="storage/{{($el-> photo)}}" alt="">
                                </figure>
                            </div>
                            <div class="col-sm-9 col-md-7">
                                <h4 class="title">{{$el->textUp}}</h4>
                                <p class="title2">{{$el->textDown}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
