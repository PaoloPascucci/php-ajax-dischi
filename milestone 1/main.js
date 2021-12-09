const app = new Vue({
    el: '#app',
    mounted() {
        axios
            .get("https://flynn.boolean.careers/exercises/api/array/music")
            .then((response) => {
                this.discs = response.data.response;
            })
    }
})


