jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    $("#page header").replaceWith('<h2 class="entry-title" style="color: red;">Hello Crappy</h2>');
    throw new Error("crappy is throwing an error");
} );

