async function logout() {
	let data = {"value": "log_off"};
	return fetch("../includes/restricted/processAdminForm.php", {
		method: 'POST',
		body: JSON.stringify(data),
		headers: {
			Accept: "application/json"
		}
	})	
	.then(response => {
		return response.text();
	})
	.catch(function(err) {
		console.log("Failed to fetch page: ", err);
	});
}

addEventListener("DOMContentLoaded", (event) => {
	if(window.location.href.includes("off")){
		logout();
	}
});