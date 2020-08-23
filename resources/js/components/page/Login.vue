<template>
    <div>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 mx-auto">
                        <div class="card">
                            <div class="card-header text-center">ログイン</div>

                            <div class="form-group has-error" v-if="errors.length!==0">
                                <div class="alert alert-danger text-center">
                                    ログイン時にエラーが発生しました
                                    <div v-for="(error,key,index) in errors" :key="index">{{error}}</div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="card-text">
                                    <form 
                                        action="/login"
                                        method="post"
                                    >
                                    <input type="hidden" name="_token" :value="csrf" />

                                    <div class="form-group row">
                                            <label for="email" class="col-md-4 control-label">
                                                メールアドレス
                                            </label>
                                            <div class="col-md-6">
                                                <input v-model="email" type="email" name="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 control-label">
                                                パスワード
                                            </label>
                                            <div class="col-md-6">
                                                <input v-model="password" type="password" name="password" class="form-control">
                                            </div>
                                        </div>

                                    <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">
                                                ログイン
                                            </button>
                                    </div>

                                    </form>
                                </div>
                            </div>    

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    name:'Login',
    props:{
        errors:{
            type:Array|Object
        },
    },
    data(){
        return{
            email:"",
            password:"",
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    }
};
</script>