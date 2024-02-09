<template>
    <button @click="login()">Login</button>
</template>

<script>
export default {
    name: 'App',

    data() {

    },

    methods: {
        login() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                // Login...
            });
        }
    }
}
</script>

<style scoped>
</style>