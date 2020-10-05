<template>
    <div id="app">
        <form @submit.prevent="submitForm">
            <div>
                <label for="email">Email:</label><br>
                <input id="email" type="email" v-model="email" required/>
            </div>
            <div>
                <label for="password">Password:</label><br>
                <input id="password" type="text" v-model="password" required/>
            </div>
            <div>
            </div>
            <button type="submit">Submit</button>
            <div>
                <p v-if="success"> {{ success }}</p>
                <pre>{{ response }}</pre>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            response: '',
            success: '',
        }
    },
    methods: {
        submitForm() {

            axios.post('/api/auth/login', {
                email: this.email,
                password: this.password,
            }).then(response => {

                console.log(response);
                function setCookie(cname, cvalue) {
                document.cookie = cname + "=" + cvalue + ";";
                }
                setCookie("Bearer", response.data.access_token);
                // document.cookie = ("Bearer-token", [response.data.access_token]);
                // this.success = 'Data saved successfully';
                // this.response = JSON.stringify(response, null, 2)
            }).catch(error => {
                this.response = 'Error: ' + error.response.status
            })
            this.email = '';
            this.password = '';
        }
    }
}
</script>

<style scoped>

</style>
