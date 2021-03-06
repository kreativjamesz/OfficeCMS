
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

	// const app = new Vue({
	//    el: '#app',
	//    data: {
	//    
	// 	  }
	// });

$(document).ready(function() {
  	// Dropdowns
  	$('.dropdown').hover(function(e) {
	    $(this).toggleClass('is-open')
  	});
  	
  	$( '.has-sub-menu-list' ).hover(function(){
            $(this).children('.sub-menu-list').slideDown(400);
        },
        function(){
            $(this).children('.sub-menu-list').slideUp(100);
        }
    );

})
