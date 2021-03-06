// スマホ・タブレットのURLバー隠し
window.onload = function() {
setTimeout(scrollTo, 100, 0, 1);
}

// スムーズ・スクロール 
$(function() {
  $(".scroll").click(function () {
    $('html,body').animate({ scrollTop: 0 }, 'slow');
    return false;
  });
  
    //add class for radio when click
  $(".radio").click(function () {
      var name = $(this).find('input[type=radio]').attr('name');
      $('input[type=radio][name="'+ name +'"]').parent().removeClass('active');
      $(this).addClass('active');
  });
  
  //init radio checked
  $(document).ready(function(){
      $('.radio').has('>input[type=radio]:checked').addClass('active');
  });

});

// ポップアップ｜カレンダー用（400×400）
function cal_win(url,winname) {
    var features = "width=400, height=400, menubar=no, toolbar=no, scrollbars=yes";
    window.open(url,winname,features);
}

// ポップアップ｜設定用｜横長（500×400）
function set_win(url,winname) {
    var features = "width=500, height=400, menubar=no, toolbar=no, scrollbars=yes";
    window.open(url,winname,features);
}

// ポップアップ｜設定用｜縦長（500×600）
function set_win_L(url,winname) {
    var features = "width=500, height=600, menubar=no, toolbar=no, scrollbars=yes";
    window.open(url,winname,features);
}