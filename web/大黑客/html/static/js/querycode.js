$("#Connect").click(function(){
    var ip = $("#ip").val();
    var username = $("#uname").val();
    var password = $("#pass").val();
    var query = $("#query").val();


    $.ajax({
        url:"/mysql.php",
        data:{"ip":ip,"username":username,"password":password,"query":query},
        type:"POST",
        datatype:"json",

        success:function(data){
            if(data.indexOf("Connect failed") != -1 || data.indexOf("mysqli_connect()") != -1){
                $("#news").html(data);
            }else{
                $("#news").html(data);
            }
        },
        error:function(){
            $("#news").html("error");
        },
    });


});

$("#Getflag").click(function () {
    window.location="admin.php"
})
$("#register").click(function () {
    window.location="register.php"
})
$("#login").click(function () {
    window.location="login.php"
})
$("#login").click(function(){

    var username = $("#uname").val();
    var password = $("#pass").val();


    $.ajax({
        url:"login.php",
        data:{"username":username,"password":password},
        type:"POST",
        datatype:"json",
        success:function(data){
            if(data.indexOf("login failed") != -1 ){
                $("#news").html(data);
            }else{
                $("#news").html(data);

            }
        },
        error:function(){
            $("#news").html("error");
        },
    });


});