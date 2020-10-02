<template>

</template>

<script>
export default {
    data() {
        return {
            posts: [],
            post: {
                id: '',
                title: '',
                description: ''
            },
            post_id: '',
            pagination: {},
            edit: false,
            loading: true,
            errored: false
        }
    },
    mounted: function () {
        this.getPosts()

    },
    methods: {
        getPosts() {
            axios
                .get('api/post')
                .then(response => this.posts = response.data.data)
                .catch(error =>  {
                    console.log(error)
                    this.errored = true;
                })
                .finally(() => this.loading = false)
        },
    }
}

</script>

<style scoped>

</style>
