<?php


namespace Modules\contact\Repository;


use App\Repositories\EloquentBaseRepository;
use Modules\contact\Models\Contact;

class EloquentContactRepository extends EloquentBaseRepository implements  ContactRepositoryInterface
{
    protected $model='Modules\contact\Models\Contact';
    public function find($id)
    {

    }

    public function create($request)
    {

    }

    public function trashCount()
    {

    }

    public function getList($request)
    {

    }

    public function update($id, $request)
    {

    }

    public function findContact($where)
    {

    }

    public function findPage($where)
    {

    }

    public function store($request)
    {
        $contact =new Contact();
        $contact->name_family =  $request->input('nameAndFamily');
        $contact->number_phone =  $request->input('numberPhone');
        $contact->email =  $request->input('email');
        $contact->subject =  $request->input('subject');
        $contact->message_text =  $request->input('messageText');
        $contact->save();

        return response(['message' =>'ثبت پیام با موفقیت انجام شد' ,'data'=>$contact->id], 200);
    }
}
