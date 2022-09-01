<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>EDIT KAMAR</h4>
                        <hr>
                        <form @submit.prevent="update">
                            <div class="form-group">
                                <label for="tipe_kamar" class="font-weight-bold">Tipe Kamar</label>
                                <input type="text" class="form-control" v-model="kamar.tipe_kamar" placeholder="Masukkan Tipe Kamar">
                                <!-- validation -->
                                <div v-if="validation.tipe_kamar" class="mt-2 alert alert-danger">
                                    {{ validation.tipe_kamar[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kamar" class="font-weight-bold">Jumlah Kamar</label>
                                <input type="number" class="form-control" v-model="kamar.jumlah_kamar" placeholder="Masukkan Tipe Kamar">
                                <!-- validation -->
                                <div v-if="validation.jumlah_kamar" class="mt-2 alert alert-danger">
                                    {{ validation.jumlah_kamar[0] }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fasilitas_kamar" class="font-weight-bold">Fasilitas Kamar</label>
                                <textarea class="form-control" rows="4" v-model="kamar.fasilitas_kamar" placeholder="Masukkan Fasilitas"></textarea>
                                <!-- validation -->
                                <div v-if="validation.fasilitas_kamar" class="mt-2 alert alert-danger">
                                    {{ validation.fasilitas_kamar[0] }}
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
import { reactive, ref, onMounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import axios from 'axios'

export default {
    name: 'edit-kamar',

    setup() {

        //state kamars
        const kamar = reactive({
            tipe_kamar: '',
            jumlah_kamar: '',
            fasilitas_kamar: ''
        })

        //state validation
        const validation = ref([])

        //vue router
        const router = useRouter()

        //vue router
        const route = useRoute()

        //mounted
        onMounted(() => {

            //get API from Laravel Backend
            axios.get(`http://localhost:8000/api/kamar/${route.params.id}`)
            .then(response => {
              
              //assign state kamars with response data
              kamar.tipe_kamar    = response.data.data.tipe_kamar  
              kamar.jumlah_kamar  = response.data.data.jumlah_kamar
              kamar.fasilitas_kamar  = response.data.data.fasilitas_kamar  

            }).catch(error => {
                console.log(error.response.data)
            })

        })

        //method update
        function update() {

            let tipe_kamar   = kamar.tipe_kamar
            let jumlah_kamar = kamar.jumlah_kamar
            let fasilitas_kamar = kamar.fasilitas_kamar

            axios.put(`http://localhost:8000/api/kamar/${route.params.id}`, {
                tipe_kamar: tipe_kamar,
                jumlah_kamar: jumlah_kamar,
                fasilitas_kamar: fasilitas_kamar
            }).then(() => {

                //redirect ke kamar index
                router.push({
                    name: 'kamar.index-kamar'
                })

            }).catch(error => {
                //assign state validation with error 
                validation.value = error.response.data
            })

        }

        //return
        return {
            kamar,
            validation,
            router,
            update
        }

    }

}
</script>

<style>
    body{
        background: lightgray;
    }
</style>