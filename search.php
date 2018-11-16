<?php include ("header.php"); ?>
<br>
<h2 align="center">Search Media</h2><br>
<div class="form-group">
  <div class="input-group">
    <input type="text" name="search_text" id="search_text" placeholder="type Title..." class="form-control">
  </div>
</div>
<br>
<div class="row" id="result">
</div>
<script>
  $(document).ready(function(){
    $('#search_text').keyup(function()
    {var txt = $(this).val();
      if (txt == '')
      { }
      else {
        console.log(txt);
          $('#result').html('<p>Searching..</p>');
          $.ajax({
            url:"actions/fetch.php",
            method: "post",
            data: {search:txt},
            dataType: "text",
            success:function(data){
              $('#result').html(data);
            }
          });
        }
      });
  });
</script>
<?php include ("footer.php"); ?>