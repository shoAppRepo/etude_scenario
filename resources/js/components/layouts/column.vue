<template>
    <div class="container">
        <div class="column mx-auto">
            <div>
             <h2 class="text-center">{{column.title}}</h2>
             <p class="text-center">{{column.content}}</p>
             
             <div class="d-flex align-items-end flex-column">
                <button-vue :button="column.button" class="mt-auto" ></button-vue>
             </div>
            </div>
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