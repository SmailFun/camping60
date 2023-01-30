    <div class="tp-fullscreen-container revolution">
        <div class="tp-fullscreen">

            <ul>
                @foreach($data as $el)
                <li data-transition="fade"> <img src="storage/{{($el-> photo)}}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                    <div class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">
                        {{$el->textUp}}</div>
                    <div class="tp-caption medium sfr" data-x="30" data-y="403" data-speed="900" data-start="1500" data-easing="Sine.easeOut">{{$el->textDown}}</div>
                    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{$el->link}}" class="btn btn-large">Связаться</a></div>
                </li>

                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.tp-fullscreen-container -->
    </div>
    <!-- /.revolution -->


