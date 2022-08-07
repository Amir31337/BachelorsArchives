<template>
    <div style="display: flex;align-items: center;justify-content: space-around;">
        <v-menu offset-y min-width="230px">
            <template v-slot:activator="{ on, attrs }">
                <v-btn v-if="mobile!=='on'" class="donation">
                    <span>کمک مالی</span>
                </v-btn>
                <v-icon v-if="mobile!=='on'"
                        right
                        size="40">
                    mdi-account-outline
                </v-icon>
                <v-btn
                    v-if="login==='yes'"
                    v-bind="attrs"
                    v-on="on"
                    text
                    class="login-btn"
                >
                    <span v-if="mobile!=='on'">پنل مدیریت</span>
                    <v-icon v-if="mobile!=='on'"
                            right
                    >
                        mdi-chevron-down
                    </v-icon>

                    <v-icon v-if="mobile==='on'"
                            right
                            class="after_login_icon"
                            size="25">
                        mdi-account-outline
                    </v-icon>

                </v-btn>
                <v-btn v-else
                       v-bind="attrs"
                       v-on="on"
                       text
                       class="login-btn"
                >
                    <span v-if="mobile!=='on'">ورود / ثبت نام</span>
                    <v-icon v-if="mobile==='on'"
                            right
                            class="after_login_icon"
                            size="25">
                        mdi-account-outline
                    </v-icon>
                </v-btn>
            </template>
            <v-list class="auth-menu">

                <v-list-item v-if="role==='admin' || role_id>0 ">
                    <v-list-item-icon>
                        <v-icon>mdi-tablet-dashboard</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a :href="$siteUrl+'/admin'" style="color: black">پنل مدیریت</a>
                    </v-list-item-title>
                </v-list-item>
                <v-list-item v-if="login==='no'">
                    <v-list-item-title>
                        <v-btn class="login-link" color="primary">
                            <a :href="$siteUrl+'/login'">ورود به {{ shop_name }}</a>
                        </v-btn>
                    </v-list-item-title>
                </v-list-item>

                <v-divider class="auth_box_divider"></v-divider>

                <v-list-item v-if="login==='no'" style="margin-top:10px">
                    <v-list-item-title style="text-align: center">
                        <span>کاربر جدید هستید ؟ </span>
                        <a class="register-link" :href="$siteUrl+'/register'">ثبت نام</a>
                    </v-list-item-title>
                </v-list-item>
                <v-list-item>
                    <v-list-item-icon @click="$root.$emit('send_get_request',$siteUrl+'/user/profile')">
                        <v-icon>mdi-account-details-outline</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title @click="$root.$emit('send_get_request',$siteUrl+'/user/profile')">پروفایل
                    </v-list-item-title>
                </v-list-item>

                <slot></slot>

                <v-divider v-if="login==='yes'"></v-divider>
                <v-list-item v-if="login==='yes'">
                    <v-list-item-icon @click="$root.$emit('send_post_request',$siteUrl+'/logout',{})">
                        <v-icon>mdi-logout</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title @click="$root.$emit('send_post_request',$siteUrl+'/logout',{})">خروج از حساب
                        کاربری
                    </v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>

    </div>
</template>

<script>
export default {
    name: "AuthMenu",
    props: ['login', 'role', 'role_id', 'shop_name', 'mobile'],
    data() {
        return {
        }
    }
}
</script>
<style scoped>
.register-link {
    font-size: 15px !important;
}
.login-link{
    margin-bottom: 15px !important;
}
.login-btn, .donation {
    border: 1px solid #1457c5 !important;
    background-color: #1457c5 !important;
    border-radius: 20px !important;
    color: #FFF;
}

.donation {
    margin-left: 50px !important;
}

.mdi-account-outline {
    color: #1457c5 !important;
    float: left;
}

.after_login_icon.mdi-account-outline {
    color: #FFFFFF !important;
    float: left;
}

.header_action .login-btn.v-btn:not(.v-btn--round).v-size--default {
    height: 36px !important;
    min-width: 64px;
    padding: 0 16px;
}

/*mobile style*/

.shop-header .v-btn:not(.v-btn--round).v-size--default {
    height: 36px !important;
    min-width: 35px !important;
    padding: 0 !important;
}

.shop-header .after_login_icon {
    margin-right: 0 !important;
    padding-left: 4px !important;

}
</style>
