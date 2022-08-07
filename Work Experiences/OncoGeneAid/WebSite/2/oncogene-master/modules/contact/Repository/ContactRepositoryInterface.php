<?php


namespace Modules\contact\Repository;


use App\Repositories\BaseInterface;

interface ContactRepositoryInterface extends BaseInterface
{
    public function store($request);
}
