<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.hangout img {
	border-radius: 50%;
	width: 60px;
	border-top-left-radius: 50% 50%;
	border-top-right-radius: 50% 50%;
	border-bottom-right-radius: 50% 50%;
	border-bottom-left-radius: 50% 50%;
	background-color: #FFF;
	padding: 3px;
	margin-right: 10px;
}
.hangout {
	display: -webkit-inline-box;
	padding: 5px;
	margin: 1em 0 0.5em;
	width: 85%;
	color: #333;
	background: #f1eff0;
	border-radius: 30px;
}
.hangout p {
	font-size: 13px;
	color: #333333;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	line-height: 1.5;
	width: 75%;
	padding-top: 10px;
}
.hangoutright {
	display: -webkit-inline-box;
	padding: 5px;
	margin: 1em 0 0.5em;
	width: 85%;
	color: #fff;
	background: #669acc;
	border-radius: 30px;
	float: right;
}
.hangoutright p {
	font-size: 13px;
	color: #fff;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	line-height: 1.5;
	margin: 10px;
}
.right {
	float: right;
}
.left {
	float: left;
}
.bottom {
	float: bottom;
}
#hangoutright {
	display: -webkit-inline-box;
	padding: 5px;
	margin: 1em 0 0.5em;
	width: 85%;
	color: #fff;
	background: #669acc;
	border-radius: 30px;
	float: right;
}
#footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:50px;
   width:100%;
   background:#999;
}
.chat::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.chat::-webkit-scrollbar
{
	width: 4px;
	background-color: #F5F5F5;
}

.chat::-webkit-scrollbar-thumb
{
	background-color: #000000;
	border: 2px solid #555555;
}

	</style>
	<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
</head>
<body>
   <div class="chat" style="max-height: 365px; overflow-y: auto;" id="chatme">
        <div class="row">
          <div class="col-md-12">
            <div class="hangout"> <img src="mypic.jpg" />
              <p>Kindly Welcome to our company Website..</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="hangout"> <img src="mypic.jpg" />
              <p>How Can I help you??? </p>
            </div>
          </div>
		  <div class="col-md-12">
		  <div id="commentbox">

		  </div>
		 </div>
        </div>
    </div>

	
	<div id="footer">
		<center>
			<input type="text" class="bottom" style="overflow:hidden; width:95%; font-size: 16px; padding: 5px; " placeholder="Type message to press Enter..." name="comment" id="comment"/>
		</center>
	</div>

<script>
$(document).ready(function() {
$('#comment').keyup(function(e)
    {
        if(e.keyCode == 13)
        {
        var comment = $('#comment').val()
            if(comment == "")
            {
                alert("Please write something in comment.");
            }
            else
            {
                $("#commentbox").append("<div class='hangoutright'><p>"+comment+"</p></div>");
                $.post("chat1.html", {comment:comment},function(data)
                {                                         
                })
                $('#comment').val("");
				var elem = document.getElementById('chatme');
				elem.scrollTop = elem.scrollHeight;
            }
			
        }
    });            
});
</script>
</body>
</html>