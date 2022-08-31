<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>DATA PEMESANAN</h4>
                        <hr>
                        <router-link :to="{name: 'pemesanan.pesan'}" class="btn btn-md btn-success">PESAN KAMAR
                        </router-link>

                        <table class="table-striped table-responsive mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Nama Tamu</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Jumlah Kamar</th>
                                    <th scope="col">Tipe Kamar</th>
                                    <th scope="col">OPTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(pemesanan, index) in pemesanans" :key="index">
                                    <td>{{ pemesanan.checkin }}</td>
                                    <td>{{ pemesanan.checkout }}</td>
                                    <td>{{ pemesanan.nama_pemesan }}</td>
                                    <td>{{ pemesanan.email_pemesan }}</td>
                                    <td>{{ pemesanan.no_telpon }}</td>
                                    <td>{{ pemesanan.jumlah_pesan }}</td>
                                    <td>{{ pemesanan.kamar.tipe_kamar }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'pemesanan.edit-pemesanan', params:{id: pemesanan.id }}"
                                            class="btn btn-sm btn-primary mr-1">EDIT</router-link>
                                        <button @click.prevent="pemesananDelete(pemesanan.id)"
                                            class="btn btn-sm btn-danger ml-1">DELETE</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
        name: 'index-pemesanan',

        setup() {

            //reactive state
            let pemesanans = ref([])

            //mounted
            onMounted(() => {

                //get API from Laravel Backend
                axios.get('http://localhost:8000/api/pemesanan')
                    .then(response => {
                        //assign state pemesanans with response data
                        pemesanans.value = response.data.data
                    }).catch(error => {
                        console.log(error.response.data)
                    })

            })
            
                function pemesananDelete(id) {

                    //delete data pemesanan by ID
                    axios.delete(`http://localhost:8000/api/pemesanan/${id}`)
                        .then(() => {

                            // splice pemesanans
                            const index = this.pemesanans.findIndex(pemesanan => pemesanan.id ===
                                id) // find the pemesanan index
                            if (~index) {
                                // if the pemesanan exists in array
                                this.pemesanans.splice(index, 1)
                            }

                        }).catch(error => {
                            console.log(error.response.data)
                        })
                }

            //return
            return {
                pemesanans,
                pemesananDelete
            }

        }

    }

</script>

<style>
    body {
        background: lightgray;
    }

</style>
