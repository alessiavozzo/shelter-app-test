const { createApp } = Vue

createApp({
    data() {
        return {
            message: "ok",
            data: { id: "ciao" },
            serverUrl: "delete_dog.php"
        }
    },
    methods: {
        deleteDog(dog_id) {
            console.log(dog_id);
            const dogData = { id: dog_id }
            axios.
                post(this.serverUrl, dogData, { headers: { "Content-Type": "multipart/form-data" } })
                .then(response => {
                    console.log(response);
                })
        },
        /* deleteDog2() {
            const dogData = new FormData();
            dogData.append('id', 'value');
            axios.
                post(this.urlApi, dogData, { headers: { "Content-Type": "multipart/form-data" } })
                .then(response => {
                    console.log(response);
                })
        } */
    }
}).mount('#app')