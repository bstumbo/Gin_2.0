$(function() {
$('form.form-horizontal').on('submit', function() {
	var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            data = {};
            
        that.find('[name]').each(function(index, value){
                var that = $(this),
                    name =  that.attr('name'),
                    value = that.val();

                data[name] = value;            
            });
		
             $.ajax ({
                
                url: url,
                type: type,
                data: data,
                timeout: 7000,
                success: function(response) {
                    
                    $('#gindata').html(response)
		    
                    }            
            });   

    return false;
		
});
});

$(function(){

$(document).on('click', '#gindata tr', function(){

	var that = $(this),
	    data = {},
	    id = that.attr('id'),
	    value2 = that.attr('data-id');
		
	data[id] = value2;
		
	
	$.ajax({
	type: 'POST',
	data: data,
	url : 'includes/profile_query.php',
	success: function(response) { 
		$('#gin_details').html(response) }
	
	});
});

});

