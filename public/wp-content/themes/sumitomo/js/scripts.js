// DOM Ready
$(document).ready(function() {
	// jQuery Code

	$( '<h4 class="alert-heading">Personal Data Protection Declaration</h4>' ).insertBefore( ".alert-success .um-col-1" );
	$('#um_field_12_personal_data_protection_declaration_1 .um-field-checkbox-option').text('I agree that MP Singapore and / or organisers may collect, use my personal data, which I have provided in this form, to provide marketing information relevant to the Webinar that I have agreed to receive.');
	$('#um_field_12_personal_data_protection_declaration_2 .um-field-checkbox-option').text('I agree to receive information sent by MP Singapore and / or organisers about the Webinar including but not limited to offers, related information and new goods and services, via the given email.');
	

	// Responsive Projects, iPhone/iPad URL bar hides itself on pageload
	if (navigator.userAgent.indexOf('iPhone') != -1) {
	    addEventListener("load", function () {
	        setTimeout(hideURLbar, 0);
	    }, false);
	}
	
	function hideURLbar() {
	    window.scrollTo(0, 0);
	}
});