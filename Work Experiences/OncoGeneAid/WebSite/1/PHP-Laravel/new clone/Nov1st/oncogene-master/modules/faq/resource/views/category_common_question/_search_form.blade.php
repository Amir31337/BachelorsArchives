<?php
   $args=[];
   $args['title']='جست و جو';
?>

<x-panel-box :args="$args">

    <?php
        $option=['url' => 'admin/category-common-question','method'=>'get','class'=>'search_form'];

        $form=new \App\Lib\FormBuilder($errors,$option, 'create',[]);
    ?>

    <?php

        $form->textInput('title','نام دسته',[],$req->get('title',''));

        $form->btn('جست و جو', 'edit');

        $form->close();

    ?>


</x-panel-box>
