<div class="light-wrapper">@foreach($data1 as $data)
    <div class="light-wrapper">
        <div class="container inner">
            <div class="headline text-center">
                <h2>{{$data->textBig}}</h2>
                <p class="lead animated-text letters type"> <span>{{$data->textPre}}</span> <span class="animated-text-wrapper waiting"> <b class="is-visible"> {{$data->animText}}</b> <b>{{$data->animText2}}</b></span> </p>
            </div>
            <div class="divide30"></div>
            <div class="row services">
                <div class="col-sm-6">
                    <div class="service">
                        <h4 style="text-align: center;">{{$data->textBigL}}</h4>
                        <p style="text-align: center;">{{$data->textAL}}</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="service">
                        <h4 style="text-align: center;">{{$data->textBigR}}</h4>
                        <p style="text-align: center;">{{$data->textAR}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                               @endforeach
</div>

