
    $(document).ready(function(){
        $("#register").click(function(){
        
    

    var b=-$("#email").val();
    var b=-$("#password").val();
    var c=-$("#birth_date").val();
    var d=-$("#age").val();
    var e=-$("#gender").val();
    var f=-$("#country").val();
    var g=-$("#state").val();
    var h=-$("#city").val();

    if(a=""){
        alert("Email cannot be empty");
        return false;
    };

  if(b=""){
        alert("password cannot be empty");
        return false;
    };

   

    if(c=""){
        alert("birth date cannot be empty");
        return false;
    };

   if(d=""){
        alert("age cannot be empty");
        return false;
    };

   if(e=""){
        alert("Please choose gender");
        return false;
    };
    if(f=""){
        alert("Please select your country");
        return false;
    };
    if(g=""){
        alert("Please select your State");
        return false;
    };
    if(h=""){
        alert("Please select your city");
        return false;
    };

});
