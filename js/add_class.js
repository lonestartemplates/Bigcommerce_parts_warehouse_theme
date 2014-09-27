var category=$('#cat_id').val();
$.post('http://demo.webdesksolution.com//wdsbig/filter_files/product_detail.php',{id:category,site:'e26881708a71178538fe5fbc482dc445'},function(data) {
	data= JSON && JSON.parse(data) || $.parseJSON(data);
	$.each(data.featuredItem, function(i, val){
		$("#frmCompare ul:eq(0) #product_" + val).addClass("FeaturedItem");
	});
	$.each(data.saleItem, function(i, val){
		$("#frmCompare ul:eq(0) #product_" + val).addClass("SaleItem");
	});
	$.each(data.newItem, function(i, val){
		$("#frmCompare ul:eq(0) #product_" + val).addClass("NewItem");
	});
}); 