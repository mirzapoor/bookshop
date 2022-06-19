<?php
use App\Http\Controller\Auth\AuthController;
?>
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
                        {{-- <img src="" alt="" height="30" />
                        <h1 class="site-title">ایران نهاد</h1> --}}
                        
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-left">
                    <!-- MESSAGES SECTION -->
                  
                    <!--END MESSAGES SECTION -->
                    <!--TASK SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            @if( countmessage() == '0' )
                            @else
                            <span class="label label-success">{!! countmessage() !!}</span>  
                            @endif
                            <i class="icon-tasks"></i>&nbsp; <i
                                class="icon-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            @foreach( getMessages() as $message )

                            <li>
                                <a href="<?= Url('admin/ticket/ansewer/'.$message->id); ?>">
                                    <div>
                                        
                                            <strong> {{ $message->fname }} </strong>
                                            <span class="pull-left text-muted"></span>
                                        </div>
                                        <div>{!! countText( $message->content ) !!}
                                            <br />
                                            @if( $message->olaviyat == '3' )
                                            <span class="label label-primary"> اولویت زیاد</span> 
                                            @elseif( $message->olaviyat == '2' )
                                            <span class="label label-success">  اولویت متوسط</span>
                                            @elseif( $message->olaviyat == '1' )
                                            <span class="label label-danger">  اولویت کم</span>
                                            @endif
                                        </div>
                                      
                                </a>
                            </li>
                            <li class="divider"></li>
                            @endforeach

                           
                            
                            <li>
                                <a class="text-center" href="<?= Url('admin/ticket'); ?>">
                                    <i class="icon-angle-left"></i>
                                    <strong>خواندن همه تیکت ها</strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--END TASK SECTION -->
                    <!--ALERTS SECTION -->
                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            @if( countcomment() == '0' )
                            @else
                            <span class="label label-info">{!! countcomment() !!}</span> 
                            @endif
                            <i class="icon-comments"></i>&nbsp; <i
                                class="icon-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            @foreach( getComment() as $comment )

                            <li>
                                <a href="<?= Url('admin/comments/'.$comment->id.'/edit'); ?>">
                                    <div>
                                        <span class="pull-left text-muted small"> {{ $comment->name_comments }}</span>
                                        <i class="icon-comment"></i>{!! countText( $comment->content_comments ) !!}
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            @endforeach
                            <li>
                                <a class="text-center" href="<?= Url('admin/comments'); ?>">
                                    <i class="icon-angle-left"></i>
                                    <strong>مشاهده همه دیدگاه ها</strong>
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
                            <li><a href="<?= Url('/logout'); ?>"><i class="icon-signout"></i> خروج </a>
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
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img width="60" height="60" class="media-object img-thumbnail user-img" alt="User Picture" src="<?= Url('assets/imageuser/anonymous-user.png') ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> 
                    <?php
                        echo Auth::user()->fname;
                    ?>
                    </h5>
                    <ul class="list-unstyled user-info">
                       
                    </ul>
                </div>
                <br />
            </div>
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
                        <li class=""><a href="<?= url('admin/books/create') ?>"><i
                                    class="icon-angle-left"></i> ایجاد
                                کتاب
                                جدید </a></li>
                        <li class="active"><a href="<?= url('admin/books') ?>"><i class="icon-angle-left"></i>
                                نمایش و
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
                        <li><a href="<?= Url('admin/writer/create') ?>"><i class="icon-angle-left"></i> ایجاد نویسنده
                                جدید </a>
                        </li>
                        <li><a href="<?= Url('admin/writer') ?>"><i class="icon-angle-left"></i>نمایش و مدیریت
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
                        <li><a href="<?= Url('admin/translator/create') ?>"><i class="icon-angle-left"></i> ثبت مترجم
                                جدید </a></li>
                        <li><a href="<?= Url('admin/translator') ?>"><i class="icon-angle-left"></i> نمایش و مدیریت
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
                        <a href="<?= Url('admin/chaphkoneh/create') ?>"><i class="icon-angle-left"></i> ثبت چاپخانه
                            جدید </a>
                </li>
                <li>
                    <a href="<?= Url('admin/chaphkoneh') ?>"><i class="icon-angle-left"></i> نمایش و مدیریت چاپخانه ها
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
                        <a href="<?= Url('admin/category/create') ?>" data-parent="DDL4-nav" data-toggle="collapse"
                            class="accordion-toggle" data-target="#DDL4_1-nav">
                            <i class="icon-angle-left"></i> ثبت موضوع جدید
                            <span class="pull-left" style="margin-left: 20px;">
                            </span>
                        </a>
                        <a href="<?= Url('admin/category') ?>" data-parent="DDL4-nav" data-toggle="collapse"
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
                   
                </a>
                <ul class="collapse" id="error-nav">
                    <li><a href="<?= Url('admin/users/create') ?>"><i class="icon-angle-left"></i>ثبت کاربر جدید</a>
                    </li>
                    <li><a href="<?= Url('admin/users') ?>"><i class="icon-angle-left"></i> نمایش و مدیریت کاربران</a>
                    </li>
                </ul>
            </li>
            <li><a href="<?= Url('admin/comments') ?>"><i class="icon-table"></i> دیدگاه ها
                <span class="pull-left">
                    <i class="icon-angle-right"></i>
                </span>
                &nbsp;<span class="label label-danger">{{ countcomment() }}</span>&nbsp;
                   
                </a></li>
            <li><a href="<?= Url('admin/ticket') ?>"><i class="icon-table"></i> تیکت ها
                <span class="pull-left">
                    <i class="icon-angle-right"></i>
                </span>
                    &nbsp; <span class="label label-success">{!! countmessage() !!}</span>&nbsp;
                </a></li>
            <li class="panel">
                <a href="<?= Url('/admin/sefareshs');?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
                    data-target="#blank-nav">
                    <i class="icon-check-empty"></i> مدیریت سفارشات
                    <span class="pull-left">
                        <i class="icon-angle-right"></i>
                    </span>
                    &nbsp; <span class="label label-success">{{ countsefaresh() }}</span>&nbsp;
                </a>
                <ul class="collapse" id="blank-nav">
                    <li><a href="<?= Url('/admin/sefareshs');?>"><i class="icon-angle-left"></i> سفارشات کاربران</a></li>
                </ul>
            </li>
            <li><a href="/login"><i class="icon-signin"></i> صفحه ورود </a></li>
            </ul>
        </div>
        <!--END MENU SECTION -->
        <!--PAGE CONTENT -->
        @yield('content')
        <!--END PAGE CONTENT -->
        <!-- RIGHT STRIP  SECTION -->
        <div id="left">

            <div class="well well-small">
                <a class="btn btn-white btn-block " href="<?= url('admin/books') ?>">راهنما</a>

                <a class="btn btn-primary btn-block" href="<?= url('admin/books') ?>"> کتاب ها</a>
                <a class="btn btn-info btn-block" href="<?= Url('admin/translator') ?>">مترجمین</a>
                <a class="btn btn-success btn-block" href="<?= Url('admin/writer') ?>">نویسندگان</a>
                <a class="btn btn-danger btn-block" href="<?= Url('admin/sefareshs') ?>">سفارشات</a>
                <a class="btn btn-warning btn-block" href="<?= Url('admin/comments') ?>"> دیدگاه ها </a>
                <a class="btn btn-info btn-block" href="<?= Url('admin/users') ?>"> کاربران </a>
            </div>
        </div>
        <!-- END RIGHT STRIP  SECTION -->
    </div>
    <!--END MAIN WRAPPER -->
    <!-- FOOTER -->
    <div id="footer">
        <p>کلیه حقوق سایت متعلق به <a href="<?= Url('/') ?>">فروشگاه کتاب </a> می باشد.</p>

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
<?php

use App\CommentsModel;
use App\SefareshatsModel;
use App\CallMeModel;

function countcomment()
{
    $count = CommentsModel::where('state', '0')->count();
    return $count;
}

function getComment()
{
    $comment = CommentsModel::where('state', '0')
        ->take(10)
        ->get();
    return $comment;
}

function countsefaresh(){
    $count = SefareshatsModel::where('state',1)->count();
    return $count;
}

function countmessage()
{
    $count = CallMeModel::where('state', 0)->count();
    return $count;
}

function getMessages()
{
    $message = CallMeModel::where('state', '0')
        ->take(5)
        ->get();
    return $message;
}

function countText($text)
{
    $gettext = substr($text, 0, 60);
    return $gettext;
}

?>
