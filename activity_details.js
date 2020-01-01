layui.use(['layer', 'form'], function () {
    var layer = layui.layer
        , form = layui.form;

    //layer.msg('Hello World');
});

window.onload = function () {
    var ele = this.document.getElementsByClassName("UpText")[0].getElementsByTagName("button")[3];
    ele.addEventListener("click", function () {
        layer.open({
            btn: ['确定']
            , yes: function (index, layero) {
                layer.close(index);
            }
            , type: 2
            , content: 'assets/rate.html'
            , title: '请评分'
            , area: ['300px', '380px']
            , skin: 'demo-class'
        });
    });
}

