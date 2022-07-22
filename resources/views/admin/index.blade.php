@extends('layouts.layout')

@section('title')
    系统首页
@endsection

@section('style')
<style>
.comment{
    margin-right:25px;
}
</style>

@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-4">
                系统信息
            </div>
        </div>
        <div class="row grid">
            <div class="col-lg-12">
                <div class="grid-col">
                    <span class="comment">系统版本</span>
                    <span>v1.0</span>
                </div>
            </div>
        </div>
        <div class="row grid">
            <div class="col-lg-12">
                <div class="grid-col">
                    <span class="comment">后端框架</span>
                    <a href="https://learnku.com/docs/laravel/8.5/helpers/10389" style="text-decoration: underline;">laravel 8.83.16</a>
                </div>
            </div>
        </div>
        <div class="row grid">
            <div class="col-lg-12">
                <div class="grid-col">
                    <span class="comment">主要特色</span>
                    <span>响应式布局/简约/易上手/完善的多角色权限管理</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection