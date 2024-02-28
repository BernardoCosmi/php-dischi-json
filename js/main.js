const {createApp} = Vue 

createApp({
    data() {
        return{
            albums:[],
        }
    },
    mounted(){
        axios.get('script.php').then(response => {
            this.albums = response.data;
        })
    }
}).mount('#app')
