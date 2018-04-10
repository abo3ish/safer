
$(document).ready(function(){
	$(document).on('click' ,'.search' ,function(event){
		event.preventDefault();
		$('.results .container').empty();
		var type 			= $('.select_type:checked').val();
		if(typeof(type) == 'undefined')
			type = '';

		var accommodation 	= $('.select_accommodation:checked').val();
		if(typeof(accommodation) == 'undefined')
			accommodation = '';

		var area 			= $('.select_area:checked').val();
		if(typeof(area) == 'undefined')
			area = '';

		var continent 		= $('.select_continent:checked').val();
		if(typeof(continent) == 'undefined')
			continent = '';

		var min_budget 		= Number($('.min_budget').val());
		var max_budget 		= Number($('.max_budget').val());
		var month 			= Number($('.custom-select').val());
		var semester;
		if(!isNaN(semester))
		{
			if(month > 8 || month <4)
				semester = 'win';
			else
				semester = "sum";
		}
		else
			semester='';

		$.ajax({
			url:'search.php',
			data:{type:type ,accommodation:accommodation ,continent:continent ,area:area ,semester:semester ,min_budget:min_budget ,max_budget:max_budget},
			type:'POST',
			success:function(data){
				var encoded_data = JSON.parse(data);
				if(encoded_data.length > 0)
				{
					for(var i = 0 ; i<encoded_data.length ; i++)
					{
						$('.results .container').append('<div class="card mb-3"><img class="card-img-top" src="images/'+encoded_data[i]['image']+'" alt="Card image cap"><div class="card-body"><h3 class="card-title">'+encoded_data[i]['name']+'</h3><p class="card-text">'+encoded_data[i]['budget']+' $</p><p class="card-text">'+encoded_data[i]['country']+'</p></div></div></div>');
					}
				}
				else
				{
					$('.results .container').append('<p class="error alert-danger text-center">no places match<p>');
				}
			}
		})

	})
})