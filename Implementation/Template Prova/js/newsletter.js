
function newsletter(event,element){
    if(event.keyCode == 13){
        var data = '&email=' + element.value;
        alert(data);
        $.ajax({
            type: "POST",
            cache: false,
            url: "newsletter.php",
            data: data,    // multiple data sent using ajax
            success: function (html) {
                console.log('success');
                document.getElementById('newsletter').innerHTML="<h3>Thanks!</h3>";
            },
            fail: function () {
                console.log('fail');
                document.getElementById('newsletter').innerHTML="<h3>Fail!</h3>";
            }
        });
        return false;    
    }
}