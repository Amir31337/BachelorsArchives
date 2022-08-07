@extends('backend-theme::layout')

@section('content')

    @include('include.breadcrumb',['data'=>[
         ['title'=>'مدیریت نقش های کاربری','url'=>url('admin/userRole')],
         ['title'=>'ویرایش نقش کاربری','url'=>url('admin/userRole/'.$userRole->id.'/edit')]
    ]])

    <div class="panel">

        <div class="header">ویرایش نقش کاربری - {{ $userRole->name }}</div>

        @include('users::roles._form',['type'=>'edit'])

    </div>
@endsection
