<template>
    <ul class="tag-clouds" >
        <li v-for="tag in tags"><a v-bind:href="'tag'+tag.slug">{{tag.name}}</a></li>
    </ul>
</template>

<script>
    export default {
        name: "TagsComponent",

        data(){
            return{
                tags:[],
                tag:{
                    'name':'',
                    'slug':''
                }
            }
        },//data

        created(){
            this.fetchTags();
        },//created

        methods:{
            fetchTags(){
                fetch('api/tags').
                    then(response => response.json()).
                    then(response => {
                    this.tags = response.data;
                })
            } //fetchTags
        },//methods
    }
</script>

<style scoped>
.tag-clouds li{
    margin-right: 5px;
}
.tag-clouds li a{
    text-transform: capitalize;
}
</style>