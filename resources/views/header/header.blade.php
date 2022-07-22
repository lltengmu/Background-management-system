<!--**********************************Nav header start***********************************-->
<div class="nav-header">
    <a href="#" class="brand-logo">
        <img class="logo-abbr" src="{{ URL::asset('focus-premium/themes/focus-premium/focus/images/logo.png') }}" alt="">
        <img class="logo-compact" src="{{ URL::asset('focus-premium/themes/focus-premium/focus/images/logo-text.png') }}" alt="">
        <img class="brand-title" src="{{ URL::asset('focus-premium/themes/focus-premium/focus/images/logo-text.png') }}" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************Nav header end***********************************-->

<!--**********************************Header start***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown" style="display: flex;justify-content: center;align-items: center">
                            <i class="layui-icon layui-icon-refresh" style="padding:10px 0 0 0;color:rgb(89,59,219);transform:scale(.8);" onclick="refresh()"></i>
                        </span>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled">
                                <li class="media dropdown-item">
                                    <span class="success"><i class="ti-user"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('/') }}/{{ session('user_type') }}/profile" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">简介</span>
                            </a>
                            <a href="./email-inbox.html" class="dropdown-item">
                                <i class="icon-envelope-open"></i>
                                <span class="ml-2">邮箱</span>
                            </a>
                            <a href="{{ url('/logout') }}" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">退出</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<script>
    let refresh = () => {
        location.reload();
    };
</script>
<!--**********************************Header end ti-comment-alt***********************************-->