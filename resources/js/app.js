

import './bootstrap';

import  { createApp } from 'vue';


// import router from "./router";
// import store from './store';
import dashboardAppRoot from './App.vue';

let dashboardVueApp = createApp(dashboardAppRoot);

// dashboardVueApp.use(router);

// dashboardVueApp.use(store);
dashboardVueApp.mount('#app');






// require('./bootstrap');

// import { createApp } from 'vue';
// app = createApp({});
// app.component('example', require('./components/Example.vue'));
// app.component('passport-clients',require('./components/passport/Clients.vue').default);
// app.component('passport-authorized-clients',require('./components/passport/AuthorizedClients.vue').default);
// app.component('passport-personal-access-tokens',require('./components/passport/PersonalAccessTokens.vue').default);
// app.mount('#app')

