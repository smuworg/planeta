$( document ).ready(function() {

    //navigation
    var mainMenutrigger =  $('#main-menu-trigger');
    var navigationContainer =  $('.header__navigation');
    var submenuParrent =  $('.menu-item-has-children');

    mainMenutrigger.on('click', function () {
        $(this).toggleClass('active');
        navigationContainer.slideToggle();
    });

    submenuParrent.on('click', function (e) {
        if( e.target !== this ) {
            return;
        }

        $(this).toggleClass('active');
        $(this).find('.sub-menu').slideToggle();
    })


});