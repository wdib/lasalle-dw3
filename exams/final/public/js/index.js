// ---------- DO NOT MODIFY --------------------------------------------------
// The following script is required for the core functionality of the app
// and must not be modified
$(function(){
  $( 'table' ).on( 'click', 'button', function () {
    let
      $button   = $( this ),
      course_id = $button.data( 'course-id' ),
      action    = $button.data( 'action' )
    ;
    $.ajax({
      url  : 'register.php',
      type : 'POST',
      data : {
        course_id  : course_id,
        action     : action
      },
      success : function ( response ) {
        $( 'table' ).html( response );
      },
      error : function ( error ) {
        console.error( error );
      }
    });
  });
});
// ---------- DO NOT MODIFY --------------------------------------------------