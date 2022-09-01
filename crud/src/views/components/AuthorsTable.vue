<template>
    <div class="card">
        <div class="card-header pb-0">
            <h6>Data Kamar</h6>
            <router-link :to="{name: 'kamar.create-kamar'}" class="btn btn-md btn-success">TAMBAH KAMAR
            </router-link>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipe Kamar
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Jumlah Kamar Tersedia</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Fasiltas Kamar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(kamar, index) in kamars" :key="index">
                            <td>{{ kamar.tipe_kamar }}</td>
                            <td>{{ kamar.jumlah_kamar }}</td>
                            <td>{{ kamar.fasilitas_kamar }}</td>
                            <!-- <td>{{ kamar.foto_kamar }}</td> -->
                            <td class="text-center">
                                <router-link :to="{name: 'kamar.edit-kamar', params:{id: kamar.id }}"
                                    class="btn btn-sm btn-primary mr-1">EDIT</router-link>
                                <button @click.prevent="kamarDelete(kamar.id)"
                                    class="btn btn-sm btn-danger ml-1">DELETE</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    import {
        onMounted,
        ref
    } from 'vue'

    export default {
        name: 'index-kamar',

        setup() {

            //reactive state
            let kamars = ref([])

            //mounted
            onMounted(() => {

                //get API from Laravel Backend
                axios.get('http://localhost:8000/api/kamar')
                    .then(response => {
                        //assign state kamars with response data
                        kamars.value = response.data.data
                    }).catch(error => {
                        console.log(error.response.data)
                    })

            })

            function kamarDelete(id) {

                //delete data kamar by ID
                axios.delete(`http://localhost:8000/api/kamar/${id}`)
                    .then(() => {

                        // splice kamars
                        const index = this.kamars.findIndex(kamar => kamar.id ===
                            id) // find the kamar index
                        if (~index) {
                            // if the kamar exists in array
                            this.kamars.splice(index, 1)
                        }

                    }).catch(error => {
                        console.log(error.response.data)
                    })
            }

            //return
            return {
                kamars,
                kamarDelete
            }

        }

    }

</script>
