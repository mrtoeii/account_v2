$(document).ready(function(){
    $('#btn-add').click(function(){
        $.ajax({
            type: "get",
            url: "account_form",
            success: function (response) {
                $('#myModal').modal('show')
                $('#myModal-title').html('เพิ่มรายการรายรับรายจ่าย')
                $('#myModal-body').html(response)
                $('#btn-action').html('บันทึก')
                $('#btn-action').val('save')
                $('#date').datepicker({ 
                    format: 'yyyy-mm-dd',
                    todayHighlight: true
                 });
            }
        });
    })

    $('#form').submit(function(e){
        e.preventDefault()
        var action = $('#btn-action').val()
        if(action=='save'){
            $.ajax({
                type: "post",
                url: "account_save",
                data:$(this).serialize(),
                dataType: "json",
                cache: false,
                processData: false,
                // contentType : false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    // console.log(response);
                    // if(response.status==200){
                    //     $('#div-error').html(null)
                    //     window.location=response.url
                    // }else if(response.status==404){
                    //     $('#div-error').html(response.msg)
                    // }
                }
            });
        }
    })
})