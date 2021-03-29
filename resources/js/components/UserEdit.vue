<template>
    <card>
        <h1 class="text-3xl">Editing: {{ this.user.attributes.name }}</h1>

        <hr class="my-2">

        <form @submit="processForm" class="grid grid-cols-1 gap-4">
            <input type="hidden" name="_method" value="PATCH">

            <div>
                <label for="name">Name</label>
                <br/>
                <input type="text" name="name" id="name" :value="this.user.attributes.name">
            </div>

            <div>
                <label for="username">Username</label>
                <br/>
                <input type="text" name="username" id="username" :value="this.user.attributes.username">
            </div>

            <div>
                <label for="email">Email</label>
                <br/>
                <input type="email" name="email" id="email" :value="this.user.attributes.email">
            </div>

            <div>
                <label for="phone">Phone</label>
                <br/>
                <input type="text" name="phone" id="phone" :value="this.user.attributes.phone">
            </div>

            <div>
                <label for="website">Website</label>
                <br/>
                <input type="text" name="website" id="website" :value="this.user.attributes.website">
            </div>

            <button class="btn bg-amber-200" type="submit">Submit</button>
        </form>
    </card>
</template>

<script>
import AlbumTable from "./AlbumTable";
import Card from "./Card";

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
        }
    },
    mounted() {
        let vm = this;

        // Get the albums from the API
        window.axios.get(`http://albums-api.test/api/v1/users/${this.id}`).then((response) => {
            vm.user = response.data.data;
        });
    },
    methods: {
        userUri(id, action = '') {
            return 'http://albums-api.test/api/v1/users/' + id + '/' + action;
        },
        processForm(e) {
            e.preventDefault();

            console.log(e);
        }
    },
}
</script>
