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
                url: "http://localhost/webapi/Server/cate.php?action=request",
             
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
                var campus = (item.campus);
                var category = (item.category);
              
                // var usercard = "<div class=col-md-4 "+ x +"> <div class=card>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label> <label class=name>Name : "+item.name+"</label>  <label class=age>Age : "+item.age+"</label><label class=address>Address : "+item.address+"</label><label class=contactno>Contact No :" +item.contactno+"</label><div id=btnDiv> <button id=btnapp class=btn" + x + " type=button> <i class=i" + x + "></i>&nbsp;&nbsp;Accept</button> </div> </div> </div> <&nbsp>"
                var usercard = "<div class=col-md-4 "+ x +"> <div class=card>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label> <label class=name>User Name: "+item.name+"</label><label class=bookname>National id no : "+item.idno+"</label><label class=contactno>Email Address:" +item.email+"</label><label class=name>Categoery: "+item.category+"</label><label class=name>User Qualification: "+item.campus+"</label><br><br><button type=button class=login100-reg-btn btn-block id=btnapp " + x + " > <i class=i" + x + "></i>&nbsp;&nbsp;Assign</button> <div id=btnDiv></div> </div> </div> <br>  <br> "
    
    
    
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
                    action : "assignuser",
                    uid:uid,
                },
                method: "INSERT", 
               
              };
            
                        console.log(ajaxconfig)
                    $.ajax(ajaxconfig).done(function (result) {
                        console.log("success")
                        console.log(result)
                        if(result){
             alert("Successfully assign the student")
             window.location.replace("industry-view.html")
                            
            
            
                        }else{
                            alert("No")
                        }
            
              
            
            
            
            
            
              
            })
            })
    
      
    
      
    })
    
    
    })
    
    
    
    