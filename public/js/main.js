$('.date').pickmeup();

$('input').iCheck();

$( '.js-departmentButton' ).click( function() {
    $( this ).parents( 'ul' ).prev().html( 'Avdeling ' + $( this).text() + '. <a href = "#" class = "BrandIntro-link js-changeDepartment">Endre?</a>' );
    $( this ).parents( 'ul').hide().next().css( 'display', 'block' );
});

$( '.BrandIntro-wrap' ).on( 'click', '.js-changeDepartment', function() {
    $( this ).parent().next().show().next().hide();
    $( this ).parent().html( 'Vennligst velg avdeling:' );
});