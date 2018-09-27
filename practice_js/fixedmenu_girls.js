$(window).load(function() {

     var fbtArea = $('#fixed_menu_girls') ;
     var timer = false ;

    //  $(window).on("scroll", function(){
    //     if(timer !== false){
    //             clearTimeout(timer);
    //     }
    //     fbtArea.stop();
    //     fbtArea.animate({'bottom' : '-150px'}, 1) ;
    //     timer = setTimeout(function() {
    //             fbtArea.stop() ;
    //             fbtArea.animate({'bottom' : '0px'}, 500) ;
    //     }, 100) ;
    //  });
     $('#close_fixed_menu').on('click', function(){
        fbtArea.animate({'bottom' : '-150px'}, 500).queue(function() {
          this.remove();
        });
      });

  		var fadeTimer = 4000;	//クロスフェードの間隔
  		function groupFade() {
        $('.fixed_menu_group:first').clone(true).appendTo('.switchmenu');
				$('.fixed_menu_group:first').fadeOut().queue(function() {
          this.remove();
        });
			};
  		setInterval(function(){
  			groupFade();
      }, fadeTimer);


});

$(function() {

  $('.girllist').each(function(i){
    $(this).attr('class', 'list_item' + (i+1));
  });

  // color
  var myColors = [
        '#224687',
        '#2ABFD4',
        '#FFCD40',
        '#E61875',
        '#8BC34A',
        '#AB47BC'
      ];

  // 4秒
  $(function(){
    draw();
    setInterval(function(){
      draw()
    }, 4000);
  });

  // 生成
  function draw(){

    var color = myColors[Math.floor(Math.random() * myColors.length)];
    var item1 = $('.list_item1 .item, .list_item4 .item, .list_item7 .item');
    var item2 = $('.list_item2 .item, .list_item5 .item, .list_item8 .item');
    var item3 = $('.list_item3 .item, .list_item6 .item, .list_item9 .item');

    //ランダムで色、大きさ変える
    setInterval((function() {
      item1.css ({
        backgroundColor: myColors[Math.floor(Math.random() * myColors.length)],
        opacity: 0.8,
        transitionDuration: '4s',
      })
    }), 4000);

    setInterval((function() {
      item2.css ({
        backgroundColor: myColors[Math.floor(Math.random() * myColors.length)],
        opacity: 0.8,
        transitionDuration: '4s',
      })
    }), 4000);

    setInterval((function() {
      item3.css ({
        backgroundColor: myColors[Math.floor(Math.random() * myColors.length)],
        opacity: 0.8,
        transitionDuration: '4s',
      })
    }), 4000);

  };

});
