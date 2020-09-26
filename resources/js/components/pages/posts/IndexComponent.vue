<template>
    <div>
        <div v-if="errored" class="alert alert-warning" role="alert">
            Posts not found!
        </div>
        <table v-else class="table table-dark">
            <div v-if="loading">Loading...</div>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Button</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts" :key="post.id">
                <th>{{post.id}}</th>
                <td>{{post.title}}</td>
                <td>{{post.description}}</td>
                <td><button class="btn btn-success">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>
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
