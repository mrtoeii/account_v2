// console.log("login");
$(document).ready(function(){
    $('#login_form').submit(function(e){
        e.preventDefault()
        // console.log($(this).serialize());
        // var FormData = new FormData($('#login_form')[0])
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "post",
            url: "checklogin",
            data:$(this).serialize(),
            dataType: "json",
            cache: false,
            processData: false,
            // contentType : false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                console.log(response);
                if(response.status==200){
                    $('#div-error').html(null)
                    window.location=response.url
                }else if(response.status==404){
                    $('#div-error').html(response.msg)
                }
            }
        });
        
    });
})


// $('#btnlogin').click(function(){
//     console.log('object')
// })
