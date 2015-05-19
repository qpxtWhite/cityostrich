var temp_popbox = '<div class="popbox">'+
							'<div class="closeBtn">'+
								'<a href="javascript:;" class="closePC">'+jsLan.back+'</a>'+
								'<div class="closeMobile"><a href="javascript:;"></a></div>'+
							'</div>'+
							'<h2>$typename</h2>'+
							'<div class="content cf self-wrapper">'+
								'$prodtype'+
                                '<a class="usecar" href="#contactus">'+jsLan.usecar+'</a>'+
							'</div>'+
					'</div>';
var temp_prodtype = '<div class="4u">'+
							'<section class="highlight">'+
								'<a href="javascript:;" data-prodname="$prodprod" class="image featured"><img src="$prodimage" /></a>'+
								'<h3><a href="javascript:;" data-prodname="$prodprod">$prodname</a></h3>'+
							'</section>'+
						'</div>';
var temp_subprod = '<div class="s6">'+
						'<img src="$prodimage" />'+
					'</div>'+
					'<div class="s6">'+
						'<p>$prodintro</p>'+
					'</div>';

function tmpl(str, data){
	str = str || '';
	for(var i in data){
		str = str.replace(new RegExp('\\$' + i, 'g'), data[i]);
	}
	return str;
}

function postMessage(data, callback){
	$.ajax({
		url: './sendMail.php',
		type: 'POST',
		dataType: 'json',
		data: data,
		success: function(msg){
			callback(msg);
		},
		error: function(){
			callback({code:1, msg:'error'})
		}
	})
}

function getWindowSize(){
	return $(window).width();
}

$(function(){
	// Dropdowns.
	$('#nav > ul').dropotron({
		mode: 'fade',
		noOpenerFade: true,
		alignment: 'center',
		detach: false
	});

	$('#highlights .highlight .self-info').on('mouseenter', function(ev){
		if(!$(this).hasClass('mobile')){
			
		}
	}).on('mouseleave', function(ev){
		if(!$(this).hasClass('mobile')){
			
		}
	}).on('click', function(ev){
		var dataType = $(this).attr('data-typename');
		var prodHtml = '';
		prodHtml = tmpl(temp_subprod, {
			prodimage: producttype[dataType].image2,
			prodintro: producttype[dataType].intro
		})
		var popHtml = tmpl(temp_popbox, {
			typename: producttype[dataType].name,
			prodtype: prodHtml
		})
		var $popbox = $(popHtml);
		$popbox.addClass('prodpop');
		if(getWindowSize()<737){
			$('body').append($popbox)
		} else {
			$('#product-wrapper').append($popbox);
		}
		$popbox.find('.closePC').on('click', function(){$popbox.remove();})
        $popbox.find('.usecar').on('click', function(){if(getWindowSize()<737){$popbox.remove()}})
	})
	$('#footer-wrapper form .area-img').on('click', function(){
		$(this).attr('src', './code_num.php?'+Math.random());
	})
	$('#footer-wrapper form .area-submit input').on('click', function(ev){
		ev.preventDefault();
		if($(this).hasClass('loading')){
			return false;
		}
		var $submit = $(this),
			$name = $('#contact-name'),
			$mail = $('#contact-email'),
            $phone = $('#contact-phone'),
			$message = $('#contact-message'),
			$code = $('#contact-code');
		if(!$name.val()){
			$name.addClass('shining');
			return;
		}
        if(!$phone.val()){
            $phone.addClass('shining');
            return;
        }
		if(!$mail.val()){
			$mail.addClass('shining');
			return;
		}
		if(!$message.val()){
			$message.addClass('shining');
			return;
		}
		if(!$code.val()){
			$code.addClass('shining');
			return;
		}
		$submit.parent().addClass('loading');
		postMessage({
			name: $name.val(),
			mail: $mail.val(),
            phone: $phone.val(),
			message: $message.val(),
			code: $code.val()
		}, function(message){
			$submit.parent().removeClass('loading');
			$code.addClass('msg').val(message.msg);
			if(message.code==2){
				$('#footer-wrapper form .area-img').attr('src', './code_num.php?'+Math.random());
			}
		})
	})
	$('#contact-name, #contact-email, #contact-message, #contact-code').on('focus', function(){
		$(this).removeClass('shining');
	})
	$('#contact-code').on('focus', function(){
		if($(this).hasClass('msg')){
			$(this).removeClass('msg').val('');
		}
	})
	$('.car-bottom a').on('click', function(){
		var ix = $(this).index();
		$(this).siblings().removeClass('cur');
		$(this).addClass('cur');
		if(getWindowSize()<737){
			var $a = $('.swipe').hide().eq(ix).show();
			swipeslide($a);
		} else {
			var $el = $('.foucebox').hide().eq(ix).show();
			superslide($el);
		}
	})
	function superslide(el){
		el.slide({ effect:"fold", autoPlay:true, delayTime:300, startFun:function(i){jQuery(".foucebox .showDiv").eq(i).find("h2").css({display:"none",bottom:0}).animate({opacity:"show",bottom:"60px"},300);jQuery(".foucebox .showDiv").eq(i).find("p").css({display:"none",bottom:0}).animate({opacity:"show",bottom:"10px"},300);}});
	}
	superslide($('.foucebox').eq(0))
	function swipeslide(el){
		el.Swipe();
	}
	swipeslide($('.swipe').eq(0))
	$('.wLang').on('click', function(){
		var lang = $(this).attr('data-lang');
		cook.write('language', lang, {duration: 7});
		window.location.reload();
	})

    $('#intro .ul-slider').on('click', 'li a', function(){
        $(this).parent().siblings().children('p').addClass('up').slideUp();
        if($(this).siblings('p').hasClass('up')){
            $(this).siblings('p').removeClass('up').slideDown();
        } else {
            $(this).siblings('p').addClass('up').slideUp();
        }
    })
})

var cook=(function(){
    var _options = {
        encode: false,
        decode: false,
        path: false,
        domain: false,
        duration: false,
        secure: false,
        document: document
    };

    function mergeOptions(options) {
        for (var p in options) {
            _options[p] = options[p];
        }
    }

    var Cookie = {
        write: function(key, value, options) {
            ///<summary>
            /// 写cookie，返回当前对象。
            ///</summary>
            ///<param name="key" type="string">KEY</param>
            ///<param name="value" type="string">VALUE</param>
            ///<param name="options" type="object">
            ///配置[可选]
            /// {
            ///     encode:     [boolean,   是否对value进行URI编码][可选],
            ///     domain:     [string,    域][可选],
            ///     path:       [string,    路径][可选],
            ///     duration:   [int,       过期时间(单位/天)][可选]
            /// }
            ///</param>
            ///<returns type="Cookie" />
            mergeOptions(options);
            if (_options.encode) value = encodeURIComponent(value);
            if (_options.domain) value += '; domain=' + _options.domain;
            if (_options.path) value += '; path=' + _options.path;
            if (_options.duration) {
                var date = new Date();
                date.setTime(date.getTime() + _options.duration * 24 * 3600000);
                value += '; expires=' + date.toGMTString();
            }
            if (_options.secure) value += '; secure';
            _options.document.cookie = key + '=' + value;
            return this;
        },

        read: function(key, options) {
            ///<summary>
            /// 读cookie，返回读取的值。
            ///</summary>
            ///<param name="key" type="string">KEY</param>
            ///<param name="options" type="object">
            ///配置[可选]
            /// {
            ///     encode:     [boolean,   是否对value进行URI编码][可选],
            ///     domain:     [string,    域][可选],
            ///     path:       [string,    路径][可选],
            ///     duration:   [int,       过期时间(单位/天)][可选],
            ///     encode:     [boolean,   是否对value进行URI解码][可选]
            /// }
            ///</param>
            ///<returns type="String">返回读取的值，如果不存在，则返回null.</returns>
            var value = _options.document.cookie.match('(?:^|;)\\s*' + key.replace(/([-.*+?^${}()|[\]\/\\])/g, '\\$1') + '=([^;]*)');
            // 默认decode，否则不decode
            if (_options.decode) {
                return (value) ? decodeURIComponent(value[1]) : null;
            }
            else {
                return (value) ? value[1] : null;
            }
        },

        remove: function(key, options) {
            ///<summary>
            /// 删除cookie
            ///</summary>
            ///<param name="key" type="string">KEY</param>
            ///<param name="options" type="object">
            ///配置[可选]
            /// {
            ///     encode:     [boolean,   是否对value进行URI编码][可选],
            ///     domain:     [string,    域][可选],
            ///     path:       [string,    路径][可选],
            ///     duration:   [int,       过期时间(单位/天)][可选],
            ///     encode:     [boolean,   是否对value进行URI解码][可选]
            /// }
            ///</param>
            ///<returns type="Cookie" />
            mergeOptions(options);
            _options.duration = -1;
            Cookie.write(key, '');
            return this;
        }
    };

    return Cookie;
})()