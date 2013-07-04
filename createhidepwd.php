<?php
/**
 * Description : Create hidden password for user card.
 * User: MrHZ
 * Date: 11-12-5
 * Time: 下午3:22
 * To change this template use File | Settings | File Templates.
 */
$gFilePath = 'hidepassword.txt';

function createHidePwd()
{
    try
    {
        $uProvince = $_POST['sltProvince'];
        $uCity = $_POST['sltCity'];
        $uService = $_POST['sltService'];
        $uCodeStart = trim($_POST['txtCodeStart']);
        $uCodeEnd = $_POST['txtCodeEnd'];
        $uResult = '';
        $uCode = '';
        $uIndex = 0;

        if($uCodeEnd == '')
        {
            $uCodeEnd = $uCodeStart;
        }
        else
        {
            $uCodeEnd = trim($uCodeEnd);
        }
        $uCodeEnd += 1;

        for( $uIndex = $uCodeStart; $uIndex < $uCodeEnd; $uIndex++ )
        {
            $uCode = $uProvince . $uCity . $uService . sprintf('%05d',$uIndex);
            $uNumA = $uProvince + $uCity + $uService + $uIndex;
            $uNumB = strrev( $uCode . '1' );
            $uNumC = substr( ($uNumA / ($uNumB * 1.91293118277)), 5, 6) ;

            $uResult .= $uCode. ','. $uNumC. "\r\n";
        }
        file_put_contents($GLOBALS['gFilePath'], $uResult);
        unset($uResult);
        $GLOBALS['gReslut'] = '请使用右键<a href="'. $GLOBALS['gFilePath'] .'" target="_blank">【点击这里】</a>使用“链接另存为”方式下载文档。';
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}

if(isset($_POST['hidAction']))
{
    //调用创建隐藏密码文件函数。
    if( $_POST['hidAction'] == 'create')
    {
        createHidePwd();
    }
    
    //删除服务器上已经存在的隐藏密码文件。
    if( $_POST['hidAction'] == 'delete')
    {
        if(file_exists($GLOBALS['gFilePath']))
        {
            unlink($GLOBALS['gFilePath']);
        }
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添又添会员卡隐藏密码生成器</title>
    <style type="text/css">
        body, form, input, select, label{ font-size:12px;font-family:verdana,Microsoft YaHei;padding:0px; margin:0px }
        a{text-decoration:none}
        #box_workspace{ width:100%;border-bottom:#DDD 1px solid;border-top:#DDD 1px solid;background-color:#F1F1F1;display:inline-block;}
        #fomCreateHidePwd{width:600px;padding:0px 0px 10px 0px;margin:0 auto;}
        #fomCreateHidePwd .caption{ width:100px;margin:5px; text-align:right; float:left;}
        #fomCreateHidePwd .message{color:#FF0000}
        #fomCreateHidePwd span{ width:480px;margin:5px; float:left;}
        #lblResult{margin:10px auto;width:100%;text-align:center;}
        .panel_button{text-align:right;width:550px;padding-top:10px;border-top:#DDD 1px dotted}
    </style>
</head>
<body>
<h1 style="text-align:center;padding:10px;width:98%">添又添会员卡隐藏密码生成器 V1.0</h1>
<div id="box_workspace">
    <form action="" method="post" id="fomCreateHidePwd" name="fomCreateHidePwd">
        <label id="lblProvince" for="sltProvince" class="caption">省份：</label>
            <span>
                <select id="sltProvince" name="sltProvince">
                    <option value="11">北京市</option>
                    <option value="12">天津市</option>
                    <option value="13">河北省</option>
                    <option value="14">山西省</option>
                    <option value="15">内蒙古自治区</option>
                    <option value="21">辽宁省</option>
                    <option value="22">吉林省</option>
                    <option value="23">黑龙江省</option>
                    <option value="31">上海市</option>
                    <option value="32" selected="true">江苏省</option>
                    <option value="33">浙江省</option>
                    <option value="34">安徽省</option>
                    <option value="35">福建省</option>
                    <option value="36">江西省</option>
                    <option value="37">山东省</option>
                    <option value="41">河南省</option>
                    <option value="42">湖北省</option>
                    <option value="43">湖南省</option>
                    <option value="44">广东省</option>
                    <option value="63">青海省</option>
                    <option value="46">海南省</option>
                    <option value="50">重庆市</option>
                    <option value="51">四川省</option>
                    <option value="52">贵州省</option>
                    <option value="53">云南省</option>
                    <option value="54">西藏自治区</option>
                    <option value="61">陕西省</option>
                    <option value="62">甘肃省</option>
                    <option value="45">广西壮族自治区</option>
                    <option value="64">宁夏回族自治区</option>
                    <option value="65">新疆维吾尔自治区</option>
                    <option value="71">台湾省</option>
                    <option value="81">香港特别行政区</option>
                    <option value="82">澳门特别行政区</option>
                </select>
            </span>
        <label id="lblCity" for="sltCity" class="caption">城市：</label>
        <span>
            <select id="sltCity" name="sltCity">
                <option value="01">南京市</option>
            </select>
        </span>
        <label id="lblService" for="sltService" class="caption">服务中心：</label>
        <span>
            <select id="sltService" name="sltService">
                <option value="001">总部服务中心</option>
            </select>
        </span>
            <label id="lblCodeStart" for="txtCodeStart" class="caption">编码范围：</label>
        <span>
            <input id="txtCodeStart" name="txtCodeStart" value="" maxlength="5" style="width:80px" /> ~
            <input id="txtCodeEnd" name="txtCodeEnd" value="" maxlength="5" style="width:80px" />
            <label id="lblMessage" name="lblMessage" class="message"></label>
        </span>
        <span class="panel_button">
            <input type="hidden" id="hidAction" name="hidAction" value="" />
            <input type="button" id="btnDelete" name="btnDelete" value="清除文档" onclick="submitDelete()" style="float:left" />
            <input type="button" id="btnSubmit" name="btnSubmit" value="创建密码" onclick="submitCreate()" />
            <input type="reset" id="btnReset" name="btnReset" value="重置表单" />
        </span>
    </form>
</div>
<h2 id="lblResult" name="lblResult"><?php echo( $GLOBALS['gReslut']) ?></h2>
</body>
</html>

<script language="javascript">
    <!--
        function submitCreate()
        {
            document.getElementById('hidAction').value = 'create';

            var uObjForm = document.getElementById("fomCreateHidePwd");
            var uObjMessage = document.getElementById('lblMessage');
            var uStartValue = uObjForm['txtCodeStart'].value;
            var uEndValue = uObjForm['txtCodeEnd'].value;

            if(uStartValue.length == 0)
            {
                uObjMessage.innerHTML = '会员号编码范围起始值不能为空，必须填写。';
                uObjForm['txtCodeStart'].focus();
                return false;
            }
            if( (parseInt(uEndValue) - parseInt(uStartValue)) < 0)
            {
                uObjMessage.innerHTML = '会员号编码范围起始值小于结束值。';
                uObjForm['txtCodeStart'].focus();
                return false;
            }

            var uPatrn = /^[-\+]?\d+$/;
            if ( ((uStartValue.length > 0) && (! uPatrn.exec(uStartValue))) || ((uEndValue.length > 0) && (! uPatrn.exec(uEndValue))) )
            {
                uObjMessage.innerHTML = '会员号编码范围只能为整数格式。';
                uObjForm['txtCodeStart'].focus();
                return false
            }

            uObjForm.submit();
        }

        function submitDelete()
        {
            document.getElementById('hidAction').value = 'delete';
            document.getElementById('fomCreateHidePwd').submit();
        }
    -->
</script>