(function($) {
$(document).ready(function(){
var $large;
var $medium;
var $small;
//Ajax call to get id for each size
$.ajax({
type: 'POST',
data: 'fromplugin=Y',
url: 'wp-content/plugins/ioslider/do_stuff.php',
success: function(data){

//split strings

var str = data.split('|');
$large = str[0].split(',');
$medium = str[1].split(',');
$small = str[2].split(',');
//for each loop on strings
console.log($large);
//ioslider on each id
$.each($large, function(index, value){
  $('#'+value).ioslider({
 
  });
  });
 $.each($medium, function(index, value){
  $('#'+value).ioslider({
 size: 'medium'
  });
  }); 
  $.each($small, function(index, value){
  $('#'+value).ioslider({
 size: 'small'
  });
  });
  }
  });
  });
  
  })( jQuery );
  
  