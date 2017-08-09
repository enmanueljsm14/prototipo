<style>
	.dtp {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: rgba(0, 0, 0, 0.4);
		z-index: 2000;
		font-size: 15px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
	.dtp> .dtp-content {
		background: #fff;
		max-width: 300px;
		box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		max-height: 520px;
		position: relative;
		left: 50%;
	}
	
	.dtp> .dtp-content> .dtp-date-view> header.dtp-header {
		background: <?php echo $_SESSION['tema']?>;
		color: #fff;
		text-align: center;
		padding: 0.3em;
	}
	
	.dtp div.dtp-date,
	.dtp div.dtp-time {
		background: <?php echo $_SESSION['tema']?>;
		text-align: center;
		color: #fff;
		padding: 10px;
	}
	
	.dtp div.dtp-date> div {
		padding: 0;
		margin: 0;
	}
	
	.dtp div.dtp-actual-month {
		font-size: 1.5em;
	}
	
	.dtp div.dtp-actual-num {
		font-size: 3em;
		line-height: 0.9;
	}
	
	.dtp div.dtp-actual-maxtime {
		font-size: 3em;
		line-height: 0.9;
	}
	
	.dtp div.dtp-actual-year {
		font-size: 1.5em;
		color: #DCEDC8;
	}
	
	.dtp div.dtp-picker {
		padding: 1em;
		text-align: center;
	}
	
	.dtp div.dtp-picker-month,
	.dtp div.dtp-actual-time {
		font-weight: 500;
		text-align: center;
	}
	
	.dtp div.dtp-picker-month {
		padding-bottom: 20px!important;
		text-transform: uppercase!important;
	}
	
	.dtp .dtp-close {
		position: absolute;
		top: 0.5em;
		right: 1em;
	}
	
	.dtp .dtp-close> a {
		color: #fff;
	}
	
	.dtp .dtp-close> a> i {
		font-size: 1em;
	}
	
	.dtp table.dtp-picker-days {
		margin: 0;
		min-height: 251px;
	}
	
	.dtp table.dtp-picker-days,
	.dtp table.dtp-picker-days tr,
	.dtp table.dtp-picker-days tr> td {
		border: none;
	}
	
	.dtp table.dtp-picker-days tr> td {
		font-weight: 700;
		font-size: 0.8em;
		text-align: center;
		padding: 0.5em 0.3em;
	}
	
	.dtp table.dtp-picker-days tr> td> span.dtp-select-day {
		color: #BDBDBD!important;
	}
	
	.dtp table.dtp-picker-days tr> td> a,
	.dtp .dtp-picker-time> a {
		color: #212121;
		text-decoration: none;
		padding: 0.4em 0.5em 0.5em 0.6em;
		border-radius: 50%!important;
	}
	
	.dtp table.dtp-picker-days tr> td> a.selected {
		background: <?php echo $_SESSION['tema']?>;
		color: #fff;
	}
	
	.dtp table.dtp-picker-days tr> th {
		color: #757575;
		text-align: center;
		font-weight: 700;
		padding: 0.4em 0.3em;
	}
	
	.dtp .p10> a {
		color: white;
		text-decoration: none;
	}
	
	.dtp .p10 {
		width: 10%;
		display: inline-block;
	}
	
	.dtp .p20 {
		width: 20%;
		display: inline-block;
	}
	
	.dtp .p60 {
		width: 60%;
		display: inline-block;
	}
	
	.dtp .p80 {
		width: 80%;
		display: inline-block;
	}
	
	.dtp a.dtp-meridien-am,
	.dtp a.dtp-meridien-pm {
		position: relative;
		top: 10px;
		color: #212121;
		font-weight: 500;
		padding: 0.7em 0.5em;
		border-radius: 50%!important;
		text-decoration: none;
		background: #eee;
		font-size: 1em;
	}
	
	.dtp .dtp-actual-meridien a.selected {
		background: white;
		color: #fff;
	}
	
	.dtp .dtp-picker-time> .dtp-select-hour {
		cursor: pointer;
	}
	
	.dtp .dtp-picker-time> .dtp-select-minute {
		cursor: pointer;
	}
	
	.dtp .dtp-buttons {
		padding: 0 1em 1em 1em;
		text-align: right;
	}
	
	.dtp.hidden,
	.dtp .hidden {
		display: none;
	}
	
	.dtp .invisible {
		visibility: hidden;
	}
	
	.dtp .left {
		float: left;
	}
	
	.dtp .right {
		float: right;
	}
	
	.dtp .clearfix {
		clear: both;
	}
	
	.dtp .center {
		text-align: center;
	}
</style>