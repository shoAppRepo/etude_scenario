<template>
    <div>
        <column v-bind:column="column1" />
        <column v-bind:column="column2" />
        <column v-bind:column="column3" />


    </div>
</template>

<script>
import column from "../layouts/column";

export default {
    name:'mode',
    components:{
        column
    },
    data(){
        return{
            column1:{
                title:"全部お任せモード",
                content:"「お題、場所、制限時間、性格、ワード」をランダムに設定します",
                button:{
                    message:"このモードを選択",
                    url:"/allSelect"
                },
            },
            column2:{
                title:"設定モード",
                content:"「お題、場所、制限時間」をランダムに設定します",
                button:{
                    message:"このモードを選択",
                    url:"/settei"
                },
            },
            column3:{
                title:"役モード",
                content:"「性格、ワード、制限時間」をランダムに設定します",
                button:{
                    message:"このモードを選択",
                    url:"/character"
                },
            },
        }
    }
}
</script>