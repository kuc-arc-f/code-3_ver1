<h2><?php echo $title; ?></h2>

<div id="app">
    <div class="form-group">
        <label for="TopicTitle">タイトル</label>
        <input type="text" class="form-control" id="title" v-model="title">
    </div>
    <div class="form-group">
        <label for="TopicContent">content</label>
        <textarea class="form-control" id="content" rows="3" v-model="content"></textarea>
    </div>
    <button onClick="test_ajax();">投稿</button>
</div>

<!-- -->
<script>
var baseUrl = '<?php echo base_url(); ?>';
console.log(baseUrl);

function test_ajax(){
    console.log('#btn-1');
    var hostUrl= baseUrl + 'api/tasks/create';
    var title = $('#title').val();
    var content = $('#content').val();
    $.ajax({
        url: hostUrl,
        type:'POST',
        dataType: 'json',
        data : { 'title' : title, 'content' : content},
        timeout:3000,
    }).done(function(data) {
        console.log("ajax-ok");
        console.log(data);
    }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
        console.log("ajax-error");
    })		
}
</script>

