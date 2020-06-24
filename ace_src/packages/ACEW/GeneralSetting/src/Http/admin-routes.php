<?php
Route::group(['middleware' => ['web']], function () {
    Route::prefix('admin/theme')->group(function () {
        Route::group(['middleware' => ['admin']], function () {
            
            // LIST VIEW
            Route::get('/setting', 'ACEW\GeneralSetting\Http\Controllers\GeneralSettingController@index')
                ->defaults('_config', [
                    'view' => 'GeneralSetting::GeneralSetting.index'
                ])->name('generalsetting.admin.index');
        });
    });
});