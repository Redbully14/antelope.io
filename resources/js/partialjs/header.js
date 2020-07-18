/*
Application: Antelope.io
Author: Oliver (Redbully14urh@gmail.com)
NOTE: This file contains all the javascript for the header
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

:: Department Selection

------------------------------------------------
Index Of Script
----------------------------------------------*/

/*---------------------------------------------------------------------
Department Selection
-----------------------------------------------------------------------*/
$('.aioscript-department-select').on('click', function () {
    var id = $(this).data("department-id");
    $.ajax({
    	type: 'POST',
        url: base_url+'/switch_department/'+id,
        success: function() {
        	location.reload(true);
        }
    });
});