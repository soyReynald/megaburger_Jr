async function logout() {
	/// TO re-fine.
	async function json_as_post_data() {
		let data = {
			"value": "log_off",
		}
		return fetch('../includes/restricted/processAdminForm.php', {
			method: 'POST',
			body: JSON.stringify(data)
		}).then(response => {
			return response.text();
		});
	}
	
	
	
	if(await json_as_post_data())
	{
		const valueToLog_Out = JSON.parse(await json_as_post_data());

		if (valueToLog_Out.value == "go") { 
			window.location.replace("../login/index.php");
		}
	};
}
// (function($) {

// 	"use strict";

// 	$('[data-toggle="tooltip"]').tooltip()

// })(jQuery);
