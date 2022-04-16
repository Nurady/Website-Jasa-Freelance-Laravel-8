<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienceUser extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'experience_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'detail_user_id',
        'experience',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to one belongs to
    public function detail_user()
    {
        return $this->belongsTo(DetailUser::class, 'detail_user_id', 'id');
    }
}
