(function($){
    $(document).ready(function(){
        $(document).on('click', '#user_logout', function(e){
            e.preventDefault();
            $('#user_form').submit();
        });
    });

})(jQuery)