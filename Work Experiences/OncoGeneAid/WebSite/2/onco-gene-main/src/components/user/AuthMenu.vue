<template>
  <div style="display: flex;align-items: center;justify-content: space-around;">
    <v-menu offset-y min-width="230px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn v-if="mobile!=='on'" class="donation">
          <router-link style="color: #FFF" to="/donate">
            کمک مالی
          </router-link>
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
          <span style="line-height: 35px" v-if="mobile!=='on'">ورود / ثبت نام</span>
        </v-btn>
      </template>
      <v-list class="auth-menu">
        <v-list-item v-if="role==='admin' || role_id>0 ">
          <v-list-item-icon>
            <v-icon>mdi-tablet-dashboard</v-icon>
          </v-list-item-icon>
          <v-list-item-title>
            <router-link style="color: black" to="/admin">
              پنل مدیریت
            </router-link>
          </v-list-item-title>
        </v-list-item>
        <v-list-item v-if="login==='no'">
          <v-list-item-title>
            <v-btn class="login-link" color="primary">
              <router-link style="color: #FFF !important;" to="/login">
                ورود به {{ this.$siteName }}
              </router-link>
            </v-btn>
          </v-list-item-title>
        </v-list-item>

        <v-divider class="auth_box_divider"></v-divider>

        <v-list-item v-if="login==='no'" style="margin-top:10px">
          <v-list-item-title style="text-align: center">
            <span>کاربر جدید هستید ؟ </span>
            <router-link to="/register" class="register-link">
              ثبت نام
            </router-link>
          </v-list-item-title>
        </v-list-item>
        <v-list-item>
          <v-list-item-icon style="margin-right: 10px !important;">
            <router-link :to="login==='no' ? '/login' : '/user/profile'">
              <v-icon class="profile_header_icon">mdi-account-details-outline</v-icon>
            </router-link>
          </v-list-item-icon>
          <v-list-item-title v-if="mobile=='off'" @click="$root.$emit('send_get_request','/user/profile')">
            <router-link class="profile_header_title" :to="login==='no' ? '/login' : '/user/profile'">
              پروفایل
            </router-link>
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
  props: ['login', 'role', 'role_id', 'mobile'],
  data() {
    return {}
  }
}
</script>
<style scoped>
.register-link {
  font-size: 15px !important;
}

.login-link {
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
  min-width: 140px;
  padding: 5px 0;
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
  min-width: 140px;
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

.login-link {
  width: 100%;
  margin: 10px auto 0 0 !important;
}

.profile_header_title {
  color: rgba(0, 0, 0, .87)
}

.profile_header_icon {
  margin-left: 15px !important;
}
</style>
