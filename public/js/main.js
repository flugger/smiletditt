$('.date').pickmeup();

$( '.js-departmentButton' ).click( function() {
    $( this).parents( 'ul' ).prev().html( 'Avdeling ' + $( this).text() + '. <a href = "#" class = "BrandIntro-link">Endre?</a>' );
    $( this).parents( 'ul').hide().next().css( 'display', 'block' );
});