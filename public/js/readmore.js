var children = $('.text_container').children('p');

if ( children.length > 3 ){
    children.slice(2).hide();
    children.slice(2,3).after('Read More Markup');
}