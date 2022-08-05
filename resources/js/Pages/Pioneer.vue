<template>
    <h1 class="text-center">PIONEER CONTROLLERS</h1>
    <hr>
    <div class="col-md-15">
        <table class="table table-striped table-bordered text-center "> 
            <thead class="table-dark">
                <tr>
                    <th>TYPE</th>
                    <th>COLOR</th>
                    <th>CHANNEL</th>
                    <th>SOFTWARE</th>
                </tr>
            </thead>
            <tbody>
                <tr  v-for="pioneer in pioneers" :key="pioneer.id">
                    <td>{{pioneer.type}}</td>
                    <td>{{pioneer.color}}</td>
                    <td>{{pioneer.channel}}</td>
                    <td>{{pioneer.software}}</td>
                </tr>
            </tbody>
</table>
</div>

</template>
<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        pioneers: Array
    }
}
</script>

<style scoped>
.card {
    width: 375%;
}
</style>
