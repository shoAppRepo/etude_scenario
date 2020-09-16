<template>
    <div>
        <button 
            type="submit"
            class="btnComponent btnComponent-custom01 mb-3" 
            @click.stop.prevent="goPage()"
        >
        <span class="btnComponent-custom01-front">{{button.message}}</span>
        </button>
    </div>
</template>

<script>
export default {
    props:{
        button:Object,
    },
    methods:{
        goPage(){
            this.$router.push(this.button.url);
        }
    }
}
</script>