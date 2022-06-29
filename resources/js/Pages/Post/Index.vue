<template>
    <breeze-authenticated-layout>
        <template #header>
            <breeze-heading>Employees</breeze-heading>
        </template>

        <div class="flex items-center justify-between mb-6">
<!--            <breeze-select-->
<!--                id="department_id"-->
<!--                class="mt-1 block w-1/3"-->
<!--                v-model="department_id"-->
<!--                :options="departments"-->
<!--                @change="getEmployees(department_id)"-->
<!--            ></breeze-select>-->

<!--            <breeze-link :href="route('employees.create')" v-if="$page.props.can.create">New Employee </breeze-link>-->
        </div>
        <breeze-table>
            <template #header>
                <breeze-tc>ID</breeze-tc>
                <breeze-tc>Name</breeze-tc>
                <breeze-tc>Department</breeze-tc>
                <breeze-tc>Email</breeze-tc>
                <breeze-tc>Actions</breeze-tc>
            </template>
            <tr v-for="e in posts" :key="e.id" class="hover:bg-gray-200">
                <breeze-tc>{{ e.id }}</breeze-tc>
                <breeze-tc>{{ e.title }}</breeze-tc>
                <breeze-tc>{{ e.description }}</breeze-tc>
                <breeze-tc>{{ e.title }}</breeze-tc>
                <breeze-tc>
<!--                    <breeze-link mode="edit" :href="route('employees.edit', e.id)" v-if="e.can.edit"-->
<!--                    >Edit</breeze-link-->
                    >
<!--                    <breeze-link mode="delete" @click="destroy(e.id)" v-if="e.can.delete">Delete</breeze-link>-->
                </breeze-tc>
            </tr>
        </breeze-table>
    </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import BreezeTc from "@/Components/TableColumn";
import BreezeTable from "@/Components/Table";
import BreezeLink from "@/Components/AnchorLink";
import BreezeHeading from "@/Components/Heading";
import BreezeSelect from "@/Components/Select";

export default {
    components: {
        BreezeAuthenticatedLayout,
        BreezeTc,
        BreezeTable,
        BreezeLink,
        BreezeHeading,
        BreezeSelect,
    },

    props: {
        posts: Object,
    },

};
</script>
