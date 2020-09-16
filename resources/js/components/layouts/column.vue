<template>
    <div class="container">
        <div class="column mx-auto text-center">
             <h2>{{column.title}}</h2>
            <section>
                <p>{{column.content}}</p>
                
                <button-vue :button="column.button"></button-vue>
            </section>
        </div>
    </div>
</template>

<script>
import buttonVue from "../modules/button";

export default {
    name:'column',
    components:{
        'button-vue':buttonVue
    },
    props:{
        column:Object,

    }
}
</script>