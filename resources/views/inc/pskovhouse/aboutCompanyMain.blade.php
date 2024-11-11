<div class="white-wrapper">
    <div class="col-image">
        <div class="bg-wrapper col-md-6">
            <div class="bg-holder" ><img class="bg-holder" src="style/images/43.png" alt=""></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 inner-col">
                    <div class="section-title">
                        <h3 class="title">Нас выбирают!</h3>
                    </div>
                    <p class="lead2">100% клиентов, остались довольны</p>
                    <p class="lead2">Не веришь? Попробуй сам</p>
                    <div class="text-center">
                        <canvas id="doughnutChart" width="300" height="300" style="width: 300px; height: 300px;"></canvas>
                    </div>
                    <script>

                        let doughnutData = [{
                            value: 100,
                            color: "rgba(59,152,141,0.85)",
                            highlight: "rgb(65,166,158)",
                            label: "Довольны"
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
                            <h3 class="panel-title">Дом "Стандарт"</h3>
                            <div class="price"><span class="price-value">от</span> <span class="price-currency"> руб/cут</span> <span class="price-value">10000</span> </div>
                        </div>
                        <!--/.panel-heading -->
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td> Вместимость дома <strong>6-8</strong> человек </td>
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

</div>
