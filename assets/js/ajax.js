  $(document).ready(function(){
  $('.signupForm').submit(function(e){
    e.preventDefault();

    var fname =$("input#firstname").val();
    var lname =$("input#lastname").val();
    var username =$("input#username").val();
    var email =$("input#email").val();
    var pass  =$("input#password").val();
    var type  =$("input[type='radio']:checked");

    jQuery.ajax({
     type:"POST",
     url:"Legal/signup",
     dataType:'json',
     data:{firstname: fname,lastname: lname,username: username,email: email,password:password,type: type},
     
     success: function(res){
     if(!res)
      {
        alert('Error in submitting form. Please Try again');
      }  
      else
      {
         alert('hello');
      }

     }

    }); 

   });   
  });  