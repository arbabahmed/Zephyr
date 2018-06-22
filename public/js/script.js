var edit_po = function(id,action){
	$.ajax({
		url: base_url + "/po_status_update",
		data: {
			id: id,
			action: action,
		},
		success:function(resp) {
			console.log(resp);
			table.rows().invalidate().draw();
		},
		error: function(resp) {
			table.rows().invalidate().draw();
		}
	});
}