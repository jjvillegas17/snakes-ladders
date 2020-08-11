$(document).ready( function() {
	const endpoint = "http://localhost/snakes-ladders/src/endpoints/";
	const turnElement = $(".turn > p");

	const checkStatus = function (response) {
		if (response.status >= 200 && response.status < 300) {
		    return response
		 } else {
		    var error = new Error(response.statusText)
		    error.response = response
		    throw error
		 }
	}

	const parseJSON = function (response) {
		return response.json()
	}

	const get = function (file) {
		return fetch(endpoint + file)
	}

	const put = function (file, data) {
		return fetch(endpoint + file, {
			method: 'POST',
			body: data
		})
	}

	$(".roll").click( function(e) {
 		// let turn = turnElement.attr("data-turn") === "1" ? turnElement.attr('data-turn', 2) : turnElement.attr('data-turn', 1)
 		// const response = put("move.php", {turn: turn})
 		// 					.then(checkStatus)
 		// 					.then(parseJSON)
 		// 					.then(res => console.log(res))
 		// 					.catch(err => console.log(err))
 		 $.ajax({
            url: endpoint + 'move.php',
            type: 'POST',
            data: {
            	turn: 1
            },
            success: function (response) {
            	console.log(response)
            }
        });
 	})

});