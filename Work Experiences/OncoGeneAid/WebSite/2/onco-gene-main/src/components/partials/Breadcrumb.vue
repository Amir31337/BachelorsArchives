<template>
    <div class="breadcrumb">
        <ul class="list-inline">
            <li>
                <router-link to='/'>
                   <span class="fa fa-home"></span>
                   <span>پیشخوان</span>
                   <span class="fa fa-angle-left" v-if="data.length>0"></span>
               </router-link>
           </li>
           <li v-for="(item,key) in data" :key=key>
                <router-link :to='item.path'>
                    <span>{{ item.title }}</span>
                    <span class="fa fa-angle-left" v-if="key!=(data.length-1)"></span>

                </router-link>
           </li>


            <li class="date_li">
              <span class="fa fa-calendar"></span>
              <span> امروز </span>
              <span> {{  this.Day_of_week() }} </span>
              <span> {{ day }} </span>
              <span> {{ month }} </span>
              <span> {{ year }} </span>
           </li>
        </ul>
    </div>
</template>

<script>
import myMinix from '../../myMixin';

export default {
    name:"Breadcrumb",
    props:['data'],
    mixins:[myMinix],
    data(){
        return{
            day:'',
            month:'',
            year:'',
            week:[
                'یکشنبه',
                'دوشنبه',
                'سه شنبه',
                'چهار شنبه',
                'پنج شنبه',
                'جمعه',
                'شنبه',
            ],
            monthList:[
                'فروردین',
                'اردیبهشت',
                'خرداد',
                'تیر',
                'مرداد',
                'شهریور',
                'مهر',
                'آبان',
                'آذر',
                'دی',
                'بهمن',
                'اسفند'
            ]
        }
    },
    mounted()
    {
        this.set_date();
    },
    methods:{
        set_date:function()
        {
            const ndf=new Date();
            const y=ndf.getFullYear();
            const m=(ndf.getMonth()+1);
            const d=ndf.getDate();

            const shamsi=this.gregorian_to_jalali(y,m,d);
            this.day=this.replaceNumber(shamsi[2]);
            this.year=this.replaceNumber(shamsi[0]);
            this.month=this.monthList[(shamsi[1]-1)];
        },
        Day_of_week:function()
        {
            var d=new Date();
            return this.week[d.getDay()];
        }
    }
}
</script>

<style>

</style>