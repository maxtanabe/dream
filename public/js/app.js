
var page = 2;
function moreIndex(url){
	var urlall = "";
	if(url.indexOf("?") == -1){
		urlall = url+"?page="+page;
	} else {
		urlall = url+"&page="+page;
	}

	$.post(urlall,{},function(e){
		if (ga) {
			ga('send','pageview', url);
	    }
		var $newimages = $(e);
		$('#itemdata').append( $newimages );
		$('.more-read-loading').html("");
		if($("#next_div")[0]){
			$("#next_div").remove();
			page ++;
			$('.next_div_section').html("<span id='next_span'></div>");
			$('#next_span').on('inview', function() {
				//削除
				$('#next_span').remove();
				//読み込み中表示
				$('.more-read-loading').html("<a href='#'><img src='/images/reading.gif'>&nbsp;読み込み中</a>");
				moreIndex(url);
			});
		}
	});

}

function more(url){
	var urlall = "";
	if(url.indexOf("?") == -1){
		urlall = url+"?page="+page;
	} else {
		urlall = url+"&page="+page;
	}
	$("#next_page").hide();
	$("#next_page_div").remove();
	$.post(urlall,{},function(e){
		if(ga){
			ga('send','pageview', url);
		}
		var $newimages = $(e);
		$('#itemdata').append( $newimages );
		$("#reading").remove();
		if(document.getElementById("next_page_div")){
			page ++;
			$("#next_page").show();
		}
	});
}
function more2(url){
	var urlall = "";
	if(url.indexOf("?") == -1){
		urlall = url+"?page="+page;
	} else {
		urlall = url+"&page="+page;
	}
	$("#next_page").hide();
	$("#next_page_div").remove();
	$.post(urlall,{},function(e){
		if(ga){
			ga('send','pageview',url);
		}
		var $newimages = $(e);
		$('#itemdata').append( $newimages );
		$("#reading").remove();
		if(document.getElementById("next_page_div")){
			page ++;
			$("#next_page").show();
		}
	});
}
function prev(url){
	var urlall = "";
	if(url.indexOf("?") == -1){
		urlall = url+"?page="+page;
	} else {
		urlall = url+"&page="+page;
	}
	$("#next_page").hide();
	$.post(urlall,{},function(e){
		if(ga){
			ga('send','pageview', url);
		}
		var $newimages = $(e);
		$("#itemdata").prepend($newimages);
		if($newimages.html()!=undefined){
			page ++;
			$("#next_page").show();
		}
		$(".unker").popover();
		$('a[rel*=facebox]').facebox();
	});
}
function SetFollowLoading(){
	$("#follow_button").attr("href","");
	$("#follow_button").html("<img src='/images/reading.gif'> 処理中");
	$("#follow_button_noview").attr("href","");
	$("#follow_button_noview").html("<img src='/images/reading.gif'> 処理中");
}
function SetFollowButton(user_id){
	SetFollowLoading();
	$.post(
	    '/users/following/'+user_id,                      // 申請URL
	    {}, // データ
	    function(data) {
			var dat = JSON.parse(data);

			if(dat.user.follow_code == 1){
				//誰でもフォロー受け付ける
				if(dat.follow){
					//フォロー済み
					//フォローボタン
					$("#follow_button").attr("href","javascript:if(confirm('フォローを解除して宜しいですか？')){ UnsetFollow("+user_id+"); }");
					$("#follow_button").html("<i class='icon-white icon-user'></i> フォロー解除");
					$("#follow_button").removeClass("btn-info").addClass("btn-warning").removeClass("disabled");
					//解除ボタンはひとつでいいので匿名フォローボタンを非表示に
					$("#follow_button_noview").hide();
				} else {
					//フォローボタン
					$("#follow_button").attr("href","javascript:SetFollow("+user_id+")");
					$("#follow_button").html("<i class='icon-white icon-user'></i> フォローする");
					$("#follow_button").addClass("btn-info").removeClass("btn-warning").removeClass("disabled");
					if(dat.user.follower_stat ==1){
						//匿名フォローを受け付けない
						$("#follow_button_noview").attr("href","javascript:void(0);");
						$("#follow_button_noview").html("<i class='icon-user'></i> 匿名フォロー受付停止中");
						$("#follow_button_noview").addClass("btn-default").removeClass("btn-warning").addClass("disabled");
					} else {
						//匿名フォローを受け付ける
						$("#follow_button_noview").attr("href","javascript:SetFollowNoview("+user_id+")");
						$("#follow_button_noview").html("<i class='icon-user'></i> 匿名フォローする");
						$("#follow_button_noview").addClass("btn-default").removeClass("btn-warning").removeClass("disabled");
					}
					$("#follow_button_noview").show();
				}
			}
			if(dat.user.follow_code == 2){
				//承認制
				if(dat.follow){
					//フォロー済み
					//フォローボタン
					$("#follow_button").attr("href","javascript:if(confirm('フォローを解除して宜しいですか？')){ UnsetFollow("+user_id+"); }");
					$("#follow_button").html("<i class='icon-white icon-user'></i> フォロー解除");
					$("#follow_button").removeClass("btn-info").addClass("btn-warning").removeClass("disabled");
					//解除ボタンはひとつでいいので匿名フォローボタンを非表示に
					$("#follow_button_noview").hide();
				} else {
					//フォローリクエストはあるか？
					if(dat.follow_oks){
						//申請中
						if(dat.follow_oks.active == 1){
							//フォローボタン
							$("#follow_button").attr("href","javascript:if(confirm('申請を取り消しますか？')){ UnsetFollow("+user_id+");}");
							$("#follow_button").html("<i class='icon-white icon-user'></i> フォロー申請中");
							$("#follow_button").addClass("disabled").addClass("btn-warning").removeClass("btn-info");
							//解除ボタンはひとつでいいので匿名フォローボタンを非表示に
							$("#follow_button_noview").hide();
						} else {
							//フォローボタン
							$("#follow_button").attr("href","javascript:if(confirm('フォロー申請を行って宜しいですか？')){ SetFollow("+user_id+"); } ");
							$("#follow_button").html("<i class='icon-white icon-user'></i> フォロー申請");
							$("#follow_button").addClass("btn-info").removeClass("btn-warning").removeClass("disabled");
							//匿名フォローボタンは不要
							$("#follow_button_noview").hide();
						}
					} else {
						//フォローボタン
						$("#follow_button").attr("href","javascript:if(confirm('フォロー申請を行って宜しいですか？')){ SetFollow("+user_id+"); } ");
						$("#follow_button").html("<i class='icon-white icon-user'></i> フォロー申請");
						$("#follow_button").addClass("btn-info").removeClass("btn-warning").removeClass("disabled");
						//匿名フォローボタンは不要
						$("#follow_button_noview").hide();
					}
				}
			}
			if(dat.user.follow_code == 3){
				//フォロー受け付けない
				if(dat.follow){
					//フォロー済み
					//フォローボタン
					$("#follow_button").attr("href","javascript:if(confirm('フォローを解除して宜しいですか？')){ UnsetFollow("+user_id+"); }");
					$("#follow_button").html("<i class='icon-white icon-user'></i> フォロー解除");
					$("#follow_button").removeClass("btn-info").addClass("btn-warning").removeClass("disabled");
					//解除ボタンはひとつでいいので匿名フォローボタンを非表示に
					$("#follow_button_noview").hide();
				} else {
					//フォローボタン
					$("#follow_button").attr("href","javascript:void(0)");
					$("#follow_button").html("<i class='icon-user'></i> フォロー受付停止");
					$("#follow_button").addClass("disabled").addClass("btn-default").removeClass("btn-warning").removeClass("btn-info");
					//匿名フォローボタンは不要
					$("#follow_button_noview").hide();
				}
			}
	    }
	);
}
function SetFollowNoview(user_id){
	//Loadingを表示
	SetFollowLoading();
	$.post(
	    '/users/follow/'+user_id+'/noview',                      // 申請URL
	    {}, // データ
	    function(data, status) {
			SetFollowButton(user_id);
	    },
	    "html"                                 // 応答データ形式
	);
}
function SetFollow(user_id){
	//Loadingを表示
	SetFollowLoading();
	$.post(
	    '/users/follow/'+user_id,                      // 申請URL
	    {}, // データ
	    function(data, status) {
			SetFollowButton(user_id);
	    },
	    "html"                                 // 応答データ形式
	);
}
function UnsetFollow(user_id){
	//Loadingを表示
	SetFollowLoading();
	$.post(
	    '/users/unfollow/'+user_id,                      // 申請URL
	    {}, // データ
	    function(data) {
			SetFollowButton(user_id);
	    }
	);
}
function prof(){
	document.getElementById('desc').style.height = '';
	document.getElementById('desc').style.overflow = 'visible';
	$("#all_prof_view_href").hide();
}
function report(item_id){
	if($("#report_body").val()!=""){
		if(confirm("報告を送信して宜しいですか？")){
			$.post(
			    '/items/report/'+item_id,                      // 申請URL
			    {body:$("#report_body").val(),section:$("#section").val()}, // データ
			    function(data) {
				$("#report-modal").modal("hide");
				alert("報告を送信しました");
			});
		}
	}
}
function sendBookmarkBox(item_id){
	$.post("/bookmarks/push/"+item_id,{},function(e){
		if(e == "add"){
			$(".item_"+item_id).addClass("active");
			$(".item_"+item_id+" > *").addClass("icon-white");
			$(".item_"+item_id).attr("data-original-title","ブックマーク済み");
		} else {
			$(".item_"+item_id).removeClass("active");
			$(".item_"+item_id+" > *").removeClass("icon-white");
			$(".item_"+item_id).attr("data-original-title","とりあえずブクマ");
		}
	});
}
function sendBookmarkMini(item_id){
	$.post("/bookmarks/push/"+item_id,{},function(e){
		if(e == "add"){
			$(".item_"+item_id+" > div").attr("style","");
			$(".item_"+item_id+" > div").addClass("label-warning");
			$(".item_"+item_id+" > div > i").addClass("icon-white");
			$(".item_"+item_id).attr("data-original-title","ブックマーク済み");
		} else {
			$(".item_"+item_id+" > div").attr("style","background-color:white;");
			$(".item_"+item_id+" > div").removeClass("label-warning");
			$(".item_"+item_id+" > div > i").removeClass("icon-white");
			$(".item_"+item_id).attr("data-original-title","とりあえずブクマ");
		}
	});
}
function tout(uid){
	$.post("/touts/push/"+uid,{},function(e){
		if(e == "add"){
			$(".outthread_"+uid).html("<span style='font-size:12px;'>除外済み</span>");
			$(".outthread_"+uid).attr("data-original-title","このスレッドは除外済みです。<br>解除はもう一度クリックするか、設定メニューの除外スレッド管理から解除して下さい");
		} else if(e == "max_error"){
			alert("除外スレッドの設定数が上限を超えています。");
		} else {
			$(".outthread_"+uid).html("×");
			$(".outthread_"+uid).attr("data-original-title","このスレッドを除外");
		}
	});

}
function blog_out(uid){
	$.post("/blog_outs/push/"+uid,{},function(e){
		if(e == "add"){
			$(".outblog_"+uid).html("<span style='font-size:12px;'>除外済み</span>");
			$(".outblog_"+uid).attr("data-original-title","このブログは除外済みです。<br>解除はもう一度クリックするか、設定メニューの除外ブログ管理から解除して下さい");
		} else if(e == "max_error"){
			alert("除外ピクログの設定数が上限を超えています。");
		} else {
			$(".outblog_"+uid).html("×");
			$(".outblog_"+uid).attr("data-original-title","このブログを除外");
		}
	});

}

function uout(uid){

	$.post("/uouts/push/"+uid,{},function(e){
		if(e == "add"){
			$(".outuser_"+uid).html("<span style='font-size:12px;'>除外済み</span>");
			$(".outuser_"+uid).attr("data-original-title","このユーザーの作品は除外済みです。<br>解除はもう一度クリックするか、設定メニューの除外ユーザー管理から解除して下さい");
		} else if(e == "max_error"){
			alert("除外ユーザーの設定数が上限を超えています。");
		} else {
			$(".outuser_"+uid).html("×");
			$(".outuser_"+uid).attr("data-original-title","このユーザーの作品を除外");
		}
	});
}
function uoutMini(uid){

	$.post("/uouts/push/"+uid,{},function(e){
		if(e == "add"){
			$(".outuser_"+uid+" > div").attr('style',"");
			$(".outuser_"+uid+" > div").addClass('label-warning');
			$(".outuser_"+uid+" > div > i").addClass("icon-white");
			$(".outuser_"+uid).attr("ata-original-title","<div style='width:100px;'>除外済</div>");
		} else if(e == "max_error"){
			alert("除外ユーザーの設定数が上限を超えています。");
		} else {
			$(".outuser_"+uid+" > div").attr('style',"background-color:white;");
			$(".outuser_"+uid+" > div").removeClass('label-warning');
			$(".outuser_"+uid+" > div > i").removeClass("icon-white");
			$(".outuser_"+uid).attr("ata-original-title","<div style='width:100px;'>のユーザーの作品を除外</div>");
		}
	});
}
function nout(uid){
	$.post("/nouts/push/"+uid,{},function(e){
		if(e == "add"){
			$(".outnice_"+uid).html("<span style='font-size:12px;'>非表示</span>");
			$(".outnice_"+uid).attr("data-original-title","このユーザーのステキは次回から非表示となります。<br>解除はもう一度クリックするか、設定メニューのステキミュート設定から解除して下さい");
		} else if(e == "max_error"){
			alert("ステキミュートの設定数が上限を超えています。");
		} else {
			$(".outnice_"+uid).html("<i class='fa fa-ban'></i>");
			$(".outnice_"+uid).attr("data-original-title","このユーザーのステキを非表示");
		}
	});
}
$(function(){
    $('#page-top').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#page-top').fadeIn();
        } else {
            $('#page-top').fadeOut();
        }
    });
    $('#page-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

	$("body").on("click",".submit", function (e) {
		e.stopPropagation();
		var exe = true;
		if($(this).data("confirm")){
			if(confirm($(this).data("confirm"))){
				exe = true;
			} else {
				exe = false;
			}
		}
		if(exe){
			var obj_form = $(this).closest('form');
			var action = $(this).attr('data-action') ? $(this).attr('data-action') : $(obj_form).attr('action');
			var method = $(this).attr('data-method') ? $(this).attr('data-method') : $(obj_form).attr('method');
			var target = $(this).attr('data-target') ? $(this).attr('data-target') : $(obj_form).attr('target');
			$(obj_form).attr({"action":action,"method":method,"target":target}).submit();
		}
	});
	$("body").on("click",".href", function (e) {
		e.stopPropagation();
		var exe = true;
		if($(this).data("confirm")){
			if(confirm($(this).data("confirm"))){
				exe = true;
			} else {
				exe = false;
			}
		}
		if(exe){
			if($(this).data("action")){
				location.href = $(this).data("action");
			}
		}
	});
});
