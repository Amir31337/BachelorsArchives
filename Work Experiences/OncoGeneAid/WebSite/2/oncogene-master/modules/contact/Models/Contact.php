<?php

namespace Modules\contact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='contacts';

    protected $fillable=['name_family','number_phone','email','subject','message_text'];
}
