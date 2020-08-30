<template>
    <div　class="container">
        <div class="row">
            <div class="mt-3 col-12">
                人数：
                <select v-model.number="number" style="width:15%">
                    <option disabled value="">人数を入力してください</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                <div>
                    一括設定：
                    <button v-on:click="startAll()">Start!</button>
                    <button v-on:click="stopAll()">Stop!</button>
                </div>
            </div>
            
            
                <!--設定のカラム -->
                <div class="column mx-auto col-md-8">
                    <div>
                        <h2 class="text-center">設定</h2>
                        <h5>
                        お題：{{themes[tId]}}
                        </h5>
                        <h5>場所：{{places[pId]}}</h5>
                        <h5>制限時間：{{timeLimit}}分</h5>
                        <div class="d-flex justify-content-around">
                            <button v-on:click="startSetting()">Start!</button>
                            <button v-on:click="stopSetting()">Stop!</button>
                        </div>
                    </div>
                </div>
                
                <!-- 配役 -->
                <div class="column mx-auto col-md-8">
                    <ul>
                        <li v-for="n in number" :key="n">
                            <h2 class="text-center">{{n}}人目</h2>
                            <h5 class="d-flex">
                                性格：
                                <h5 class="character">{{characters[n]}}</h5>
                            </h5>
                            <h5 class="d-flex">
                                ワード：
                                <h5 class="keyword">{{keywords[n]}}</h5>
                            </h5>
                        </li>
                    </ul>
                        <div class="d-flex justify-content-around">
                            <button v-on:click="startRole()">Start!</button>
                            <button v-on:click="stopRole()">Stop!</button>
                        </div>
                </div>

                <!-- 誰から話始めるか -->
                <div class="column mx-auto col-md-8">
                    <div class="text-center">
                        <h2 >誰から？</h2>
                        <h5>{{first}}人目の人から始めましょう!</h5>
                    </div>
                    <div v-if="number > 1" class="d-flex justify-content-around">
                        <button v-on:click="startFirst()">Start!</button>
                        <button v-on:click="stopFirst()">Stop!</button>
                    </div>
                </div>

                <!-- タイマー -->
                <div class="column mx-auto col-md-8">
                    <timer :timeLimit="timeLimit" />
                </div>
        </div>
    </div>
</template>

<script>
import timer from '../modules/timer';
const random = (min,max)=>Math.floor(Math.random() * (max-min+1))+min;
var $character = document.getElementsByClassName("character");
var $keyword = document.getElementsByClassName("keyword");

export default {
    name:'allSelect',
    components:{
        timer
    },
    data(){
        return{
            number:1,
            themes:[],
            places:[],
            keywords:[],
            characters:[],
            timeLimit:5,
            countSetting:0,
            countRole:0,
            countFirst:0,
            rouletteSetting:false,
            rouletteRole:false,
            rouletteFirst:false,
            tId:1,
            pId:1,
            kId:1,
            cId:1,
            first:1,
        };
    },
    mounted(){
        this.$http.get("/api/scenario").then(response => {
            this.themes = response.data.themes.map(item => item.theme);
            this.places = response.data.places.map(item => item.place);
            this.keywords = response.data.keywords.map(item => item.keyword);
            this.characters = response.data.characters.map(item => item.character);
        });
    },
    methods:{
        startSetting(){
            if(this.countSetting === 0){
                this.rouletteSetting = setInterval(function () {
                    this.tId = Math.floor(Math.random() * (this.themes.length));
                    this.pId = Math.floor(Math.random() * (this.places.length));
                    this.timeLimit = random(3,5)
                }.bind(this),100);
                this.countSetting++;
            }
        },
        stopSetting(){
            if(this.rouletteSetting){
                clearInterval(this.rouletteSetting);
                this.countSetting = 0;
            }
        },
        startRole(){
            if(this.countRole === 0){
                this.rouletteRole = setInterval(function () {
                    this.kId = Math.floor(Math.random() * (this.keywords.length));
                    this.cId = Math.floor(Math.random() * (this.characters.length));

                    for(var i = 0;i<this.number;i++)
                    {
                        $character[i].innerHTML = this.characters[this.cId];
                        $keyword[i].innerHTML = this.keywords[this.kId];
                    }
                    this.countRole=1;
                }.bind(this),100);
                
            }
        },
        stopRole(){
            if(this.countRole !== 0){
                clearInterval(this.rouletteRole);
                this.countRole = 0;
                this.shuffle(this.characters);
                this.shuffle(this.keywords);
                
                for(var i = 0;i<this.number;i++)
                {
                    $character[i].textContent= this.characters[i];
                    $keyword[i].textContent = this.keywords[i];
                }
            }
        },
        shuffle(array){
            const randomNumbers=[];

            for(let i =0;i<array.length;i++)
            {
                randomNumbers.push(Math.floor(Math.random() * (array.length)));
            }
            const result = array.sort((a,b)=>{
                return randomNumbers[array.indexOf(a)] - randomNumbers[array.indexOf(b)]
            });
        },
        startFirst(){
            if(this.countFirst === 0){
                this.rouletteFirst = setInterval(function () {
                    this.first = random(1,this.number);
                }.bind(this),100);
                this.countFirst++;
            }
        },
        stopFirst(){
            if(this.rouletteFirst){
                clearInterval(this.rouletteFirst);
                this.countFirst = 0;
            }
        },
        startAll(){
            this.startSetting();
            this.startRole();
            this.startFirst();
        },
        stopAll(){
            this.stopSetting();
            this.stopRole();
            this.stopFirst();
        }
    },

}
</script>