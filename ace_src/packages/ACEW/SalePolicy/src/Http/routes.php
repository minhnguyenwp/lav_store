<?php
    //Route::view('/sale-policy', 'salepolicy::salepolicy.salepolicy');
    Route::get('admin/sale-policy', 'ACEW\SalePolicy\Http\Controllers\SalePolicyController@index')
        ->defaults('_config', [
            'view' => 'salepolicy::salepolicy.index'
        ])->name('salepolicy.index');