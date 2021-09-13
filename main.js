var sign = function() {
    var id = document.getElementById('id').value;
    var password = document.getElementById('password').value;

    if(id==="pi"&&password==="1234"){
        source();
    }
}

var source = function () {
    var btn = document.getElementById("btn");
    var link = "https://naver.com";
    btn.onclick = function(){
        location.replace(link);
    }
}