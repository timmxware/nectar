$( document ).ready(function() {


	$("#create-project-field-projectname").on("keyup paste", function() {
		$("#create-project-field-defaultdb").val($(this).val());
	});

	$('#advanced-settings-title').on('click', function(){
		$('#advanced-settings').slideToggle('slow');
	});

	$.extend($.modal.defaults, {
		escapeClose: true,
		clickClose: false,
		closeText: 'Fermer',
		showSpinner: false,
		fadeDuration: 240,
		fadeDelay: 1.0
	});


// $.get("/repos", function(html) {
// 	console.log(html);
// });
// $.when(
//     $.ajax("/some/page"),
//     $.ajax("/some/other-page"),
//     $.ajax("/some/other-other-page"),
//     $.ajax("/and/so/on")
//     )
//     .done(function(first_call, second_call, third_call, fourth_call){
//        console.log(first_call);
//     })
//     .fail(function(){
//         //ruh roh - bail out!
//     });


$('#btn-new-project').click(function(event) {
  event.preventDefault();
  $.get(this.href, function(html) {
    $(html).appendTo('body').modal();
  });
});




$('#btn-new-project').on($.modal.BEFORE_CLOSE, function(event, modal) {
  console.log("hey");
});







	// $('#btn-create-project').on('click', function(e){
	// 	e.preventDefault();
	// 	var client = new $.RestClient(apiUrl+'/');
	// 	client.add('projects');
	// 	client.projects.create({ access_token:token, name: 'toto1' }).done(function (data){
	// 	// for (i in data)
	// 	// {
	// 	// 	console.log(data[i].name);

	// 	// }
	// 	console.log(data);

	// });
	// });




});


