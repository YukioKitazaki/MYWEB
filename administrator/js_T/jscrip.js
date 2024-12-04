$(document).ready(function () {
    
    
    /*
   $("p").mouseenter(function () { 
        $(this).css("color","#00FF00");
   });
   $("p").mouseleave(function () { 
        $(this).css("color","#000066");
   });
   $(".cls01").mouseenter(function () { 
        $(this).css("color","#FF0000");
   });
   $(".cls01").mouseleave(function () { 
        $(this).css("color","#0000FF");
   });
   $("#id01").mouseenter(function () { 
        $(this).css("color","AA00BB");
        $(this).css("font-weight","bold");
   });
   $("#id01").mouseenter(function () { 
        $(this).css("color","#BB0000");
        $(this).css("font-weight","normal");
   });*/
   //menu left
   
   $(".itemOrder").hide();
   $(".cateOrder").click(function (e) { 
     e.preventDefault();
     $(this).next().slideDown();
   });
   $(".itemOrder").mouseleave(function () { 
     $(this).slideUp();
   });
   //center
   
   $('#formreg').submit(function () {
     var username = $("input[name*='username']").val();
     if (username.length === 0 || username.length < 3) {
          $("input[name*='username']").focus();
          $('#noteForm').html("Username chưa hợp lệ!");
          return false;
     }
     var password = $("input[name*='password']").val();
     if (password.length === 0 || password.length < 6) {
          $("input[name*='password']").focus();
          $('#noteForm').html("Password chưa hợp lệ!");
          return false;
     }
     var hoten = $("input[name*='hoten']").val();
     if (hoten.length === 0 || hoten.length < 6) {
          $("input[name*='hoten']").focus();
          $('#noteForm').html("Họ tên chưa hợp lệ!");
          return false;
     }
     var ngaysinh = $("input[name*='ngaysinh']").val();
     if (ngaysinh.length === 0) {
          $("input[name*='ngaysinh']").focus();
          $('#noteForm').html("Ngày sinh chưa hợp lệ!");
          return false;
     }
     var diachi = $("input[name*='diachi']").val();
     if (diachi.length === 0) {
          $("input[name*='diachi']").focus();
          $('#noteForm').html("Địa chỉ chưa hợp lệ!");
          return false;
     } 
     var dienthoai = $("input[name*='dienthoai']").val();
     if (dienthoai.length === 0) {
          $("input[name*='dienthoai']").focus();
          $('#noteForm').html("Điện thoại chưa hợp lệ!");
          return false;
     }
     return true;
     });
     $("#w_update").hide();//close
     $(".w_update_btn_open").click(function(e){
          e.preventDefault();
          $("#w_update").css("left",e.pageX +5);
          $("#w_update").css("top",e.pageY +5);
          var $idloaihang = $(this).attr('value');
          
          $("#w_update_form").load("./element_HTH/mloaihang/loaihangUpdate.php", {idloaihang:$idloaihang}, function (response, status, request) {
               this; // dom element     
          });
          $("#w_update").show();
     });
     $("#w_close_btn").click(function(e){
          e.preventDefault();
          $("#w_update").hide();
     });
     
   
     
     $("#w_update_hh").hide();//close
     $(".w_update_btn_open_hh").click(function(e){
          e.preventDefault();
          $("#w_update_hh").css("left",e.pageX +5);
          $("#w_update_hh").css("top",e.pageY +5);
          var $idhanghoa = $(this).attr('value');
          
          $("#w_update_form_hh").load("./element_HTH/mHanghoa/hanghoaUpdate.php", {idhanghoa:$idhanghoa}, function (response, status, request) {
               this; // dom element     
          });
          $("#w_update_hh").show();
     });
     
     
     $("#w_close_btn_hh").click(function(e){
          e.preventDefault();
          $("#w_update_hh").hide();
     });
});