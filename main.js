var max_scroll=-1;function scroll(){$(document).width()>800?($(".section:not(.content)").each(function(){$(window).height()>$(this).offset().top+Math.min(2*$(this).height()/3,3*$(window).height()/4)&&max_scroll<$("section").scrollTop()&&$(this).animate({opacity:1},1e3,"easeOutCubic")}),$(":not(.section) > .image:not(.section)  >  * > .caption *").each(function(){$("section").scrollTop()+$(window).height()>$(this).offset().top+$(this).height()&&max_scroll<$("section").scrollTop()&&$(this).animate({marginLeft:($(this).parent().width()-$(this).width())/2,marginRight:($(this).parent().width()-$(this).width())/2,opacity:1},1e3,"easeOutExpo",function(){$(this).css({"margin-left":"auto","margin-right":"auto"})})}),max_scroll=Math.max($("section").scrollTop(),max_scroll)):($(".section:not(.content):not(.icons").each(function(){$(window).scrollTop()+$(window).height()>$(this).offset().top+Math.min($(this).height()/2,3*$(window).height()/4)&&max_scroll<$(this).offset().top+Math.min($(this).height()/2,3*$(window).height()/4)/2&&$(this).animate({opacity:1},1e3,"easeOutCubic")}),$(":not(.section) > .image:not(.section)  >  * > .caption *").each(function(){$(window).scrollTop()+$(window).height()>$(this).offset().top+$(this).height()&&max_scroll<$(this).offset().top+$(this).height()&&$(this).animate({marginLeft:($(this).parent().width()-$(this).width())/2,marginRight:($(this).parent().width()-$(this).width())/2,opacity:1},1e3,"easeOutExpo",function(){$(this).css({"margin-left":"auto","margin-right":"auto"})})}),max_scroll=Math.max($(window).scrollTop()+$(window).height(),max_scroll))}console.log("  _____       _____ \n / ____|     |  __ \\ \n| |  __  ___ | |__) | __ ___   __ _ _ __ __ _ _ __ ___\n| | |_ |/ _ \\|  ___/ '__/ _ \\ / _` | '__/ _` | '_ ` _ \\ \n| |__| | (_) | |   | | | (_) | (_| | | | (_| | | | | | |\n \\_____|\\___/|_|   |_|  \\___/ \\__, |_|  \\__,_|_| |_| |_|\n                              __/ |\n                             |___/"),$("a[download]").click(t=>confirm("Are you sure you want to download this file?")||t.preventDefault()),$("section a:not(.select)").attr({title:"Go there","data-toggle":"tooltip"}),$("section a.icon").attr("title","View"),$("section a[download]").attr("title","Download"),$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip({animation:!0}),window.location.hash&&($("section.showcase .section.selection a").removeClass("selected"),$(`[href="${window.location.hash}"]`).addClass("selected"),$(".content").addClass("d-none"),$(window.location.hash).removeClass("d-none"),$("section").animate({scrollTop:$(window.location.hash).offset().top},1e3))}),$("section.showcase .section.selection a").click(function(){$("section.showcase .section.selection a").removeClass("selected"),$(this).addClass("selected"),$(".content").addClass("d-none"),$($(this).attr("href")).removeClass("d-none")}),$(document).scroll(scroll),$("section").scroll(scroll),scroll();