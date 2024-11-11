<div class="light-wrapper">@foreach($data1 as $data)
        <div class="light-wrapper">
            <div class="container inner">
                <div class="headline text-center">
                    <h2>{{$data->textBig}}</h2>
                    <p class="lead animated-text letters type"><span>{{$data->textPre}}</span> <span
                            class="animated-text-wrapper waiting"> <b
                                class="is-visible"> {{$data->animText}}</b> <b>{{$data->animText2}}</b></span></p>
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


                @endforeach
                <div class="divide30"></div>
                <div class="row services">
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"><img src="#" srcset="{{ asset("style/images/Car.png") }}"
                                               style="width: 90px; height: 90px" alt=""/></div>
                        <h4>Беспплатная парковка</h4>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"><img src="#" srcset="{{ asset("style/images/WifiHigh.png") }}"
                                               style="width: 90px; height: 90px" alt=""/></div>
                        <h4>Бесплатный wi-fi</h4>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"><img src="#" srcset="{{ asset("style/images/ShieldCheck.png") }}"
                                               style="width: 90px; height: 90px" alt=""/></div>
                        <h4>Полная безопасность</h4>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                </div>
                <!-- /.row -->

                <div class="row services">
                    <div class="col-sm-4">
                        <div class="service text-center">
                            <div class="icon"><img src="#" srcset="{{ asset("style/images/Coffee.png") }}"
                                                   style="width: 90px; height: 90px" alt=""/></div>
                            <h4>Придорожное кафе</h4>
                        </div>
                        <!--/.service -->
                    </div>
                    <!--/column -->
                    <div class="col-sm-4">
                        <div class="service text-center">
                            <div class="icon"><img src="#" srcset="{{ asset("style/images/Dog.png") }}"
                                                   style="width: 90px; height: 90px" alt=""/></div>
                            <h4>Можно с животными</h4>
                        </div>
                        <!--/.service -->
                    </div>
                    <!--/column -->
                    <div class="col-sm-4">
                        <div class="service text-center">
                            <div class="icon"><img src="#" srcset="{{ asset("style/images/CheckFat.png") }}"
                                                   style="width: 90px; height: 90px" alt=""/></div>
                            <h4>Есть кондиционер</h4>
                        </div>
                        <!--/.service -->
                    </div>
                    <!--/column -->
                </div>
            </div>
        </div>
</div>
</div>
