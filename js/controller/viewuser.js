$(document).ready(function () {
console.log("acc");
 // var name = $("#name").val();
 //    var author= $("#author").val();
 //    var supplier = $("#supplier").val();
 //    var year = $("#year").val();
 //    var category = $("#category").val();
    
      // console.log("awa");
        var ajaxconfig = {

            method: "GET",
            url: "http://localhost/webapi/Server/alluser.php?action=request",
         
            async: true,
        }
            console.log(ajaxconfig)
        $.ajax(ajaxconfig).done(function (result) {
            console.log("sasasasasasasa")
            console.log(result)
              var x = 0;
             result.forEach(function (item) {
             	var uid=(item.id);
            var name = (item.name);
            var profession = (item.profession);
            var idno = (item.idno);
            var email = (item.email);
            var affiliation = (item.affiliation);
            var type = (item.type);
            var status = (item.status);
            // var usercard = "<div class=col-md-4 "+ x +"> <div class=card>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label> <label class=name>Name : "+item.name+"</label>  <label class=age>Age : "+item.age+"</label><label class=address>Address : "+item.address+"</label><label class=contactno>Contact No :" +item.contactno+"</label><div id=btnDiv> <button id=btnapp class=btn" + x + " type=button> <i class=i" + x + "></i>&nbsp;&nbsp;Accept</button> </div> </div> </div> <&nbsp>"
            var usercard = "<div class=col-md-4 "+ x +"> <div class=card>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label> <label class=name>User Name: "+item.name+"</label>  <label class=age>Profission : "+item.profession+"</label><label class=bookname>National id no : "+item.idno+"</label><label class=contactno>Email Address:" +item.email+"</label><label class=name>Affiliation: "+item.affiliation+"</label><label class=name>User Type: "+item.type+"</label><label class=name>Status: "+item.status+"</label><div id=btnDiv> <button type=button class=login100-reg-btn btn-block id=btnapp " + x + " > <i class=i" + x + "></i>&nbsp;&nbsp;Remove</button> </div> </div> </div> <br>  <br> "



            $("#row").append(usercard);
            $(".name" + x).text(name);
            console.log("awa");

        });

        $(".card").click(function (evntdata) {

            console.log("acpc");
            var uid = $(this).find(".id").text();
            
        
           var ajaxconfig = {
            url:"http://localhost/webapi/Server/updateuser.php", 
            data: {
                action : "deleteuser",
                uid:uid,
            },
            method: "DELETE", 
           
          };
        
                    console.log(ajaxconfig)
                $.ajax(ajaxconfig).done(function (result) {
                    console.log("success")
                    console.log(result)
                    if(result){
         alert("Remove User")
         window.location.replace("users.html")
                        
        
        
                    }else{
                        alert("No")
                    }
        
          
        
        
        
        
        
          
        })
        })

  
})

$("#btnsear").click(function () {


    

    var skey = $("#searchkey").val();
    //console.log(state);
    //console.log(skey);

    $.ajax({

        url : 'http://localhost/webapi/Server/del.php',
        type : 'DELETE',
        data : {
             action : "deluser",
             skey : skey,
            
        },
        dataType : "json",
   
    });

  
})

})



