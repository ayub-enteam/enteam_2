<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'feedbackfrom',
        'feedbackof',
        'user_id',
        'feedbackrating',
        'feedbackdescription',
    ];
}
