<div class="white-wrapper">
    <div class="col-image">
        <div class="bg-wrapper col-md-6">
            <div class="bg-holder" style="background-image: url(https://brankorus.ru/storage/images/l9eOPcYbtQyrz6UjWQRfvW1krLa9abQrkyLpB1fd.jpg);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 inner-col">
                    <div class="section-title">
                        <h3 class="title">О компании</h3>
                    </div>
                    <p class="lead2">Мы постоянно расширяемся</p>
                    <p class="title2">Чешская Республика, Польша и Венгрия - наши давние и стабильные партнеры. Другие наши клиенты находятся в Италии, Германии, Австрии, Нидерландах, Словении, Румынии, Литве, Франции, Хорватии, России и Украине.</p>
                    <div class="text-center">
                        <canvas id="doughnutChart" width="300" height="300" style="width: 300px; height: 300px;"></canvas>
                    </div>
                    <script>
                        const doughnutData = [];
                        for (const metric of [{"id":1,"title":"\u0421\u043b\u043e\u0432\u0430\u043a\u0438\u044f","value":90,"color":"#6abade"},{"id":2,"title":"\u0414\u0440\u0443\u0433\u0438\u0435 \u0441\u0442\u0440\u0430\u043d\u044b","value":10,"color":"#f1bd69"}]) {
                            doughnutData.push({
                                value: metric.value,
                                label: metric.title,
                                highlight: metric.color,

                                // #rrggbbaa with 0.85 opacity
                                color: metric.color + "d9"
                            });
                        }
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
</div>
