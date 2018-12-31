<template>
    <ul class="cat-list">
        <li v-for="category in categories">
            <a v-bind:href="'category/'+category.slug" class="d-flex justify-content-between">
                <p>{{category.name}}</p>
                <p>{{category.posts_count}}</p>
            </a>
        </li>
    </ul>
</template>

<script>
    export default {
        name:"PostCategoriesComponent",

        mounted() {
            console.log('Component mounted.')
        },//mounted

        data(){
            return{
                categories:[],
                category:{
                    'name':'',
                    'slug':''
                }
            }
        },//data

        created(){
            this.fetchCategories();
        },//created

        methods:{
            fetchCategories(){
                fetch('api/categories').
                    then(response => response.json()).
                    then(response => {
                        this.categories = response.data;
                })
            } //fetchCategories
        },//methods
    }
</script>
<style scoped>
    .cat-list li a p {
        text-transform: capitalize;
    }
</style>
