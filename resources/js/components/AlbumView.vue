<template>
    <card>
        <h1 class="text-2xl">{{ this.album.attributes.title }}</h1>

        <hr class="my-2">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur, cupiditate deserunt, ducimus
            eos ex excepturi explicabo illum in necessitatibus nobis nostrum odit optio, possimus repellendus saepe
            similique veniam vero!</p>

        <hr class="my-2">

        <p>
            This user has the following albums:
            <a :href="userUri(this.user.id)" class="text-blue-300">{{ this.user.attributes.name }}</a>.
        </p>
    </card>
</template>

<script>
import Card from '../../../../albums-ui/src/components/misc/Card'

export default {
    components: {
        Card,
    },
    props: ['id'],
    data() {
        return {
            album: {},
            user: {},
        }
    },
    mounted() {
        let vm = this;

        // Get the albums from the API
        window.axios.get(`http://albums-api.test/api/v1/albums/${this.id}?include=user`).then((response) => {
            vm.album = response.data.data;
            vm.user = response.data.included[0];
        });
    },
    methods: {
        userUri(id) {
            return 'http://albums-api.test/users/' + id;
        }
    },
}
</script>
