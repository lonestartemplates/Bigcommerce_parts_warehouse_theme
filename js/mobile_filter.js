var currency = $('#frmCompare ul li .ProductPriceRating em span').html();
if(currency=="") {
	currency = $('#frmCompare ul li .ProductPriceRating em').html();
}
if(currency==undefined) { currency = "£"; }
var sign = currency.substr(0,1);
$('.sign').html(sign);
var currency = $('#frmCompare ul li:eq(1) .ProductPriceRating').html().toString();
var category=$('#cat_id').val();
re_fetch();
function re_fetch()
{
	var i=0;
	$.post('http://demo.webdesksolution.com//wdsbig/filter_files/fetch_details.php',{id:category,site:'e26881708a71178538fe5fbc482dc445'},function(data) {
	obj= JSON && JSON.parse(data) || $.parseJSON(data);
	data="";
	data = obj.data;
	var limit=11;
	if(data.cat.items.length>0 && data.cat.items[0].length>1)
	{
		$('#SideCategoryShopByCat ul').html("");
		var j=1; var str='';
		$.each(data.cat.items, function(i, val){
		if(val.length>0)
		{
			var idnew = val;
			idnew = validateids(idnew);
			str = "<li";
			if(j>=limit)
			{
				str = str + " class='overheadCat' style='display:none;' ";
			}
			$('#SideCategoryShopByCat ul').append(str+">&nbsp; <input type='checkbox' onchange=\"change_size(\'Category\',\'"+val+"\',this.checked)\" value='"+val+"' name='cat[]' id='Category_"+idnew+"_check' /> <label for='Category_"+idnew+"_check'>"+val+ " <span id='span_count_cat_"+i+"'>("+data.cat.count[i]+")"+"</span></label></li>");
			j++;
		}
		});
		if(j>=limit)
		{
			$('#SideCategoryShopByCat ul').append('<li id="showMoreCat"><a href="#" onclick="$(\'.overheadCat\').show();$(\'#showLessCat\').show();$(\'#showMoreCat\').hide();return false;">Show More Options</a></li>');
			$('#SideCategoryShopByCat ul').append('<li id="showLessCat" style="display:none;"><a href="#" onclick="$(\'.overheadCat\').hide();$(\'#showMoreCat\').show();$(\'#showLessCat\').hide();return false;">Show Less Options</a></li>');
		}
	}
	else
	{
	$('#SideCategoryShopByCat').hide();
	}
	if(data.bra.items.length>0 && data.bra.items[0].length>1)
	{
		$('#SideCategoryShopByBra ul').html("");
		var j=1; var str='';
		$.each(data.bra.items, function(i, val){
		if(val.length>0)
		{
			var idnew = val;
			idnew = validateids(idnew);
			str = "<li";
			if(j>=limit)
			{
				str = str + " class='overheadBra' style='display:none;' ";
			}
			$('#SideCategoryShopByBra ul').append(str+">&nbsp; <input type='checkbox' onchange=\"change_size(\'Brand\',&quot;"+val+"&quot;,this.checked)\" value=\""+val+"\" name='bra[]' id='Brand_"+idnew+"_check' /> <label for='Brand_"+idnew+"_check'>"+val+ " <span id='span_count_bra_"+i+"'>("+data.bra.count[i]+")</span>"+"</label></li>");
			j++;
		}
		});
		if(j>=limit)
		{
			$('#SideCategoryShopByBra ul').append('<li id="showMoreBra"><a href="#" onclick="$(\'.overheadBra\').show();$(\'#showLessBra\').show();$(\'#showMoreBra\').hide();return false;">Show More Options</a></li>');
			$('#SideCategoryShopByBra ul').append('<li id="showLessBra" style="display:none;"><a href="#" onclick="$(\'.overheadBra\').hide();$(\'#showMoreBra\').show();$(\'#showLessBra\').hide();return false;">Show Less Options</a></li>');
		}
	}
	else
	{
	$('#SideCategoryShopByBra').hide();
	}
	/* if(data.color.items.length>0 && data.color.items[0].length>1)
	{
		$('#SideCategoryShopByColor ul').html("");
		var j=1; var str='';
		$.each(data.color.items, function(i, val){
			if(val.length>0)
			{
				var idnew = val;
				idnew = validateids(idnew);
				str = "<li";
				if(j>=limit)
				{
					str = str + " class='overheadColor' style='display:none;' ";
				}
				$('#SideCategoryShopByColor ul').append(str + ">&nbsp; <input type='checkbox' onchange=\"change_size(\'Color\',\'"+idnew+"\',this.checked)\" value='"+val+"' name='color[]' id='Color_"+idnew+"_check' /> <label for='Color_"+idnew+"_check'>"+val+ " <span id='span_count_option_"+val+"'>("+data.color.count[i]+")</span>"+"</label></li>");
				j++;
			}
		});
		if(j>=limit)
		{
			$('#SideCategoryShopByColor ul').append('<li id="showMoreColor"><a href="#" onclick="$(\'.overheadColor\').show();$(\'#showLessColor\').show();$(\'#showMoreColor\').hide();return false;">Show More Options</a></li>');
			$('#SideCategoryShopByColor ul').append('<li id="showLessColor" style="display:none;"><a href="#" onclick="$(\'.overheadColor\').hide();$(\'#showMoreColor\').show();$(\'#showLessColor\').hide();return false;">Show Less Options</a></li>');
		}
	}
	else
	{
	 $('#SideCategoryShopByColor').hide();
	} */
	if(data.color.items.length>0 && data.color.items[0].length>1)
	{
		$('#SideCategoryShopByColor ul').html("");
		$.each(data.color.items, function(i, val){
			if(val.length>0)
			{
				var idnew = val;
				idnew = validateids(idnew);
				$('#SideCategoryShopByColor ul').append("<input type='checkbox' class='regular-checkbox' onchange=\"change_size(\'Colour\',\'"+idnew+"\',this.checked)\" value='"+val+"' name='color[]' id='Colour_"+idnew+"_check' /> <label for='Colour_"+idnew+"_check' style='background:"+idnew+"'></label>");
			}
		});
	}
	else
	{
	 $('#SideCategoryShopByColor').hide();
	}
	if(data.size.items.length>0)
	{
		$('#SideCategoryShopBySize ul').html("");
		var j=1; var str='';
		$.each(data.size.items, function(i, val){
		if(val.length>0)
		{
			var idnew = val;
			idnew = validateids(idnew);
			str = "<li";
			if(j>=limit)
			{
				str = str + " class='overheadSize' style='display:none;' ";
			}
			$('#SideCategoryShopBySize ul').append(str+">&nbsp; <input type='checkbox' onchange=\"change_size(\'Size\',\'"+val+"\',this.checked)\" value='"+val+"' name='size[]' id='Size_"+idnew+"_check' /> <label for='Size_"+idnew+"_check'>"+val+ " <span id='span_count_option_"+val+"'>("+data.size.count[i]+")</span>"+"</label></li>");
			j++;
		}
		});
		if(j>=limit)
		{
			$('#SideCategoryShopBySize ul').append('<li id="showMoreSize"><a href="#" onclick="$(\'.overheadSize\').show();$(\'#showLessSize\').show();$(\'#showMoreSize\').hide();return false;">Show More Options</a></li>');
			$('#SideCategoryShopBySize ul').append('<li id="showLessSize" style="display:none;"><a href="#" onclick="$(\'.overheadSize\').hide();$(\'#showMoreSize\').show();$(\'#showLessSize\').hide();return false;">Show Less Options</a></li>');
		}
	}
	else
	{
	 $('#SideCategoryShopBySize').hide();
	}
	if(data.rate.items.length>0)
	{
		$('#SideCategoryShopByRate ul').html("");
		$.each(data.rate.items, function(i, val){
		if(val.length>0)
		{
			$('#SideCategoryShopByRate ul').append("<li>&nbsp; <input type='checkbox' onchange=\"change_size(\'Rating\',\'"+val+"\',this.checked)\" value='"+val+"' name='rate[]' id='Rating_"+val+"_check' /> <label for='Rating_"+val+"_check'><img width='64' height='12' src='http://big-commerce-filter.mybigcommerce.com/templates/__custom/images/IcoRating"+val+".gif' alt=''><span id='span_count_rate_"+val+"'>("+data.rate.count[i]+")</span>"+"</label></li>");
		}
		});
	}
	else
	{
	 $('#SideCategoryShopByRate').hide();
	}
		var minimum = Math.round(data.price.min);
		var maximum = Math.round(data.price.max);
		$('#minPrice').val(minimum);
		$('#maxPrice').val(maximum);
		$('#start').html(data.price.min);
		$('#end').html(data.price.max);
		$('#slider').slider({range:true, min: minimum, max: maximum,animate:"slow", step:5, values: [ minimum, maximum ],slide: function(event, ui){
			$('#start').html(ui.values[0].toFixed(2));
			$('#end').html(ui.values[1].toFixed(2));
		}, stop:function(event, ui){
			$('#Price_').remove();
			$('#minPrice').val(ui.values[0].toFixed(2));
			$('#maxPrice').val(ui.values[1].toFixed(2));
			$('#is_price').prop('checked', true);
			change_size('Price',"£" + ui.values[0].toFixed(2) + " - " + "£" + ui.values[1].toFixed(2),true);
		}});
		$('#price').show();
	});
}

function change_size(type, value, status)
{
	var category=$('#cat_id').val();
	var form_data = $('#big_filter').serialize()+'&id='+category+'&site=e26881708a71178538fe5fbc482dc445';
	var temp=value;
	var idnew=value;
	if(type!='Rating')
	{
		idnew = validateids(idnew);
	}
	if(type!='Price')
	{	
		if(status)
		{
			$('#SideCategoryRefinements ul').append('<li id="'+type+'_'+idnew+'"><a href="#" onclick="$(\'#'+type+'_'+idnew+'_check\').prop(\'checked\',false).change();return false;">'+type+' : '+value+'</a></li>');
		}
		else
		{
			$('#'+type+'_'+idnew).remove();
		}
	}
	else
	{
		if(status)
		{
			$('#SideCategoryRefinements ul').append('<li id="'+type+'_'+idnew+'"><a href="#" onclick="return change_slider();">'+type+' : '+value+'</a></li>');
		}
	}
	if($('#SideCategoryRefinements ul li').length<=0)
	{
		$('#SideCategoryRefinements').hide();
		$('.hiddenList').show();
		$('#newList').remove();
		$('#CategoryPagingTop').show();
		$('#CategoryPagingBottom').show();
		re_fetch();
		return false;
	}
	else
	{
		$('#CategoryPagingTop').hide();
		$('#CategoryPagingBottom').hide();
		$('#SideCategoryRefinements').show();
	}
	$.post("http://192.99.7.25/~bigcomme/filter_files/filter_product.php",form_data,function(data){
		obj= JSON && JSON.parse(data) || $.parseJSON(data);
		data = obj;
		recount(data.counter);
		if($('#newList').length<=0)
		{
			$('.ProductList').addClass('hiddenList');
			$('.hiddenList').hide();
			$("<ul id='newList' class='ProductList'></ul>").insertAfter('.hiddenList');
		}
		$('#newList').empty();
		var max=0; var min=0;
		if(data.products.length<=0)
		{
			$('#newList').append('There are no products that match your selection.');
		}
		$.each(data.products, function(i, val){
			$('#newList').append('<li id="product_'+val.pro_id+'"><div class="ProductImage QuickView" data-product="'+val.pro_id+'"><a href="http://big-commerce-filter.mybigcommerce.com'+val.link+'"><img src="'+val.image+'" alt="'+val.pro_name+'" width="104" height="155"></a><div class="QuickViewBtn" style="background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(247, 247, 247)), to(rgb(220, 219, 219))); color: rgb(0, 0, 0); display: none; background-position: initial initial; background-repeat: initial initial;" data-product="'+val.pro_id+'">Quick View</div></div><div class="ProductDetails"><strong><a href="http://big-commerce-filter.mybigcommerce.com/'+val.link+'" class="">'+val.pro_name+'</a></strong></div><div class="ProductPriceRating"><em>'+sign+val.pro_price+'</em><span class="Rating Rating'+val.rating+'"><img src="http://big-commerce-filter.mybigcommerce.com/templates/__custom/images/IcoRating'+val.rating+'.gif" alt="" style=""></span></div><div class="ProductCompareButton" style="display:"><input type="checkbox" class="CheckBox" name="compare_product_ids" id="compare_50" value="'+val.pro_id+'" onclick="product_comparison_box_changed(this.checked)"> <label for="compare_'+val.pro_id+'">Compare</label><br></div><div class="ProductActionAdd" style="display:;"><a href="http://big-commerce-filter.mybigcommerce.com/'+val.link+'">Choose Options</a></div></li>');
		});
	});
	return false;
}
function change_slider()
{
	var min = $("#slider").slider( "option", "min" );
	var max = $("#slider").slider( "option", "max" );
	$('#slider').slider({values: [min, max]});
	$('#start').html(min);
	$('#end').html(max);
	$('#minPrice').val(min);
	$('#maxPrice').val(max);
	$('#is_price').prop('checked',false);
	$('#Price_').remove();
	change_size('','',false);
	return false;
}
function recount(counts)
{
	$.each(counts, function(i, count){
		$.each(count, function(j,val){
			$('#span_count_'+i+'_'+j).html("("+val+")");
		});
	});
}
function validateids(x)
{
	var temp = x;
	temp = temp.replace(/^[^a-z]+|[^\w:.-]+/gi, "");
	return temp;
}