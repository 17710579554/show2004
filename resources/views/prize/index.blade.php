<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>抽奖</title>
</head>
<body>
<h1>抽奖页面</h1>
<button id="btn-prize">开始抽奖</button>

<script src="/static/js/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).on("click","#btn-prize",function () {
        //alert(111)
        $.ajax({
            url: "/prize/start",
            type: "get",
            dataType:'json',
            success: function (d) {
                console.log(d)
                //alert(d.data.prize);
                if(d.data.prize==0){
                    alert('谢谢惠顾');
                }else if(d.data.prize==1){
                    alert('一等奖');
                }else if(d.data.prize==2){
                    alert('二等奖');
                }



            }
        })
    })
</script>

</body>
</html>

