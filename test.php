<?php

/**
 * ECSHOP 首页文件
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liuhui $
 * $Id: index.php 17063 2010-03-25 06:35:46Z liuhui $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$login=new SoapClient('http://192.168.201.12:7888/ormrpc/services/EASLogin?wsdl');


//$soap=new SoapClient('http://www.phpernote.com/javascript-function/677.html/service/searchFlightService2.0?wsdl',array('encoding'=>'UTF-8'));带参数的调用方式

echo '<pre>';

print_r($login->__getFunctions());//列出当前SOAP所有的方法，参数和数据类型，也可以说是获得web service的接口

print_r($login->__getTypes());//列出每个web serice接口对应的结构体
//登陆信息
$username = 'user';
$password = 'eascs12';
$slnName  = 'eas';
$dcName   = '01';	
$language = 'l2';
$dbType   = '2';
$authPattern='BaseDB';

$result=$login->__soapCall("login", array($username, $password, $slnName,$dcName,$language,$dbType,$authPattern));
print_r($result);

if(!empty($result)){
	$soap=new SoapClient('http://192.168.201.12:7888/ormrpc/services/WSWebInterfaceFacade?wsdl');
	$orderBillInfo ='<?xml version="1.0" encoding="UTF-8"?><SaleIssueBill>
	<SaleIssueHead>
		<customNumber>web</customNumber>
		<billNumber></billNumber>
		<customAddress>客户地址</customAddress>
		<customPerson>客户姓名</customPerson>
		<customCell>客户电话</customCell>
		<userNumber>201999</userNumber>
		<willtime>2013-01-01</willtime>
		<willwill>0</willwill>
		<isRax>0</isRax>
		<isRaxCom>开票信息</isRaxCom>
		<creator>201999</creator>
		<creatorTime>2013-05-22</creatorTime>		
		<payType>A_1</payType>
		<status>00</status>
		<auditor></auditor>
		<sendType>10</sendType>
		<checkisFeee>0</checkisFeee>
		<isFee>0.0</isFee>
		<auditTime></auditTime>
		<bark>备注</bark>
		<from>3</from>
		<willtimeSnd></willtimeSnd>
		<transType>add</transType>
		
		<SaleIssueEntry>
			<EntryInfo>
				<materialNum>01G010380004</materialNum>
				<isPresentSub>0</isPresentSub>
				<qty>1</qty>数量
				<price>378.0</price>成交价
				<minPrice>318.0</minPrice>最低限价
				<wareHouse>ZSNLD_J</wareHouse>
				<amount>378.0</amount>金额
				<unitNum>PING</unitNum>单位
			</EntryInfo>
			
			<EntryInfo>
				<materialNum>01G010380004</materialNum>*
				<isPresentSub>0</isPresentSub>*
				<qty>1</qty>数量
				<price>378.0</price>成交价
				<minPrice>318.0</minPrice>最低限价
				<wareHouse>ZSNLD_J</wareHouse>
				<amount>378.0</amount>金额
				<unitNum>PING</unitNum>单位
			</EntryInfo>
			
		</SaleIssueEntry>
	</SaleIssueHead>
</SaleIssueBill>';
	$bak='';
	$result=$soap->__soapCall("saveSaleOrderBill", array($orderBillInfo, $bak));
	print_r($soap->__getFunctions());//列出当前SOAP所有的方法，参数和数据类型，也可以说是获得web service的接口
	print_r($soap->__getTypes());//列出每个web serice接口对应的结构体
	print_r($result);
}



?>