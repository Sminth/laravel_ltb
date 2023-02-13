import Vue from 'vue'
import Vuex from 'vuex'
import createLogger from 'vuex/dist/logger'

// import the auto exporter
import modules from './modules';

Vue.use(Vuex);
const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules, // all your imported modules
    actions: {
        reset({commit}) {
            // resets state of all the modules
            Object.keys(modules).forEach(moduleName => {
                commit(`${moduleName}/RESET`);
            })
        }
    },
    strict: debug,
    plugins: debug ? [createLogger()] : [] // set logger only for development
})
