<template>
    <div class="bg-white shadow-md rounded my-6">
        <table class="table-fixed text-left w-full border-collapse">
            <thead>
            <tr class="w-full">
                <th>Title</th>
                <th class="text-right ml-auto">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="album in albums" :key="album.id">
                <td class="w-8/12">{{ album.attributes.title }}</td>
                <td class="w-4/12 text-right">
                    <a :href="albumUri(album.id)" class="btn bg-green-200">Edit</a>
                    <a :href="albumUri(album.id)" class="btn bg-blue-200">View</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            albums: {},
        }
    },
    mounted() {
        let vm = this;

        // Get the albums from the API
        window.axios.get('http://albums-api.test/api/v1/albums').then((response) => {
            vm.albums = response.data.data;
        });
    },
    methods: {
        albumUri(id) {
            return 'http://albums-api.test/albums/' + id;
        }
    },
}
</script>
