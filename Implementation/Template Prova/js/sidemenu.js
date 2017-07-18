$(function(){
    $(".vertical-menu li a").click(function(e){
        e.preventDefault(); //To prevent the default anchor tag behaviour
        var link = this.href;
        $(".main").load('link' body);
        alert(link);
    });
});