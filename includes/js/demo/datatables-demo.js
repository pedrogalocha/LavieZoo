// Call the dataTables jQuery plugin
var baseUrl = 'https//laviezoo.com.br/';
// var baseUrl = 'https://localhost/homolog/LavieZoo/';	

$(document).ready(function() {
	var table = $('#dataTable').DataTable({
		"paging": false,
		columnDefs: [
			{
				targets: [0],
				visible: false,
				searchable: false
			},
			{
				targets: [0],
				visible: false
			}
		]
	});
});

$(document).ready(function() {
	var table = $('#dataTableCli').DataTable({
		"paging": false,
		columnDefs: [
			{
				targets: [0],
				visible: false,
				searchable: false
			},
			{
				targets: [0],
				visible: false
			}
		]
	});
});

$(document).ready(function() {
	var table = $('#dataTableAgend').DataTable({
		"paging": false,
		columnDefs: [
			{
				targets: [0],
				visible: false,
				searchable: false
			},
			{
				targets: [0],
				visible: false
			}
		]
	});
});

// $('#dataTable tbody').on('click', 'tr', function() {
// 	var table = $('#dataTable').DataTable();
// 	console.log(table.row(this).data());
// });

function atualizaPlano() {
	var idUser;
	var txt;
	var r = confirm('Deseja Alterar o plano do Cliente?');
	if (r == true) {
		txt = 'You pressed OK!';

		$('#dataTable tbody').on('change', 'tr', function() {
			var table = $('#dataTable').DataTable();
			var dropdownValue = $(this)
				.closest('tr')
				.find('#planoVet')
				.val();

			idUser = table.row(this).data()[0];
			console.log(dropdownValue);
			var target_url = baseUrl + 'atualizaPlano';
			$.ajax({
				url: target_url,
				dataType: 'html',
				type: 'POST',
				data: {
					valorAlterado: dropdownValue,
					idUsuario: idUser
				},
				error: function(xhr, status, error) {
					alert('Houve um erro: A ' + error + status);
					console.log(dropdownValue + ' || ' + target_url);
					// location.reload();
				},
				success: function(results) {
					location.reload();
					alert('Plano Alterado');
				}
			});
		});
	} else {
		alert('Você não alterou o plano.');
		location.reload();
	}
}

function atualizaPlanoCli() {
	var idUser;
	var txt;
	var r = confirm('Deseja Alterar o plano do Cliente?');
	if (r == true) {
		txt = 'You pressed OK!';

		$('#dataTableCli tbody').on('change', 'tr', function() {
			var table = $('#dataTableCli').DataTable();
			var dropdownValue = $(this)
				.closest('tr')
				.find('#planoCli')
				.val();
			idUser = table.row(this).data()[0];
			var target_url = baseUrl + 'atualizaPlano';
			$.ajax({
				url: target_url,
				dataType: 'html',
				type: 'POST',
				data: {
					valorAlterado: dropdownValue,
					idUsuario: idUser
				},
				error: function(xhr, status, error) {
					alert('Houve um erro: ' + error + status);
					location.reload();
				},
				success: function(results) {
					location.reload();
					alert('Plano Alterado');
				}
			});
		});
	} else {
		alert('Você não alterou o plano.');
		location.reload();
	}
}
