<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageAccount extends Model
{
    use HasFactory;

    /**
     * Get the files for this storage account.
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
