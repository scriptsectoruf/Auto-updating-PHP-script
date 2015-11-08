<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#messages").load('load.php')
}, 200);
});
</script>

<div id="messages"></div>
