<template>
    <div class="panel panel-default">
        <div class="panel-deading">
            <nav>
                <ul class="list-inline">
                    <li>
                        <router-link :to="{name:'home'}">Home</router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'login'}">Login</router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'register'}">Register</router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'add-content'}">Add Content</router-link>
                    </li>
                    <li>
                        <button @click.prevent="$auth.logout()">Logout</button>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="panel-body">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>

</style>
