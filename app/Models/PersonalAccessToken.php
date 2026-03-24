<?php

namespace App\Models;

use Laravel\Sanctum\PersonalAccessToken as SanctumToken;


class PersonalAccessToken extends SanctumToken
{
    protected $table = 't_PersonalAccessTokens';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'tokenable_type',
        'tokenable_id',
        'name',
        'token',
        'abilities',
        'last_used_at',
        'expires_at',
    ];

    protected function casts(): array
    {
        return [
            'last_used_at' => 'datetime',
            'expires_at' => 'datetime',
        ];
    }
}
