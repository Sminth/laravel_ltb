import Vue from 'vue'
import VueRouter from 'vue-router'

// Layouts
import commandeLayout from './layout/commande.vue'
import partenaireLayout from './layout/partenaire.vue'

// Commandes
import CommandeIndex from './views/commande/index.vue'
import CommandeDetails from './views/commande/show.vue'

// Commandes partenaires
import CommandesPartenaire from './views/commande/partenaire/index.vue'
import CommandePartenaire from './views/commande/partenaire/show.vue'

// others
import NotFoundPage from './views/errors/error404.vue'
import partenaire from "./layout/partenaire";


Vue.use(VueRouter)

const routes = [
    {
        path: '/commandes',
        component: commandeLayout,
        children: [
            {path: '', component: CommandeIndex, name: 'commande_index'},
            {path: ':id', component: CommandeDetails, name: 'commande_detail'}
        ],
    },
    {
        path: '/partenaire/commandes',
        component: partenaireLayout,
        children: [
            {path: '', component: CommandesPartenaire},
            {path: ':id', component: CommandePartenaire}
        ],
    },
    //  DEFAULT ROUTE
    {path: '', component: NotFoundPage}
];

const router = new VueRouter({
    routes,
    linkActiveClass: 'active'
})

export default router
