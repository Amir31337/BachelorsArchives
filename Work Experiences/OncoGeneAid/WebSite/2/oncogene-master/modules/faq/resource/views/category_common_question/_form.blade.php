<div>
    <?php
    $option=['url' => 'admin/category-common-question','files'=>true];
    if($type=='edit'){
        $option['url']='admin/category-common-question/'.$CategoryCommonQuestion->id;
        $form=new \App\Lib\FormBuilder($errors,$option, $type,$CategoryCommonQuestion);
    }
    else{
        $form=new \App\Lib\FormBuilder($errors,$option);
    }
    ?>

    <?php $form->textInput('title','نام دسته',['validate'=>'required']); ?>

    <?php $url=''; ?>
    @if(isset($CategoryCommonQuestion))
        @php $url=url('files/upload/'.$CategoryCommonQuestion->icon) @endphp
    @endif

    <?php $form->imageInput('pic','انتخاب ایکون ',['class'=>'small'],$url); ?>

    <?php $form->btn( $type=='create' ? 'ثبت دسته' : 'ویرایش دسته', $type); ?>

    <?php $form->close() ?>

</div>
