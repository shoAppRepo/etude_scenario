<template>
    <div class="container">
        <div class="row">
            <div class="column mx-auto col-md-8">
                <h2 class="text-center">
                    お題
                    <small>{{themes.length}}件</small>
                </h2>
                <ul class="d-flex">
                    <li v-for="(item,index) in themes" :key="index">{{item.theme}}</li>
                </ul>
            </div>

            <div class="column mx-auto col-md-8">
                <h2 class="text-center">
                    場所
                    <small>件</small>
                </h2>
                <ul class="d-flex">
                    <li v-for="(item,index) in places" :key="index">{{item.place}}</li>
                </ul>
            </div>

            <div class="column mx-auto col-md-8">
                <h2 class="text-center">
                    性格
                    <small>件</small>
                </h2>
                <ul class="d-flex">
                    <li v-for="(item,index) in characters" :key="index">{{item.character}}</li>
                </ul>
            </div>

            <div class="column mx-auto col-md-8">
                <h2 class="text-center">
                    キーワード
                    <small>件</small>
                </h2>
                <ul class="d-flex">
                    <li v-for="(item,index) in keywords" :key="index">{{item.keyword}}</li>
                </ul>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name:'scenario',
    data(){
        return{
            themes:[],
            places:[],
            keywords:[],
            characters:[],
        };
    },
    mounted(){
        this.$http.get("/api/scenario").then(response => {
            this.themes = response.data.themes;
            this.places = response.data.places;            
        });
    },
    
}
</script>