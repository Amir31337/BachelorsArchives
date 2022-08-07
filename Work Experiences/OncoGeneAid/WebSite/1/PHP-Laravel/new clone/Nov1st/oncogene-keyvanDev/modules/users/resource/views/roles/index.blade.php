@extends('backend-theme::layout')

@section('content')

    @include('include.breadcrumb',['data'=>[['title'=>'مدیریت نقش های کاربری','url'=>url('admin/userRole')]]])
    <div class="panel">

        <div class="header">
            مدیریت نقش های کاربری

            @include('include.item_table',['count'=>$trash_role_count,'route'=>'admin/userRole','title'=>'نقش کاربری'])
        </div>

        <div class="panel_content">

            <?php
              \App\Lib\GridView::showTable([
                  'dataProvider'=>$userRole,
                  'columns'=>[
                      ['label'=>'نام نقش','attr'=>'name'],
                      ['label'=>'تعداد کاربر','attr'=>function($model){
                           if($model->userrole_count){
                               return replace_number($model->userrole_count);
                           }
                           else{
                               return  replace_number(0);
                           }
                      }],
                  ],
                   'actions'=>[
                       function($model){
                          $url=url('admin/userRole/access/'.$model->id);
                          return '<a href="'.$url.'" style="color:black">
                                  <span  data-toggle="tooltip" data-placement="bottom"  title="دسترسی ها"  class="fa fa-lock"></span>
                                </a> ';
                       }
                   ],
                  'tableLabel'=>'نقش کاربری',
                  'route_param'=>'userRole'
              ]);
            ?>

            {{ $userRole->links() }}
        </div>
    </div>

@endsection
