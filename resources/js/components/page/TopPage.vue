<template>
    <div>
        <header-nav :auth="auth" />
            <router-view :errors="errors" />
        <footer-vue />
    </div>
</template>

<script>
import HeaderNav from '../layouts/HeaderNav';
import footerVue from '../layouts/Footer';

export default {
    name:'TopPage',
    components:{
        'header-nav':HeaderNav,
        'footer-vue':footerVue,
    },
    props:{
        auth:{
            type:Object|Array
        },
        errors:{
            type:Object|Array
        },
    }
};
</script>