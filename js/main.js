$(function(){
// For user registration
$("#regsubmit").click(function(){
    var name = $("#name").val();
    var username = $("#username").val();
    var password = $("#password").val();
    var email = $("#email").val();

    var dataString = 'name='+name+'&username='+username+'&password='+password+'&email='+email;

    $.ajax({

      type:"POST",
      url:"getregister.php",
      data:dataString,
      success:function(data){
        $("#state").html(data);
      }
    });
    return false;
  });

  // For user login
  $("#loginsubmit").click(function(){
      var email = $("#email").val();
      var password = $("#password").val();

      var dataString = '&email='+email+'&password='+password;

      $.ajax({

        type:"POST",
        url:"getlogin.php",
        data:dataString,
        success:function(data){
          $("#state").html(data);
        }
      });
      return false;
    });






});//End of Function
