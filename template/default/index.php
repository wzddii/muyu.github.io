
<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
  <!--网页名称-->
<title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
<meta name="baidu-site-verification" content="b9lOcChmbf">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <!--关键词-->
 <meta name="keywords" content="<?php echo $conf['keywords']?>">
 <!--描述-->
 <meta name="description" content="<?php echo $conf['description']?>">
 <!--浏览器小图标，如有，请上传-->
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="assets/css/main.css">
<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ie9.css"/>
<![endif]-->
<noscript>
<link rel="stylesheet" href="assets/css/noscript.css"/>
</noscript>
</head>
<body style="background:#000 url(<?php echo $conf['bj']?>)"rel="nofollow">
<div id="wrapper">
	<header id="header">
	<div class="logo">
	  <!--头像地址-->
		<img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $conf['kfqq']?>&amp;s=160" class="logo">
	</div>
	<div class="content">
		<div class="inner">
          <!--标题-->
			<h1><a href="#"><?php echo $conf['sitename']?></a></h1>
			<p>
				<a href="#"><?php echo $conf['modal']?></a><br>
			</p>
		</div>
	</div>
	<nav>
	<ul>
      <!--菜单-->
               <li><a href="./">首页
<?php
$rs=$DB->query("SELECT * FROM web_dh WHERE active=1 order by id desc limit 7");
while($res = $DB->fetch($rs))
{
echo '<li><a href="'.$res['url'].'">'.$res['name'].'';
}
        ?>          
	</ul>
	</nav></header>
<footer id="footer">
	<p class="copyright">
<div class="list-group-item reed"><marquee scrollamount="8" direction="left" align="Middle" style="font-weight: bold;line-height: 20px;font-size: 20px;color: #FF0000;"><?php echo $conf['gg']?></marquee></div>
	</p>
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Copyright © 2017-2020  <a href="http://#/" target="_blank">柒天</a>版权所有</p>
                                                <p class="copyright">ICP备：<a href="/"><?php echo $conf['modal']?></a></p>
<p class="copyright">本站由<a href="http://#/">小刀娱乐网</a>提供技术支持</p>
<script type="text/javascript">document.write(unescape("%3Cspan id='cnzz_stat_icon_1278649006'%3E%3C/span%3E%3Cscript src='https://v1.cnzz.com/z_stat.php%3Fid%3D1278649006%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
			</div>

</div>
<div id="bg">
</div>
<script src="https://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
	<!-- REQUIRED SCRIPTS FILES -->
	<script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://yzf.qq.com/xv/web/static/chat_sdk/yzf_chat.min.js"></script>
  <script>
    window.yzf && window.yzf.init({
      sign: '<?php echo $conf['yzf']?>',
      uid: '1',
      data: {
        c1: '',
        c2: '',
        c3: '',
        c4: '',
        c5: ''
      },
      selector: '',
      callback: function(type, data){}
    })
    //window.yzf.close() 关闭1已打开的回话窗口
</script>
</body>
</html>
<script id="ilt" src="https://player.ilt.me/player/js/player.js" key="<?php echo $conf['music']?>"></script>
