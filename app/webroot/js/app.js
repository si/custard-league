(function($){
    
    // Limit Pool Game Winner to selected Players
    $('#PoolGamePlayer1').on('change', function(){
        console.log('Player 1 is ' + $(this).val());
    });

    $('.user-scroll input').on('change',function(){
      $(this).closest('fieldset').find('label').removeClass('is-selected');
      $(this).parent('label').addClass('is-selected');
    });
    
})(window.jQuery);