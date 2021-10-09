<template>
  <div class="container mx-auto px-4 w-full md:w-3/4 lg:w-3/5 xl:w-1/2 my-20">
    <h2 class="text-4xl"><router-link :to="{name:'index'}" class="text-gray-600 hover:underline ">  All Posts</router-link>
    <span class="text-gray-600">/</span>
    {{topic.name}}
     </h2>

    <div v-if="$apollo.loading"></div>

    <div v-else>
      <PostList_Items v-for="post in topic.posts" :key="post.id" :post="post" class="mt-10"></PostList_Items>
    </div>
  </div>
</template>
<script>
import qgl from "graphql-tag";
import PostList_Items from "./components/PostList_Items"
export default {
    components:{
        PostList_Items
    },
    apollo: {
        topic: {
         query: qgl`
         query($slug: String!){
             topic(slug:$slug){
                 id 
                 name
                 posts{
                     id 
                     title 
                     lead
                     created_at
                     author{
                         id
                         name
                     }
                     topic{
                         name
                         slug
                     }
                 }
             }
         }
         
         `,
         variables(){
             return{
                 slug: this.$route.params.slug
             }
         }

        }
    },
}
</script>

