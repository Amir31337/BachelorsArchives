@extends('backend-theme::layout')

@section('content')

    @include('include.breadcrumb',['data'=>[
         ['title'=>'مدیریت نقش های کاربری','url'=>url('admin/userRole')],
         ['title'=>'افزودن نقش کاربری جدید','url'=>url('admin/userRole/create')]
    ]])
    <div class="panel">
        <div class="header">افزودن نقش کاربری جدید</div>

        @include('users::roles._form',['type'=>'create'])

    </div>
@endsection
