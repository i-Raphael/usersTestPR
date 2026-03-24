<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 't_Roles';
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable = [
        'RoleName',
        'GuardName',
        'Description',
        'IsActive',
        'CreatedAt',
        'UpdatedAt',
    ];

    protected function casts(): array
    {
        return [
            'CreatedAt' => 'datetime',
            'UpdatedAt' => 'datetime',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 't_UserRoles', 'RoleId', 'UserId');
    }
}
