<template>
  <div class="shopCategory">
    <ul class="shop_menu_ul">
      <li class="cat_hover">
        <div></div>
      </li>
      <li class="shop_nav_li">
        <router-link to="/" class="router-link">
          صفحه اصلی
        </router-link>
      </li>

      <li class="shop_nav_li" id="show_cat_list">
        <span>فروشگاه</span>
        <div class="cat-list-div">
          <div class="cat_list_box">
            <div class="child_list">
              <div v-for="(value,key) in category" :key="key" v-if="key==0 ? [style='display: block']: ''"
                   :class="['child_list_div category-list-'+key]">
                <ul v-for="(value2,key2) in value.get_child" :key="key2" v-if="value2.notShow==0"
                    class="list-inline subList">
                  <li>
                    <router-link :to="get_cat_url(value2)" class="router-link">
                      {{ value2.name }}
                    </router-link>
                    <ul>
                      <li v-for="(value3,key3) in value2.get_child" :key="key3" v-if="value3.notShow==0">
                        <router-link :to="get_cat_url(value3)" class="router-link">
                          {{ value3.name }}
                        </router-link>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </li>

      <li class="shop_nav_li">
        <router-link to="/faq" class="router-link">
          سوالی دارید؟
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
import {mapState} from "vuex";
import myMixin from "../../myMixin";

export default {
  name: "ShopNav",
  mixins: [myMixin],
  data() {
    return {
      c: 0,
    }
  },
  computed: mapState('main_store', [
    'category',
  ]),
  mounted() {
    const shop_nav_li = document.getElementsByClassName('shop_nav_li');
    for (let i = 0; i < shop_nav_li.length; i++) {
      let el = shop_nav_li[i];
      el.addEventListener('mouseover', function () {
        const li_width = el.offsetWidth;
        const ul_width = document.querySelector(".shopCategory").offsetWidth;
        const right = ul_width - el.offsetLeft - li_width;
        document.querySelector('.cat_hover').style.width = li_width + 'px';
        document.querySelector('.cat_hover').style.right = right + 'px';
        document.querySelector('.cat_hover').style.transform = 'scaleX(1)';
      });
      el.addEventListener('mouseleave', function () {
        document.querySelector('.cat_hover').style.transform = 'scaleX(0)';
      });
    }

    document.querySelector("#show_cat_list").addEventListener('mouseover', function () {
      document.querySelector("#show_cat_list .cat-list-div").style.display = 'block';
      document.querySelector(".category_cover").style.display = 'block';
      document.querySelector('.category-list-0').style.display = 'block';
    });

    document.querySelector("#show_cat_list").addEventListener('mouseleave', function () {
      document.querySelector("#show_cat_list .cat-list-div").style.display = 'none';
      document.querySelector(".category_cover").style.display = 'none';

      const child_list_div = document.querySelectorAll('.child_list_div');
      for (let j = 0; j < child_list_div.length; j++) {
        child_list_div[j].style.display = 'none';
      }
    });

    const cat_list_li = document.querySelectorAll('.cat_list li');
    for (let i = 0; i < cat_list_li.length; i++) {
      cat_list_li[i].addEventListener('mouseover', function () {

        const index = this.getAttribute('data-index');

        const child_list_div = document.querySelectorAll('.child_list_div');
        for (let j = 0; j < child_list_div.length; j++) {
          child_list_div[j].style.display = 'none';
        }

        const cat_list_li = document.querySelectorAll('.cat_list li');
        for (let i = 0; i < cat_list_li.length; i++) {
          cat_list_li[i].classList.remove('active');
        }

        document.querySelector('.category-list-' + index).style.display = 'block';
        cat_list_li[i].classList.add('active');

      });
    }
  }
}
</script>
<style scoped>

</style>