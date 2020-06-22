@extends('admin::layouts.content')

@section('page_title')
    {{ __('salepolicy::app.sale-policy.titlepage') }}
@stop

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h1>{{ __('salepolicy::app.sale-policy.titlepage') }}</h1>
            <p>{{ __('salepolicy::app.sale-policy.subtitlepage') }}</p>
        </div>
        
    </div>

    <div class="page-content">
        @inject('datagrid','ACEW\SalePolicy\DataGrids\SalePolicyDataGrid') 
        {!! $datagrid->render() !!}
        <?php // @inject('datagrid','Webkul\Admin\DataGrids\UserDataGrid') 
        // {!! $datagrid->render() !!}
        // {{-- <datetime></datetime> --}}
        ?>
    </div>
</div>


@stop