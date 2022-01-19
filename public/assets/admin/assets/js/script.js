function to_slug(str) {
    // Chuyển hết sang chữ thường
    str = str.toLowerCase();
    // xóa dấu
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
    // Xóa ký tự đặc biệt
    str = str.replace(/([^0-9a-z-\s])/g, '');
    // Xóa khoảng trắng thay bằng ký tự -
    str = str.replace(/(\s+)/g, '-');
    // xóa phần dự - ở đầu
    str = str.replace(/^-+/g, '');
    // xóa phần dư - ở cuối
    str = str.replace(/-+$/g, '');
    // return
    return str;
}

function ChangeToSlugCategory() {
    var category_name = $('#category_name').val();
    $('#category_slug').val(to_slug(category_name));
}

function ChangeToSlugCateEx() {
    var category_ex_name = $('#category_ex_name').val();
    $("#category_ex_slug").val(to_slug(category_ex_name));
}

function ChangeToSlugCategoryEdit() {
    var category_name = $('#category_name_edit').val();
    $('#category_slug_edit').val(to_slug(category_name));
}

function ChangeToSlugCateExEdit() {
    var category_ex_name = $('#category_ex_name_edit').val();
    $("#category_ex_slug_edit").val(to_slug(category_ex_name));
}

function slugBrand() {
    var name_brand = $('#name-brand').val();
    $("#slug-brand").val(to_slug(name_brand));
}

function slugBrandUpdate() {
    var name_brand = $('#name-brand-update').val();
    $("#slug-brand-update").val(to_slug(name_brand));
}

function productSlug() {
    var product_name = $('#product-name').val();
    $("#product-slug").val(to_slug(product_name));
}



$(function() {
    $('keywords').tagsinput();
});
var origin = window.location.origin;
console.log(origin)
var editor_config = {
    path_absolute: origin,
    selector: '#content',
    language: 'vi_VN',
    relative_urls: false,
    plugins: [
        "advlist autolink lists image charmap print preview hr anchor pagebreak",
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback: function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + '/admin/quan-ly-tap-tin?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Image";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.openUrl({
            url: cmsURL,
            title: cmsURL,
            width: x * 0.8,
            height: y * 0.8,
            resizable: "yes",
            close_previous: "no",
            onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
};
tinymce.init({
    selector: '#desc',
    language: 'vi_VN',
    toolbar: " styleselect | bold italic | alignleft | bullist numlist outdent indent | link image media",
    menubar: false,

});
// tinymce.init({
//     selector: '#category_desc',
//     language: 'vi_VN',
//     toolbar: false,
//     menubar: false,
//
// });
// tinymce.init({
//     selector: '#category_desc_edit',
//     language: 'vi_VN',
//     toolbar: false,
//     menubar: false,
//
// });
tinymce.init({
    selector: '#category_desc_ex',
    language: 'vi_VN',
    toolbar: false,
    menubar: false,

});
tinymce.init({
    selector: '#category_desc_ex_edit',
    language: 'vi_VN',
    toolbar: false,
    menubar: false,

});
tinymce.init(editor_config);
//file manager
var file_manager = "/admin/quan-ly-tap-tin";
$('#file-manager').filemanager('image', { prefix: file_manager });

var gallery_img = "/admin/quan-ly-tap-tin";
$('#gallery-img').filemanager('image', { prefix: gallery_img });

var thumbnail_gallery = "/admin/quan-ly-tap-tin";
$('#thumbnail-img').filemanager('image', { prefix: thumbnail_gallery });

var gallery_img_update = "/admin/quan-ly-tap-tin";
$('#gallery-update').filemanager('image', { prefix: gallery_img_update });

var thumbnail_gallery_update = "/admin/quan-ly-tap-tin";
$('#thumbnail-update').filemanager('image', { prefix: thumbnail_gallery_update });

var brand_logo = "/admin/quan-ly-tap-tin";
$('#brand-logo').filemanager('image', { prefix: brand_logo });

var brand_logo_update = "/admin/quan-ly-tap-tin";
$('#brand_logo-update').filemanager('image', { prefix: brand_logo_update });

var slideshow = "/admin/quan-ly-tap-tin";
$('#slideshow_btn').filemanager('image', { prefix: slideshow });
