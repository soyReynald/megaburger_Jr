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
};

async function add_and_remove(id) {
	let data = {"value": "add_and_remove", "id": id};
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
};

addEventListener("DOMContentLoaded", (event) => {
	if(document.location.href.includes("off")) {
		logout();
	}
	if(document.location.href.includes("add_and_remove")) {
		const item_id = document.location.href.slice(65);
		add_and_remove(item_id);
	}
});