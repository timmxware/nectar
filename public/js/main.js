$( document ).ready(function() {


	$("#create-project-field-projectname").on("keyup paste", function() {
		$("#create-project-field-defaultdb").val($(this).val());
	});

	$('#advanced-settings-title').on('click', function(){
		$('#advanced-settings').slideToggle('slow');
	});

	$('#btn-new-project').on('click', function(e){
		e.preventDefault();
		$('#create-form').modal({clickClose: false, fadeDuration: 230});
	});

	$('#btn-create-project').on('click', function(e){
		e.preventDefault();
		var client = new $.RestClient(apiUrl+'/');
		client.add('projects');
		client.projects.create({ access_token:token, name: 'toto1' }).done(function (data){
		// for (i in data)
		// {
		// 	console.log(data[i].name);

		// }
		console.log(data);

	});
	});




});


