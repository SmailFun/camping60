<div class="white-wrapper">
    @foreach($data4 as $el)
    <div class="col-image">
        <div class="bg-wrapper col-md-6">
            <div class="bg-holder" ><img class="bg-holder" src="storage/{{($el-> photo)}}" alt=""></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 inner-col">
                    <div class="section-title">
                        <h3 class="title">{{$el->textUp}}</h3>
                    </div>
                    <p class="lead2">{{$el->textDown}}</p>
                    <p class="title2">{{$el->textAR}}</p>
                    <div class="text-center">
                        <canvas id="doughnutChart" width="300" height="300" style="width: 300px; height: 300px;"></canvas>
                    </div>
                    <script>

                        let doughnutData = [{
                            value: {{$el->range}},
                            color: "rgba(0,195,255,0.85)",
                            highlight: "rgb(45,55,58)",
                            label: "Blue"
                        }, {
                            value: 100-{{$el->range}},
                            color: "rgb(242,198,127)",
                            highlight: "rgba(224,103,106,1)",
                            label: "Red"
                        },]
                        window.onload = function() {
                            const ctx4 = document.getElementById("doughnutChart").getContext("2d");
                            window.myDoughnut = new Chart(ctx4).Doughnut(doughnutData, {
                                responsive: false,
                                scaleFontFamily: "'Lato', sans-serif",
                                tooltipFontFamily: "'Lato', sans-serif",
                                tooltipTitleFontFamily: "'Lato', sans-serif"
                            });
                        };
                    </script>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
