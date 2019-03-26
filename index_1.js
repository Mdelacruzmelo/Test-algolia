$(document).ready(function () {

var myArrayFromUrl = URLToArray(window.location.href);
console.log(myArrayFromUrl);

	var myOriginUrl = window.location.origin;
	var myPathUrl = window.location.pathname;
	var myTotalUrl = myOriginUrl + myPathUrl;

	const urlParams = new URLSearchParams(window.location.search);
	const myParam = urlParams.get('type[]');

	$('#currentUrl').val(myTotalUrl);
	$('#currentParam').val(myParam);

	var toUrl = myTotalUrl + '?';


	$('input[name="type[]"]').change(function () {
		if ($(this).prop('checked')) {
			toUrl += '&type[]=' + $(this).val();
		} else {
			toUrl = toUrl.replace('&type[]=' + $(this).val(), '');
		}
		$('#linkForm').attr('href', toUrl);

		$('#totheUrl').val(toUrl);
	});


	$('#linkForm').attr('href', toUrl);


	function URLToArray(url) {
		var request = {};
		var pairs = url.substring(url.indexOf('?') + 1).split('&');
		for (var i = 0; i < pairs.length; i++) {
			if (!pairs[i])
				continue;
			var pair = pairs[i].split('=');
			request[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
		}
		return request;
	}

});