<?php
Route::group(['middleware' => ['web']], function () {
    Route::prefix('admin/theme')->group(function () {
        Route::group(['middleware' => ['admin']], function () {
            
            // LIST VIEW
            Route::get('/sale-policy', 'ACEW\SalePolicy\Http\Controllers\SalePolicyController@index')
                ->defaults('_config', [
                    'view' => 'salepolicy::salepolicy.index'
                ])->name('salepolicy.admin.index');
            
            // EDIT SalePolicy - View
            Route::get('/sale-policy/edit/{id}', 'ACEW\SalePolicy\Http\Controllers\SalePolicyController@edit')
                ->defaults('_config',[
                    'view' => 'salepolicy::salepolicy.edit'
                ])->name('salepolicy.admin.edit');
            
            //slider edit update
            Route::post('/sale-policy/edit/{id}','ACEW\SalePolicy\Http\Controllers\SalePolicyController@update')
                ->defaults('_config',[
                    'redirect' => 'salepolicy.admin.index'
                ])->name('salepolicy.admin.update');
        });
    });
});