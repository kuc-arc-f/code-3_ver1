<h1><?php echo $title; ?></h1>
<a href="<?php echo site_url('tasks/create' ); ?>">[ create ]</a>
<hr />

<div id="app">
    <div v-for="task in tasks" v-bind:key="task.id">
        <p>ID : {{ task.id }}</p>
        <h3>
            <a v-bind:href="conv_url('tasks/show/') +task.id">{{ task.title }}</a>
        </h3>
        <p>
            {{ task.content }}
        </p>
        <hr />
    </div>
</div>

<script>
var baseUrl = '<?php echo base_url(); ?>';

var app = new Vue({
    el: '#app',
    created() {
        this.getTasks()
    },    
    data: {
        tasks : [],
    },
    methods: {
        getTasks() {
            var url = this.conv_url('api/tasks')
            axios.get(url)
            .then(res =>  {
                this.tasks = res.data
                console.log(res.data.length )
            })
        },
        conv_url(url) {
            return baseUrl + url
        }
    }    
});
</script>
