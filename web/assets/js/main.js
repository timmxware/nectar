$( document ).ready(function() {

	$('#create-form').modal({
		clickClose: false,
	});

	$("#projectname").on("keyup paste", function() {
		$("#defaultdb").val($(this).val());
	});

	$('#advanced-settings-title').on('click', function(){
		$('#advanced-settings').slideToggle('slow');
	});

//

//http://preview.gitlab.local/oauth/authorize?client_id=0f3809ef031737abb7445b491dff6cc8dd5604f33f1210eadf42f679797f2077&redirect_uri=%20http%3A//localhost/%7Ekursus/git/gitcreator/web&response_type=code&state=2cdb2c9b5a52e8e3cad948a398aef280f288be45160ca7a1504a4c41f17ad992

function testAjax(handleData) {
	$.ajax({
		url : 'http://preview.gitlab.local/api/v3/projects',
		type: 'GET',
		data: 'session_cookie=' + '0c6f848cdca51fadcfdab4fac0c1435b',

		success:function(data) {
			handleData(data);
		}
	});
}


// testAjax(function(output){
// 	console.log(output);

// });



});


//http://preview.gitlab.local/oauth/authorize?client_id=0f3809ef031737abb7445b491dff6cc8dd5604f33f1210eadf42f679797f2077&redirect_uri=+http%3A%2F%2F1780.0.0.1%2F%7Ekursus%2Fgit%2Fgitcreator%2Fweb%2F+&response_type=code&state=2cdb2c9b5a52e8e3cad948a398aef280f288be45160ca7a1504a4c41f17ad992
