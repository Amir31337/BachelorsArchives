<?php

namespace Modules\contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\contact\Http\Requests\ContactRequest;
use Modules\contact\Repository\ContactRepositoryInterface;

class ApiController extends Controller
{

    /**
     * @var ContactRepositoryInterface
     */
    private $repository;

    public function __construct(ContactRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function store(ContactRequest $request)
    {
        return $this->repository->store($request);
    }


}
