import axios from 'axios'

axios.post('/api/axios-test').then(respond => {
    document.getElementById('axios_test').innerHTML = respond.data
})
