<template>
    <main>
        <div class="container">
                <div class="column mx-auto text-center">
                    <h2>エチュ〜どん！とは</h2>
                    <section>
                        <p>
                            台本はない、決められた設定の中で即興で演技をする<br>
                            「エチュード演劇」
                        </p>
                        <p>
                            しかし、設定を考えるのはなかなか至難の技<br>
                            設定を考えるだけで、貴重な時間を無駄にしてしまうかもしれません...
                        </p>
                        <p>
                            「エチュード演劇」の設定を自動で生成してくれる<br>
                            それが「エチュ〜どん!」です
                        </p>
                    </section>
                </div>      

                <div class="column mx-auto text-center">
                    <h2>設定</h2>
                        <section>
                            <p>
                                「エチュ〜どん!」では、「設定」と「役」が自動で生成されます<br>
                                最大で10人まで役の振り分けが可能です
                            </p>
                            <div class="row column-box">
                                <div class="column-container col-md-5">
                                        <h4>設定</h4>
                                        <p>お題、場所、制限時間</p>
                                </div>
                                <div class="column-container col-md-5">
                                        <h4>役</h4>
                                        <p>性格、ワード</p>
                                </div>
                            </div>
                        </section>
                        <button-vue v-bind:button="button1" />
                </div>      

                <div class="column mx-auto text-center">
                    <h2>選べるモード</h2>
                    <section>
                        <p>目的に合わせて3つのモードを選択することができます</p>
                        <div class="row column-box">
                            <div class="column-container col-md-4">
                                <h4>全部お任せ</h4>
                                <p>
                                    お題、場所、制限時間、性格、ワード<br>
                                    全ての設定をランダムに生成します    
                                </p>
                            </div>

                            <div class="column-container col-md-4">
                                <h4>設定のみ</h4>
                                <p>
                                    お題、場所、制限時間<br>
                                    3つの項目をランダムに生成します    
                                </p>
                            </div>

                            <div class="column-container col-md-4">
                                <h4>役のみ</h4>
                                <p>
                                    性格、ワード、時間制限<br>
                                    3つの項目をランダムに生成します    
                                </p>
                            </div>
                        </div>
                    </section>
                    <button-vue v-bind:button="button2" />
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
                message:"設定一覧へ",
                url:"/scenario",
            },
            button2:{
                message:"モード選択へ",
                url:"/mode",
            }
        }
    },
}
</script>

