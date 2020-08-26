<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="home-image col-md-6"></div>
                <div class="col-md-6 d-flex align-items-end flex-column">
                    <p>あああああああああああああああああああああああああああああ
                        あああああああああああああああああああああああああああああ
                    </p>
                    <div class="home-image__button mt-auto">
                        <button-vue  :button="button1"></button-vue>
                    </div>
                </div>

            <column v-bind:column="column1" />
                        
            </div>
            
        </div>
    </main>
</template>

<script>
import column from "../layouts/column";
import buttonVue from "../modules/button";

export default {
    name:'Home',
    components:{
        column,
        'button-vue':buttonVue,
    },
    data(){
        return{
            button1:{
                message:"早速始める",
                url:"/login",
            },
            column1:{
                title:"設定について",
                content:"これは設定の本文です",
                button:{
                    message:"設定一覧へ",
                    url:"/scenario",
                },
            },
            
        }
    }
}
</script>