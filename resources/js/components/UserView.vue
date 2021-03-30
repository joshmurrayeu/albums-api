<template>
    <div>
        <card>
            <h1 class="text-3xl">{{ this.user.attributes.name }}</h1>

            <hr class="my-2">

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur, cupiditate deserunt,
                ducimus
                eos ex excepturi explicabo illum in necessitatibus nobis nostrum odit optio, possimus repellendus saepe
                similique veniam vero!</p>

            <hr class="my-2">

            <p><a class="text-blue-300" :href="userUri(this.user.id, 'edit')">Click here</a> to edit this user.</p>
        </card>

        <h2 class="text-2xl">Albums belonging to this user</h2>

        <album-table :albums="this.albums"/>
    </div>
</template>

<script>
import AlbumTable from "../../../../albums-ui/src/components/AlbumTable";
import Card from "../../../../albums-ui/src/components/misc/Card";

export default {
    components: {
        AlbumTable, Card
    },
    props: ['id'],
    data() {
        return {
            user: {
                attributes: {
                    name: '',
                },
            },
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
        userUri(id, action = '') {
            return 'http://albums-api.test/users/' + id + '/' + action;
        }
    },
}
</script>
