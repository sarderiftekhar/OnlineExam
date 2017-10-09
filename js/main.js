$(function(){
// For user registration
$("regsubmit").click(function(){
    $var name = $("#name").val();
    $var name = $("#username").val();
    $var name = $("#password").val();
    $var name = $("#email").val();

    $var dataString = 'name='+name+'&username='+username+'&password='+password+'&email='+email;

    $.ajax({

      type:"POST",
      url:"getregister.php",
      data:dataString,
      success:function(data){
        $("#state").html();
      }
    });
    //return false;
  });
});
