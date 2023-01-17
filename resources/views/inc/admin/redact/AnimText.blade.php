<div id="content" class="main-content">
    <div class="container">

        <div class="container">

            <div class="row layout-top-spacing">

                <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Заголовок</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="row">
                                <div class="col-lg-6 col-12 mx-auto">
                                    <form method="post" id="a1" name="a1" action="{{ route('anim') }}" >
                                        @csrf
                                        <div class="form-group">
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input form="a1" id="t-text" type="text" name="textBig" placeholder="Заголовок..." class="form-control" required>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>


                   <div class="row layout-top-spacing">

                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст перед анимационным</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">

                                            <div class="form-group">

                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="a1" id="t-text" type="text" name="textPre"  class="form-control" required>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="row layout-top-spacing">

                                    <div id="basic" class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Текст анимационный</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">

                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mx-auto">

                                                        <div class="form-group">

                                                            <label for="t-text" class="sr-only">Text</label>
                                                            <input form="a1" id="t-text" type="text" name="animText"  class="form-control" required>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row layout-top-spacing">

                                <div id="basic" class="col-lg-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Заголовок левого параграфа</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">

                                            <div class="row">
                                                <div class="col-lg-6 col-12 mx-auto">

                                                    <div class="form-group">

                                                        <label for="t-text" class="sr-only">Text</label>
                                                        <input form="a1" id="t-text" type="text" name="textBigL"  class="form-control" required>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row layout-top-spacing">
                                    <div id="basic" class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Заголовок правого параграфа</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">

                                                            <label for="t-text" class="sr-only">Text</label>
                                                            <input form="a1" id="t-text" type="text" name="textBigR"  class="form-control" required>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlTextarea1">Текст левого параграфа</label>
                                <textarea form="a1" class="form-control" id="exampleFormControlTextarea1" name="textAL" rows="3"></textarea>

                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlTextarea1">Текст правого параграфа</label>
                                <textarea form="a1" class="form-control" id="exampleFormControlTextarea1" name="textAR" rows="3"></textarea>
                            </div>

                            <button type="submit" class="mt-4 mb-4 btn btn-primary" form="a1"> отправить</button>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
