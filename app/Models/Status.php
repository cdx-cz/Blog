<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function user()
    {
        // User::class为"App\Models\User.php"
        return $this->belongsTo(User::class);
    }
}
