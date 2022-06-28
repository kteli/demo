<template>
    <p> {{$page.props.appName}}</p>

    <h2>Hi This is our another page</h2>


    <div>

        <inertia-link :href="route('home')">Home</inertia-link>

    </div>
</template>

<script>
export default {
    name: "Another"
}
</script>

<style scoped>

</style>
