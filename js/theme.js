function compute_main_top(t){var i=$(window).width(),o=$(window).height(),n=0;return img_h=i/t.width*t.height,img_h-=992>i?56:110,n=Math.min(.7*o,img_h),n+"px"}function add_instagram_pic(t,i){console.log("Index:",i);var o=$('<img class="cc-insta-pic">'),n=9==i?" hide-on-med-only":"",a=$('<div class="col s4 m3 l4'+n+'"></div>');o.attr("src",t.attr("src")),$("#cc-instagram-widget").append(a),a.append(o)}var hideOptions={duration:300,effects:"slideOutRight",onAnimationEnd:function(t){t.hide(),t.is("ul")?($("#nav-search").show().vivo(showOptions),$("#s").focus()):$("#main-nav-links").show().vivo(showOptions)}},showOptions={duration:300,effects:"slideInLeft",onAnimationEnd:function(t){t.show()}},backToTopVisible=!1;$(function(){var t=new Image;t.onload=function(){$(".main-content").css("margin-top",compute_main_top(t))},t.src=$("body").css("background-image").replace(/url\(|\)$|"/gi,"");var i;$(window).on("resize",function(){clearTimeout(i),i=setTimeout(function(){$("input:focus").length||$("textarea:focus").length||(t.src=$("body").css("background-image").replace(/url\(|\)$|"/gi,""),$(".main-content").css("margin-top",compute_main_top(t)))},250)}),$(".wp-caption").each(function(){$(this).css("width","100%")}),"#FSContact1"==window.location.hash&&($("#cc-contact-form").hide(),$(".contact-page-content").hide(),$("#cc-contact-thanks").show(),$("#FSContact1").hide(),location.href="#thank-you");var o=1;$("#insta-source").find("img").each(function(){add_instagram_pic($(this),o),o++}),$(".arve-wrapper").each(function(){$(this).css({"max-width":"90%","margin-left":"auto","margin-right":"auto","margin-top":"15px"})}),$("#sidebar-search").focus(function(){var t=$(this);t.attr("placeholder","")}).focusout(function(){var t=$(this);t.attr("placeholder","search this site...")}),$("#sidebar-search-form").submit(function(t){t.preventDefault();var i=$(this),o=i.find("input");""!=o.val()&&($("#s").val(o.val()),$("#searchform").submit())}),$("#nav-search-link").click(function(t){t.preventDefault();var i=$(this);i.closest("ul").vivo(hideOptions)}),$("#nav-search").focus(function(){$("body, html").animate({scrollTop:0})}).focusout(function(){$("#nav-search").vivo(hideOptions)}),$(".button-collapse").sideNav({closeOnClick:!0}),$(".dropdown-button").dropdown({constrain_width:!1,hover:!0,belowOrigin:!0}),$(".read-more-link").on("click",function(t){t.preventDefault();var i=$(this).closest("div.cc-post-excerpt"),o=$(this).closest("div.cc-post-content").find(".cc-post-more");i.hide(),o.show()}),$("#back-to-top-container").on("click",function(){$("body, html").animate({scrollTop:0})}),$(window).scroll(function(){var t=parseInt($(window).scrollTop());t>400?backToTopVisible||(backToTopVisible=!0,$("#back-to-top-container").fadeIn("slow")):(backToTopVisible=!1,$("#back-to-top-container").fadeOut("slow"))}),$(".recd-post-img, .cc-insta-pic, a > img").mouseover(function(){$(this).animate({opacity:.7},{duration:300})}).mouseout(function(){$(this).animate({opacity:1},{duration:300})}),$("#cc-contact-form").submit(function(t){t.preventDefault();var i=$(".contact-form-source").find("form"),o=$("#fscf_name1"),n=$("#fscf_email1"),a=$("#fscf_field1_2"),c=$("#fscf_field1_3"),e=$(this).serializeArray();return""==e[0].value||""==e[1].value||""==e[2].value||""==e[3].value?(alert("Oops! All fields are required -- please fill out the form and submit again."),void 0):(o.val(e[0].value),n.val(e[1].value),a.val(e[2].value),c.val(e[3].value),i.submit(),void 0)})});