<template>
    <div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <router-link to="/" class="navbar-brand">ホーム</router-link>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="navbarNav"
                >
                </button>
                <div class="collapse navbar-collapse　" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link to='/register'>ユーザー登録</router-link>
                            <router-link to='/login'>ログイン</router-link>
                        </li>
                    </ul>
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