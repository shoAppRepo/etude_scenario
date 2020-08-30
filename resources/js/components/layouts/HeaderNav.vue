<template>
    <div>
        <header>
            <div>
                <h3 class="text-center">エチュ〜どん！</h3>
            </div>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                <router-link to="/" class="navbar-brand">ホーム</router-link>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarNav"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <router-link to='/register'>ユーザー登録</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to='/login'>ログイン</router-link>
                        </li> -->
                        <li class="nav-item">
                            <router-link to="/scenario">設定一覧</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/mode">モード選択</router-link>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>
    </div>
</template>

<script>
export default {
    name:'HeaderNav',
}
</script>

<style scoped>
a{
    color:black;
    text-decoration: none;
}

a:hover{
    color:orange;
}
</style>