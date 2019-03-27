<template>
    <div>
        <form action="post">
            <input type="text" v-model="content">
            <button @click.prevent="sendContent">Gửi</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            content: ''
        }
    },
    methods: {
        sendContent() {
            axios.post('/add-content', {content: this.content})
                .then(response => {
                    console.log(response.data.result);
                })
                .catch(error => {
                    console.log(error);
                })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
