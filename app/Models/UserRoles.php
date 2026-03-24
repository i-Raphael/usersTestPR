<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    //
    protected $table = 't_UserRoles';
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable = [
        'UserId',
        'RoleId',
    ];

    protected function casts(): array
    {
        return [
            'UserId' => 'integer',
            'RoleId' => 'integer',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'Id');
    }

    public function role()
    {
        return $this->belongsTo(Roles::class, 'RoleId', 'Id');
    }
}
