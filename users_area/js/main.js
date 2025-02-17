async function logout() {
	let data = { "value": "log_off" };
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
		.catch(function (err) {
			console.log("Failed to fetch page: ", err);
		});
};

async function add_and_remove(id, optional = false) {
	if (optional != false) {
		let data = { "value": "add_and_remove_user", "id": id };

		if (document.location.href.slice(43).includes("remove_or_unset")) {
			id = data.id.replace("&type=remove_or_unset", "");
			data = { "value": "add_and_remove_user", "id": id, "type": "remove_or_unset" };
		}

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
			.then(res => {
				document.location.href = document.location.href.toString().replace(document.location.href.slice(43), "");
			})
			.catch(function (err) {
				console.log("Failed to fetch page: ", err);
			});
	} else {
		let data = { "value": "add_and_remove", "id": id };

		if (document.location.href.slice(43).includes("remove_or_unset")) {
			id = data.id.replace("&type=remove_or_unset", "");
			data = { "value": "add_and_remove", "id": id, "type": "remove_or_unset" };
		}

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
			.then(res => {
				document.location.href = document.location.href.toString().replace(document.location.href.slice(43), "");
			})
			.catch(function (err) {
				console.log("Failed to fetch page: ", err);
			});
	}

};

async function _edit_user(id) {
	let data = { "value": "edit_user", "id": id };

	if (document.location.href.slice(43).includes("edit_user")) {
		id = data.id.replace("&type=edit_user", "");
		data = { "value": "edit", "id": id, "type": "edit_user" };
	};

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
		.then(res => {
			document.location.href = document.location.href.toString().replace(document.location.href.slice(43), "");
		})
		.catch(function (err) {
			console.log("Failed to fetch page: ", err);
		});
};

async function _remove_user(id) {
	let data = { "value": "remove_user", "id": id };

	if (document.location.href.slice(43).includes("remove_user")) {
		id = data.id.replace("&type=remove_user", "");
		data = { "value": "remove", "id": id, "type": "remove_user" };
	};

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
		.then(res => {
			document.location.href = document.location.href.toString().replace(document.location.href.slice(43), "");
		})
		.catch(function (err) {
			console.log("Failed to fetch page: ", err);
		});
};

addEventListener("DOMContentLoaded", async (event) => {
	if (document.location.href.includes("off")) {
		logout();
	}
	if (document.location.href.includes("add_and_remove")) {
		const item_id = document.location.href.slice(65);
		await add_and_remove(item_id);
	}
});