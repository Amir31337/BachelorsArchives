<template>
  <div>
    <Header></Header>
    <router-view></router-view>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "../partials/Header";
import Footer from "../partials/Footer";

export default {
  name: "HomeLayout",
  components: {Footer, Header},
}
</script>

<style>

</style>