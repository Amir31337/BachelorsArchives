<?php

namespace Modules\appointment\Models;

use App\CustomModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends CustomModel
{
    use SoftDeletes;

    public $table = 'clients';

  /*  protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];*/

    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'client_id', 'id');
    }
}
