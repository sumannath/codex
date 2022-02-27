<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
     * Get the children.
     */
    public function children()
    {
        return $this->hasMany(File::class, 'id', 'parent_file_id');
    }

    /**
     * Get the parent.
     */
    public function parent()
    {
        return $this->belongsTo(File::class, 'id', 'parent_file_id');
    }
}
