<?php

namespace ACEW\SalePolicy\Models;

use Illuminate\Database\Eloquent\Model;
use ACEW\SalePolicy\Contracts\AceSettings as AceSettingsContract;

class AceSettings extends Model implements AceSettingsContract
{
    
    protected $table = 'acesettings';

    protected $fillable = [
        'type',
        'json_content',
        'create_at',
    ];
}