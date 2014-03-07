$(document).ready(function() {
    
    $('#starterType').change(function() {
       var val = $(this).val();
       if(val == 'Opcja darmowa - status odbiorcy')
       {
          $('#starterPayable').val('gratis');
       }
       else
       {
          $('#starterPayable').val('płatność gotówką przy odbiorze'); 
       }
    });

    $('#starterPayable').change(function() {
       var val = $(this).val();
       if(val == 'gratis')
       {
        $('#starterType').val('Opcja darmowa - status odbiorcy');
       }
	   else
	   {
		$('#starterType').val('Starter MIN');
	   }
    });

});