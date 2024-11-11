<div class="light-wrapper">
    <div class="container inner">
        <div class="thin">
            <h2 class="post-title">обратная связь</h2>
            <p>Отправьте заполненную форму для рассмотрения обращения или заявки для сотрудничетсва.</p>
            <div class="divide10"></div>
            <div class="form-container">
                <form action="{{route('contactico')}}" method="post" class="vanilla vanilla-form" name="CotactUs" >
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="text" name="name" placeholder="Ваше имя" required="required">
                                    <i class="icon-user"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="email"  name="email" placeholder="Ваш e-mail" required="required">
                                    <i class="icon-mail-alt"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="tel" name="tel"  placeholder="Номер телефона" required="required">
                                    <i class="icon-phone"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label class="custom-select">
                                    <select  name="department" required="required">
                                        <option value="Сотрудничество">Обращение</option>
                                        <option value="Поддержка">Сотрудничество</option>

                                    </select>
                                    <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <textarea name="message"  placeholder="Напишите Ваше сообщение сюда..."></textarea>
                    <button type="submit" class="btn state-initial" >Отправить</button>

                </form>
                <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->
        </div>
    </div>
    <!-- /.container -->
</div>
