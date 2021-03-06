<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Azure Web App Demo</title>
    <script type="text/javascript">
      var appInsights=window.appInsights||function(config){
        function i(config){t[config]=function(){var i=arguments;t.queue.push(function(){t[config].apply(t,i)})}}var t={config:config},u=document,e=window,o="script",s="AuthenticatedUserContext",h="start",c="stop",l="Track",a=l+"Event",v=l+"Page",y=u.createElement(o),r,f;y.src=config.url||"https://az416426.vo.msecnd.net/scripts/a/ai.0.js";u.getElementsByTagName(o)[0].parentNode.appendChild(y);try{t.cookie=u.cookie}catch(p){}for(t.queue=[],t.version="1.0",r=["Event","Exception","Metric","PageView","Trace","Dependency"];r.length;)i("track"+r.pop());return i("set"+s),i("clear"+s),i(h+a),i(c+a),i(h+v),i(c+v),i("flush"),config.disableExceptionTracking||(r="onerror",i("_"+r),f=e[r],e[r]=function(config,i,u,e,o){var s=f&&f(config,i,u,e,o);return s!==!0&&t["_"+r](config,i,u,e,o),s}),t
        }({
            instrumentationKey:"399ce212-9a74-407a-b5b3-4463cdde4a1a"
        });

        window.appInsights=appInsights;
        appInsights.trackPageView();
    </script>
    <style>
      body {background-color: powderblue;}
      h1   {color: blue;}
      p    {color: red;}
    </style>
  </head>
  <body>
    <h1>Azure Demo Web App</h1>
    <?php
      $myhost = gethostname();
      echo "<p>Hello there, hostname of server is {$myhost}!</p>";
    ?>
    <div>
      <img src="./media/images/php.svg" align="middle" width="20%">
    </div>
    <div>
      <h3>Links</h3>
      <a href="./slow.php">Slow Loading Page</a>
      <a href="./exception.php">Exception Page</a>
    </div>
  </body>
</html>
