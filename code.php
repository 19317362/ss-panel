<?php
require_once 'lib/config.php';
include_once 'header.php';
$c = new Ss\User\InviteCode();
?>
<body>
<div class="container">
    <?php include_once 'nav.php';?>

    <div class="jumbotron">
        <p class="lead"> 邀请码</p>
        <p>畅享自由网络，请素质使用，谢谢！</p>
	<p class="lead">加入QQ群获取邀请码 <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=51e115fcd461295e1b2d08bc0be69890f21e151c5e10b08982c3d1632db23bd0"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="SS自由之旅" title="SS自由之旅"></a></p>
    </div>

    <div class="row marketing">
        <h2 class="sub-header">邀请码</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>###</th>
                    <th>邀请码</th>
                    <th>状态</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $datas = $c->get_code_array(0,21);
                $a = 0;
                foreach($datas as $data ){
                ?>
                <tr>
                    <td><?php echo $a;$a++; ?></td>
                     <td><?php echo $data['code'];?></td>
                    <td>可用</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div><?php
            include_once 'footer.php';
            include_once 'ana.php';?>

</div> <!-- /container -->
</body>
</html>
