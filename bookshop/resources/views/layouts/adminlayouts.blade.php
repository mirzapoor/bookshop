<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fa" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="UTF-8" />
    <title>داشبورد </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/bootstrap/css/bootstrap.rtl.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/css/main.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/css/theme.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--END GLOBAL STYLES -->
    <!-- PAGE LEVEL STYLES -->
    <link href="http://localhost:8000/assets/css/layout2.css" rel="stylesheet" />
    <link href="http://localhost:8000/assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/timeline/timeline.css" />

    @yield('head')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="padTop53 ">
    <!-- MAIN WRAPPER -->
    <div id="wrap">
        <!-- HEADER SECTION -->
        <div id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip"
                    class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu"
                    id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                    </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-left">
                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success">2</span> <i class="icon-envelope-alt"></i>&nbsp;
                            <i class="icon-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>محمدرضا</strong>
                                        <span class="pull-left text-muted">
                                            <em>امروز</em>
                                        </span>
                                    </div>
                                    <div>متن پیغام برای تست پیغام تستی
                                        <br />
                                        <span class="label label-primary">مهم</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>علیرضا</strong>
                                        <span class="pull-left text-muted">
                                            <em>دیروز</em>
                                        </span>
                                    </div>
                                    <div>متن پیغام برای تست پیغام تستی
                                        <br />
                                        <span class="label label-success"> متوسط </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>مهدی</strong>
                                        <span class="pull-left text-muted">
                                            <em>31 خرداد 93</em>
                                        </span>
                                    </div>
                                    <div>متن پیغام برای تست پیغام تستی تست تست پیغام
                                        <br />
                                        <span class="label label-danger"> کم </span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <i class="icon-angle-left"></i>
                                    <strong>خواندن همه پیغام ها</strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--END MESSAGES SECTION -->
                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-danger">5</span> <i class="icon-tasks"></i>&nbsp; <i
                                class="icon-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> پروفایل </strong>
                                            <span class="pull-left text-muted">40% تکمیل شده</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 40%">
                                                <span class="sr-only">40% تکمیل شده</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> وظایف </strong>
                                            <span class="pull-left text-muted">20% تکمیل شده</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 20%">
                                                <span class="sr-only">20% تکمیل شده</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> پیشرفت کار </strong>
                                            <span class="pull-left text-muted">60% پیشرفت</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%">
                                                <span class="sr-only">60% پیشرفت</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong> خلاصه </strong>
                                            <span class="pull-left text-muted">80% تکمیل شده</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width:80%">
                                                <span class="sr-only">80% تکمیل شده </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <i class="icon-angle-left"></i>
                                    <strong>مشاهده همه تسک ها</strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--END TASK SECTION -->
                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span> <i class="icon-comments"></i>&nbsp; <i
                                class="icon-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <span class="pull-left text-muted small"> 4 دقیقه پیش</span>
                                        <i class="icon-comment"></i> کامنت جدید
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <span class="pull-left text-muted small">9 دقیقه پیش</span>
                                        <i class="icon-twitter info"></i> 3 دنبال کننده جدید
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <span class="pull-left text-muted small"> 20 دقیقه پیش</span>
                                        <i class="icon-envelope"></i> ارسال پیغام
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <span class="pull-left text-muted small"> 1 ساعت پیش</span>
                                        <i class="icon-tasks"></i> وظایف جدید
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <span class="pull-left text-muted small"> 2 ساعت پیش</span>
                                        <i class="icon-upload"></i> ورود به سایت
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <i class="icon-angle-left"></i>
                                    <strong>مشاهده همه اعلان ها</strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END ALERTS SECTION -->
                    <!--ADMIN SETTINGS SECTIONS -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> مشاهده پروفایل </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> تنظیمات </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> خروج </a>
                            </li>
                        </ul>
                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>
            </nav>
        </div>
        <!-- END HEADER SECTION -->
        <!-- MENU SECTION -->
        <div id="right">
            {{-- <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture"
                        src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> محمدرضا</h5>
                    <ul class="list-unstyled user-info">
                        <li>
                            <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a>
                            آنلاین
                        </li>
                    </ul>
                </div>
                <br />
            </div> --}}
            <ul id="menu" class="collapse">
                <li class="panel active">
                    <a href="<?= url('admin/index') ?>">
                        <i class="icon-table"></i> داشبورد
                    </a>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                        data-target="#component-nav">
                        <i class="icon-tasks"> </i> مدیریت کتاب های سایت
                      
                    </a>
                    <ul class="collapse" id="component-nav">
                        <li class=""><a href="<?= url('admin/books/create') ;?>"><i class="icon-angle-left"></i> ایجاد
                                کتاب
                                جدید </a></li>
                        <li class="active"><a href="<?= url('admin/books'); ?>"><i class="icon-angle-left"></i> نمایش و
                                مدیریت
                                کتب </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed"
                        data-target="#form-nav">
                        <i class="icon-pencil"></i> مراکز پخش
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="<?= url('admin/pakhsh/create') ?>"><i
                                    class="icon-angle-left"></i> ایجاد
                                مرکز جدید
                            </a></li>
                        <li class=""><a href="<?= url('admin/pakhsh') ?>"><i
                                    class="icon-angle-left"></i>
                                نمایش و مدیریت مراکز </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                        data-target="#pagesr-nav">
                        <i class="icon-table"></i> مدیریت نویسندگان
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="<?= Url('admin/writer/create') ;?>"><i class="icon-angle-left"></i> ایجاد نویسنده
                                جدید </a>
                        </li>
                        <li><a href="<?= Url('admin/writer') ;?>"><i class="icon-angle-left"></i>نمایش و مدیریت
                                نویسندگان
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                        data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> مدیریت مترجمین
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="chart-nav">
                        <li><a href="<?= Url('admin/translator/create'); ?>"><i class="icon-angle-left"></i> ثبت مترجم
                                جدید </a></li>
                        <li><a href="<?= Url('admin/translator'); ?>"><i class="icon-angle-left"></i> نمایش و مدیریت
                                مترجمین</a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                        data-target="#DDL-nav">
                        <i class=" icon-sitemap"></i> مدیریت چاپخانه ها
                        <span class="pull-left">
                            <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL-nav">
                        <a href="<?= Url('admin/chaphkoneh/create'); ?>"><i class="icon-angle-left"></i> ثبت چاپخانه
                            جدید </a>
                </li>
                <li>
                    <a href="<?= Url('admin/chaphkoneh'); ?>"><i class="icon-angle-left"></i> نمایش و مدیریت چاپخانه ها
                    </a>
                </li>
            </ul>
            </li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                    data-target="#DDL4-nav">
                    <i class=" icon-folder-open-alt"></i> مدیریت موضوعات کتب
                    <span class="pull-left">
                        <i class="icon-angle-right"></i>
                    </span>
                </a>
                <ul class="collapse" id="DDL4-nav">
                    <li>
                        <a href="<?= Url('admin/category/create'); ?>" data-parent="DDL4-nav" data-toggle="collapse"
                            class="accordion-toggle" data-target="#DDL4_1-nav">
                            <i class="icon-angle-left"></i> ثبت موضوع جدید
                            <span class="pull-left" style="margin-left: 20px;">
                            </span>
                        </a>
                        <a href="<?= Url('admin/category'); ?>" data-parent="DDL4-nav" data-toggle="collapse"
                            class="accordion-toggle" data-target="#DDL4_1-nav">
                            <i class="icon-angle-left"></i> نمایش موضوعات و مدیریت آنها
                            <span class="pull-left" style="margin-left: 20px;">
                            </span>
                        </a>
                    </li>
                </ul>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                    data-target="#error-nav">
                    <i class="fa-solid fa-user"></i> مدیریت کاربران
                    <span class="pull-left">
                        <i class="icon-angle-right"></i>
                    </span>
                    &nbsp; <span class="label label-warning">5</span>&nbsp;
                </a>
                <ul class="collapse" id="error-nav">
                    <li><a href="<?= Url('admin/users/create'); ?>"><i class="icon-angle-left"></i>ثبت کاربر جدید</a>
                    </li>
                    <li><a href="<?= Url('admin/users') ;?>"><i class="icon-angle-left"></i> نمایش و مدیریت کاربران</a>
                    </li>
                </ul>
            </li>
            <li><a href="<?= Url('admin/comments'); ?>"><i class="icon-table"></i> دیدگاه ها 
                &nbsp;
              {{-- @if( countcomment() == 0 )
              @else
              <span class="label label-danger">{{ countcomment() }}</span>&nbsp; 
              @endif --}}
      </a></li>            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                    data-target="#blank-nav">
                    <i class="icon-check-empty"></i> مدیریت سفارشات
                    <span class="pull-left">
                        <i class="icon-angle-right"></i>
                    </span>
                    &nbsp; <span class="label label-success">2</span>&nbsp;
                </a>
                <ul class="collapse" id="blank-nav">
                    <li><a href="blank.html"><i class="icon-angle-left"></i> صفحه خالی اول </a></li>
                    <li><a href="blank2.html"><i class="icon-angle-left"></i> صفحه خالی دوم </a></li>
                </ul>
            </li>
            <li><a href="login.html"><i class="icon-signin"></i> صفحه ورود </a></li>
            </ul>
        </div>
        <!--END MENU SECTION -->
        <!--PAGE CONTENT -->
        @yield('content')
        <!--END PAGE CONTENT -->
        <!-- RIGHT STRIP  SECTION -->
        <div id="left">
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li >بازدیدکنندگان : <span>23,000</span></li>
                    <li>کاربران : <span>53,000</span></li>
                    <li>ثبت نام کنندگان : <span>3,000</span></li>
                </ul>
            </div>
            <div class="well well-small">
                <a class="btn btn-white btn-block "  href="<?= url('admin/books'); ?>">راهنما</a>

                <a class="btn btn-primary btn-block"  href="<?= url('admin/books'); ?>"> کتاب ها</a>
                <a class="btn btn-info btn-block" href="<?= Url('admin/translator'); ?>">مترجمین</a>
                <a class="btn btn-success btn-block" href="<?= Url('admin/writer') ;?>">نویسندگان</a>
                <a class="btn btn-danger btn-block" href="">سفارشات</a>
                <a class="btn btn-warning btn-block" href=""> دیدگاه ها </a>
                <a class="btn btn-info btn-block" href="<?= Url('admin/users') ;?>"> کاربران </a>
            </div>
        </div>
        <!-- END RIGHT STRIP  SECTION -->
    </div>
    <!--END MAIN WRAPPER -->
    <!-- FOOTER -->
    <div id="footer">
    </div>
    <!--END FOOTER -->
    <!-- GLOBAL SCRIPTS -->
    <script src="<?= url('assets/plugins/jquery-2.0.3.min.js') ?>"></script>
    <script src="<?= url('assets/plugins/bootstrap/js/bootstrap.rtl.js') ?>"></script>
    <script src="<?= url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js') ?>"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->

    <script src="<?= url('assets/plugins/flot/jquery.flot.js') ?>"></script>
    <script src="<?= url('assets/plugins/flot/jquery.flot.resize.js') ?>"></script>
    <script src="<?= url('assets/plugins/flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= url('assets/plugins/flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= url('assets/js/for_index.js') ?>"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    @yield('script')
</body>

<!-- END BODY -->

</html>
