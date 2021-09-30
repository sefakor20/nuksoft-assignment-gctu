// validate forms with jquery
$('#contactForm').submit(function (e) {
    e.preventDefault()
    var data = new FormData(this)
    $.ajax({
        type: "POST",
        url: "action.php",
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        success: function (res) {
            console.log(res);
            alert('Thank you for Contacting us');
            setTimeout(function(){ 
                location.reload();
             }, 3000);
        },
        error: function (res) {
            console.log(res);
        }
    });
});