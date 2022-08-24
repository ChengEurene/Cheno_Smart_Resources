<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'IC',
        'email',
        'password',
        'date_of_birth',
        'mobile_no',
        'address',
        'address_2',
        'city',
        'state',
        'zip',
        'policy_status',
        'investment_status',
        'will_content',
    ];
    protected $table = 'clients';

    protected $guarded = ['id'];
    protected $hidden = [
        'email', 'remember_token',
    ];
    public function getAuthPassword()
    {
        return $this->password;
    }
}
