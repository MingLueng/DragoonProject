//$(function() {
  jQuery(function($){



    // ------------------------------------------------------
    //
    //   Touch Hover
    //
    // ------------------------------------------------------
    
      const touchHoverElm = $('a, input[type="button"], input[type="submit"], button, .js_touch-hover');
    
      touchHoverElm.on('touchstart', function(){
          $(this).addClass('js_hover');
      }).on('touchend', function(){
          $(this).removeClass('js_hover');
      });
    
    
    
    // ------------------------------------------------------
    //
    //   Loading
    //
    // ------------------------------------------------------
    
    // const host = window.location.hostname;
    
    
    // if (host !== "www.example.com") {
    
    
    // }
    
      //ローディング画面の要素
      const loadingScreen = $('#s_loading');
      //画面読み込み終わったらクラスをつける本体側の要素
      const afterLoadingActiveElm = $('.afterLoadingActiveElm');
    
    // --------------------------
    //
    //  （1）下準備
    //
    // --------------------------
    
    
    
      // まずローディング画面のCSS非表示を解除 → ローディング画面が表示される
      loadingScreen.removeClass('hide');
      // afterLoadingActiveElmを非アクティブにする。
      afterLoadingActiveElm.removeClass('is_active');
      const progressBar = document.querySelector('.js-loader-progress-bar')
      const progressNumber = document.querySelector('.js-loader-progress-number')
      
      const imgLoad = imagesLoaded('body');//body内の画像を監視
      const imgTotal = imgLoad.images.length;//画像の総数を取得
      
      let imgLoaded = 0;//ロードした画像カウント
      let progressSpeed = 2;//プログレスバーの進むスピード 大きいほど速くなる
      let progressCount = 0;//ローディングの進捗状況 0〜100
      let progressResult = 0;//ローディングの進捗状況 0〜100
      
      //読み込み状況をアップデート
      let progressInit = setInterval(function () {
        updateProgress();
      }, 25);
      
      //画像を一つロードするたびにimgLoadedのカウントをアップ
      imgLoad.on('progress', function (instance, image) {
        imgLoaded++
      })
      
      
    //読み込み状況アップデート関数
    
    // ※ CF7でリロードがかかった際はローディング画面を表示しないように
    if (document.URL.match("#wpcf7-f459-o2")) {
      loadingScreen.addClass('display_none');
      afterLoadingActiveElm.addClass('is_active');
    
      // ヘッダー分ずらした位置にスクロール
      var position = $('.wpcf7').offset().top - (200);
      $("html, body").animate({scrollTop:position});
    
    } else {
      function updateProgress() {
      
        //ローディング演出用の計算
        progressCount += (imgLoaded / imgTotal) * progressSpeed;
      
        if(progressCount >= 100 && imgTotal > imgLoaded) {
          //カウントは100以上だが画像の読み込みが終わってない
          progressResult = 99;
        } else if(progressCount > 99.9) {
          //カウントが100以上になった
          progressResult = 100;
        } else {
          //現在のカウント
          progressResult = progressCount;
        }
      
        //ローディング進捗状況をプログレスバーと数字で表示
        progressBar.style.width = progressResult + '%';
        progressNumber.innerText = Math.floor(progressResult) + ' %';
    
    
    
        //ローディング完了後 0.8秒待ってページを表示
        if (progressResult >= 100 && imgTotal == imgLoaded) {
          clearInterval(progressInit);
    
          loadingScreen.delay(800).queue(function() {
            $(this).addClass('js_wipe-loading').dequeue();//loading画面の撤去
          });
          setTimeout(function () {
            document.querySelector('body').classList.add('is-loaded');
          }, 800);
          loadingScreen.delay(500).queue(function() {
            $(this).addClass('display_none').dequeue();//捌けた後に完全に消す
            afterLoadingActiveElm.addClass('is_active').dequeue();//ローディング後アクションの開始
          });
        }
      }
    }//if
    
    
    // $(".wpcf7").validationEngine({
    //   scrollOffset: 170 //送信ボタンクリック時にヘッダーの高さ分ずらす
    // });
    // --------------------------
    //
    //  （2）読み込みが終わったらローディング画面の捌け。本体側の要素にアクションかける。
    //
    // --------------------------
    
      // $(window).on('load',function(){
    
      //   //loading画面の撤去
      //   loadingScreen.delay(3000).queue(function() {
      //     $(this).addClass('js_wipe-loading').dequeue();//loading画面の撤去
      //   });
    
      //   //afterLoadingActiveElmのアクティブ化
      //   loadingScreen.delay(3100).queue(function() {
      //     $(this).addClass('display_none').dequeue();//捌けた後に完全に消す
      //     afterLoadingActiveElm.addClass('is_active').dequeue();
      //   });
    
      // });
    
    
    
      // タイムアウト設定
      // function loaderClose(){
      //   loadingScreen.fadeOut('slow', function() {
      //     logo.addClass('action');
      //   });
      // }
      // setTimeout(loaderClose,5000);
    
    
    
    
    
    
    // ------------------------------------------------------
    //
    //   Loading（下層ページ用）
    //
    // ------------------------------------------------------
    
    
      // ---------------------
      // 変数
      // ---------------------
      // const loadingScreenP = $('#s_loading_plane');//ローディング画面の要素
    
      // // （1）下準備
      // loadingScreenP.removeClass('hide');// まずローディング画面のCSS非表示を解除 → ローディング画面が表示される
    
      // // （2）画面読み込み完了後、ローディング画面を撤去 ＋ 本体側の要素にアクションかける。
      // $(window).on('load',function(){
    
      //   // （2−1）ローディング画面の撤去
      //   //loadingScreen.delay(4500).fadeOut('slow', function() {
      //   loadingScreenP.delay(800).queue(function() {
      //     $(this).addClass('js_loading_disappear').dequeue(); //撤去用のクラスを付加
      //   });
    
      //   // （2−2）捌けた後に、完全に非表示にする。
      //   loadingScreenP.delay(1000).queue(function() {
      //     $(this).addClass('hide').dequeue();
      //   });
    
      // });//$(window).on('load'
    
      // //タイムアウト設定
      // function loadingPClose(){
      //   loadingScreen.fadeOut('slow', function() {
      //     afterLoadingActiveElm.addClass('is_active');
      //   });
      // }
      // setTimeout(loadingPClose,5000);
    
    
    
    
    // ------------------------------------------------------
    //
    //   Loaded content
    //   主にトップページ以外でページがロードされた後にアクションを行う要素
    //
    // ------------------------------------------------------
    
    const loadedElm = $('.js_loadedElm');
    const loadedElmWrapper = $('.js_loadedElm.js_loadedElmWrapper');
    
    // （1）
    loadedElm.removeClass('is_active');
    // （2）
    $(window).on('load',function(){
      loadedElm.addClass('is_active').dequeue();
      loadedElmWrapper.addClass('js_opacity1').dequeue();
    });

    // ------------------------------------------------------
    //
    //   // ページ内リンクをスムーズに移動
    //
    // ------------------------------------------------------
    
    
    //通常バージョン（スムーズのみ）
      // $('a[href^="#"]').click(function(){
      //   var speed = 600;
      //   var href= $(this).attr("href");
      //   var target = $(href == "#" || href == "" ? 'html' : href);
      //   var position = target.offset().top;
      //   $("html, body").animate({scrollTop:position}, speed, "swing");
      //   return false;
      // });
    
      // // ヘッダーの高さ分ずらすバージョン
      let headerHeight = $('.l_header').outerHeight();
      //$('a[href^="#"]').click(function(){ //前方一致
      $('a[href*="#"]').click(function(){// 部分一致
        var speed = 800;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - (headerHeight + 20);//更に少し余裕を持たせる
        $("html, body").animate({scrollTop:position}, speed);
        return false;
      });

    
    // ---------------------------
    //
    //   https://webdesignday.jp/inspiration/technique/jquery-js/4022/
    //
    // ---------------------------
    
    // var headerHeight = $('.l_header').outerHeight();
    // var urlHash = location.hash;
    // if(urlHash) {
    //     $('body,html').stop().scrollTop(0);
    //     setTimeout(function(){
    //         var target = $(urlHash);
    //         var position = target.offset().top - headerHeight;
    //         $('body,html').stop().animate({scrollTop:position}, 500);
    //     }, 100);
    // }
    // $('a[href^="#"]').click(function() {
    //     var href= $(this).attr("href");
    //     var target = $(href);
    //     var position = target.offset().top - headerHeight;
    //     // $('body,html').stop().animate({scrollTop:position}, 500);  
    //     $('body,html').stop().scrollTop(0);
    //     setTimeout(function(){
    //         var target = $(urlHash);
    //         var position = target.offset().top - headerHeight;
    //         $('body,html').stop().animate({scrollTop:position}, 500);
    //     }, 100); 
    // });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // ------------------------------------------------------
    //
    // 上へ戻るボタン
    //
    // ------------------------------------------------------
    
      var btnPageTop = $('#btnPageTop');
      var footerLogo = $('#footerLogo');
      //btnPageTop.hide();
      btnPageTop.addClass("hide");
    
      $(window).scroll(function () {
    
        if ($(this).scrollTop() > 600) {
          //btnPageTop.fadeIn();
          btnPageTop.removeClass("hide");
          btnPageTop.removeClass("nonactive");
          btnPageTop.addClass("is_active");
        } else {
          //btnPageTop.fadeOut();
          btnPageTop.removeClass("is_active");
          btnPageTop.addClass("nonactive");
        }
      });
    
      btnPageTop.click(function () {
        $('body, html').animate({scrollTop:0}, 400, 'swing');
        return false;
      });
      footerLogo.click(function () {
        $('body, html').animate({scrollTop:0}, 400, 'swing');
        return false;
      });
      // END: 上へ戻るボタン
    
    
    
    
    // ------------------------------------------------------
    //
    // 上へ戻るボタン（バー型バージョン）
    //
    // ------------------------------------------------------
    
    var btnPageTopBar = $('#btnPageTopBar');
    
    
    btnPageTopBar.click(function () {
      $('body, html').animate({scrollTop:0}, 400, 'swing');
      return false;
    });
    
    
    
    
    // ------------------------------------------------------
    //
    // タブ切替
    //
    // ------------------------------------------------------
    
      const tabTrigger = $('.js_tab_trigger');
      const tabContent = $('.js_tab_content');
    
      tabTrigger.click(function() {
      
        // クリックされたタブの順番を変数に格納
        const index = tabTrigger.index(this);
    
        // タブについてるactiveを一旦ぜんぶ削除
        tabTrigger.removeClass('is_active');
    
        // クリックされたタブにactiveを適用する
        $(this).addClass('is_active'); //tabTrigger.addClass('is_active');←これだとダメ。クリックされたタブ＝thisという指定が必要なのかもしれない。
      
        // コンテンツから一旦activeを削除し、クリックされたタブと同じ順番のコンテンツにactiveをつける
        tabContent.removeClass('is_active').eq(index).addClass('is_active');
      });
    
    
    
      // jQuery(function($){
      //   $('.tab').click(function(){
      //     const index = $(this).index();
      //
      //     $('.is-active').removeClass('is-active');
      //     $(this).addClass('is-active');
      //     $('.is-show').removeClass('is-show');
      //     $('.panel').eq(index).addClass('is-show');
      //   });
      // });
    
      
    
    // ------------------------------------------------------
    //
    // スクロールで出現
    //
    // ------------------------------------------------------
    
    
    var elmScroll = $('.js_scrollelm');
    var elmScrollLate = $('.js_scrollelm_late');
    var elmScrollLater = $('.js_scrollelm_later');
    var elmScrollBg = $('.js_scrollelm_bg');
    var elmScrollF = $('.js_scrollelm_footer');
    
    // 通常、late、later用
    var distanceNormalPc = 100;
    var distanceNormalSp = 50;
    // 背景用
    var distanceBgPc = 100;
    var distanceBgSp = 50;
    // フッター用
    var distanceFooterPc = 50;
    var distanceFooterSp = 0;
    
    //delay：
    var lateLate = 200;
    var lateLater = 500;
    
    
    var mediaQuery = matchMedia('(max-width: 798px)');
    
    // ページが読み込まれた時に実行
    handle(mediaQuery);
    
    // ウィンドウサイズが変更されても実行されるように
    mediaQuery.addListener(handle);
    
    
    // opacity:0のオブジェクトなどが、JS無効時に非表示にならないよう、非表示にするのはJS側で。
    elmScroll.removeClass('is_active');
    elmScrollLate.removeClass('is_active');
    elmScrollLater.removeClass('is_active');
    elmScrollBg.removeClass('is_active');
    elmScrollF.removeClass('is_active');
    
    

    
    function handle(mq) {
    
    
      // --------------------------------
      // ウィンドウサイズが798px以下のとき（SP）
      // --------------------------------
      if (mq.matches) {
    
        // 通常
        $(window).scroll(function (){
          elmScroll.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
        
              if (scroll > elemPos - windowHeight + distanceNormalSp){
                $(this).addClass('is_active');
                //$(this).css({opacity: 1,});
              }
          });
        });
    
    
        // late
        $(window).scroll(function (){
          elmScrollLate.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
    
              if (scroll > elemPos - windowHeight + distanceNormalSp){
                $(this).delay(lateLate).queue(function() {
                  $(this).addClass('is_active');
                  //$(this).css({opacity: 1,}).dequeus();
                });
              }
          });
        });
    
        // later
        $(window).scroll(function (){
          elmScrollLater.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
    
              if (scroll > elemPos - windowHeight + distanceNormalSp){
                $(this).delay(lateLater).queue(function() {
                  $(this).addClass('is_active');
                  //$(this).css({opacity: 1,}).dequeus();
                });
              }
          });
        });
    
        // 背景画像用
        $(window).scroll(function (){
          elmScrollBg.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              // 背景画像は距離を多く取る
              if (scroll > elemPos - windowHeight + distanceBgSp){
                $(this).delay(lateLater).queue(function() {
                  $(this).addClass('is_active');
                  //$(this).css({opacity: 0.4,}).dequeus();
                });
              }
          });
        });
    
        // フッター用
        $(window).scroll(function (){
          elmScrollF.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              // フッターは距離を短くする
              if (scroll > elemPos - windowHeight + distanceFooterSp){
                $(this).addClass('is_active');
                //$(this).css({opacity: 1,});
              }
          });
        });
    
      // --------------------------------
      // ウィンドウサイズが上記以外のとき（PC）
      // --------------------------------
    
      } else {
    
    
        // 通常
        $(window).scroll(function (){
          elmScroll.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
        
              if (scroll > elemPos - windowHeight + distanceNormalPc){
                  $(this).addClass('is_active');
                  //$(this).css({opacity: 1,});
              }
          });
        });
    
    
        // late
        $(window).scroll(function (){
          elmScrollLate.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
    
              if (scroll > elemPos - windowHeight + distanceNormalPc){
                $(this).delay(lateLate).queue(function() {
                  $(this).addClass('is_active');
                  //$(this).css({opacity: 1,}).dequeus();
                });
              }
          });
        });
    
        // later
        $(window).scroll(function (){
          elmScrollLater.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
    
              if (scroll > elemPos - windowHeight + distanceNormalPc){
                  $(this).delay(lateLater).queue(function() {
                    $(this).addClass('is_active');
                    //$(this).css({opacity: 1,}).dequeus();
                  });
              }
          });
        });
    
        // 背景画像用
        $(window).scroll(function (){
          elmScrollBg.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              // 背景画像は距離を多く取る
              if (scroll > elemPos - windowHeight + distanceBgPc){
                $(this).delay(lateLater).queue(function() {
                  $(this).addClass('is_active');
                  //$(this).css({opacity: 0.4,}).dequeus();
                });
              }
          });
        });
    
        // フッター用
        $(window).scroll(function (){
          elmScrollF.each(function(){
              var elemPos = $(this).offset().top;
              var scroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              // フッターは距離を短くする
              if (scroll > elemPos - windowHeight + distanceFooterPc){
                $(this).addClass('is_active');
                //$(this).css({opacity: 1,});
              }
          });
        });
    
        
      }
    }
    
    
    
    
    
    
    
    // ------------------------------------------------------
    //
    //　ハンバーガーメニュー
    //
    // ------------------------------------------------------
    
    var navTrigger = $('#toggle-nav_trigger');
    var navContent = $('#toggle-nav_wrapper');
    var navLink = $('.toggle-nav_link');
    
    $(function () {
      navTrigger.on('click', function() {
        navContent.toggleClass('navOpen');
        $('body,html').toggleClass('bg_fixed');
        //$('#header_subBtn_sp').toggleClass('toggleopen');// トリガー横のエントリーボタンにpadding付加用のクラスをつける
      });
      navLink.on('click', function() {
        navContent.removeClass('navOpen');
        $('body,html').toggleClass('bg_fixed');
        //$('#header_subBtn_sp').toggleClass('toggleopen');// トリガー横のエントリーボタンにpadding付加用のクラスをつける
      });
    });
    
    
    
    
    // ------------------------------------------------------
    //
    //　スクロール促進オブジェクトの非表示化
    //
    // ------------------------------------------------------
    
    
    
    // var elmScroll = $('#scroll_animation');
    
    
        // $(window).scroll(function (){
        //   elmScroll.each(function(){
        //       var scroll = $(window).scrollTop();
        
        //       if (scroll > 150){
        //         $(this).addClass('js_disappeared');
        //       }
        //       //  else {
        //       //   $(this).removeClass('js_disappeared');
        //       // }
        //   });
        // });
    
    
    
    
    // ------------------------------------------------------
    //
    //　固定背景を、要素が近づいてない時は非表示にする
    //　https://twotone.me/web/2519/
    //
    // ------------------------------------------------------
    
    
    // 背景画像1つ目
      $(window).on('load scroll resize', function() {
        const bgElm_1 = $('#bg_fixed_01')
    
        //　「bg_fixed_01」が存在したら発火
        if(bgElm_1.length){
            add_class_in_scrolling_1(bgElm_1);
        }
      });
    
    
      // 発火するfunction
      function add_class_in_scrolling_1(target) {
        var nextElement_1 = $('#s_about');// 指定した要素の次の要素
        var winScroll = $(window).scrollTop();
        var winHeight = $(window).height();
        var scrollPos = winScroll + winHeight;// ウィンドウの最下部の位置取得
    
        //　指定した要素が画面内に入ったらclass付与して出たら削除
        if(target.offset().top - 100 < scrollPos && nextElement_1.offset().top + winHeight + 100 > scrollPos) {
            target.addClass('show');
        }else{
            target.removeClass('show');
        }
      }
    
    
    
    // 背景画像2つ目
      $(window).on('load scroll resize', function() {
        const bgElm_2 = $('#bg_fixed_02')
    
        //　「bg_fixed_02」が存在したら発火
        if(bgElm_2.length){
            add_class_in_scrolling_2(bgElm_2);
        }
      });
    
    
      // 発火するfunction
      function add_class_in_scrolling_2(target) {
        var nextElement_2 = $('#s_feature');// 指定した要素の次の要素
        var winScroll = $(window).scrollTop();
        var winHeight = $(window).height();
        var scrollPos = winScroll + winHeight;// ウィンドウの最下部の位置取得
    
        //　指定した要素が画面内に入ったらclass付与して出たら削除
        if(target.offset().top - 100 < scrollPos && nextElement_2.offset().top + winHeight + 100 > scrollPos) {
            target.addClass('show');
        }else{
            target.removeClass('show');
        }
      }
    
    
    
    
    
    
    // ------------------------------------------------------
    //
    //   // ヘッダー固定
    //
    // ------------------------------------------------------
    
     const body = $('body');
    
      $(window).scroll(function() {
        if ($(window).scrollTop() > 600) {
          body.addClass('js_fixed-header');
        } else {
          body.removeClass('js_fixed-header');
        }
      });
    
    
    
    
    
    
    
    
    
    // ------------------------------------------------------
    //
    //   // アコーディオン
    //
    // ------------------------------------------------------
    
    
    
    $(".js_acmenu_trigger").on("click", function() {
      $(this).next().slideToggle();
      $(this).toggleClass("js_open");
    
    });
    
    
    
    
    // ------------------------------------------------------
    //
    //   // 背景画像をゆっくり動かす
    //
    // ------------------------------------------------------
    
    
    
    // const obj_bgSlow = $(".page_title_l");
    // let scrpos = 0;
    
    // $(window).scroll(function () {
    //   scrpos = $(document).scrollTop();
    //   obj_bgSlow.stop(true, true).animate({
    //     'background-position-y': -(scrpos / 6)
    //   }, 100);
    // });
    
    
    
    
    
    // ------------------------------------------------------
    //
    //   スライドマスクアニメーション
    //
    // ------------------------------------------------------
    
    // ↓js_scrollelmで兼ねることにしたので一旦コメントアウト
    
    // $(window).on('load scroll', function(){
    
    //   //itemのinnerをセレクタに指定
    //   var elmSlideMask = $('.anim_slide-mask_inner');
      
    //   elmSlideMask.each(function () {
    //     var elemOffset = $(this).offset().top;
    //     var scrollPos = $(window).scrollTop();
    //     var wh = $(window).height();
    
    //     if(scrollPos > elemOffset - wh + (wh / 4)){
    //       $(this).addClass('is_active');
    //     }
    //   });
    // });
    
    
    
    
    
    
    // ------------------------------------------------------
    //
    //   // 子要素から特定した親要素にクラス付与（フォームのセレクトボックス確認ページ用）
    //
    // ------------------------------------------------------
    
    $(function(){
      $(".cstm_form_select:has(.wpcf7c-conf)").addClass("confirm");
    });
    
    
  //   $('.wpcf7-form-control').on('click',function(){
  //     $(this).find('.wpcf7-submit').attr('disabled', true);
  // });

  $("#wpcf7-f459-o1").submit(function (e) {

    //stop submitting the form to see the disabled button effect
    e.preventDefault();

    //disable the submit button
    $('.wpcf7-submit').prop('disabled', true);

    return true;

  });
  

    
    
    // ------------------------------------------------------
    //
    //   // フッター固定ボタン（最下部では再非表示）
    //
    // ------------------------------------------------------
    
    
    // <div class="l_footerBtn" style="display: block;">
    //   <div class="inner">
    //     <a href="" class="register_normal">
    //       <img src="btn_register_fixed_01.png" alt="">
    //     </a>
    //   </div>
    // </div>
    
    
    // $(function() {
    
    //   var elm_fix = $('.l_footerBtn');// 表示対象エレメント
    //   var triggerNode = $(".l_footer");// 下方で非表示のキッカケにするエレメント
    //   elm_fix.hide();//一旦hideする
    
    //   $(window).on("scroll", function() {
    
    //     var triggerNodePosition = $(triggerNode).offset().top - $(window).height();
    
    //     if ($(this).scrollTop() > 300 && $(this).scrollTop() < triggerNodePosition) {
    //       $(elm_fix).slideDown("fast");
    //     } else {
    //       $(elm_fix).slideUp("fast");
    //     }
    //   });
    // });
    
    
    
    // ------------------------------------------------------
    //
    //   MW WP Form エラーメッセージ用（エラーがあるときは包括要素にクラス追加）
    //　　※なんらかのバリデーションを設定しないとダメ
    //
    // ------------------------------------------------------
    
    // if ( $('.error')[0] ) {
    //   $('.mw_wp_form').addClass('mw_wp_form_error');
    // }
    
    
    
    
    
    // ------------------------------------------------------
    //
    //   
    //
    // ------------------------------------------------------
    
    
    // sendHeight();
    
    // function sendHeight(){
    //   var h = document.documentElement.scrollHeight;
    //   parent.postMessage(h, "*");
    // }
    
    
    // window.addEventListener('message', function(e) {
    //   if(e.origin=="https://docs.google.com/forms/d/e/1FAIpQLSc_ZsBxHpnQXk-63w18OXyhWAdbI2h7HcxLumVvvIGfiIM3GQ/viewform?embedded=true"){
    //     document.getElementById('iframe_reserve').height = e.data;
    //   }
    // }, false);
    
    
    });
    
    // ------------------------------------------------------
    //
    //   
    //
    // ------------------------------------------------------
    
    
