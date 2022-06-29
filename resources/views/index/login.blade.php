@extends('layouts.default');

@section('title')
    focus-Login
@endsection

@section('content')
<div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ URL('/login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Captcha</strong></label>
                                            <div style="display: flex;">
                                                <input type="text" name="captcha" style="width:70%;height:68px;" class="form-control" value="" placeholder="请输入验证码">
                                                <img src="{{ url('captcha') }}" alt="换一张" style="width: 30%;height:100%;" onclick="this.src='{{ url('captcha') }}?' + Math.random()">
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{ URL('/register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        @foreach ($errors->all() as $error) 
        <script>
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.msg('{{ $error }}');
            });
        </script>
        @endforeach
    @elseif (session('logout'))
        <script>
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.msg("{{ session('logout') }}");
            });
        </script>
    @endif
    
@endsection

