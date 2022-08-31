<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>PESAN KAMAR</h4>
                        <hr>
                        <form @submit.prevent="store">
                            <div class="form-group">
                                <label for="checkin" class="font-weight-bold">Check In</label>
                                <input type="date" class="form-control" v-model="pemesanan.checkin"
                                    placeholder="Masukkan Check In">
                                <!-- validation -->
                                <div v-if="validation.checkin" class="mt-2 alert alert-danger">
                                    {{ validation.checkin[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout" class="font-weight-bold">Check Out</label>
                                <input type="date" class="form-control" v-model="pemesanan.checkout"
                                    placeholder="Masukkan Check Out">
                                <!-- validation -->
                                <div v-if="validation.checkout" class="mt-2 alert alert-danger">
                                    {{ validation.checkout[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_pemesan" class="font-weight-bold">Nama Pemesan</label>
                                <input type="text" class="form-control" v-model="pemesanan.nama_pemesan"
                                    placeholder="Masukkan Nama Pemesan">
                                <!-- validation -->
                                <div v-if="validation.nama_pemesan" class="mt-2 alert alert-danger">
                                    {{ validation.nama_pemesan[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email_pemesan" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" v-model="pemesanan.email_pemesan"
                                    placeholder="Masukkan Email">
                                <!-- validation -->
                                <div v-if="validation.email_pemesan" class="mt-2 alert alert-danger">
                                    {{ validation.email_pemesan[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telpon" class="font-weight-bold">No Telepon</label>
                                <input type="number" class="form-control" v-model="pemesanan.no_telpon"
                                    placeholder="Masukkan No Telepon">
                                <!-- validation -->
                                <div v-if="validation.no_telpon" class="mt-2 alert alert-danger">
                                    {{ validation.no_telpon[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_pesan" class="font-weight-bold">Jumlah Kamar</label>
                                <input type="number" class="form-control" v-model="pemesanan.jumlah_pesan"
                                    placeholder="Masukkan Jumlah Kamar">
                                <!-- validation -->
                                <div v-if="validation.jumlah_pesan" class="mt-2 alert alert-danger">
                                    {{ validation.jumlah_pesan[0] }}
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="tipe_kamar_id" class="font-weight-bold">Tipe Kamar</label>
                                <select class="form-select" aria-label="Default select example" v-model="pemesanan.tipe_kamar_id">
                                    <option selected>Pilih Tipe Kamar</option>
                                    <option v-for="pemesanan in pemesanans" :value="pemesanan.id">{{ pemesanan.kamar.tipe_kamar }}</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="tipe_kamar_id" class="font-weight-bold">Tipe Kamar</label>
                                <input type="number" class="form-control" v-model="pemesanan.tipe_kamar_id"
                                    placeholder="Masukkan Tipe Kamar">
                                <div v-if="validation.tipe_kamar_id" class="mt-2 alert alert-danger">
                                    {{ validation.tipe_kamar_id[0] }}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {
        reactive,
        ref
    } from 'vue'
    import {
        useRouter
    } from 'vue-router'
    import axios from 'axios'

    export default {
        name: 'create-pemesanan',

        setup() {

            //state kamars
            const pemesanan = reactive({
                checkin: '',
                checkout: '',
                nama_pemesan: '',
                email_pemesan: '',
                no_telpon: '',
                jumlah_pesan: '',
                tipe_kamar_id: ''
                // foto_kamar: ''
            })

            //state validation
            const validation = ref([])

            //vue router
            const router = useRouter()

            //method store
            function store() {

                let checkin = pemesanan.checkin
                let checkout = pemesanan.checkout
                let nama_pemesan = pemesanan.nama_pemesan
                let email_pemesan = pemesanan.email_pemesan
                let no_telpon = pemesanan.no_telpon
                let jumlah_pesan = pemesanan.jumlah_pesan
                let tipe_kamar_id = pemesanan.tipe_kamar_id
                // let foto_kamar = kamar.foto_kamar

                axios.post('http://localhost:8000/api/pemesanan', {
                    checkin: checkin,
                    checkout: checkout,
                    nama_pemesan: nama_pemesan,
                    email_pemesan: email_pemesan,
                    no_telpon: no_telpon,
                    jumlah_pesan: jumlah_pesan,
                    tipe_kamar_id: tipe_kamar_id
                    // foto_kamar: foto_kamar
                }).then(() => {

                    //redirect ke kamar index
                    router.push({
                        name: 'pemesanan.index-pemesanan'
                    })

                }).catch(error => {
                    //assign state validation with error 
                    validation.value = error.response.data
                })

            }

            //return
            return {
                pemesanan,
                validation,
                router,
                store
            }

        }

    }

</script>

<style>
    body {
        background: lightgray;
    }

</style>
