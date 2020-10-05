<template>
    <form @submit.prevent="submitForm">
        <div>
            <label for="name">Name:</label><br>
            <input id="name" type="text" v-model="name" required/>
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input id="email" type="email" v-model="email" required/>
        </div>

        <button :class="[name ? activeClass : '']" type="submit">Submit</button>
        <div>
            <h3>Data retrieved from server:</h3>
            <p v-if="success"> {{ success }}</p>
<!--            <pre>{{ response }}</pre>-->
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            userID: 1,
            name: '',
            email: '',
            response: '',
            success: '',
            activeClass: 'active'
        }
    },
    methods: {
        submitForm() {
            axios.post('api/post', {
                userID: this.userID,
                name: this.name,
                email: this.email,
                }).then(response => {
                // console.log(response);
                // this.response = response.data
                this.success = 'Data saved successfully';
                this.response = JSON.stringify(response, null, 2)
            }).catch(error => {
                this.response = 'Error: ' + error.response.status
            })
            this.name = '';
            this.email = '';
            }
    }
}

</script>

<style scoped>

</style>
