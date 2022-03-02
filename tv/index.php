<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
	    <title>soafenTV ~ soafen.love</title>
		<meta content="soafenTV" property="og:title">
		<meta content="an experimental mix of content, streamed 24-7 for your viewing enjoyment!" property="og:description">
		<meta content="https://soafen.love/img/closeup.png" property="og:image">
		<meta content="#ff84aa" data-react-helmet="true" name="theme-color">
		<link rel="stylesheet" href="../css/tv.css">
		<link rel="shortcut icon" type="image/png" href="img/sophieheart.png"/>
		<link rel="stylesheet" href="icomoon/style.css">
		<link rel="manifest" href="manifest.json">
    </head>
    <body>
        <div style="text-align:center;font-weight:bold;font-size:56px;padding-top:16px;">soafenTV</div>
        <div id="tv_container">
            <iframe id="video" width="853" height="481" src="https://www.youtube.com/embed/sACpNTPND7I" allowfullscreen="" frameborder="0"></iframe>
            <iframe id="chat" width="352" height="210" src="https://www.youtube.com/live_chat?v=sACpNTPND7I&embed_domain=soafen.love" frameborder="0"></iframe>
            <aside id="notes" style="border:8px solid #ff84aa;background-color:#FFE9E8;width:460px;height:440px;"><div style="position:relative;top:10px;left:10px;max-width:440px;"><h4>hello world!</h4><span id="date">16th Oct, 2021</span><br>i have now made a little page for soafenTV instead of just a redirect to the youtube page c;<br>Now Playing: <?php $nowplaying = file_get_contents('./sync/nowplaying.txt');
echo $nowplaying ?></div></aside>
            <div id="tv_frame"></div>
        </div>
    </body>
</html>
