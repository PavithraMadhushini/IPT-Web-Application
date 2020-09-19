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
                url: "http://localhost/webapi/Server/view.php?action=request",
             
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
                var address = (item.address);
                var idno = (item.email);
                var tell = (item.tell);
                var jobtype = (item.jobtype);
                var qualification = (item.qualification);
              
                // var usercard = "<div class=col-md-4 "+ x +"> <div class=card>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label> <label class=name>Name : "+item.name+"</label>  <label class=age>Age : "+item.age+"</label><label class=address>Address : "+item.address+"</label><label class=contactno>Contact No :" +item.contactno+"</label><div id=btnDiv> <button id=btnapp class=btn" + x + " type=button> <i class=i" + x + "></i>&nbsp;&nbsp;Accept</button> </div> </div> </div> <&nbsp>"
                var usercard = "<div class=col-md-4 "+ x +"> <div class=card>  <h2 class=itemName"+ x +"> </h2> <label class=id id=uid>"+item.id+"</label> <label class=name>Expert Name: "+item.name+"</label><label class=bookname>Address : "+item.address+"</label><label class=contactno>Email Address:" +item.email+"</label><label class=name>Tell: "+item.tell+"</label><label class=name>Vacancy: "+item.jobtype+"</label><label class=name>Qualification: "+item.qualification+"</label><br><div id=btnDiv></div> </div> </div> <br>  <br> "
    
    
    
                $("#row").append(usercard);
                $(".name" + x).text(name);
                console.log("awa");
    
            });
         
    
      
    
      
    })
    
    
    })
    
    
    
    