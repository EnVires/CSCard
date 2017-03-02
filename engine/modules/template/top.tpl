{include file="header.tpl"}
	<div class="items-index">
	<center>
		<div class="top">
			<div class="top-title">Топ везунчиков</div>
			<div class="top-three widther">
				{top_three}
			</div>
			<div class="top-list widther">
				<div class="top-list-head">
					<div>место</div><div>ник</div><div>кейсов открыл</div><div>профит</div>
				</div>
				{top_last}				
			</div>
		</div>
	</div>
	
<style>
.top {
	margin-top: 0px;
	    font-family: 'Open Sans Condensed', sans-serif;
}
.top .top-title {
	color: #fed483;
	font-size: 27px;
	text-align: center;
}
.top .top-three {
	margin-top: 50px;
	position: relative;
	width: 500px;
	height: 400px;
}
.top .top-three .top-three-one {
	position: absolute;
	width: 200px;
}
.top .top-three .top-three-one:nth-child(1),
.top .top-three .top-three-one:nth-child(2) {
	top: 40px;
}
.top .top-three .top-three-one:nth-child(1) {
	left: 0px;
}
.top .top-three .top-three-one:nth-child(2) {
	right: 0px;
}
.top .top-three .top-three-one:nth-child(3) {
	top: 0px;
	left: 150px;
}
.top .top-three .top-three-one .top-three-one-num {
	margin: auto;
	border-radius: 5px;
	width: 30px;
	height: 30px;
	background-color: #0dd8cc;
	color: #fff;
	font-size: 18px;
	line-height: 30px;
	text-align: center;
}
.top .top-three .top-three-one .top-three-one-avatar {
	border: 20px solid #000;
	border-radius: 100%;
	width: 200px;
	height: 200px;
	background-size: cover;
	background-position: center;
}
.top .top-three .top-three-one .top-three-one-nick {
	color: #fff;
	font-size: 18px;
	text-align: center;
}
.top .top-three .top-three-one .top-three-one-table {
	margin: 20px auto 0px;
	border: 3px solid rgba(255,255,255,0.2);
	padding: 8px 7px;
	width: 135px;
}
.top .top-three .top-three-one .top-three-one-table:after {
	content: '';
	display: block;
	clear: both;
}
.top .top-three .top-three-one .top-three-one-table .top-three-one-table-kv {
	float: left;
	width: 50%;
	text-align: center;
}
.top .top-three .top-three-one .top-three-one-table .top-three-one-table-kv .top-three-one-table-kv-v {
	color: #f4bc64;
	font-size: 14px;
}
.top .top-three .top-three-one .top-three-one-table .top-three-one-table-kv .top-three-one-table-kv-k {
	color: #fff;
	font-size: 11px;
	text-transform: uppercase;
}
.top .top-list {
	margin-top: 25px;
	margin-bottom: 100px;
	border-top: 3px solid rgba(255,255,255,0.2);
	padding-top: 25px;
	width: 1000px;
}
.top .top-list .top-list-head:after,
.top .top-list .top-list-row:after {
	content: '';
	display: block;
	clear: both;
}
.top .top-list .top-list-head > div,
.top .top-list .top-list-row > div {
	float: left;
}
.top .top-list .top-list-head > div:nth-child(1),
.top .top-list .top-list-row > div:nth-child(1) {
	width: 50px;
	text-align: center;
}
.top .top-list .top-list-head > div:nth-child(2),
.top .top-list .top-list-row > div:nth-child(2) {
	margin-left: 30px;
	width: 470px;
	text-align: left;
}
.top .top-list .top-list-head > div:nth-child(3),
.top .top-list .top-list-row > div:nth-child(3) {
	width: 200px;
	text-align: center;
}
.top .top-list .top-list-head > div:nth-child(4),
.top .top-list .top-list-row > div:nth-child(4) {
	margin-left: 100px;
	width: 150px;
	text-align: center;
}
.top .top-list .top-list-head > div {
	color: #fff;
	font-size: 19px;
	text-transform: uppercase;
}
.top .top-list .top-list-row {
	margin-top: 20px;
	height: 60px;
	background-color: #172a3a;
}
.top .top-list .top-list-row > div {
	float: left;
	height: 60px;
	color: #fff;
	font-size: 20px;
	line-height: 60px;
}
.top .top-list .top-list-row > div:nth-child(1) {
	font-size: 23px;
}
.top .top-list .top-list-row > div:nth-child(2) {
	padding-left: 50px;
	background-size: 40px;
	background-position: center left;
	background-repeat: no-repeat;
}
.top .top-list .top-list-row > div:nth-child(4) {
	color: #74e494;
}

</style>	
{include file="footer.tpl"}