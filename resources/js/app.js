
import ApolloClient from 'apollo-boost';

import Vue from 'vue';
import VueRouter from 'vue-router';
import './bootstrap';
import Post from  './Post';
import PostList from  './PostList';
import VueApollo from 'vue-apollo'
window.Vue = Vue;
 Vue.use(VueRouter);

const routes = [
    {
    path: '/',
  
    component: PostList
    },
    {
        path: '/post/:id',
      
        component: Post
        },
  
];

Vue.use(VueApollo);
const apolloClient = new ApolloClient({
  // You should use an absolute URL here
  uri: 'http://127.0.0.1:8000/graphql'
});
const apolloProvider = new VueApollo({
    defaultClient: apolloClient,
  });

const router = new VueRouter({
    mode:'history',
    routes: routes
});
const app = new Vue({
    el: '#app',
    apolloProvider,
    router
});