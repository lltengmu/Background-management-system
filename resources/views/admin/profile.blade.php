@extends('layouts.layout')

@section('style')
<style>
    .card{
        margin-bottom:0px;
    }
    .detail{
        width:30%;
        height:110px;
        display:flex;
    }
    .item{
        flex:1;
        position:relative;
    }
    .item:not(:last-child)::after{
        content:'';
        position: absolute;
        width:1px;
        height:65%;
        right:0;
        top:50%;
        transform:translateY(-50%);
        background-color: rgba(124,125,153,1);
    }
    .item .item-title{
        width:100%;
        height:40%;
        padding:10px 0;
        font-size:20px;
        font-weight:bold;
        text-align:center;
        color:rgba(124,125,153,1);
    }
    .item .item-count{
        width:100%;
        height:60%;
        font-size:36px;
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        
    }
    .top{
        margin-top:10px;
        transition:.5s ease;
    }
    .top:hover{
        transform:scale(1.1);
    }
</style>
@endsection
@section('title')
    简介
@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card" style="
                        display:flex;
                        justify-content:center;
                        align-items:center;">
                    <div class="center" style="width:95%; 
                        height:80%;
                        display:flex;
                        justify-content:space-between;
                        align-items:center;">
                        <div class="circle" style="
                        width:100px;
                        height:100px;
                        border-radius:50%;
                        background-color:rgba(0,0,0,.5);
                        ">
                        </div>
                        <div class="text" style="
                            width:60%; 
                            height:110px;
                            display:flex;
                            flex-direction:column;
                            justify-content:space-around;">
                            <div style="font-size:20px;font-weight:bold;">早安，金金素材，祝你开心每一天</div>
                            <div style="font-size:20px;color:rgba(124,125,153,1);">交互专家 | 金金设计素材--平台数据技术事业群--用户体验技术部--UED</div>
                        </div>
                        <div class="detail">
                            <div class="item">
                                <div class="item-title">项目数</div>
                                <div class="item-count">56</div>
                            </div>
                            <div class="item">
                                <div class="item-title">团队内排名</div>
                                <div class="item-count">8<span style="font-size:16px;margin-left:5px;">/ 24</span></div>
                            </div>
                            <div class="item">
                                <div class="item-title">国内访问</div>
                                <div class="item-count">2,264</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row grid">
            <div class="col-xl-10">
                <div class="grid-col">
                    <div class="">
                        <div class="card-header" style="display:flex;justify-content:space-between;align-items:center;">
                            <h4 class="card-title" style="font-weight:bold;">进行中的项目</h4>
                            <a href="javascript:void(0)" onclick="class="mb-0 subtitle" style="color:rgba(0,84,253,1);">查看更多消息</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 top">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">
                                            <h5 class="card-title text-white">Light card title</h5>
                                        </div>
                                        <div class="card-body mb-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0" style="display: flex;justify-content:space-between;">
                                            <div>xxx项目组</div>
                                            <div>Last updateed 3 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 top">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">
                                            <h5 class="card-title text-white">Light card title</h5>
                                        </div>
                                        <div class="card-body mb-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0" style="display: flex;justify-content:space-between;">
                                            <div>xxx项目组</div>
                                            <div>Last updateed 3 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 top">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">
                                            <h5 class="card-title text-white">Light card title</h5>
                                        </div>
                                        <div class="card-body mb-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0" style="display: flex;justify-content:space-between;">
                                            <div>xxx项目组</div>
                                            <div>Last updateed 3 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 top">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">
                                            <h5 class="card-title text-white">Light card title</h5>
                                        </div>
                                        <div class="card-body mb-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0" style="display: flex;justify-content:space-between;">
                                            <div>xxx项目组</div>
                                            <div>Last updateed 3 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 top">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">
                                            <h5 class="card-title text-white">Light card title</h5>
                                        </div>
                                        <div class="card-body mb-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0" style="display: flex;justify-content:space-between;">
                                            <div>xxx项目组</div>
                                            <div>Last updateed 3 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 top">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header">
                                            <h5 class="card-title text-white">Light card title</h5>
                                        </div>
                                        <div class="card-body mb-0">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer bg-transparent border-0" style="display: flex;justify-content:space-between;">
                                            <div>xxx项目组</div>
                                            <div>Last updateed 3 min ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="grid-col">
                    <div class="card-header">快捷导航</div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection