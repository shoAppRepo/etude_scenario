<template>
    <div>
        <column v-bind:column="column1" />
        <column v-bind:column="column2" />
        <column v-bind:column="column3" />
        <column v-bind:column="column4" />

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
                content:"これは全部お任せモードの本文です",
                button:{
                    message:"このモードを選択",
                    url:"/allSelect"
                },
            },
            column2:{
                title:"お題/性格モード",
                content:"これはお題/性格モードの本文です",
                button:{
                    message:"このモードを選択",
                    url:"/theme&character"
                },
            },
            column3:{
                title:"お題モード",
                content:"これはお題モードの本文です",
                button:{
                    message:"このモードを選択",
                    url:"/theme"
                },
            },
            column4:{
                title:"時間制限モード",
                content:"これは時間制限モードの本文です",
                button:{
                    message:"このモードを選択",
                    url:"/timeLimit"
                },
            },
        }
    }
}
</script>