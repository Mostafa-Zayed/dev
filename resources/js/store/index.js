import { createStore } from 'vuex'
import router from '../router';
import branch from './modules/branch/index.js';
import category from './modules/category';
export default createStore({
    state: {
        user: {
            token: 'xcfcv'
        },
        categories: [
            {
                id: 1,
                name: 'category1',
                slug: 'category1',
                status: true
            },
            {
                id: 2,
                name: 'category2',
                slug: 'category2',
                status: true
            },
            {
                id: 3,
                name: 'category3',
                slug: 'category3',
                status: false
            }
        ],
        permissions: ['create-category']
    },
    getters: {
        getToken: function(state){
            return state.token;
        },
        activeCategories: (state) => {
            return state.categories.filter((v) => v.status === true);
        },
        notActiveCategories: (state) => {
            return state.categories.filter((v) => v.status !== true);
        },
        isLoggedIn: (state) => {
            return state.user.token ? true : false;
        }
    },
    mutations: {
        redirectTo(){
            router.push({name: 'Home'});
        }
    },
    actions: {
        redirectTo({commit}){
            commit("redirectTo");
        }
    },
    modules: {
        branch,
        category
    }
});

