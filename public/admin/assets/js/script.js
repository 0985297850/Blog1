/*!
    * Start Bootstrap - SB Admin v6.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
(function ($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function (e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

})(jQuery);
$('.employeeDeleteBtn').on('click', function () {
    $('#employeeDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#employeeDelete_id').val(data[0]);
})
$('.userDeleteBtn').on('click', function () {
    $('#userDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#userDelete_id').val(data[0]);
})
$('.productDeleteBtn').on('click', function () {
    $('#productDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#productDelete_id').val(data[0]);
})
$('.productCategoryDeleteBtn').on('click', function () {
    $('#productCategoryDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#productCategoryDelete_id').val(data[0]);
})
$('.productTagDeleteBtn').on('click', function () {
    $('#productTagDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#productTagDelete_id').val(data[0]);
})
$('.newsDeleteBtn').on('click', function () {
    $('#newsDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#newsDelete_id').val(data[0]);
})
$('.newsCategoryDeleteBtn').on('click', function () {
    $('#newsCategoryDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#newsCategoryDelete_id').val(data[0]);
})
$('.newsTagDeleteBtn').on('click', function () {
    $('#newsTagDeleteModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#newsTagDelete_id').val(data[0]);
})
$('.employeeEditBtn').on('click', function () {
    $('#employeeEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#employeeIdUpdate').val(data[0]);
    $('#employeeNameUpdate').val(data[2]);
    $('#employeePositionUpdate').val(data[3]);
    $('#employeeOfficeUpdate').val(data[4]);
    $('#employeeAgeUpdate').val(data[5]);
    $('#employeeStartDateUpdate').val(data[6]);
    $('#employeeSalaryUpdate').val(data[8]);
    $('#employeeImgUpdateId').attr('src',$tr.children('.employeeImgtd').children().attr('src'));
})
$('.userEditBtn').on('click', function () {
    $('#userEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    let role_id = $(this).parents('tr').find('.field-role').data('role_id');
    console.log(role_id);
    $('#userIdUpdate').val(data[0]);
    $('#userFirstNameUpdate').val(data[2]);
    $('#userLastNameUpdate').val(data[3]);
    $('#userEmailUpdate').val(data[4]);
    $('#userRoleIdUpdate').val(role_id);
    $('#userImgUpdateId').attr('src',$tr.children('.userImgtd').children().attr('src'));
})
$('.productEditBtn').on('click', function () {
    $('#productEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    let category_id = $(this).parents('tr').find('.field-category').data('category_id');
    let tag_id = $(this).parents('tr').find('.field-tag').data('tag_id');
    tag_id = tag_id.split(',');

    $('.form-tag input').prop('checked', false);
    tag_id.forEach(function (value) {
        if (value !== '') {
            $('.form-tag .tag-'+value).prop('checked', true);
        }
    });
    $('#productIdUpdate').val(data[0]);
    $('#productNameUpdate').val(data[2]);
    $('#productDescUpdate').val(data[3]);
    $('#productPriceUpdate').val(data[4]);
    $('#productCategoryUpdate').val(category_id);
    $('#productImgUpdateId').attr('src',$tr.children('.productImgtd').children().attr('src'));
})
$('.productCategoryEditBtn').on('click', function () {
    $('#productCategoryEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#productCategoryIdUpdate').val(data[0]);
    $('#productCategoryNameUpdate').val(data[1]);
})
$('.productTagEditBtn').on('click', function () {
    $('#productTagEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#productTagIdUpdate').val(data[0]);
    $('#productTagNameUpdate').val(data[1]);
})
$('.newsEditBtn').on('click', function () {
    $('#newsEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    let category_id = $(this).parents('tr').find('.field-category').data('category_id');
    let tag_id = $(this).parents('tr').find('.field-tag').data('tag_id');
    tag_id = tag_id.split(',');

    $('.form-tag input').prop('checked', false);
    tag_id.forEach(function (value) {
        if (value !== '') {
            $('.form-tag .tag-'+value).prop('checked', true);
        }
    });
    $('#newsIdUpdate').val(data[0]);
    $('#newsTitleUpdate').val(data[2]);
    $('#newsDescUpdate').val(data[3]);
    $('#newsContentUpdate').val(data[4]);
    $('#newsCategoryUpdate').val(category_id);
    $('#newsImgUpdateId').attr('src',$tr.children('.newsImgtd').children().attr('src'));
})
$('.newsCategoryEditBtn').on('click', function () {
    $('#newsCategoryEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#newsCategoryIdUpdate').val(data[0]);
    $('#newsCategoryNameUpdate').val(data[1]);
})
$('.newsTagEditBtn').on('click', function () {
    $('#newsTagEditModal').modal('show');
    $tr = $(this).closest('tr');
    const data = $tr.children('td').map(function () {
        return $(this).text();
    }).get();
    $('#newsTagIdUpdate').val(data[0]);
    $('#newsTagNameUpdate').val(data[1]);
})
$('.profile__left .btn').click(function (){
    $('.profile__left .btn').removeClass('active');
    $(this).addClass('active');
});
$('#infoBtn').click(function (){
    $('.profile__info').addClass('active');
    $('.profile__pass').removeClass('active');
});

$('#resetBtn').click(function (){
    $('.profile__info').removeClass('active');
    $('.profile__pass').addClass('active');
});

if($('#profileInfo_avatar').attr('src') === 'usersUpload/defaultImage.png'){
    $('.avatarDelete').css('display', 'none');
}else{
    $('.avatarDelete').css('display', 'block');
}
