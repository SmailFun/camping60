<div class="white-wrapper">
    @foreach($data4 as $el)
    <div class="col-image">
        <div class="bg-wrapper col-md-6">
            <div class="bg-holder" ><img class="bg-holder" src="{{asset('storage/'.$el-> photo)}}" alt=""></div>
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
                            color: "rgba(59,152,141,0.85)",
                            highlight: "rgb(65,166,158)",
                            label: "Довольны"
                        }, {
                            value: 100-{{$el->range}},
                            color: "rgb(12,64,253)",
                            highlight: "rgb(57,99,225)",
                            label: "Не довольны"
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
        <div class="light-wrapper">
            <div class="container inner">
                <div class="section-title text-center">
                    <h3>Цена номера</h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="pricing panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Номер "Стандарт"</h3>
                                <div class="price"> <span class="price-currency">руб/cут</span> <span class="price-value">2200</span> </div>
                            </div>
                            <!--/.panel-heading -->
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td> Вместимость номера <strong>1-2</strong> человека </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Все удобства:</strong></td>
                                    </tr>
                                    <tr>
                                        <td> Санузел</td>
                                    </tr>
                                    <tr>
                                        <td>   Кондиционер </td>
                                    </tr>
                                    <tr>
                                        <td> Удобная кровать</td>
                                    </tr>
                                    <tr>
                                        <td> Качественная и красивая отделка</td>
                                    </tr>
                                </table>
                            </div>
                            <!--/.panel-body -->
                            <div class="panel-footer"> <a href="/booking" class="btn" role="button">Забронировать</a></div>
                        </div>
                        <!--/.pricing -->
                    </div>

                    <!--/column -->
                </div>
                <!--/.row -->

            </div>
            <!--/.container -->
        </div>
</div>
