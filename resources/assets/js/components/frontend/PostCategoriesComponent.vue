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
            console.log('Post Categories Component mounted.')
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
            fetchCategories() {
                // Get all categories from API
                axios.get('api/categories')
                    .then((response) => {
                        this.categories = response.data.data;
                        console.log(this.categories);
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            }, // fetchCategories

        },//methods
    }
</script>
<style scoped>
    .cat-list li a p {
        text-transform: capitalize;
    }
</style>
