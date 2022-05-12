<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>پنل کاربری</title>
<link type="text/css" rel="stylesheet" href="<?= Url('userpanel/style.css'); ?>">
<script type="text/javascript" src="<?= Url('userpanel/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('userpanel/jquery.flot.js'); ?>"></script>
<script type="text/javascript" src="<?= Url('userpanel/doc.js'); ?>"></script>
@yield('css')
</head>
<body>

<div class="body_style">
	<div class="menu">
    <a href="/" class="logo"></a>
    </div>
	<div class="nav">
    	<ul>
        
            <li>
            	<div class="fix">
                    <span class="ico"><img src="<?= Url('userpanel/image/ico2.png'); ?>"></span>
                    <span class="value">بخش تیکت</span>
                </div>
                <ul>
                	<li><a href="<?= Url('user/ticket/create'); ?>">ثبت تیکت </a></li>
                    <li><a href="<?= Url('user/ticket'); ?>">نمایش تیکت</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
    <div class="content">
        
        @yield('content')
	
	</div>

    
</div>

</body>
</html>
