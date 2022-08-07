<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 right_box">
                 <h5>ثبت نام در آنکوژن</h5>
                 <div class="content">
                     <ul class="step_ul">
                         <li>
                            <div :class="step<2 ? 'step_active_icon' : 'step_inactive_icon'">
                                <span class="fa fa-user"></span>
                            </div> 
                            <span class="step_header">۱. اطلاعات فروشنده</span>
                            <p>اطلاعات شخصی فروشنده، اطلاعات تجاری، اطلاعات تماس</p>
                         </li>
                         <li>
                            <div :class="step==2 ? 'step_active_icon' : 'step_inactive_icon'">
                                <span class="fa fa-mobile"></span>
                            </div> 
                            <span class="step_header">۲. تایید شماره موبایل</span>
                            <p>تایید شماره موبایل ثبت شده</p>
                         </li>
                         <li>
                            <div :class="step==3 ? 'step_active_icon' : 'step_inactive_icon'">
                                <span class="fa fa-upload"></span>
                            </div> 
                            <span class="step_header">۳. بارگذاری مدارک</span>
                            <p>ارسال تصویر مدارک شخصی و تجاری</p>
                         </li>
                          <li>
                            <div :class="step==4 ? 'step_active_icon last_step_active_icon' : 'step_inactive_icon last_step'">
                                <span class="fa fa-shopping-bag"></span>
                            </div> 
                            <span class="step_header">۴. اتمام ثبت نام</span>
                            <p>به جمع فروشندگان ما خوش آمدید</p>
                         </li>
                     </ul>
                 </div>
            </div>
            <div class="col-md-8">
               
                <div class="register_form_box">
                    <div v-if="step==0" class="first_step">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" v-model="email" :class="email_error ? 'form-control validate_error_border' : 'form-control'" placeholder="ایمیل خود را وارد نمایید">
                                <div class="input-group-prepend">
                                    <div :class="[email_error ? 'input-group-text validate_error_border' : 'input-group-text' ]">
                                        <span class="fa fa-envelope"></span>
                                     </div>
                                </div>
                            </div>
                            <p v-if="email_error" class="has_error">{{ email_error }}</p>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" v-model="password" :class="password_error ? 'form-control validate_error_border' : 'form-control'" placeholder="رمز عبور خود را وارد نمایید">
                                <div class="input-group-prepend">
                                    <div :class="[password_error ? 'input-group-text validate_error_border' : 'input-group-text' ]">
                                        <span class="fa fa-lock"></span>
                                     </div>
                                </div>
                            </div>
                            <p v-if="password_error" class="has_error">{{ password_error }}</p>
                        </div>

                       <div class="form-group">
                            <div class="input-group">
                                <input type="text" v-model="mobile" :class="mobile_error ? 'form-control validate_error_border' : 'form-control'" placeholder="شماره موبایل خود را وارد نمایید">
                                <div class="input-group-prepend">
                                    <div :class="[mobile_error ? 'input-group-text validate_error_border' : 'input-group-text' ]">
                                        <span class="fa fa-mobile"></span>
                                     </div>
                                </div>
                            </div>
                            <p v-if="mobile_error" class="has_error">{{ mobile_error }}</p>
                        </div>

                        <div class="form-group btn_div">
                            <button class="btn btn-success" v-on:click="validate_register_form()">ثبت نام</button>
                        </div>
                    </div>
                    <div class="alert alert-warning" id="spinner" v-if="send_form">
                        <div class="spinner-border text-warning" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <span style="padding-right:10px;font-size:14px">در حال ارسال اطلاعات ...</span>
                    </div>

                    <div class="alert alert-danger"  v-if="server_error">
                        {{ error_message }}
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script>
import myMinix from '../../myMixin';

export default {
    name:"Register",
    mixins:[myMinix],
    data(){
        return {
            step:0,
            email_error:false,
            email:'',
            password_error:false,
            password:'',
            mobile_error:false,
            mobile:'',
            send_form:false,
            server_error:false,
            error_message:'',
            account_type:1
        }
    },
    methods:{
        validate_register_form:function()
        {
            if(!this.send_form)
            {
                const e_v=this.validate_email();
                const p_v=this.validate_password(6);
                const m_v=this.validate_mobile();
                if(e_v && p_v && m_v)
                {
                    this.show_server_error(false);
                    this.send_form=true;
                    const formData=new FormData();
                    formData.append('email',this.email);
                    formData.append('password',this.password);
                    formData.append('mobile',this.mobile);
                    this.axios.post(this.$siteUrl+'/api/seller/first_step_register',formData).then(response=>{
                        if(response.data.status=='error')
                        {
                            this.send_form=false;
                            this.server_error=true;
                            this.error_message=response.data.message;
                        }
                        else{
                            this.step=response.data.step;
                            this.send_form=false;
                        }
                    }).catch(()=>{
                        this.send_form=false;
                        this.server_error=true;
                        this.error_message='خطا در ارسال اطلاعات - مجددا تلاش نمایید';
                    });
                }
            }
        },
        show_server_error:function(message)
        {
            this.server_error=message==false ? false : true;
            this.error_message=message;
        },
        SetRegisterStep:function(step)
        {
            this.step=step;
        },
        set_account_type:function(type)
        {
            this.account_type=type;
        }
    }
}
</script>

