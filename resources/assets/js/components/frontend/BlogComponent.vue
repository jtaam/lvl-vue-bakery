<template>
    <div class="col-lg-8 posts-list">

        <div class="single-post row" v-for="post in posts">
            <div class="col-lg-3  col-md-3 meta-details">
                <ul class="tags">
                    <li v-for="tag in post.tags"><a v-bind:href="'tag/'+tag.slug">{{tag.name}} <span class="lnr lnr-tag"></span></a></li>
                </ul>
                <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{post.author.first_name}} {{post.author.last_name}}</a> <span
                            class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{post.author.created_at|userCreateDate}}</a> <span
                            class="lnr lnr-calendar-full"></span></p>
                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                            class="lnr lnr-eye"></span></p>
                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">{{post.comments.length}} Comments</a> <span
                            class="lnr lnr-bubble"></span></p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 ">
                <div class="feature-img">
                    <img class="img-fluid" v-bind:src=post.top_image v-bind:alt=post.title>
                </div>
                <router-link :to="{ name: 'post', params: { slug: post.slug }}" class="posts-title"><h3>{{post.title}}</h3></router-link>
                <!--<a class="posts-title" v-bind:href="'post/'+post.slug"><h3>{{post.title}}</h3></a>-->
                <p class="excert">
                    {{post.post_promo}}
                </p>
                <router-link :to="{ name: 'post', params: { slug: post.slug }}" class="primary-btn">View More</router-link>
                <!--<a v-bind:href="'post/'+post.slug" class="primary-btn">View More</a>-->
            </div>
        </div>


        <!--<nav class="blog-pagination justify-content-center d-flex">-->
            <!--<ul class="pagination">-->
                <!--<li class="page-item">-->
                    <!--<a href="#" class="page-link" aria-label="Previous">-->
		                                    <!--<span aria-hidden="true">-->
		                                        <!--<span class="lnr lnr-chevron-left"></span>-->
		                                    <!--</span>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="page-item"><a href="#" class="page-link">01</a></li>-->
                <!--<li class="page-item active"><a href="#" class="page-link">02</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">03</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">04</a></li>-->
                <!--<li class="page-item"><a href="#" class="page-link">09</a></li>-->
                <!--<li class="page-item">-->
                    <!--<a href="#" class="page-link" aria-label="Next">-->
		                                    <!--<span aria-hidden="true">-->
		                                        <!--<span class="lnr lnr-chevron-right"></span>-->
		                                    <!--</span>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</nav>-->
    </div>
</template>

<script>
    export default {
        name: "BlogComponent",

        mounted(){
            console.log('Blog Component mounted.')
        },// mounted

        data(){
            return{
                posts:[],
                post:{
                    'title':'',
                    'slug':'',
                    'top_image':'',
                    'top_description':'',
                    'post_promo':'',
                    'left_image':'',
                    'right_image':'',
                    'public_id':'',
                    'bottom_description':'',
                    'view_count':'',
                    category:{
                        'name':'',
                        'slug':'',
                    },
                    author:{
                        'name':'',
                        'role_id':'',
                        'first_name':'',
                        'last_name':'',
                        'profession':'',
                        'image':'',
                        'created_at':''
                    },
                    comments:{

                    },
                    tags:{
                        'name':'',
                        'slug':'',
                    },
                }
            }
        },//data

        created(){
            this.fetchPosts();
        },//created

        methods:{
            // fetchPosts(){
            //     fetch('api/posts').
            //         then( response => response.json() ).
            //         then( response => {
            //             this.posts = response.data;
            //     })
            // }, // fetchPosts
            fetchPosts(){
                // Make a request for a user with a given ID
                axios.get('/api/posts')
                    .then(response => {
                        this.posts = response.data.data
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            },// fetchPosts
        },//methods

    }

</script>

<style scoped>
.tags li a{
    text-transform: capitalize;
    margin: 2px;
}
.tags li a span{
    font-size: 90%;
}
</style>