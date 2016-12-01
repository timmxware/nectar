$( document ).ready(function() {

	// $('#create-form').modal({
	// 	clickClose: false,
	// });

	$("#create-project-field-projectname").on("keyup paste", function() {
		$("#create-project-field-defaultdb").val($(this).val());
	});

	$('#advanced-settings-title').on('click', function(){
		$('#advanced-settings').slideToggle('slow');
	});


var client = new $.RestClient('http://preview.gitlab.local/api/v3/');

client.add('projects');
client.projects.read({ access_token:token }).done(function (data){
for (i in data)
{
	 	console.log(data[i].name);

}
	 	console.log(data);

});




});


