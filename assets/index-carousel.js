layui.use('carousel', function(){
    var carousel = layui.carousel;
    //建造实例
    carousel.render({
      elem: '#carousel-test1'
      ,width: '1100px'//设置容器宽度
      ,height: '370px'
      ,arrow: 'always' //始终显示箭头
      ,autoplay: true
      //,anim: 'updown' //切换动画方式
    });
  });