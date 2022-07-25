@extends('layouts.layout')

@section('title')
    系统首页
@endsection

@section('style')
<style>
    .circle{
        position: relative;
        width:100px;
        height:100px;
        border-radius:50%;
        background-color:rgba(0,0,0,.5);
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
        transition:.5s ease;
    }
    .top:hover{
        transform:scale(1.1);
    }
    .right-card .card{
        margin-bottom: 20px;
    }
    .card-header{
        font-weight: bold;
    }
    .team:hover{
        cursor: pointer;
    }
    .team-user-info{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(124,125,153,1);
    }
    .single{
        padding:10px 0;
    }
    .single .title{
        font-weight: bold;
        margin-bottom:10px;
    }
    /* 
    * 改变日历被选中日期的背景颜色
    */
    .pignose-calendar.pignose-calendar-blue .pignose-calendar-body .pignose-calendar-row .pignose-calendar-unit.pignose-calendar-unit-active a {
        color: #fff;
        background-color: rgba(89,59,219,1);
    }
</style>

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
                        <div class="circle"></div>
                        <div class="text" style="
                            width:60%; 
                            height:110px;
                            display:flex;
                            flex-direction:column;
                            justify-content:space-around;">
                            <div style="font-size:20px;font-weight:bold;">早安，xxxx，祝你开心每一天</div>
                            <div style="font-size:20px;color:rgba(124,125,153,1);">交互专家 | 金金设计素材--平台数据技术事业群--用户体验技术部--UED</div>
                        </div>
                        <div class="detail">
                            <div class="item">
                                <div class="item-title">项目数</div>
                                <div class="item-count">6</div>
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
            <div class="col-xl-3 right-card">
                <div class="row">
                    <div class="card col-lg-12">
                        <div class="card-header">日历</div>
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-12">
                        <div class="card-header">团队</div>
                        <div class="card-body">
                            <div class="row grid">
                                @foreach ($staffs as $s)
                                    <div class="col-xl-6 team">
                                        <div class="grid-col" data-toggle="modal" data-target="#exampleModalCenter{{ $s->id }}">
                                            <div class="row">
                                                <div class="team-user-info"></div> 
                                                <div class="col-lg-8 text-left" style="padding:10px 10px;">{{$s->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- 
        循环渲染
     -->
    @foreach($staffs as $s)
        <div class="modal fade" id="exampleModalCenter{{ $s->id }}">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">员工信息</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="">
                            <div class="col-lg-4" style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin-bottom:0px;">
                                <div class="user-info-pic" style="width:80px;height:80px;background-color:black;border-radius:50%;"></div>
                                <div class="user-info-name" style="">{{ $s->name }}</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="single row">
                                    <div class="title col-lg-12">联系方式</div>
                                    <div class="user-info-phone col-lg-12"><i class="layui-icon layui-icon-cellphone-fine" style="margin-right:5px;"></i>{{ $s->phone }}</div>
                                </div>
                                <div class="single row">
                                    <div class="title col-lg-12">邮箱</div>
                                    <div class="user-info-phone col-lg-12"><i class="layui-icon layui-icon-email" style="margin-right:5px;"></i>{{ $s->email }}</div>
                                </div>
                                <div class="single row">
                                    <div class="title col-lg-12">地址</div>
                                    <div class="user-info-phone col-lg-12"><i class="layui-icon layui-icon-tree" style="margin-right:5px;"></i>{{ $s->address }}</div>
                                </div>
                                <div class="single row">
                                    <div class="title col-lg-12">留言</div>
                                    <div class="basic-form">
                                        <form>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" cols="40" id="comment"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">确认</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection

@section('script')



<script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/vendor/pg-calendar/js/pignose.calendar.min.js') }}"></script>
<script src="{{ URL::asset('focus-premium/themes/focus-premium/focus/js/dashboard/dashboard-2.js') }}"></script>
<script>
    
</script>
@endsection