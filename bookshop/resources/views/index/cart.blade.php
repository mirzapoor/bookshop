<?php use App\BooksModel; ?>
<div class="top-menu ">
    <div class="row">
        <div class="col-md-12 ">
            <div class="main-access text-end  ">
                <ul class="main-menu ">
                    <li class=" mx-1"><a href="#"><i class="fas fa-shopping-cart"></i></a>
                        <ul>
                            @if (!empty(Session::get('cart')))
                                <?php $prices = 0; ?>
                                <?php $count = sizeof(Session::get('cart')); ?>
                                <p style="font-size: 1rem;">{{ $count }} کالا</p>
                                <a class="text-center" style="font-size: 1.5rem; margin-top-5px;
                                        " href="#">سبد خرید</a>
                                <hr>
                                @if (empty(Session::get('cart')))
                                    سبد خرید شما خالی هست.
                                @endif

                                @foreach (Session::get('cart') as $key => $value)
                                    <li>
                                        <div class="cart_item" href="#" style=" border-bottom: #fff;">
                                            <?php
                                            $book = BooksModel::find($key);
                                            ?>
                                            <img class="col-md-2"
                                                src="<?= Url('assets/img/imagebook/' . $book->img_book) ?>"
                                                alt="{{ $book->name_book }}" title="{{ $book->name_book }}" />
                                            <div class="col-md-4 text-center h1 ">
                                                <p>{{ $book->name_book }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h3>
                                                    {!! number_format($book->price_book) !!} تومان</h3>
                                                <?php $prices += $value * $book->price_book; ?>
                                            </div>
                                            <div class="col-md-2">
                                                {{-- <label for="count">تعداد</label> --}}
                                                <input type="number" min="1" value="{{ $value }}"
                                                    max="{{ $book->count_book }}" style="width: 50px" ; height="5px"
                                                    class="text-center" onclick="add_cart('{{ $book->id }}')">
                                                <a href=""> <i class="bi bi-plus-circle"></i></a>

                                                {{-- تعداد : {{ $value }} --}}
                                                {{-- &nbsp; --}}
                                            </div>
                                            <div class="col-md-2">
                                                <div onclick="delete_cart('{{ $book->id }}')"
                                                    title="حذف یک کتاب از سبد خرید">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-trash-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </li>
                                @endforeach
                                <li>
                                    <div>
                                        <h2>قیمت کل</h2>
                                        <p> {!! number_format($prices) !!} تومان</p>
                                        <a class="btn" href="<?= Url('/checkout') ?>">تسویه حساب</a>
                                        <div onclick="empty_cart()" class="btn">تخلیه سبد خرید </div>

                                    </div>
                                </li>
                        </ul>
                    </li>
                </ul>
            @else
                <p style="font-size: 1rem;">0کالا</p>
                <a class="text-center" style="font-size: 1.5rem; margin-top-5px;
                            " href="#">سبد خرید</a>
                <hr>
                <li>
                    <p>
                        سبد خرید شما خالی هست.
                    </p>
                </li>
                <hr>
                <li>
                <li>
                    <div>
                        <h2>قیمت کل</h2>
                        <p> 0 تومان</p>
                        <button class="btn">تسویه حساب</button>
                        <div onclick="empty_cart()" class="btn">تخلیه سبد خرید </div>

                    </div>
                </li>
                </li>
                @endif
            </div>

        </div>
    </div>
</div>
