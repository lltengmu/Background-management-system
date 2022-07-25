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
                    <li><a href="{{ URL('/user/index') }}">系统首页</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="layui-icon layui-icon-set"></i>
                    <span class="nav-text">表单录入</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/user/orderEntry') }}">订单录入</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="layui-icon layui-icon-set"></i>
                    <span class="nav-text">数据表格</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/user/orderData') }}">订单数据</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************Sidebar end***********************************-->