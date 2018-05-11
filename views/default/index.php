<div class="container">
    <h1>Prueba Willfrido</h1>
    <button type="button" class="get-users">Get Users</button>
    <div class="get-users-table">
      <table style="width: 100%"></table>
    </div>
</div>
<script>
$(document).ready(function() {
  $('.get-users').on('click', function() {
    $.ajax({
      url: 'ajax/getUsers',
      type: 'post',
      dataType: 'json',
      success: function(response) {
        console.log('The response', response);

        $('.get-users-table table').empty();

        var rowThHtml = [
          '<tr>',
            '<th>ID</th>',
            '<th>Username</th>',
            '<th>Name</th>',
            '<th>Last Name</th>',
          '</tr>',
        ];
        $('.get-users-table table').append(rowThHtml.join('\n'));

        response.forEach(function(row) {
          var rowHtml = [
            '<tr>',
              '<td>'+row.id+'</td>',
              '<td>'+row.user_name+'</td>',
              '<td>'+row.first_name+'</td>',
              '<td>'+row.last_name+'</td>',
            '</tr>',
          ];
          $('.get-users-table table').append(rowHtml.join('\n'));
        });
      }
    });
  });
})
</script>