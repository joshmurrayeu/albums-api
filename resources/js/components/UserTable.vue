<template>
    <card>
        <table class="table-fixed text-left w-full border-collapse">
            <thead>
            <tr class="w-full">
                <th>Name</th>
                <th class="text-right ml-auto">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.attributes.name }}</td>
                <td class="text-right ml-auto">
                    <a :href="userUri(user.id, 'edit')" class="btn bg-green-200">Edit</a>
                    <a :href="userUri(user.id)" class="btn bg-blue-200">View</a>
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
    data() {
        return {
            users: {},
        }
    },
    mounted() {
        let vm = this;

        // Get the albums from the API
        window.axios.get('http://albums-api.test/api/v1/users').then((response) => {
            vm.users = response.data.data;
        });
    },
    methods: {
        userUri(id, action = '') {
            return 'http://albums-api.test/users/' + id + '/' + action;
        }
    },
}
</script>
