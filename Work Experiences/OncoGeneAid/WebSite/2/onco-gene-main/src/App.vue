<template>
  <v-app>
    <v-content>
      <router-view></router-view>
      <loading></loading>
      <div class="category_cover"></div>
    </v-content>
  </v-app>
</template>

<script>
export default {
  name: 'App'
}
</script>


