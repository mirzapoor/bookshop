
@if (!empty(Session::get('cart')))
    <div class="icons">
        <div class="headerLeft">
            <div id="search-btn" class="fas fa-search"></div>

            <div class="top-menu ">
                <div class="row">

                    <div class="col-md-4 icons">
                        <div class="main-access text-end ">
                            <ul class="main-menu ">
                                <li class=" mx-1"><a href="#"><i class="fas fa-shopping-cart"></i></a>
                                    <ul>
                                        <p style="font-size: 1rem;">2 کالا</p>
                                        <a style="position: relative; top:-12% ;right: 50%;font-size: 2rem;"
                                            href="#">مشاهده سبد خرید</a>
                                        <hr>

                                        <li>
                                            <a href="#" style=" border-bottom: #fff;">
                                                <img style=" width: 50%; height: 50%;"
                                                    src="<?= Url('index/image/book-1.png') ?>" alt="">
                                                <h3 style=" position: relative; right:40px ; top: 10%; ">نام کتاب</h3>
                                                <h3 style=" position: relative;  top:-200px; right: 95%;">قیمت</h3>
                                                <label for="count" style=" position: relative;  top:-200px; right: 50%;
                          ">تعداد</label>
                                                <input type="number" min="1" value="1" style=" position: relative;  top:-175px; right: 40%;
                         ">
                                                <a style=" position: relative;  top:-190px; right: 70%;
                           " href="#"> حذف</a>

                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <img style=" width: 50%; height: 50%;"
                                                    src="<?= Url('index/image/book-2.png') ?>" alt="">
                                                <h3 style=" position: relative; right:40px ; top: 10%; ">نام کتاب</h3>
                                                <h3 style=" position: relative;  top:-200px; right: 95%;">قیمت</h3>
                                                <label for="count" style=" position: relative;  top:-200px; right: 50%;
                          ">تعداد</label>
                                                <input type="number" min="1" value="1" style=" position: relative;  top:-175px; right: 40%;
                         ">
                                                <a style=" position: relative;  top:-190px; right: 70%;
                           " href="#"> حذف</a>
                                                <hr>

                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="login-btn" class="fas fa-user "></div>

        </div>
    </div>
@endif
