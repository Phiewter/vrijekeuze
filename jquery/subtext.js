/**
 * Created by Pieter on 31-10-2017.
 */

$(document).ready(function() {
	
	$(window).scroll(function () {
		if ($(document).scrollTop() > 50) {
			$("nav").addClass("header-in");
			$("nav").removeClass("header-out");
			$(".index-button-sub").addClass("index-button-sub-out");
		} else {
			$("nav").removeClass("header-in");
			$("nav").addClass("header-out");
			$(".index-button-sub").removeClass("index-button-sub-out");
		}
	});
	
	$(window).scroll(function () {
		if ($(document).scrollTop() > 400) {
			$(".index-p-2").fadeIn(2500);
			$(".index-p-2").removeClass(".display");
			$(".index-h1-1").fadeIn(1500);
			$(".index-h1-1").removeClass(".display");
		} else {
			$(".index-p-2").addClass(".display");
			$(".index-h1-1").addClass(".display");
		}
	});
});