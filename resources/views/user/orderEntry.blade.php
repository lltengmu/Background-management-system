@extends('layouts.layout-user')

@section('title')
    订单录入
@endsection

@section('link')
    
@endsection


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <form>
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row grid">
                        <label for="order-number" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">订单编号:</label>
                        <input type="text" id="order-number" class="form-control col-lg-4" placeholder="" name="order-number">
                    </div>
                    <hr style="margin: 20px 0;">
                    <div class="row grid">
                        <label for="order-code" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">代码:</label>
                        <input type="text" id="order-code" class="form-control col-lg-4" placeholder="" name="order-code">
                    </div>
                    <div class="row grid">
                        <label for="order-degrees" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;margin:0;">度数:</label>
                        <input type="text" id="order-degrees" class="form-control col-lg-1" placeholder="" name="order-degrees">
                        <label for="order-certificate" class="col-lg-1 text-right" style="display: flex;justify-content:center;align-items:center;margin:0;">请用:</label>
                        <input type="text" id="order-certificate" class="form-control col-lg-1" placeholder="" name="order-certificate">
                        <div class="col-lg-1" style="display: flex;justify-content:flex-start;align-items:center;margin:0;">号合格证</div>
                    </div>
                    <div class="row grid">
                        <label for="order-name" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">名称:</label>
                        <input type="text" id="order-name" class="form-control col-lg-4" placeholder="" name="order-name">
                    </div>
                    <div class="row grid">
                        <label for="product-length" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">长:</label>
                        <!--<input type="text" id="product-length" class="form-control col-lg-4" placeholder="" name="product-length">-->
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" name="product-length">
                                <option>请选择长度</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="product-width" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">宽:</label>
                        <!--<input type="text" id="product-width" class="form-control col-lg-4" placeholder="" name="product-width">-->
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" name="product-width">
                                <option>请选择宽度</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="product-height" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">高:</label>
                        <!--<input type="text" id="product-height" class="form-control col-lg-4" placeholder="" name="product-height">-->
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" name="product-height">
                                <option>请选择高度</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="product-requirements" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">产品要求:</label>
                        <input type="text" id="product-requirements" class="form-control col-lg-4" placeholder="" name="product-requirements">
                    </div>
                    <div class="row grid">
                        <label for="product-times" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">生产次数:</label>
                        <input type="text" id="product-times" class="form-control col-lg-4" placeholder="" name="product-times">
                        <label for="product-Ktimes" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">生产K数:</label>
                        <input type="text" id="product-Ktimes" class="form-control col-lg-4" placeholder="" name="product-Ktimes">
                    </div>
                    <div class="row grid">
                        <label for="return-times" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">退货次数:</label>
                        <input type="text" id="return-times" class="form-control col-lg-4" placeholder="" name="return-times">
                        <label for="return-Ktimes" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">退货K数:</label>
                        <input type="text" id="return-Ktimes" class="form-control col-lg-4" placeholder="" name="return-Ktimes">
                    </div>
                    <div class="row grid">
                        <label for="sys-number" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">系统编号:</label>
                        <input type="text" id="sys-number" class="form-control col-lg-4" placeholder="" name="sys-number">
                    </div>
                    <hr style="margin: 20px 0;">
                    <div class="row grid">
                        <label for="order-nums" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">订货数量:</label>
                        <input type="text" id="order-nums" class="form-control col-lg-4" placeholder="" name="order-nums">
                        <div class="col-lg-1" style="display: flex;justify-content:flex-start;align-items:center">K</div>
                    </div>
                    <div class="row grid">
                        <label for="order-spares" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">备品:</label>
                        <input type="text" id="order-spares" class="form-control col-lg-4" placeholder="" name="order-spares">
                        <div class="col-lg-1" style="display: flex;justify-content:flex-start;align-items:center;font-weight:bold;">%</div>
                    </div>
                    <div class="row grid">
                        <label for="order-spares-nums" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">数量:</label>
                        <input type="text" id="order-spares-nums" class="form-control col-lg-4" placeholder="" name="order-spares-nums">
                        <div class="col-lg-1" style="display: flex;justify-content:flex-start;align-items:center;">K</div>
                    </div>
                    <div class="row grid">
                        <label for="user-pay-date" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">客户交期:</label>
                        <input type="text" id="user-pay-date" class="form-control col-lg-4" placeholder="" name="user-pay-date">
                    </div>
                    <div class="row grid">
                        <label for="product-quality" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">品质:</label>
                        <!--<input type="text" id="product-height" class="form-control col-lg-4" placeholder="" name="product-height">-->
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" name="product-quality">
                                <option>请选择品质</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="product-order" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">订单:</label>
                        <!--<input type="text" id="product-height" class="form-control col-lg-4" placeholder="" name="product-height">-->
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" name="product-order">
                                <option>请选择订单</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="material-name" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">物料名:</label>
                        <input type="text" id="material-name" class="form-control col-lg-4" placeholder="" name="material-name">
                        <label for="material-number" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">物料号:</label>
                        <input type="text" id="material-number" class="form-control col-lg-4" placeholder="" name="material-number">
                    </div>
                    <div class="row grid">
                        <label for="old-transportation-nmber" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">原运输单号:</label>
                        <input type="text" id="old-transportation-nmber" class="form-control col-lg-4" placeholder="" name="old-transportation-nmber">
                        <label for="P/O" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">P/O:</label>
                        <input type="text" id="P/O" class="form-control col-lg-4" placeholder="" name="P/O">
                    </div>
                    <div class="row grid">
                        <label for="comment" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">备注:</label>
                        <textarea class="form-control col-lg-4" rows="4" id="comment" name="comment"></textarea>
                    </div>
                    <hr style="margin: 20px 0;">
                    <div class="row grid">
                        <label for="design-slice-width" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">设计片宽:</label>
                        <input type="text" id="design-slice-width" class="form-control col-lg-4" placeholder="" name="design-slice-width">
                        <label for="actual-slice-width" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">实际片宽:</label>
                        <input type="text" id="actual-slice-width" class="form-control col-lg-4" placeholder="" name="actual-slice-width">
                    </div>
                    <div class="row grid">
                        <label for="slice-nums" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">片数:</label>
                        <input type="text" id="slice-nums" class="form-control col-lg-4" placeholder="" name="slice-nums">
                        <label for="slice-Paid" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">已交:</label>
                        <input type="text" id="slice-Paid" class="form-control col-lg-4" placeholder="" name="slice-Paid">
                    </div>
                    <div class="row grid">
                        <label for="order-date" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">下单日期:</label>
                        <input type="text" id="order-date" class="form-control col-lg-4" placeholder="" name="order-date">
                        <label for="remaining-date" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">剩余日期:</label>
                        <input type="text" id="remaining-date" class="form-control col-lg-4" placeholder="" name="remaining-date">
                    </div>
                    <hr style="margin: 20px 0;" class="bg-primary">
                    <div class="row grid">
                        <label for="deal-date" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">交货日期:</label>
                        <input type="text" id="deal-date" class="form-control col-lg-4" placeholder="" name="deal-date">
                        <label for="deal-level" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">交货等级:</label>
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" name="deal-level">
                                <option>请选择等级</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="deal-person" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">交货人:</label>
                        <input type="text" id="deal-person" class="form-control col-lg-4" placeholder="" name="deal-person">
                        <label for="deal-way" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">交货方式:</label>
                        <div class="col-lg-4" style="padding:0;">
                            <select class="form-control col-lg-12" id="deal-way" name="deal-way">
                                <option value="请选择方式">请选择方式</option>
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                                <option value="Option 3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row grid">
                        <label for="deal-address" class="col-lg-1" style="display: flex;justify-content:flex-end;align-items:center;">交货地址:</label>
                        <input type="text" id="deal-address" class="form-control col-lg-9" placeholder="" name="deal-address">
                    </div>
                    <div class="row grid" style="display: flex;justify-content:flex-end;align-items:center;margin:0;">
                        <button id="submit" type="submit" class="btn btn-primary btn-blockcol-lg-1" style="">录入</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        document.querySelector('#submit').addEventListener('click', function(e){
        e.preventDefault();
        let data = {};
        let inputs = document.querySelectorAll('input[name]');
        //console.log(inputs);
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
            url: `{{ url('/user/orderEntry') }}`,
            data:data,
            dataType: 'json',
            success: function(res) {
                console.log(res);
                //layer.msg(firstKey(res));
            },
            error: function(res) {
                console.log('接口出錯！');
            }
        }
        $.ajax(obj) 
        
    });
    </script>
@endsection