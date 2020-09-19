
var already;

$("#btnadd").click(function () {

    

    var name = $("#name").val();
    var author= $("#author").val();
    var supplier = $("#supplier").val();
    var year = $("#year").val();
    var category = $("#category").val();
    var bookfile = $("#bookfile").val();
    
      console.log("awa");
        var ajaxconfig = {

            method: "POST",
            url: "http://localhost/webapi/Server/update.php",
            data: {
                action : "update",
                name: name,
                author: author,
                supplier: supplier,
                year: year,
                category:category,
                bookfile:bookfile,
                
            

            },
            async: true,
        }
            console.log(ajaxconfig)
        $.ajax(ajaxconfig).done(function (result) {
            console.log("sasasasasasasa")
            console.log(result)
            alert("Successfully Update the profile")
            location.reload();
           




  
})
})


$("#username").focus(function () {
    $("#username").css("border-color","#CCCCCC");
    $("#msg").text("")
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
                 var supplier = result["supplier"];
                  var year = result["year"];
                  var category = result["category"]
                $("#name").val(name);
                $("#author").val(author);
                $("#supplier").val(supplier);
                $("#year").val(year);
                $("#category").val(category);
                // $("#msg").css("color","red");
                already = true;
                location.reload();

            }else{
                // $("#username").css("border-color","#CCCCCC");
                $("#name").text("gh")
                already = false;
            }

        })
    }

})




// var already;

$("#btndelete").click(function () {

    
    var bid = $("#bid").val();
    

   var ajaxconfig = {
    url:"http://localhost/webapi/Server/ipt.php", 
    data: {
        action : "deletebook",
        bid: bid,
    },
    method: "DELETE", 
   
  };
    
      // console.log("awa");
      //   var ajaxconfig = {

      //       method: "DELETE",
      //       url: "http://localhost/Library/Server/book.php",
      //       data: {
      //           action : "deletebook",
      //           bid: bid,
                
            

      //       },
      //       async: true,
      //   }
            console.log(ajaxconfig)
        $.ajax(ajaxconfig).done(function (result) {
            console.log("sasasasasasasa")
            console.log(result)
            if(result){
            alert("Remove user")
                // var url =  window.location.href;
                // var myurl =   new URL(url);
                // var toThis =  myurl.searchParams.get("ToUrl");
                // var Id = myurl.searchParams.get("id");
                // window.location.replace(toThis+"?id="+Id);


            }else{
                alert("No")
            }

  
})
})


