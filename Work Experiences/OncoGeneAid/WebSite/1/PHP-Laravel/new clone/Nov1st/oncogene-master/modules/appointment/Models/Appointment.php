<?php

namespace Modules\appointment\Models;

use App\CustomModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends CustomModel
{
    use SoftDeletes;

    public $table = 'appointments';

    /*protected $dates = [
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'finish_time',
    ];*/

    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
