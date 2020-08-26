<template>
    <div>
        <button type="submit" @click.stop.prevent="goPage()">{{button.message}}</button>
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