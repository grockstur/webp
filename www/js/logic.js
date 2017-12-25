$(document).ready(function() {
	$('#add_btn_41').click(function() {	//добавление в табл
		$('body').append('<div id="popup"><div class="bg_popup"></div><div class="lb4_popup_add"><button id="close_popup" class="btn-danger">x</button><h2>Добавить запись</h2><p>Название реки: <input type="text" name="name"></input></p><p>Протяжённость: <input type="text" name="length"></input></p><p>Впадает в: <input type="text" name="flowsTo"></input></p><p>Годовой сток: <input type="text" name="volume"></input></p><p>Площадь бассейна: <input type="text" name="area"></input></p><button id="submit" class="btn btn-success">Добавить</button></div></div>');
		$('#submit').click(function() {
			var name = $('input[name="name"]').val();
			var length = $('input[name="length"]').val();
			var flowsTo = $('input[name="flowsTo"]').val();
			var volume = $('input[name="volume"]').val();
			var area = $('input[name="area"]').val();
			if (name && length && flowsTo && volume && area) {
				$('#popup').remove();
				$.post('lb41.php', {name: name, length: length, flowsTo: flowsTo, volume: volume, area: area});
				setTimeout(function() {location.reload(); $('.bg_popup').remove()}, 200);
			} else {
				alert ("Заполните все строки!");
			}
		});
		$('#close_popup, .bg_popup').click(function() {
			$('#popup').remove();
		});
	});

	//***********кнопкв удаления***********//
	$('.del_btn1').on('click', function() {
		var id = $(this).parent('td').parent('tr').children('td')[0].innerHTML;
		if(confirm('Удалить реку №'+id+'?')) {
			$.post('lb42.php', {id: id});
			setTimeout(function() {location.reload(); $('.bg_popup').remove()}, 200);
		}
	});


	//************редактирование***********//
	$('.edit_btn1').on('click', function () {	//редактирование таблицы 
		var editingId = $(this).parent('td').parent('tr').children('td')[0].innerHTML;
		var eName = $(this).parent('td').parent('tr').children('td')[1].innerHTML;
		var eLength = $(this).parent('td').parent('tr').children('td')[2].innerHTML;
		var eFlowsTo = $(this).parent('td').parent('tr').children('td')[3].innerHTML;
		var eVolume = $(this).parent('td').parent('tr').children('td')[4].innerHTML;
		var eArea = $(this).parent('td').parent('tr').children('td')[5].innerHTML;
		$('body').append('<div id="popup"><div class="bg_popup"></div><div class="lb4_popup_add"><button id="close_popup" class="btn-danger">x</button><h2>Изменить запись</h2><p>Название реки: <input type="text" name="name"></input></p><p>Протяжённость: <input type="text" name="length"></input></p><p>Впадает в: <input type="text" name="flowsTo"></input></p><p>Годовой сток: <input type="text" name="volume"></input></p><p>Площадь бассейна: <input type="text" name="area"></input></p><button id="esubmit1" class="btn btn-success">Сохранить</button></div></div>');
		$('input[name="name"]').val(eName);
		$('input[name="length"]').val(eLength);
		$('input[name="flowsTo"]').val(eFlowsTo);
		$('input[name="volume"]').val(eVolume);
		$('input[name="area"]').val(eArea);
		
		$('#esubmit1').click(function() {
			var name = $('input[name="name"]').val();
			var length = $('input[name="length"]').val();
			var flowsTo = $('input[name="flowsTo"]').val();
			var volume = $('input[name="volume"]').val();
			var area = $('input[name="area"]').val();
			if (name && length && flowsTo && volume && area) {
				$('#popup').remove();
				$.post('lb46.php', {editingId: editingId, name: name, length: length, flowsTo: flowsTo, volume: volume, area: area});
				setTimeout(function() {location.reload(); $('.bg_popup').remove()}, 200);
			} else {
				alert ("Заполните все строки!");
			}
		});
		$('#close_popup, .bg_popup').click(function() {
			$('#popup').remove();
		});
	});

	$('#find_btn').click(function() { //функция поиска
		$('body').append('<div id="popup"><div class="bg_popup"></div><div class="lb4_popup_add container"><button id="close_popup" class="btn-danger">x</button><h2>Найти запись</h2><div class="row"><div class="col-md-9"><input type="text" name="finding"></input></div><div class="col-md-3"><button type="button" class="btn btn-info" id="start_finding">Найти</button></div></div></div><div>');
		$('#start_finding').click(function() {
			$.post('lb48.php', {findingText: $('input[name="finding"]').val()}, function(findResult) {
				$('#result').remove();
				$('.lb4_popup_add').append("<div id='result'>"+findResult+"</div>");
			});
		});
		$('#close_popup, .bg_popup').click(function() {
			$('#popup').remove();
		});
	});
})