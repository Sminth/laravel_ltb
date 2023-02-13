import axios from 'axios'

const initialState = () => ({
    commandes: [],
    commande: {},
    total: 0,
    current_page: 1
})

// state
const state = initialState();

// Getter functions
const getters = {
    GET_COMMANDES() {
        return state.commandes
    },
    GET_COMMANDE() {
        return state.commande
    },
    GET_TOTAL() {
        return state.total
    }
}


// Mutations
const mutations = {
    SET_COMMANDES(state, data) {
        state.commandes = data;
    },
    SET_COMMANDE(state, data) {
        state.commande = data;
    },
    SET_TOTAL(state, data) {
        state.total = data;
    },
    SET_CURRENTPAGE(state, data) {
        state.CURRENTPAGE = data;
    },
    RESET(state) {
        const newState = initialState();
        Object.keys(newState).forEach(key => {
            state[key] = newState[key]
        });
    }
}

// Actions
const actions = {
    FETCH_COMMANDES({commit}, params) {
        return new Promise((resolve, reject) => {
            axios.get("/api/commandes", {params}).then((response) => {
                commit('RESET');
                commit('SET_COMMANDES', response.data.data);
                commit('SET_TOTAL', response.data.total);
                resolve(response.data);
            }).catch((err) => {
                reject(err)
            });
        });
    },
    FETCH_COMMANDE({commit}, params) {
        return new Promise((resolve, reject) => {
            axios.get("/api/commande", {params}).then((response) => {
                commit('RESET');
                commit('SET_COMMANDE', response.data.data);
                resolve(response.data);
            }).catch((err) => {
                reject(err)
            });
        });
    },
    CHANGE_STATUS({commit}, params) {
        return new Promise((resolve, reject) => {
            axios.get("/api/change-status", {params}).then((response) => {
                resolve(response.data);
            }).catch((err) => {
                reject(err)
            });
        });
    },
    RESET_COMMANDES({commit}) {
        commit('RESET');
    }
}


export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
