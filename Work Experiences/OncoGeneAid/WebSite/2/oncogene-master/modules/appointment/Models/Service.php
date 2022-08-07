<?php

namespace Modules\appointment\Models;

use App\CustomModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends CustomModel
{
    use SoftDeletes;

    public $table = 'services';

    /*protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];*/

    protected $guarded = [];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }
}
