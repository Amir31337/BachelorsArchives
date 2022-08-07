<template>
  <div v-if="show_loading" class="loading_data_box">
    <div style="margin-top: 15%" class="spinner">
      <p>
        <img style="margin-top: 20px" src="@/assets/files/images/1635333620.png" class="shop_logo">
      </p>
      <div class="b1"></div>
      <div class="b2"></div>
      <div class="b3"></div>
    </div>
  </div>
</template>

<script>
import {mapState} from "vuex";

export default {
  name: "Loading",
  computed: mapState('main_store', [
    'show_loading',
  ]),
}
</script>

<style scoped>

</style>