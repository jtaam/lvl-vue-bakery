<template>
    <div class="col-lg-8 posts-list">
        <div class="single-post row">
            <div class="col-lg-12">
                <div class="feature-img">
                    <img class="img-fluid" v-bind:src=post.top_image v-bind:alt=post.title>
                </div>
            </div>

            <div class="col-lg-3  col-md-3 meta-details">
                <ul class="tags">
                    <li><a href="#">Food,</a></li>
                    <li><a href="#">Technology,</a></li>
                    <li><a href="#">Politics,</a></li>
                    <li><a href="#">Lifestyle</a></li>
                </ul>
                <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                            class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{post.author.created_at|userCreateDate}}</a> <span
                            class="lnr lnr-calendar-full"></span></p>
                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                            class="lnr lnr-eye"></span></p>
                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">{{post.comments.length}} Comments</a> <span
                            class="lnr lnr-bubble"></span></p>
                    <ul class="social-links col-lg-12 col-md-12 col-6">
                        <li><a v-bind:href=post.author.facebook><i class="fa fa-facebook"></i></a></li>
                        <li><a v-bind:href=post.author.twitter><i class="fa fa-twitter"></i></a></li>
                        <li><a v-bind:href=post.author.github><i class="fa fa-github"></i></a></li>
                        <li><a v-bind:href=post.author.behance><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9 col-md-9">
                <a class="posts-title" href="#"><h3>{{post.title}}</h3></a>
                <p class="excert">
                    {{post.top_description}}
                </p>

            </div>
            <div class="col-lg-12">
                <div class="quotes">
                    {{post.post_promo}}
                </div>
                <div class="row mt-30 mb-30">
                    <div class="col-6">
                        <img class="img-fluid" v-bind:src=post.left_image v-bind:alt=post.title>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" v-bind:src=post.right_image v-bind:alt=post.title>
                    </div>
                    <div class="col-lg-12 mt-30">
                        <p>{{post.bottom_description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <PostNavigationComponent></PostNavigationComponent>
        <div class="comments-area">
            <h4>05 Comments</h4>

            <div class="comment-list" v-for="item in post.comments">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <!--<img v-bind:src=post.comment.author.image alt="">-->
                        </div>
                        <div class="desc">
                            <h5><a href="#">Author Name?</a></h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                            <p class="comment">
                                {{item.comment}}
                            </p>
                        </div>
                    </div>
                    <div class="reply-btn">
                        <a href="" class="btn-reply text-uppercase">reply</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="comment-form">
            <h4>Leave a Comment</h4>
            <form>
                <div class="form-group form-inline">
                    <div class="form-group col-lg-6 col-md-12 name">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                    </div>
                    <div class="form-group col-lg-6 col-md-12 email">
                        <input type="email" class="form-control" id="email" placeholder="Enter email address"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                </div>
                <div class="form-group">
                        <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                  required=""></textarea>
                </div>
                <a href="#" class="primary-btn text-uppercase">Post Comment</a>
            </form>
        </div>
    </div>
</template>

<script>
    import PostNavigationComponent from "./PostNavigationComponent";
    // import CommentComponent from "./CommentComponent";

    export default {
        name: "PostComponent",

        components:{
            PostNavigationComponent,
            // CommentComponent,
        },

        mounted() {
            console.log('Post Component mounted.')
        },// mounted

        data() {
            return {
                loading: false,

                error: null,

                post:{
                    "title": "",
                    "slug": "",
                    "top_image": "",
                    "top_description": "",
                    "post_promo": "",
                    "left_image": "",
                    "right_image": "",
                    "public_id": null,
                    "bottom_description": "",
                    "view_count": 4,
                    author:{

                    },
                    comments:{

                    },
                },
            }
        },//data

        created() {
            this.fetchPost();
        },//created

        methods: {
            fetchPost() {
                // Optionally the request above could also be done as
                axios.get('/api/post/'+ this.$route.params.slug)
                    .then((response) => {
                        this.post = response.data.data[0];
                        console.log(this.post);
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            } // fetchPost
        },//methods
    }
</script>

<style scoped>
    .social-links li{
        float: right;
    }
    .social-links li a i{
        color: #222;
        margin: 0 15px;
    }
    .social-links li a i:hover{
        color: #d1ab7f;
        transition: all 0.3s ease 0s;
    }
    .social-links li a i:last-child{
        margin-right: 0;
    }
    .quotes {
        margin-top: 20px;
        padding: 30px;
        background-color: #fff;
        box-shadow: -20.84px 21.58px 30px 0px rgba(176,176,176,0.1);
    }
</style>
