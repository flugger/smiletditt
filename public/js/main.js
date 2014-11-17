$('.date').pickmeup();

$('input').iCheck();

$( '.js-departmentButton' ).click( function() {
    $( this ).parents( 'ul' ).prev().html( 'Avdeling ' + $( this).text() + '. <a href = "#" class = "BrandIntro-link js-changeDepartment">Endre?</a>' );
    $( '.BrandIntro-menu' ).hide();
});

$( '.departmentButton-nydalen' ).click( function() {
    $( '.orderButton-nydalen' ).css( 'display', 'block' );
});

$( '.departmentButton-romsas' ).click( function() {
    $( '.orderButton-romsas' ).css( 'display', 'block' );
});

$( '.BrandIntro-wrap' ).on( 'click', '.js-changeDepartment', function() {
    $( '.js-orderButton' ).hide();
    $( '.BrandIntro-menu' ).show();
    $( this ).parent().html( 'Vennligst velg avdeling:' );
});