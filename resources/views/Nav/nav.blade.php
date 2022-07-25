<!--**********************************Sidebar start***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="layui-icon layui-icon-home"></i>
                    <span class="nav-text">系统首页</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ URL('/admin/index') }}">系统首页</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="layui-icon layui-icon-set"></i>
                    <span class="nav-text">系统配置</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/admin/user') }}">参数配置</a></li>
                    <li><a href="javascript:void()">日志管理</a></li>
                    <li><a href="javascript:void()">字典管理</a></li>
                    <li><a href="javascript:void()">附件管理</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="layui-icon layui-icon-user"></i>
                    <span class="nav-text">权限管理</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/admin/userManagement ') }}">用户管理</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="layui-icon layui-icon-read"></i>
                    <span class="nav-text">内容管理</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">栏目管理</a></li>
                    <li><a href="javascript:void()">文章管理</a></li>
                    <li><a href="javascript:void()">广告管理</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************Sidebar end***********************************-->