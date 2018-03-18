$(document).ready(function(){

 var string = 'ganesh';

$.get('http://localhost/todaysmenu/php/user.php',{input : string},function(data){

  $('#feedback').html(data);


  });
  });
