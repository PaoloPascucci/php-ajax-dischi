const app = new Vue({
    el: '#app',
    data: {
        discs: null,
    },
    mounted() {
        axios
            .get("./api/discs.php")
            .then((response) => {
                this.discs = response.data;
            }).catch(error => {
                console.log(error);
            })
    }
})


