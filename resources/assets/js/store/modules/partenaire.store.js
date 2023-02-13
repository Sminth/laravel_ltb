import axios from 'axios'

// State object
const state = {
    commandes: [],
    commande: {}
}

// Getter functions
const getters = {
    GET_COMMANDES() {
        return state.commandes
    },
    GET_COMMANDE() {
        return state.commande
    }
}


// Mutations
const mutations = {}

// Actions
const actions = {
    FETCH_COMMANDES({commit}, params) {
        return new Promise((resolve, reject) => {
            axios.get("/admin/partenaire/commandes", {params}).then((response) => {
                resolve(response.data);
            }).catch((err) => {
                reject(err)
            });
        });
    },
    FETCH_COMMANDE({commit}, params) {
        return new Promise((resolve, reject) => {
            axios.get("/admin/partenaire/commande", {params}).then((response) => {
                resolve(response.data);
            }).catch((err) => {
                reject(err)
            });
        });
    }
}


export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
