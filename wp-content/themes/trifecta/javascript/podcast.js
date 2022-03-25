
function testajax(year)
{
 //alert(year);
  var ajaxurl = my_ajax_object.ajax_url;
  var data = {

      'action': 'my_display_front',
      'year': year
      
    };

    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    $.post(ajaxurl, data, function(response) {
      //alert(response);
      $('#podcast').html(response);
      //console.log(response);
      //document.getElementById('podcast').innerHTML=response;
    });
    //return false;
}