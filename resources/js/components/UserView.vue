<template>
    <div class="bg-white shadow-md rounded my-6 p-2">
        <h1 class="text-2xl">{{ this.user.attributes.name }}</h1>

        <hr class="my-2">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur, cupiditate deserunt, ducimus
            eos ex excepturi explicabo illum in necessitatibus nobis nostrum odit optio, possimus repellendus saepe
            similique veniam vero!</p>

        <hr class="my-2">
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            user: {},
            albums: {},
        }
    },
    mounted() {
        let vm = this;

        // Get the albums from the API
        window.axios.get(`http://albums-api.test/api/v1/users/${this.id}?include=albums`).then((response) => {
            vm.user = response.data.data;
            vm.albums = response.data.included;
        });
    },
    methods: {
        userUri(id) {
            return 'http://albums-api.test/users/' + id;
        }
    },
}
</script>
