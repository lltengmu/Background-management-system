@extends('layouts.layout')

@section('content')
<!--**********************************Content body start***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>@lang('lang.Hi, welcome back!')</h4>
                    <span class="ml-1">{{ $user->first_name }}</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">@lang('lang.layout')</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">@lang('lang.index')</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CASE</h4>
                    </div>
                    <div class="col-3" style="display:flex;margin-top:10px;">
                        <button type="button" class="btn btn-primary col-4">@lang('lang.Create loan')</button>
                        <button type="button" class="btn btn-primary col-4" style="margin-left: 10px;">@lang('lang.Import to excel')</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>@lang('lang.Number')</th>
                                        <th>@lang('lang.Name')</th>
                                        <th>@lang('lang.first-name')</th>
                                        <th>@lang('lang.loan limit')</th>
                                        <th>@lang('lang.company')</th>
                                        <th>@lang('lang.Repayment period')</th>
                                        <th>@lang('lang.Repayment period')</th>
                                        <th>@lang('lang.state')</th>
                                        <th>@lang('lang.operation')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                        <td>2022/02/22</td>
                                        <td>01</td>
                                        <td>heh</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                        <td>2022/06/27</td>
                                        <td>01</td>
                                        <td>heh</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--**********************************
            Content body end
        ***********************************-->
</div>
@endsection