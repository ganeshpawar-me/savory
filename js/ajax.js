

$('#update').click(function(){


	  var Item1 = $('#item1').val();
	  var Item2 = $('#item2').val();
    var Item3 = $('#item3').val();
		var Item4 = $('#item4').val();
		var Item5 = $('#item5').val();
		var Price = $('#price').val();
		var Note = $('#note').val();
    var Type = $('#type').val();

	  $.post('http://localhost/todaysmenu/php/admin.php',{item1 : Item1 , item2:Item2 , item3 : Item3 , item4 : Item4 , item5 : Item5 , price : Price , note : Note , type : Type},function(data){

		 $('#feedback').html(data);


		 });

});


$('#submit').click(function(){


	  var Username = $('#username').val();
	  var Password = $('#password').val();
    //  alert(password);
	  $.post('http://localhost/todaysmenu/php/login.php',{username : Username , password:Password},function(data){

		 $('#feedback').html(data);


		 });

});

	
