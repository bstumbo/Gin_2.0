    $('#gins .rateit').bind('rated reset', function (e) {
         var ri = $(this);
 
         //if the use pressed reset, it will get value: 0 (to be compatible with the HTML range control), we could check if e.type == 'reset', and then set the value to  null .
         var value = ri.rateit('value');
         var ginkey = ri.data('ginid');
         var sessionid = ri.data('sessionid');
        // if the product id was in some hidden field: ri.closest('li').find('input[name="productid"]').val()
 
         //maybe we want to disable voting?
         ri.rateit('readonly', false);
 
         $.ajax({
             url: 'rateit_star.php', //your server side script
             data: { id: ginkey, value: value, sessionid: sessionid }, //our data
             type: 'POST',
             success: function (data) {
                 $('#response').append('<li>' + data + '</li>');
 
             },
             error: function (jxhr, msg, err) {
                 $('#response').append('<li style="color:red">' + msg + '</li>');
             }
         });
     });
