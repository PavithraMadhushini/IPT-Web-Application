
$("#btnsear").click(function () {


    var state = $("#inputState").val();

    var skey = $("#searchkey").val();
    //console.log(state);
    //console.log(skey);

    $.ajax({

        url : 'http://localhost/webapi/Server/ipt.php',
        type : 'GET',
        data : {
             action : "search",
             skey : skey,
             state : state,
        },
        dataType : "json",
        success : function(data) {              
            console.log(data);
                  var x = 0;
             data.forEach(function (item) {
                var bid=(item.id);
                var name = (item.name);
            var campus = (item.campus);
            var idno = (item.idno);
            var email =(item.email);
            var category =(item.category);
            
            var usercard = "<div class=col-md-4 " + x + "> <div class=card style='background-color: gray;'>  <h2 class=itemName" + x + "> </h2> <label class=id id=uid>"+item.id+"</label><br> <label class=name>User Name : "+item.name+"</label> <br> <label class=age>Qualification : "+item.campus+"</label><br>  <label class=address>National id number : "+item.idno+"</label><br> <label class=name>student Catagery : "+item.category+"</label> <br><label class=name>Email Address : "+item.email+"</label> <br> <div id=btnDiv>  </div> </div> </div>"



            $("#row").append(usercard);
            $(".name" + x).text(name);
            console.log("awa");

        });

        }
    });

  
})


