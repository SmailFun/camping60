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

                        let doughnutData = [{
                            value: 100,
                            color: "rgba(0,0,0,0.85)",
                            highlight: "rgb(45,55,58)",
                            label: "Blue"
                        }, {
                            value: 90,
                            color: "rgba(224,103,106,0.85)",
                            highlight: "rgba(224,103,106,1)",
                            label: "Red"
                        }, {
                            value: 100,
                            color: "rgba(69,190,132,0.85)",
                            highlight: "rgba(69,190,132,1)",
                            label: "Green"
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
</div>
