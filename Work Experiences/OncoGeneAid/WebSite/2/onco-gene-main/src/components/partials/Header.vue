<template>
  <div>
    <div class="header">

      <div class="header_row">
        <router-link to="/" class="router-link">
          <img src="@/assets/files/images/1635333620.png" class="shop_logo">
        </router-link>
      </div>

      <div class="header_action">
        <div style="margin-top:3px;height:39px">
          <auth-menu login="no"
                     role_id="0"
                     role="user"
                     mobile="off"
          >
          </auth-menu>
        </div>
      </div>
    </div>
    <shop-nav></shop-nav>
  </div>
</template>

<script>
import myMinix from "../../myMixin";

export default {
  name: 'Header',
  mixins: [myMinix],
  mounted() {
    this.$store.dispatch('main_store/getCategoryListHeader');
  }
}
</script>
<style scoped>
@import "../../assets/components/partials/header/all.css";
</style>

