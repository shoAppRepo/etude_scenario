<template>
    <div id="timer">
        <div class="timer">
            <div class="time">
                {{formatTime}}
            </div>
            <button v-on:click="start" v-if="!timerOn" class="btnComponent btnComponent-custom01 mb-3">
                <span class="btnComponent-custom01-front">Start</span>
            </button>
            <button v-on:click="stop" v-if="timerOn" class="btnComponent btnComponent-custom01 mb-3">
                <span class="btnComponent-custom01-front">Stop</span>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name:'timer',
    props:{
        timeLimit:Number
    },
    data(){
        return{
            min:"",
            sec:0,
            timerOn:false,
            timerObj:null,
        }
    },
    watch:{
        timeLimit:function(newTimeLimit,oldTimeLimit){
            let self = this;
            self.min = newTimeLimit;
            self.sec = 0;
        }
    },
    mounted(){
        let self = this;
        self.min = self.timeLimit;
    },
    methods:{
        count(){
            if(this.sec <= 0 && this.min >= 1)
            {
                this.min --;
                this.sec = 59;
            }else if(this.sec <= 0 && this.min <= 0)
            {
                this.complete();
            }else{
                this.sec --;
            }
        },
        start(){
            let self = this;
            this.timerObj = setInterval(function() {self.count()},1000)
            this.timerOn = true;
        },
        stop(){
            clearInterval(this.timerObj);
            this.timerOn = false;
        },
    },
    computed:{
            formatTime(){
                let timeStrings = [
                    this.min.toString(),
                    this.sec.toString()
                ].map(function(str){
                    if(str.length < 2){
                        return "0" + str
                    }else{
                        return str
                    }
                })
                return timeStrings[0] + ":" + timeStrings[1]
            }
    }
}
</script>
