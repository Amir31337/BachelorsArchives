<template>
     <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                <div class="register_form_box">
                    <div class="first_step">
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



                        <div class="form-group btn_div">
                            <button class="btn btn-success" v-on:click="validate_login_form()">ورود به پنل  مدیریت</button>
                        </div>
                    </div>

                    <p style="margin-top:50px;text-align:center">
                         <span>هنوز ثبت نام نکرده ایده؟</span>
                         <router-link to="/register" class="register_link">
                              همین حالا ثبت نام کنید
                         </router-link>
                    </p>

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
     name:"Login",
     mixins:[myMinix],
     data(){
          return {
               mobile:'',
               password:'',
               mobile_error:false,
               password_error:false,
               server_error:false,
               error_message:'',
               send_form:false
          }
     },
     methods:{
          login:function()
          {
               if(!this.send_form)
               {
                    this.server_error=false;
                    this.send_form=true;
                    const url=this.$siteUrl+'/oauth/token';
                    const formData=new FormData();
                    formData.append('grant_type','password');
                    formData.append('client_id','3');
                    formData.append('client_secret','PDeOj6WKmPZE32atZCMGNSHVrCcvPdnBDlgvADeR');
                    formData.append('username',this.mobile);
                    formData.append('password',this.password);
                    formData.append('provider','users');
                    formData.append('scope','');
                    this.axios.post(url,formData).then(response=>{
                        if(response.data.access_token)
                        {
                             this.send_form=false;
                             const expire_in=Math.floor((new Date().getTime()/1000))+response.data.expires_in;
                             localStorage.setItem('token',response.data.access_token);
                             localStorage.setItem('expire_in',expire_in);
                             this.$router.push({name:'index',params:{getUserData:'yes'}});
                        }
                    }).catch(error=>{
                        this.send_form=false;
                        this.server_error=true;
                        if(error.response.status==400)
                        {
                             this.error_message='شماره موبایل یا کلمه عبور وارد شده اشتباه می باشد';
                        }
                        else{
                             this.error_message='خطا در ارسال اطلاعات  - مجددا تلاش نمایید';
                        }
                    });
               }
          },
          validate_login_form:function()
          {
               const p_v=this.validate_password();
               const m_v=this.validate_mobile();
               if(p_v && m_v)
               {
                   this.login();
               }
          }
     }
}
</script>

<style scoped>

</style>
