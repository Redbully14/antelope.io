/*
Application: Antelope.io
Author: Oliver (Redbully14urh@gmail.com)
NOTE: This file contains all the application-wide javascript for the entire website.
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

:: Ajax CSRF Setup

------------------------------------------------
Index Of Script
----------------------------------------------*/

(function(jQuery) {

	"use strict";

	/*---------------------------------------------------------------------
	Ajax CSRF Setup
	-----------------------------------------------------------------------*/
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

});