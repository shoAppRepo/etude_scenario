<template>
    <div>
        <header>
            <div>
                <h3 class="text-center">エチュ〜どん！</h3>
            </div>
            <nav class="navbar navbar-expand-md">
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
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#"          id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                モード選択
                             </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <router-link to="/allSelect" class="dropdown-item">
                                    全部お任せ
                                </router-link>
                                <router-link to="/allSelect" class="dropdown-item">
                                    設定のみ
                                </router-link>
                                <router-link to="/allSelect" class="dropdown-item">
                                    役のみ
                                </router-link>
                            </div>
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
    color:#000099;
    text-decoration: none;
}

a:hover{
    color:#FFCC66;
}
</style>