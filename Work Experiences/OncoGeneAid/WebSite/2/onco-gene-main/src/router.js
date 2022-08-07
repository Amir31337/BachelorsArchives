import Vue from 'vue'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeLayout from "./components/layout/HomeLayout";
import Index from './components/index/Index.vue';
import Login from './components/login/Login.vue';
import Register from './components/register/Register.vue';
import About from './components/about/About.vue';
import Contact from './components/contact/Contact.vue';
const baseUrl = '';

function check_login(next) {
    const expire_in = localStorage.getItem('expire_in');
    const time = Math.floor((new Date().getTime() / 1000));
    if (expire_in > time) {
        router.push(baseUrl + '/');
    } else {
        return next();
    }
}

/*function check_auth(next) {
   const expire_in = localStorage.getItem('expire_in');
   const time = Math.floor((new Date().getTime() / 1000));
   if (expire_in > time) {
      return next();
   }
   else {
      router.push(baseUrl+'/login');
   }
}*/
const routes = [
    {
        path: '/', component: HomeLayout, children: [
            {
                path: '', component: Index, name: 'index',
            }
        ]
    },
    {
        path: '/login', component: HomeLayout, children: [
            {
                path: '', component: Login, name: 'login', beforeEnter: (to, from, next) => {
                    check_login(next)
                }
            }
        ]
    },
    {
        path: '/register', component: HomeLayout, children: [
            {
                path: '', component: Register, name: 'register', beforeEnter: (to, from, next) => {
                    check_login(next)
                }
            }
        ]
    },
    {
        path: '/about', component: HomeLayout, children: [
            {
                path: '', component: About, name: 'about'
            }
        ]
    },
    {
        path: '/contact', component: HomeLayout, children: [
            {
                path: '', component: Contact, name: 'contact'
            }
        ]
    },
];

const router = new VueRouter({
    mode: 'history',
    base: baseUrl,
    routes
});

export default router;