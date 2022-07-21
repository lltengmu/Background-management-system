@extends('layouts.default')

@section('title')
    后台管理系统
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
                                    <h4 class="text-center mb-4" style="font-weight: bold;">后台管理系统</h4>
                                    <form action="{{ url('/admin/loging') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>用户名</strong></label>
                                            <input type="text" name="username" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>密码</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>验证码</strong></label>
                                            <div style="display: flex;">
                                                <input type="text" name="captcha" style="width:70%;height:68px;" class="form-control" value="" placeholder="请输入验证码">
                                                <img src="{{ url('captcha') }}" alt="换一张" style="width: 30%;height:100%;" onclick="this.src=`{{ url('captcha') }}?` + Math.random()">
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">记住我！</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">忘记密码?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button id="submit" type="submit" class="btn btn-primary btn-block">登录</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{ URL('/admin/register') }}">Sign up</a></p>
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
            @if ($loop->first)
                <script>
                    layui.use('layer', function(){
                        var layer = layui.layer;
                        layer.msg('{{ $error }}');
                    });
                </script>
            @endif
        @endforeach
    @elseif (session('logout'))
        <script>
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.msg("{{ session('logout') }}");
            });
        </script>
    @endif
    {{--<script>
        'use strict'
        /* 
        *@return 返回的数据对象下的第一个属性，属性指向数组，返回数组的第一个值
        */
        function firstKey(object){
            let keys = Object.getOwnPropertyNames(object);
            return object[keys[0]][0];
        }
    //監聽表單提交
    document.querySelector('#submit').addEventListener('click', function(e){
        e.preventDefault();
        let data = {};
        let inputs = document.querySelectorAll('input[name]');
        inputs.forEach(item => {
            data[`${item.getAttribute('name')}`] = item.value;
        });
        console.log(data);
        var obj = {
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
                //'Content-Type':'application/json',
            },
            url: `{{ url('/admin/loging') }}`,
            data:data,
            dataType: 'json',
            success: function(res) {
                console.log(res);
                let layer = layui.layer;
                //layer.msg(firstKey(res));
            },
            error: function(res) {
                console.log('接口出錯！');
            }
        }
        $.ajax(obj) 
        
    });
    </script>--}}
@endsection

