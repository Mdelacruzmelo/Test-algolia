<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Testing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Country</th>
			</tr>
			<tr>
				<td>John Doe</td>
				<td>john@gmail.com</td>
				<td>USA</td>
			</tr>
			<tr>
				<td>Stephen Thomas</td>
				<td>stephen@gmail.com</td>
				<td>UK</td>
			</tr>
			<tr>
				<td>Natly Oath</td>
				<td>natly@gmail.com</td>
				<td>France</td>
			</tr>
		</table>

	<button onclick="exportTableToCSV('members.csv')">Export HTML Table To CSV File</button>
		
	</body>

	<script>
		function downloadCSV(csv, filename) {
			var csvFile;
			var downloadLink;

			// CSV file
			csvFile = new Blob([csv], {type: "text/csv"});

			// Download link
			downloadLink = document.createElement("a");

			// File name
			downloadLink.download = filename;

			// Create a link to the file
			downloadLink.href = window.URL.createObjectURL(csvFile);

			// Hide download link
			downloadLink.style.display = "none";

			// Add the link to DOM
			document.body.appendChild(downloadLink);

			// Click download link
			downloadLink.click();
		}

		function exportTableToCSV(filename) {
			var csv = [];
			var rows = document.querySelectorAll("table tr");

			for (var i = 0; i < rows.length; i++) {
				var row = [], cols = rows[i].querySelectorAll("td, th");

				for (var j = 0; j < cols.length; j++)
					row.push(cols[j].innerText);

				csv.push(row.join(","));
			}

			// Download CSV file
			downloadCSV(csv.join("\n"), filename);
		}
	</script>
</html>
