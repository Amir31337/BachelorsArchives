<template>
     <div class="alert alert-warning" v-if="account_status!='active'">
        <span v-if="account_status=='InActive'">
                حساب کاربری شما غیر فعال شده
        </span>
        <span v-else-if="account_status=='awaiting_approval'">
                در انتظار تایید حساب کاربری
        </span>
        <span v-else>
                خطا : در اطلاعات ثبت نامی شما نواقص وجود دارد
        </span>
     </div>
</template>

<script>
export default {
    props:['account_status'],
    name:"AccountStatus"
}
</script>

<style>

</style>