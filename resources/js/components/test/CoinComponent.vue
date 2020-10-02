<template>
    <div>
        <div v-if="errored" class="alert alert-warning" role="alert">
            Posts not found!
        </div>
        <table v-else class="table table-dark">

            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts" :key="post.id">
                <th>{{post.id}}</th>
                <td>{{post.title}}</td>
                <td>{{post.body}}</td>
                <td><button class="btn btn-outline-info">Edit</button></td>
                <td><button class="btn btn-info">Delete</button></td>
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
                body: ''
            },
            post_id: '',
            edit: false,
            errored: false
        }
    },
    mounted: function () {
        this.getPosts()

    },
    methods: {
        getPosts() {
            axios
                .get('https://jsonplaceholder.typicode.com/todos')
                .then((response) => {
                    console.log(response.data);
                    this.posts = response.data
                })
                .catch((error) =>  {
                    console.log(error)
                    this.errored = true;
                })
        },
    }
}

</script>

<style scoped>

</style>
