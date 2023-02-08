<div class="light-wrapper">
    @foreach($data5 as $el)
    <div class="container inner">
        <div class="section-title text-center">
            <h3 class="title">{{$el->textBig}}</h3>
            <p class="lead2">{{$el->textPre}}</p>
        </div>
        <div class="thin3">
            <div class="row circle-wrapper">
                <div class="col-sm-6 col-md-3">
                    <div class="circle blue-bg">
                        <div class="text">1. {{$el->dio1}}</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="circle red-bg">
                        <div class="text">2. {{$el->dio2}}</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="circle green-bg">
                        <div class="text">3. {{$el->dio3}}</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="circle yellow-bg">
                        <div class="text">4. {{$el->dio4}}</div>
                    </div>
                </div>
            </div>
            <div class="divide30"></div>
            <p class="title2">{{$el->textAl}}</p>
        </div>
    </div>
    @endforeach
</div>
