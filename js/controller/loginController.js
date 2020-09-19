$("#btnLogin").click(function () {
console.log("awda")
    var uname = $("#txtUname").val();
    var pass = $("#txtPassword").val();


    var ajaxConfig = {
        method : "POST",
        url: "http://localhost/webapi/Server/User.php",
        data :{
         action : "login",
         uname : uname,
         pass : pass,
        },
        async: true,
    }


// http://localhost
    $.ajax(ajaxConfig).done(function (response) {

        console.log(response);
 console.log(response["0"]["type"])
        if(response){
       
 
           if (response["0"]["type"]==="Student"){
            console.log("awa");
            window.location.replace("student-home.html");
    }
    else if (response["0"]["type"]==="Expert"){
            window.location.replace("industry-home.html");
        }
    else if (response["0"]["type"]==="admin"){
            window.location.replace("Admin-home.html");
        }
     
  else{
            alert("Unotherized User ");
                 }
           
        }
        else{
            alert(" User");
                 }
    })
})

$('a[href="#signup"]').click(function () {
    var queryParam = window.location.search;
    var params= queryParam.split("&");
    var link = params[0].split("=");

        window.location.replace("SignupForm.html?ToUrl="+link[1]+"&"+params[1]);

})