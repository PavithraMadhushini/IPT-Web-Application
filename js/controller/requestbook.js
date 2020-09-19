
var already;

$("#btnrqst").click(function () {

    
    var id = $("#bid").val();
    var name = $("#name").val();
    var author= $("#author").val();
    // var supplier = $("#supplier").val();
    var year = $("#year").val();
    var category = $("#category").val();
    // var bookfile = $("#bookfile").val();
    var user = $("#username").val();
        var date = $("#brwdate").val();
      console.log("awa");
        var ajaxconfig = {

            method: "POST",
            url: "http://localhost/webapi/Server/ipt.php",
            data: {
                action : "rqstbook",
                id:id,
                name: name,
                author: author,
                year: year,
                category:category,
                user:user,
                date:date,
                

            },
            async: true,
        }
            console.log(ajaxconfig)
        $.ajax(ajaxconfig).done(function (result) {
            console.log("sasasasasasasa")
         
  
})
})



$("#bid").focusout(function () {
    var bname = $("#bid").val();
    console.log(bname);
    if(bname!=""){
        var ajaxconfig = {
            method: "POST",
            url: "http://localhost/webapi/Server/ipt.php",
            data: {
                action : "searchBook",
                bname: bname,

            },
            async: true,
        }


        $.ajax(ajaxconfig).done(function (result) {

            console.log(result);
            console.log("awa");
            
            if(result){
                // $("#username").css("border-color","red");
                var name = result["name"];
                 var author = result["author"];
                 // var supplier = result["supplier"];
                  var year = result["year"];
                  var category = result["category"]
                $("#name").val(name);
                $("#author").val(author);
                // $("#supplier").val(supplier);
                $("#year").val(year);
                $("#category").val(category);
                // $("#msg").css("color","red");
                already = true;

            }else{
                // $("#username").css("border-color","#CCCCCC");
                $("#name").text("gh")
                already = false;
            }

        })
    }

})



$("#name").focusout(function () {
    var bname = $("#name").val();
    console.log(bname);
    if(bname!=""){
        var ajaxconfig = {
            method: "POST",
            url: "http://localhost/webapi/Server/ipt.php",
            data: {
                action : "searchBookbyname",
                bname: bname,

            },
            async: true,
        }


        $.ajax(ajaxconfig).done(function (result) {

            console.log(result);
            console.log("awa");
            
            if(result){
                // $("#username").css("border-color","red");
                 var id = result["id"];
                var name = result["name"];
                 var author = result["author"];
                 // var supplier = result["supplier"];
                  var year = result["year"];
                  var category = result["category"]
                   $("#bid").val(id);
                $("#name").val(name);
                $("#author").val(author);
                // $("#supplier").val(supplier);
                $("#year").val(year);
                $("#category").val(category);
                // $("#msg").css("color","red");
                already = true;

            }else{
                // $("#username").css("border-color","#CCCCCC");
                $("#name").text("gh")
                already = false;
            }

        })
    }

})



$("#author").focusout(function () {
    var bname = $("#author").val();
    console.log(bname);
    if(bname!=""){
        var ajaxconfig = {
            method: "POST",
            url: "http://localhost/webapi/Server/ipt.php",
            data: {
                action : "searchBookbyauthor",
                bname: bname,

            },
            async: true,
        }


        $.ajax(ajaxconfig).done(function (result) {

            console.log(result);
            console.log("awa");
            
            if(result){
                // $("#username").css("border-color","red");
                var id = result["id"];
                var name = result["name"];
                 var author = result["author"];
                 // var supplier = result["supplier"];
                  var year = result["year"];
                  var category = result["category"]
                  $("#bid").val(id);
                $("#name").val(name);
                $("#author").val(author);
                // $("#supplier").val(supplier);
                $("#year").val(year);
                $("#category").val(category);
                // $("#msg").css("color","red");
                already = true;

            }else{
                // $("#username").css("border-color","#CCCCCC");
                $("#name").text("gh")
                already = false;
            }

        })
    }

})