
tinymce.init({
	selector: 'textarea#content',
	height: 300,
	width:"",
	plugins: [
	"codemirror advlist autolink lists link image charmap print preview hr anchor pagebreak",
	"searchreplace wordcount visualblocks visualchars fullscreen",
	"insertdatetime media nonbreaking save table contextmenu directionality",
	"emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
	],
	toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
	toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
	image_advtab: true,
	image_advtab: true,
	menubar: false,
	toolbar_items_size: 'small',
	relative_urls: false, 
	remove_script_host : false,

      external_filemanager_path: homeUrl()+ "/filemanager/",
 	external_plugins: { 
 		"filemanager" : homeUrl()+ "/backend/web/filemanager/plugin.min.js",
			 //"codemirror":"http:://localhost:8080/yiidemo/backend/web/tinymce/plugins/codemirror/plugin.js"
			},
      });

tinymce.init({
	selector: 'textarea#desc',
	toolbar_items_size: 'small',
	height: 200,
	width:"",
	menubar: false,
	plugins: [
	"advlist autolink lists link image charmap print preview hr anchor pagebreak",
	"searchreplace wordcount visualblocks visualchars fullscreen",
	"insertdatetime media nonbreaking save table contextmenu directionality",
	"emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
	],
	toolbar1: "undo redo bold italic underline | alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote link unlink anchor image media | preview | forecolor backcolor fullscreen code",
	image_advtab: true,
	menubar: false,
	toolbar_items_size: 'small',
	relative_urls: true,
	remove_script_host : true,

 	// 	filemanager_title:"Media Manager",	 
 	external_filemanager_path: homeUrl()+ "/filemanager/",
 	external_plugins: { 
 		"filemanager" : homeUrl()+ "/backend/web/filemanager/plugin.min.js",
			 //"codemirror":"http:://localhost:8080/yiidemo/backend/web/tinymce/plugins/codemirror/plugin.js"
			},
  //   	filemanager_access_key:csrf(),

});


// select hover
   	$('a#select-img').click(function(event){
	   	event.preventDefault();
		 $('#modal-media-img').modal('show');
		 $('#modal-media-img').one('hide.bs.modal', function(e) {
		 	var imgUrl = $('input#images').val();
		 	$('img#show-img').attr('src',homeUrl()+'/'+imgUrl);
		 	/* Act on the event */
		 });

	});
// xóa ảnh hover
	$(document).on('click', 'a.remove-img', function(event) {
	   	event.preventDefault();
	   	   $('input#images').val('');
	   	   $('img#show-img').attr('src','');

		 });

// phân quyền người dùng
$("#role_click").click(function(event) {
event.preventDefault();
var action = $('#role').attr('action');
var data_form = $('#role').serialize();
$.ajax({
	url: action,
	type: 'POST',
	data: data_form,
	success:function(res){
		if(res = 'ok'){
			$('#nhom_quyen').load(location.href + " #nhom_quyen>*");
		}
		else{
			alert(111);
		}
	}

});

});
// style logo 
$('#menu_toggle').click(function(event){
	if ($('body').hasClass('nav-md')){

        $('.nonelogo').css('display','none');
	}else{
		$('.nonelogo').css('display','block');
	}
});

$('a#select_img_avatar').click(function(event){
	   	event.preventDefault();

		 $('#modal-media-img-avatar').modal('show');
		 $('#modal-media-img-avatar').one('hide.bs.modal', function(e) {
		 	var imgUrlavatar = $('input#images').val();
		 	 if(imgUrlavatar !=''){
		      $('img#show_img_avatar').attr('src',imgUrlavatar);
		    }

		 	

		 	/* Act on the event */
		 });

	});
function make_alias(title)
{
   var title, slug;
   title = title
   slug = title.toLowerCase();
   //Đổi ký tự có dấu thành không dấu
   slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
   slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
   slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
   slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
   slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
   slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
   slug = slug.replace(/đ/gi, 'd');
   //Xóa các ký tự đặt biệt
   slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
   //Đổi khoảng trắng thành ký tự gạch ngang
   slug = slug.replace(/ /gi, "-");
   //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
   //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
   slug = slug.replace(/\-\-\-\-\-/gi, '-');
   slug = slug.replace(/\-\-\-\-/gi, '-');
   slug = slug.replace(/\-\-\-/gi, '-');
   slug = slug.replace(/\-\-/gi, '-');
   //Xóa các ký tự gạch ngang ở đầu và cuối
   slug = '@' + slug + '@';
   slug = slug.replace(/\@\-|\-\@|\@/gi, '');
   return slug;
}
    


$(document).on('click','#news-slug',function(event){
    var title = $('#news-title').val();
    var slug = make_alias(title);
    $('#news-slug').val(slug);
});

$(document).on('click','#product-slug',function(event){
    var title = $('#products-name').val();
    var slug = make_alias(title);
    $('#products-slug').val(slug);
});

$(document).on('click','#category-link',function(event){
    var title = $('#category-name').val();
    var link = make_alias(title);
    $('#category-link').val(link);
});
$(document).on('click','.copy_link_news',function(event){
    event.preventDefault();
   var id = $(this).data('id');
  var copyText = document.getElementById("slug_"+id);
  copyText.select();

  document.execCommand("copy");
  
});
function CountLeft(field, count, max) {
if (field.value.length > max)
field.value = field.value.substring(0, max);
else
count.value = max - field.value.length;
}
