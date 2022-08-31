import {
    createRouter,
    createWebHistory
} from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import CreateKamar from "../views/kamar/Create.vue"
import IndexKamar from "../views/kamar/Index.vue"
import EditKamar from "../views/kamar/Edit.vue"
import Pemesanan from "../views/pemesanan/Index.vue"
import PesanKamar from "../views/pemesanan/Create.vue"
import EditPesanan from "../views/pemesanan/Edit.vue"

const routes = [{
        path: "/",
        name: "/",
        redirect: "/dashboard",
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Dashboard,
    },
    {
        path: '/index',
        name: 'kamar.index-kamar',
        component: IndexKamar
    },
    {
        path: '/create',
        name: 'kamar.create-kamar',
        component: CreateKamar
    },
    {
        path: '/edit/:id',
        name: 'kamar.edit-kamar',
        component: EditKamar
    },
    {
        path: '/pemesanan',
        name: 'pemesanan.index-pemesanan',
        component: Pemesanan
    },
    {
        path: '/pesan',
        name: 'pemesanan.pesan',
        component: PesanKamar
    },
    {
        path: '/editpesanan/:id',
        name: 'pemesanan.edit-pemesanan',
        component: EditPesanan
    }
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    linkActiveClass: "active",
});

export default router;
