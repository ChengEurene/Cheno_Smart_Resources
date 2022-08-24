<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    protected $fillable=
    [
        'name',
        'phone_no',
        'IC',
        'quotation_type',
        'remark',
        'other_information',
    ];
    protected $table = 'quotation_request';
}
