<template>
    <div>
        <h1>Vue + Laravel first welcome page</h1>
        <ul>
            <li
            v-for="post in posts"
            :key="post.id"
            >
            <h3>{{post.title}}</h3>
            <p>{{post.content}}</p>
            </li>
        </ul>
    </div>

</template>

<script>
export default {
    name: 'App',
    data(){
        return{

            apiUrl: 'http://127.0.0.1:8000/api/posts',
            posts: null,
        }
    },

    methods:{

        getApi(){
            axios.get(this.apiUrl)
            .then(res=>{

                this.posts = res.data
                console.log(this.post);

            })
        }
    },
    mounted() {
        this.getApi();
        console.log('axios');
    },
}
</script>

<style>

</style>
