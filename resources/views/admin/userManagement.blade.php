@extends('layouts.layout')

@section('title')
    用户管理
@endsection

@section('link')

@endsection


@section('style')

<style>
    

#main-wrapper{
    overflow:visible;
}
.label-switch-off{
    width:60px;
    height:20px;
    border:1px solid #ddd;
    border-radius:25px;
    position: relative;
    background-color:#ddd;
}
.label-switch-on{
    width:60px;
    height:20px;
    border:1px solid #ddd;
    border-radius:25px;
    position: relative;
    background-color:rgba(89,59,219,1);
}
.switch-cicle-off{
    width:18px;
    height:18px;
    border-radius:50%;
    background-color:#fff;
    position: absolute;
    top:50%;
    transform:translateY(-50%);
    transition:all 0.2s;
}
.switch-cicle-on{
    width:18px;
    height:18px;
    border-radius:50%;
    background-color:#fff;
    position: absolute;
    top:50%;
    transform:translate(40px,-50%);
    transition:all 0.2s;
}

</style>

@endsection


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body" style="font-weight:bold;">所有成员</div>
        </div>
        @foreach ( $users as $user )
            <div class="card" style="border-radius:15px;">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="user-info-desc col-lg-1">
                                <div class="user-info-pic" style="width:70px;height:70px;border-radius:50%;background-color:rgba(124,125,153,1);"></div>
                            </div>
                            <div class="user-info-desc col-lg-2" style="display:flex;flex-direction:column;justify-content:space-around;">
                                <div class="user-info-desc-title">所在项目/部门</div>
                                <div class="user-info-desc-job">职位</div>
                            </div>
                            <div class="user-info-captain col-lg-2" style="display:flex;flex-direction:column;justify-content:space-around;">
                                <div class="user-info-desc-title">组长</div>
                                <div class="user-info-desc-job">联系方式:xxxxxxxxxxx</div>
                            </div>
                            <div class="user-info-captain col-lg-2" style="display:flex;flex-direction:column;justify-content:space-around;">
                                <div class="user-info-desc-title">入职日期</div>
                                <div class="user-info-desc-job">2022-02-02</div>
                            </div>
                            <div class="user-info-state col-lg-4" style="display:flex;flex-direction:column;justify-content:space-around;align-items:flex-end;">
                                <div class="user-info-desc-title">账号状态</div>
                                <div>
                                    <div class="label-switch-on" id="label-switch" data-id="{{ $user->id }}">
                                        <div class="switch-cicle-on"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-info-more col-lg-1 text-right" style="display:flex;justify-content:flex-end;align-items:center;">
                                <div class="user-info-more" data-toggle="dropdown" style="width:30px;height:30px;display:flex;justify-content:center;align-items:center;border-radius:50%;background-color:rgba(124,125,153,.1);cursor:pointer;">
                                    <i class="layui-icon layui-icon-more-vertical"></i>
                                    <div class="dropdown-menu">
                                        <h5 class="dropdown-header">Dropdown header</h5>
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                        <h5 class="dropdown-header">Dropdown header</h5>
                                        <a class="dropdown-item" href="#">Another link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('script')
<script>
    let switchs = document.querySelectorAll('div[data-id]');
    
    switchs.forEach(item => {
        item.addEventListener("click",function(){
            if(this.firstElementChild.classList[0] == 'switch-cicle-on'){
                this.firstElementChild.classList.remove('switch-cicle-on');
                this.firstElementChild.classList.add('switch-cicle-off');
                this.classList.remove('label-switch-on');
                this.classList.add('label-switch-off');
            }else{
                this.firstElementChild.classList.remove('switch-cicle-off');
                this.firstElementChild.classList.add('switch-cicle-on');
                this.classList.remove('label-switch-off');
                this.classList.add('label-switch-on');
            }
        });
    });
</script>

@endsection