$(document).ready(function () {
    console.log("acc");

            var ajaxconfig = {
    
                method: "GET",
                url: "http://localhost/webapi/Server/User.php?action=deuser",
             
                async: true,
            }
                console.log(ajaxconfig)
            $.ajax(ajaxconfig).done(function (result) {
                console.log("success")
                console.log(result)
                  var x = 0;
                 result.forEach(function (item) {
                     var uid=(item.id);
                var name = (item.name);
                var profession = (item.profession);
                var idno = (item.idno);
                var email = (item.email);
                var affiliation = (item.affiliation);
    
                var usercard = "<div class=col-md-4 "+ x +"> <div class=card style='background-color: white;'>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label><br> <label class=name>Name : "+item.name+"</label><br> <label class=name>Profession : "+item.profession+"</label><br> <label class=name>National Id No : "+item.idno+"</label><br> <label class=name>Email : "+item.email+"</label><br> <label class=name>Affiliation : "+item.affiliation+"</label><div id=btnDiv> <button type=button class=login100-reg-btn btn-block id=btnapp " + x + " > <i class=i" + x + "></i>&nbsp;&nbsp;Approve</button> </div> </div> </div> <&nbsp>"
    
    
    
                $("#row").append(usercard);
                $(".name" + x).text(name);
                console.log("awa");
    
            });
    

    
      
    })
    
    
    })
    
    
    
    