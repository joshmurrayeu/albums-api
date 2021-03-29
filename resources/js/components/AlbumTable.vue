<template>
    <card>
        <table class="table-fixed text-left w-full border-collapse">
            <thead>
            <tr class="w-full">
                <th>Title</th>
                <th class="text-right ml-auto">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="album in albums" :key="album.id">
                <td class="">{{ album.attributes.title }}</td>
                <td class="w-20 text-right">
                    <a :href="albumUri(album.id)" class="btn bg-blue-200">View</a>
                </td>
            </tr>
            </tbody>
        </table>
    </card>
</template>

<script>
import Card from './Card'

export default {
    components: {
        Card,
    },
    props: ['albums'],
    data() {
        return {
            albums: {},
        }
    },
    mounted() {
        let vm = this;

        // Get the albums from the API if none have been passed in
        if (typeof this.albums == 'undefined') {
            window.axios.get('http://albums-api.test/api/v1/albums').then((response) => {
                vm.albums = response.data.data;
            });
        }
    },
    methods: {
        albumUri(id) {
            return 'http://albums-api.test/albums/' + id;
        }
    },
}
</script>
