(function($){
    $(document).ready(function(){
        $(document).on('click', '#user_logout', function(e){
            e.preventDefault();
            $('#user_form').submit();
        });
    });

// category status

$(document).on('click', 'input.cat_check', function() {
    let checked = $(this).attr('checked');
    let status_id = $(this).attr('status_id');


    if( checked == 'checked'){
        $.ajax({
            url : 'category/status-inactive/' + status_id,
            success : function(data){
                swal('Status Inactive Successfully');
            }
        });

    }else {
        $.ajax({
            url : 'category/status-active/' + status_id,
            success : function(data){
                swal('Status Active Successfully');
            }
        });
    }

    });


})(jQuery)




