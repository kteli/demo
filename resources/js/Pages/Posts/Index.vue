<template>
    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Departments
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <breeze-table>
                            <template #header>
                                <breeze-tc>ID</breeze-tc>
                                <breeze-tc>Name</breeze-tc>
                                <breeze-tc>Email</breeze-tc>
                                <breeze-tc>Phone</breeze-tc>
                                <breeze-tc>Actions</breeze-tc>
                            </template>
                            <tr v-for="d in posts" :key="d.id" class="hover:bg-gray-200">
                                <breeze-tc>{{d.id}}</breeze-tc>
                                <breeze-tc>{{d.title}}</breeze-tc>
                                <breeze-tc>{{d.desc}}</breeze-tc>
                                <breeze-tc>{{d.id}}</breeze-tc>
                                <breeze-tc></breeze-tc>
                            </tr>
                        </breeze-table>
                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
import BreezeTc from '@/Components/TableColumn'
import BreezeTable from '@/Components/Table'

export default {
    components: {
        BreezeAuthenticatedLayout,
        BreezeTc,
        BreezeTable,
    },

    props: {
        posts: Object,
    },
}
</script>
