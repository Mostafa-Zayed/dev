<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>
<style>/*.search:before{content:"\f002"}*/
    /*! normalize.css v3.0.2 | MIT License | git.io/normalize */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{font-size:2em;margin:.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}.content h1,.content h2,.content h3,.content h4,.content h5,.content h6,body,html{font-family:Helvetica Neue,Helvetica,Arial,Microsoft Yahei,å¾®è½¯é›…é»‘,STXihei,åŽæ–‡ç»†é»‘,sans-serif;font-size:13px}.content h1,.content h2,.content h3,.content h4,.content h5,.content h6{font-weight:700}.content code,.content pre{font-family:Consolas,Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;font-size:12px;line-height:1.5}.content code{word-break:break-all;word-break:break-word;-webkit-hyphens:auto;-ms-hyphens:auto;hyphens:auto}@font-face{font-family:FontAwesome;font-style:normal;font-weight:400;src:url(fonts/fontawesome-webfont.eot?v=#4.0.3);src:url(fonts/fontawesome-webfont.eot?#iefix&v=#4.0.3) format("embedded-opentype"),url(fonts/fontawesome-webfont.woff?v=#4.0.3) format("woff"),url(fonts/fontawesome-webfont.ttf?v=#4.0.3) format("truetype"),url(fonts/fontawesome-webfont.svg#fontawesomeregular?v=#4.0.3) format("svg")}.content aside.notice:before,.content aside.success:before,.content aside.warning:before,.tocify-wrapper>.search:before{font-family:FontAwesome;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1}.content aside.warning:before{content:"\f06a"}.content aside.notice:before{content:"\f05a"}.content aside.success:before{content:"\f058"}.tocify-wrapper>.highlight .c,.highlight .c1,.highlight .cm,.highlight .cs{color:#909090}.highlight,.highlight .w{background-color:#292929}.hljs{display:block;overflow-x:auto;padding:.5em;background:#23241f}.hljs,.hljs-subst,.hljs-tag{color:#f8f8f2}.hljs-emphasis,.hljs-strong{color:#a8a8a2}.hljs-bullet,.hljs-link,.hljs-literal,.hljs-number,.hljs-quote,.hljs-regexp{color:#ae81ff}.hljs-code,.hljs-section,.hljs-selector-class,.hljs-title{color:#a6e22e}.hljs-strong{font-weight:700}.hljs-emphasis{font-style:italic}.hljs-attr,.hljs-keyword,.hljs-name,.hljs-selector-tag{color:#f92672}.hljs-attribute,.hljs-symbol{color:#66d9ef}.hljs-class .hljs-title,.hljs-params{color:#f8f8f2}.hljs-addition,.hljs-built_in,.hljs-builtin-name,.hljs-selector-attr,.hljs-selector-id,.hljs-selector-pseudo,.hljs-string,.hljs-template-variable,.hljs-type,.hljs-variable{color:#e6db74}.hljs-comment,.hljs-deletion,.hljs-meta{color:#75715e}body,html{color:#333;padding:0;margin:0;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background-color:#eaf2f6;height:100%;-webkit-text-size-adjust:none}#toc>ul>li>a>span{float:right;background-color:#2484ff;border-radius:40px;width:20px}.tocify-wrapper{transition:left .3s ease-in-out;overflow-y:auto;overflow-x:hidden;position:fixed;z-index:30;top:0;left:0;bottom:0;width:230px;background-color:#393939;font-size:13px;font-weight:700}.tocify-wrapper .lang-selector{display:none}.tocify-wrapper .lang-selector a{padding-top:.5em;padding-bottom:.5em}.tocify-wrapper>img{display:block}.tocify-wrapper>.search{position:relative}.tocify-wrapper>.search input{background:#393939;border-width:0 0 1px;border-color:#666;padding:6px 0 6px 20px;box-sizing:border-box;margin:10px 15px;width:200px;outline:none;color:#fff;border-radius:0}.tocify-wrapper>.search:before{position:absolute;top:17px;left:15px;color:#fff}.tocify-wrapper img+.tocify{margin-top:20px}.tocify-wrapper .search-results{margin-top:0;box-sizing:border-box;height:0;overflow-y:auto;overflow-x:hidden;transition-property:height,margin;transition-duration:.18s;transition-timing-function:ease-in-out;background:linear-gradient(180deg,rgba(0,0,0,.2),transparent 8px),linear-gradient(0deg,rgba(0,0,0,.2),transparent 8px),linear-gradient(180deg,#000,transparent 1.5px),linear-gradient(0deg,#939393,hsla(0,0%,58%,0) 1.5px),#262626}.tocify-wrapper .search-results.visible{height:30%;margin-bottom:1em}.tocify-wrapper .search-results li{margin:1em 15px;line-height:1}.tocify-wrapper .search-results a{color:#fff;text-decoration:none}.tocify-wrapper .search-results a:hover{text-decoration:underline}.tocify-wrapper .toc-footer li,.tocify-wrapper .tocify-item>a{padding:0 15px;display:block;overflow-x:hidden;white-space:nowrap;text-overflow:ellipsis}.tocify-wrapper li,.tocify-wrapper ul{list-style:none;margin:0;padding:0;line-height:28px}.tocify-wrapper li{color:#fff;transition-property:background;transition-timing-function:linear;transition-duration:.23s}.tocify-wrapper .tocify-focus{box-shadow:0 1px 0 #000;background-color:#2467af;color:#fff}.tocify-wrapper .tocify-subheader{display:none;background-color:#262626;font-weight:500;background:linear-gradient(180deg,rgba(0,0,0,.2),transparent 8px),linear-gradient(0deg,rgba(0,0,0,.2),transparent 8px),linear-gradient(180deg,#000,transparent 1.5px),linear-gradient(0deg,#939393,hsla(0,0%,58%,0) 1.5px),#262626}.tocify-wrapper .tocify-subheader .tocify-item>a{padding-left:25px;font-size:12px}.tocify-wrapper .tocify-subheader>li:last-child{box-shadow:none}.tocify-wrapper .toc-footer{padding:1em 0;margin-top:1em;border-top:1px dashed #666}.tocify-wrapper .toc-footer a,.tocify-wrapper .toc-footer li{color:#fff;text-decoration:none}.tocify-wrapper .toc-footer a:hover{text-decoration:underline}.tocify-wrapper .toc-footer li{font-size:.8em;line-height:1.7;text-decoration:none}#nav-button{padding:0 1.5em 5em 0;display:none;position:fixed;top:0;left:0;z-index:100;color:#000;text-decoration:none;font-weight:700;opacity:.7;line-height:16px;transition:left .3s ease-in-out}#nav-button span{display:block;padding:6px;background-color:rgba(234,242,246,.7);-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:rotate(-90deg) translate(-100%);transform:rotate(-90deg) translate(-100%);border-radius:0 0 0 5px}#nav-button img{height:16px;vertical-align:bottom}#nav-button:hover{opacity:1}#nav-button.open{left:230px}.page-wrapper{margin-left:230px;position:relative;z-index:10;background-color:#eaf2f6;min-height:100%;padding-bottom:1px}.page-wrapper .dark-box{width:50%;background-color:#393939;position:absolute;right:0;top:0;bottom:0}.page-wrapper .lang-selector{position:fixed;z-index:50;border-bottom:5px solid #393939}.lang-selector{background-color:#222;width:100%;font-weight:700}.lang-selector a{display:block;float:left;color:#fff;text-decoration:none;padding:0 10px;line-height:30px;outline:0}.lang-selector a:active,.lang-selector a:focus{background-color:#111;color:#fff}.lang-selector a.active{background-color:#393939;color:#fff}.lang-selector:after{content:'';clear:both;display:block}.content{position:relative;z-index:30}.content:after{content:'';display:block;clear:both}.content>aside,.content>dl,.content>h1,.content>h2,.content>h3,.content>h4,.content>h5,.content>h6,.content>ol,.content>p,.content>table,.content>ul{margin-right:50%;padding:0 28px;box-sizing:border-box;display:block;text-shadow:0 1px 0 #fff}.content>ol,.content>ul{padding-left:43px}.content>div,.content>h1,.content>h2{clear:both}.content h1{font-size:30px;padding-top:.5em;padding-bottom:.5em;border-bottom:1px solid #ccc;margin-bottom:21px;margin-top:2em;border-top:1px solid #ddd;background-image:linear-gradient(180deg,#fff,#f9f9f9)}.content div:first-child+h1,.content h1:first-child{border-top-width:0;margin-top:0}.content h2{font-size:20px;margin-top:4em;margin-bottom:0;border-top:1px solid #ccc;padding-top:1.2em;padding-bottom:1.2em;background-image:linear-gradient(180deg,hsla(0,0%,100%,.4),hsla(0,0%,100%,0))}.content h1+div+h2,.content h1+h2{margin-top:-21px;border-top:none}.content h3,.content h4,.content h5,.content h6{font-size:15px;margin-top:2.5em;margin-bottom:.8em}.content h4,.content h5,.content h6{font-size:10px}.content hr{margin:2em 0;border-top:2px solid #393939;border-bottom:2px solid #eaf2f6}.content table{margin-bottom:1em;overflow:auto}.content table td,.content table th{text-align:left;vertical-align:top;line-height:1.6}.content table th{padding:5px 10px;border-bottom:1px solid #ccc;vertical-align:bottom}.content table td{padding:10px}.content table tr:last-child{border-bottom:1px solid #ccc}.content table tr:nth-child(odd)>td{background-color:#ebf3f6}.content table tr:nth-child(even)>td{background-color:#ebf2f6}.content dt{font-weight:700}.content dd{margin-left:15px}.content dd,.content dt,.content li,.content p{line-height:1.6;margin-top:0}.content img{max-width:100%}.content code{background-color:rgba(0,0,0,.05);padding:3px;border-radius:3px}.content pre>code{background-color:transparent;padding:0}.content aside{padding-top:1em;padding-bottom:1em;text-shadow:0 1px 0 #a0c6da;margin-top:1.5em;margin-bottom:1.5em;background:#8fbcd4;line-height:1.6}.content aside.warning{background-color:#c97a7e;text-shadow:0 1px 0 #d18e91}.content aside.success{background-color:#6ac174;text-shadow:0 1px 0 #80ca89}.content aside:before{vertical-align:middle;padding-right:.5em;font-size:14px}.content .search-highlight{padding:2px;margin:-2px;border-radius:4px;border:1px solid #f7e633;text-shadow:1px 1px 0 #666;background:linear-gradient(to top left,#f7e633,#f1d32f)}.content blockquote,.content pre{background-color:#292929;color:#fff;padding:2em 28px;margin:0;width:50%;float:right;clear:right;box-sizing:border-box;text-shadow:0 1px 2px rgba(0,0,0,.4)}.content blockquote>p,.content pre>p{margin:0}.content blockquote a,.content pre a{color:#fff;text-decoration:none;border-bottom:1px dashed #ccc}.content blockquote>p{background-color:#1c1c1c;border-radius:5px;padding:13px;color:#ccc;border-top:1px solid #000;border-bottom:1px solid #404040}@media (max-width:930px){.tocify-wrapper{left:-230px}.tocify-wrapper.open{left:0}.page-wrapper{margin-left:0}#nav-button{display:block}.tocify-wrapper .tocify-item>a{padding-top:.3em;padding-bottom:.3em}}@media (max-width:700px){.dark-box{display:none}.tocify-wrapper .lang-selector{display:block}.page-wrapper .lang-selector{display:none}.content aside,.content dl,.content h1,.content h2,.content h3,.content h4,.content h5,.content h6,.content ol,.content p,.content table,.content ul{margin-right:0}.content blockquote,.content pre{float:none;width:auto}}
</style>


    <link rel="stylesheet" href="css/style.css" />
    
    
    
    <script src="{{asset('js/docs.js')}}" type="35baa7ef7b36925f865633bf-text/javascript">
        
    </script>


          <script type="35baa7ef7b36925f865633bf-text/javascript">
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="https://erp2.vooerp.com/uploads/business_logos/1579600055_logo.png" style="width: 96%;" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
                                <i class="fa fa-search"></i>
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href="https://github.com/mpociot/documentarian">Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<!--<a href="https://pos.ultimatefosters.com/docs/collection.json">Get Postman Collection</a></p>-->
<a href="https://www.getpostman.com/collections/846bf85f19cab5978667">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Authentication</h1>
<ul>
  <!--  <li>Login to the application and navigate to <code>/connector/client</code></li>
    <li>Create new client and generate <code>Client ID</code> and <code>Client secret</code></li>Once you have created the client, -->
    <li>you may request an access token by issuing a POST request to the api/oauth/token route <br>

<code>
    $http = new GuzzleHttp\Client;<br>
    $response = $http->post('https://erp2.vooerp.com/api/oauth/token', <br>
                    [<br>
                        'form_params' => [<br>
                        <!--    'grant_type' => 'password',<br>
                            'client_id' => 'client-id',<br>
                            'client_secret' => 'client-secret',<br>-->
                            'username' => '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6b2a7bfaaa9b486aaa7b4a7b0a3aae8a5a9ab">[email&#160;protected]</a>',<br>
                            'password' => 'my-password',<br>
                          <!--  'scope' => '',<br>-->
                        ],
                    ]);
</code>
</li>
</ul>
<!--<h1>Attendance management</h1>
<!-- START_9ae23d9501cf189191c42c7a11186348 -->
<!--<h2>Get Attendance</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/get-attendance/1" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/get-attendance/1"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": {-->
<!--        "id": 4,-->
<!--        "user_id": 1,-->
<!--        "business_id": 1,-->
<!--        "clock_in_time": "2020-09-12 13:13:00",-->
<!--        "clock_out_time": "2020-09-12 13:15:00",-->
<!--        "essentials_shift_id": 3,-->
<!--        "ip_address": null,-->
<!--        "clock_in_note": "test clock in from api",-->
<!--        "clock_out_note": "test clock out from api",-->
<!--        "created_at": "2020-09-12 13:14:39",-->
<!--        "updated_at": "2020-09-12 13:15:39"-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/get-attendance/{user_id}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>user_id</code></td>-->
<!--<td>required</td>-->
<!--<td>id of the user</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_9ae23d9501cf189191c42c7a11186348 -->
<!-- START_86034849f2363a6ed4cbb02ef6ad64c9 -->
<!--<h2>Clock In</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X POST \-->
<!--    "https://erp2.vooerp.com/connector/api/clock-in" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}" \-->
<!--    -d '{"user_id":1,"clock_in_time":"2000-06-13 13:13:00","clock_in_note":"impedit","ip_address":"eos"}'-->
<!--</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/clock-in"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--let body = {-->
<!--    "user_id": 1,-->
<!--    "clock_in_time": "2000-06-13 13:13:00",-->
<!--    "clock_in_note": "impedit",-->
<!--    "ip_address": "eos"-->
<!--}-->

<!--fetch(url, {-->
<!--    method: "POST",-->
<!--    headers: headers,-->
<!--    body: body-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "success": true,-->
<!--    "msg": "Clocked In successfully",-->
<!--    "type": "clock_in"-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>POST connector/api/clock-in</code></p>-->
<!--<h4>Body Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Type</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>user_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>required</td>-->
<!--<td>id of the user</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>clock_in_time</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Clock in time.If not given current date time will be used Fromat: Y-m-d H:i:s</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>clock_in_note</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Clock in note.</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>ip_address</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>IP address.</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_86034849f2363a6ed4cbb02ef6ad64c9 -->
<!-- START_ef6b9e3a21e12aef21cc7ca8267097a1 -->
<!--<h2>Clock Out</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X POST \-->
<!--    "https://erp2.vooerp.com/connector/api/clock-out" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}" \-->
<!--    -d '{"user_id":1,"clock_out_time":"2000-06-13 13:13:00","clock_out_note":"voluptatem"}'-->
<!--</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/clock-out"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--let body = {-->
<!--    "user_id": 1,-->
<!--    "clock_out_time": "2000-06-13 13:13:00",-->
<!--    "clock_out_note": "voluptatem"-->
<!--}-->

<!--fetch(url, {-->
<!--    method: "POST",-->
<!--    headers: headers,-->
<!--    body: body-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "success": true,-->
<!--    "msg": "Clocked Out successfully",-->
<!--    "type": "clock_out"-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>POST connector/api/clock-out</code></p>-->
<!--<h4>Body Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Type</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>user_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>required</td>-->
<!--<td>id of the user</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>clock_out_time</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Clock out time.If not given current date time will be used Fromat: Y-m-d H:i:s</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>clock_out_note</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Clock out note.</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_ef6b9e3a21e12aef21cc7ca8267097a1 -->
<!-- START_eeb42bc2e93c8f36f4bb83992f9334f9 -->
<!--<h2>List Holidays</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/holidays?location_id=voluptatem&amp;start_date=2020-06-25&amp;end_date=2020-06-25" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/holidays"-->
<!--);-->

<!--let params = {-->
<!--    "location_id": "voluptatem",-->
<!--    "start_date": "2020-06-25",-->
<!--    "end_date": "2020-06-25",-->
<!--};-->
<!--Object.keys(params)-->
<!--    .forEach(key =&gt; url.searchParams.append(key, params[key]));-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 2,-->
<!--            "name": "Independence Day",-->
<!--            "start_date": "2020-08-15",-->
<!--            "end_date": "2020-09-15",-->
<!--            "business_id": 1,-->
<!--            "location_id": null,-->
<!--            "note": "test holiday",-->
<!--            "created_at": "2020-09-15 11:25:56",-->
<!--            "updated_at": "2020-09-15 11:25:56"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/holidays</code></p>-->
<!--<h4>Query Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>start_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>end_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_eeb42bc2e93c8f36f4bb83992f9334f9 -->
<h1>Brand management</h1>
<!-- START_86f2ea444a3e2e0add4c92cf461b2468 -->
<h2>List brands</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/brand"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "business_id": 1,
            "name": "Levis",
            "description": null,
            "created_by": 1,
            "deleted_at": null,
            "created_at": "2018-01-03 21:19:47",
            "updated_at": "2018-01-03 21:19:47"
        },
        {
            "id": 2,
            "business_id": 1,
            "name": "Espirit",
            "description": null,
            "created_by": 1,
            "deleted_at": null,
            "created_at": "2018-01-03 21:19:58",
            "updated_at": "2018-01-03 21:19:58"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/brand</code></p>
<!-- END_86f2ea444a3e2e0add4c92cf461b2468 -->
<!-- START_d1614880df4d370cfc4ed7ec60bcf52c -->
<h2>Get the specified brand</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "business_id": 1,
            "name": "Levis",
            "description": null,
            "created_by": 1,
            "deleted_at": null,
            "created_at": "2018-01-03 21:19:47",
            "updated_at": "2018-01-03 21:19:47"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/brand/{brand}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>brand</code></td>
<td>required</td>
<td>comma separated ids of the brands</td>
</tr>
</tbody>
</table>
<!-- END_d1614880df4d370cfc4ed7ec60bcf52c -->
<h1>Business Location management</h1>
<!-- START_c072951d4602fe0a03aff23281064400 -->
<h2>List business locations</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/business-location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/business-location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "business_id": 1,
            "location_id": null,
            "name": "Awesome Shop",
            "landmark": "Linking Street",
            "country": "USA",
            "state": "Arizona",
            "city": "Phoenix",
            "zip_code": "85001",
            "invoice_scheme_id": 1,
            "invoice_layout_id": 1,
            "selling_price_group_id": null,
            "print_receipt_on_invoice": 1,
            "receipt_printer_type": "browser",
            "printer_id": null,
            "mobile": null,
            "alternate_number": null,
            "email": null,
            "website": null,
            "featured_products": [
                "5",
                "71"
            ],
            "is_active": 1,
            "payment_methods": [
                {
                    "name": "cash",
                    "label": "Cash",
                    "account_id": "1"
                },
                {
                    "name": "card",
                    "label": "Card",
                    "account_id": null
                },
                {
                    "name": "cheque",
                    "label": "Cheque",
                    "account_id": null
                },
                {
                    "name": "bank_transfer",
                    "label": "Bank Transfer",
                    "account_id": null
                },
                {
                    "name": "other",
                    "label": "Other",
                    "account_id": null
                },
                {
                    "name": "custom_pay_1",
                    "label": "Custom Payment 1",
                    "account_id": null
                },
                {
                    "name": "custom_pay_2",
                    "label": "Custom Payment 2",
                    "account_id": null
                },
                {
                    "name": "custom_pay_3",
                    "label": "Custom Payment 3",
                    "account_id": null
                }
            ],
            "custom_field1": null,
            "custom_field2": null,
            "custom_field3": null,
            "custom_field4": null,
            "deleted_at": null,
            "created_at": "2018-01-04 02:15:20",
            "updated_at": "2020-06-05 00:56:54"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/business-location</code></p>
<!-- END_c072951d4602fe0a03aff23281064400 -->
<!-- START_9104e27d4bc4c1062e9f47ae0f6c6b4e -->
<h2>Get the specified business location</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/business-location/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/business-location/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "business_id": 1,
            "location_id": null,
            "name": "Awesome Shop",
            "landmark": "Linking Street",
            "country": "USA",
            "state": "Arizona",
            "city": "Phoenix",
            "zip_code": "85001",
            "invoice_scheme_id": 1,
            "invoice_layout_id": 1,
            "selling_price_group_id": null,
            "print_receipt_on_invoice": 1,
            "receipt_printer_type": "browser",
            "printer_id": null,
            "mobile": null,
            "alternate_number": null,
            "email": null,
            "website": null,
            "featured_products": [
                "5",
                "71"
            ],
            "is_active": 1,
            "payment_methods": [
                {
                    "name": "cash",
                    "label": "Cash",
                    "account_id": "1"
                },
                {
                    "name": "card",
                    "label": "Card",
                    "account_id": null
                },
                {
                    "name": "cheque",
                    "label": "Cheque",
                    "account_id": null
                },
                {
                    "name": "bank_transfer",
                    "label": "Bank Transfer",
                    "account_id": null
                },
                {
                    "name": "other",
                    "label": "Other",
                    "account_id": null
                },
                {
                    "name": "custom_pay_1",
                    "label": "Custom Payment 1",
                    "account_id": null
                },
                {
                    "name": "custom_pay_2",
                    "label": "Custom Payment 2",
                    "account_id": null
                },
                {
                    "name": "custom_pay_3",
                    "label": "Custom Payment 3",
                    "account_id": null
                }
            ],
            "custom_field1": null,
            "custom_field2": null,
            "custom_field3": null,
            "custom_field4": null,
            "deleted_at": null,
            "created_at": "2018-01-04 02:15:20",
            "updated_at": "2020-06-05 00:56:54"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/business-location/{business_location}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location</code></td>
<td>required</td>
<td>comma separated ids of the business location</td>
</tr>
</tbody>
</table>
<!-- END_9104e27d4bc4c1062e9f47ae0f6c6b4e -->
<!--<h1>Cash register management</h1>-->
<!-- START_a50604bed9adc4013802a310b95b65d4 -->
<!--<h2>List Cash Registers</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/cash-register?status=open&amp;user_id=10&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;location_id=qui&amp;per_page=15" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/cash-register"-->
<!--);-->

<!--let params = {-->
<!--    "status": "open",-->
<!--    "user_id": "10",-->
<!--    "start_date": "2018-06-25",-->
<!--    "end_date": "2018-06-25",-->
<!--    "location_id": "qui",-->
<!--    "per_page": "15",-->
<!--};-->
<!--Object.keys(params)-->
<!--    .forEach(key =&gt; url.searchParams.append(key, params[key]));-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "user_id": 9,-->
<!--            "status": "open",-->
<!--            "closed_at": null,-->
<!--            "closing_amount": "0.0000",-->
<!--            "total_card_slips": 0,-->
<!--            "total_cheques": 0,-->
<!--            "closing_note": null,-->
<!--            "created_at": "2020-07-02 12:03:00",-->
<!--            "updated_at": "2020-07-02 12:03:19",-->
<!--            "cash_register_transactions": [-->
<!--                {-->
<!--                    "id": 1,-->
<!--                    "cash_register_id": 1,-->
<!--                    "amount": "0.0000",-->
<!--                    "pay_method": "cash",-->
<!--                    "type": "credit",-->
<!--                    "transaction_type": "initial",-->
<!--                    "transaction_id": null,-->
<!--                    "created_at": "2018-07-13 07:39:34",-->
<!--                    "updated_at": "2018-07-13 07:39:34"-->
<!--                },-->
<!--                {-->
<!--                    "id": 2,-->
<!--                    "cash_register_id": 1,-->
<!--                    "amount": "42.5000",-->
<!--                    "pay_method": "cash",-->
<!--                    "type": "credit",-->
<!--                    "transaction_type": "sell",-->
<!--                    "transaction_id": 41,-->
<!--                    "created_at": "2018-07-13 07:44:40",-->
<!--                    "updated_at": "2018-07-13 07:44:40"-->
<!--                }-->
<!--            ]-->
<!--        },-->
<!--        {-->
<!--            "id": 2,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "user_id": 1,-->
<!--            "status": "",-->
<!--            "closed_at": "2020-07-02 12:03:00",-->
<!--            "closing_amount": "0.0000",-->
<!--            "total_card_slips": 0,-->
<!--            "total_cheques": 0,-->
<!--            "closing_note": null,-->
<!--            "created_at": "2020-07-06 15:38:23",-->
<!--            "updated_at": "2020-07-06 15:38:23",-->
<!--            "cash_register_transactions": [-->
<!--                {-->
<!--                    "id": 19,-->
<!--                    "cash_register_id": 2,-->
<!--                    "amount": "10.0000",-->
<!--                    "pay_method": "cash",-->
<!--                    "type": "credit",-->
<!--                    "transaction_type": "initial",-->
<!--                    "transaction_id": null,-->
<!--                    "created_at": "2020-07-06 15:38:23",-->
<!--                    "updated_at": "2020-07-06 15:38:23"-->
<!--                }-->
<!--            ]-->
<!--        }-->
<!--    ],-->
<!--    "links": {-->
<!--        "first": "http:\/\/local.pos.com\/connector\/api\/cash-register?page=1",-->
<!--        "last": null,-->
<!--        "prev": null,-->
<!--        "next": null-->
<!--    },-->
<!--    "meta": {-->
<!--        "current_page": 1,-->
<!--        "from": 1,-->
<!--        "path": "http:\/\/local.pos.com\/connector\/api\/cash-register",-->
<!--        "per_page": 10,-->
<!--        "to": 2-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/cash-register</code></p>-->
<!--<h4>Query Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>status</code></td>-->
<!--<td>optional</td>-->
<!--<td>status of the register (open, close)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>user_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the user</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>start_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>end_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>per_page</code></td>-->
<!--<td>optional</td>-->
<!--<td>Total records per page. default: 10, Set -1 for no pagination</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_a50604bed9adc4013802a310b95b65d4 -->
<!-- START_8f89eda7862467cd40d78804ce26224f -->
<!--<h2>Create Cash Register</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X POST \-->
<!--    "https://erp2.vooerp.com/connector/api/cash-register" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}" \-->
<!--    -d '{"location_id":19,"initial_amount":147905884.875259,"created_at":"2020-5-7 15:20:22","closed_at":"2020-5-7 15:20:22","status":"close","closing_amount":0,"total_card_slips":5,"total_cheques":5,"closing_note":"voluptas","transaction_ids":"1,2,3"}'-->
<!--</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/cash-register"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--let body = {-->
<!--    "location_id": 19,-->
<!--    "initial_amount": 147905884.875259,-->
<!--    "created_at": "2020-5-7 15:20:22",-->
<!--    "closed_at": "2020-5-7 15:20:22",-->
<!--    "status": "close",-->
<!--    "closing_amount": 0,-->
<!--    "total_card_slips": 5,-->
<!--    "total_cheques": 5,-->
<!--    "closing_note": "voluptas",-->
<!--    "transaction_ids": "1,2,3"-->
<!--}-->

<!--fetch(url, {-->
<!--    method: "POST",-->
<!--    headers: headers,-->
<!--    body: body-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>POST connector/api/cash-register</code></p>-->
<!--<h4>Body Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Type</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>required</td>-->
<!--<td>id of the business location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>initial_amount</code></td>-->
<!--<td>float</td>-->
<!--<td>optional</td>-->
<!--<td>Initial amount</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>created_at</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Register open datetime format:Y-m-d H:i:s,</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>closed_at</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Register closed datetime format:Y-m-d H:i:s,</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>status</code></td>-->
<!--<td>register</td>-->
<!--<td>optional</td>-->
<!--<td>status (open, close)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>closing_amount</code></td>-->
<!--<td>float</td>-->
<!--<td>optional</td>-->
<!--<td>Closing amount</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>total_card_slips</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>total number of card slips</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>total_cheques</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>total number of checks</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>closing_note</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Closing note</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>transaction_ids</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>Comma separated ids of sells associated with the register</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_8f89eda7862467cd40d78804ce26224f -->
<!-- START_a2687684d95719fe11a4febbba5369ba -->
<!--<h2>Get the specified Register</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/cash-register/59" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/cash-register/59"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "user_id": 9,-->
<!--            "status": "open",-->
<!--            "closed_at": null,-->
<!--            "closing_amount": "0.0000",-->
<!--            "total_card_slips": 0,-->
<!--            "total_cheques": 0,-->
<!--            "closing_note": null,-->
<!--            "created_at": "2020-07-02 12:03:00",-->
<!--            "updated_at": "2020-07-02 12:03:19",-->
<!--            "cash_register_transactions": [-->
<!--                {-->
<!--                    "id": 1,-->
<!--                    "cash_register_id": 1,-->
<!--                    "amount": "0.0000",-->
<!--                    "pay_method": "cash",-->
<!--                    "type": "credit",-->
<!--                    "transaction_type": "initial",-->
<!--                    "transaction_id": null,-->
<!--                    "created_at": "2018-07-13 07:39:34",-->
<!--                    "updated_at": "2018-07-13 07:39:34"-->
<!--                },-->
<!--                {-->
<!--                    "id": 2,-->
<!--                    "cash_register_id": 1,-->
<!--                    "amount": "42.5000",-->
<!--                    "pay_method": "cash",-->
<!--                    "type": "credit",-->
<!--                    "transaction_type": "sell",-->
<!--                    "transaction_id": 41,-->
<!--                    "created_at": "2018-07-13 07:44:40",-->
<!--                    "updated_at": "2018-07-13 07:44:40"-->
<!--                }-->
<!--            ]-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/cash-register/{cash_register}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>cash_register</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of the cash registers</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_a2687684d95719fe11a4febbba5369ba -->
<h1>Contact management</h1>
<!-- START_07c0ddff380ea6d14e20347286efae96 -->
<h2>List contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/contactapi?type=natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/contactapi"
);

let params = {
    "type": "natus",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "business_id": 1,
            "type": "customer",
            "supplier_business_name": null,
            "name": " Walk-In Customer  ",
            "prefix": null,
            "first_name": "Walk-In Customer",
            "middle_name": null,
            "last_name": null,
            "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e293f323537301e2a3b2d2a703d3133">[email&#160;protected]</a>",
            "contact_id": "CO0005",
            "contact_status": "active",
            "tax_number": null,
            "city": "Phoenix",
            "state": "Arizona",
            "country": "USA",
            "address_line_1": "Linking Street",
            "address_line_2": null,
            "zip_code": "85001",
            "dob": null,
            "mobile": "(378) 400-1234",
            "landline": null,
            "alternate_number": null,
            "pay_term_number": null,
            "pay_term_type": null,
            "credit_limit": "0.0000",
            "created_by": 1,
            "balance": "0.0000",
            "total_rp": 0,
            "total_rp_used": 0,
            "total_rp_expired": 0,
            "is_default": 1,
            "shipping_address": null,
            "position": null,
            "customer_group_id": null,
            "crm_source": null,
            "crm_life_stage": null,
            "custom_field1": null,
            "custom_field2": null,
            "custom_field3": null,
            "custom_field4": null,
            "deleted_at": null,
            "created_at": "2018-01-03 20:45:20",
            "updated_at": "2020-08-10 10:26:45",
            "remember_token": null,
            "password": null
        },
        {
            "id": 2,
            "business_id": 1,
            "type": "supplier",
            "supplier_business_name": "Alpha Clothings",
            "name": "Michael",
            "prefix": null,
            "first_name": "Michael",
            "middle_name": null,
            "last_name": null,
            "email": null,
            "contact_id": "CO0001",
            "contact_status": "active",
            "tax_number": "4590091535",
            "city": "Phoenix",
            "state": "Arizona",
            "country": "USA",
            "address_line_1": "Linking Street",
            "address_line_2": null,
            "zip_code": null,
            "dob": null,
            "mobile": "(378) 400-1234",
            "landline": null,
            "alternate_number": null,
            "pay_term_number": 15,
            "pay_term_type": "days",
            "credit_limit": null,
            "created_by": 1,
            "balance": "0.0000",
            "total_rp": 0,
            "total_rp_used": 0,
            "total_rp_expired": 0,
            "is_default": 0,
            "shipping_address": null,
            "position": null,
            "customer_group_id": null,
            "crm_source": null,
            "crm_life_stage": null,
            "custom_field1": null,
            "custom_field2": null,
            "custom_field3": null,
            "custom_field4": null,
            "deleted_at": null,
            "created_at": "2018-01-03 20:59:38",
            "updated_at": "2018-06-11 22:21:03",
            "remember_token": null,
            "password": null
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/contactapi</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>required</td>
<td>Type of contact (supplier, customer, lead)</td>
</tr>
</tbody>
</table>
<!-- END_07c0ddff380ea6d14e20347286efae96 -->
<!-- START_f29a42b1a8a0ab58c748a1e2fcdfffff -->
<h2>Create contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://erp2.vooerp.com/connector/api/contactapi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"type":"customer","supplier_business_name":"est","prefix":"odio","first_name":"occaecati","middle_name":"ut","last_name":"quo","tax_number":"8787fefef","pay_term_number":3,"pay_term_type":"months","mobile":"4578691009","landline":"5487-8454-4145","alternate_number":"841847541222","address_line_1":"distinctio","address_line_2":"corrupti","city":"est","state":"blanditiis","country":"atque","zip_code":"occaecati","customer_group_id":"fuga","contact_id":"reprehenderit","dob":"2000-06-13","custom_field1":"doloremque","custom_field2":"rerum","custom_field3":"dolorum","custom_field4":"sint","email":"quibusdam","shipping_address":"enim","position":"et","opening_balance":0,"source_id":10,"life_stage_id":19,"assigned_to":[]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/contactapi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": "customer",
    "supplier_business_name": "est",
    "prefix": "odio",
    "first_name": "occaecati",
    "middle_name": "ut",
    "last_name": "quo",
    "tax_number": "8787fefef",
    "pay_term_number": 3,
    "pay_term_type": "months",
    "mobile": "4578691009",
    "landline": "5487-8454-4145",
    "alternate_number": "841847541222",
    "address_line_1": "distinctio",
    "address_line_2": "corrupti",
    "city": "est",
    "state": "blanditiis",
    "country": "atque",
    "zip_code": "occaecati",
    "customer_group_id": "fuga",
    "contact_id": "reprehenderit",
    "dob": "2000-06-13",
    "custom_field1": "doloremque",
    "custom_field2": "rerum",
    "custom_field3": "dolorum",
    "custom_field4": "sint",
    "email": "quibusdam",
    "shipping_address": "enim",
    "position": "et",
    "opening_balance": 0,
    "source_id": 10,
    "life_stage_id": 19,
    "assigned_to": []
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "type": "customer",
        "name": "test customer",
        "tax_number": "75879BHF",
        "mobile": "7878825008",
        "business_id": 1,
        "created_by": 9,
        "credit_limit": null,
        "contact_id": "CO0007",
        "updated_at": "2020-06-04 21:59:21",
        "created_at": "2020-06-04 21:59:21",
        "id": 17
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/contactapi</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>required</td>
<td>Type of contact (supplier, customer, both, lead)</td>
</tr>
<tr>
<td><code>supplier_business_name</code></td>
<td>string</td>
<td>required</td>
<td>Required if type is supplier</td>
</tr>
<tr>
<td><code>prefix</code></td>
<td>string</td>
<td>optional</td>
<td>Prefix for the name of the contact</td>
</tr>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the contact</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>tax_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_number</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>(months ,days)</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>landline</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>alternate_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>state</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>zip_code</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>customer_group_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>dob</code></td>
<td>string</td>
<td>optional</td>
<td>Fromat: Y-m-d</td>
</tr>
<tr>
<td><code>custom_field1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field4</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>shipping_address</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>position</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>opening_balance</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>source_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the source. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>life_stage_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the Life stage. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>assigned_to</code></td>
<td>array</td>
<td>optional</td>
<td>Ids of the users the lead is assigned to. Applicable only if the type is lead</td>
</tr>
</tbody>
</table>
<!-- END_f29a42b1a8a0ab58c748a1e2fcdfffff -->
<!-- START_881831b2bf43ea3a46b0f31984cdcfd4 -->
<h2>Get the specified contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/contactapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/contactapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "business_id": 1,
            "type": "customer",
            "supplier_business_name": null,
            "name": " Walk-In Customer  ",
            "prefix": null,
            "first_name": "Walk-In Customer",
            "middle_name": null,
            "last_name": null,
            "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96e1f7fafdfff8d6e2f3e5e2b8f5f9fb">[email&#160;protected]</a>",
            "contact_id": "CO0005",
            "contact_status": "active",
            "tax_number": null,
            "city": "Phoenix",
            "state": "Arizona",
            "country": "USA",
            "address_line_1": "Linking Street",
            "address_line_2": null,
            "zip_code": "85001",
            "dob": null,
            "mobile": "(378) 400-1234",
            "landline": null,
            "alternate_number": null,
            "pay_term_number": null,
            "pay_term_type": null,
            "credit_limit": "0.0000",
            "created_by": 1,
            "balance": "0.0000",
            "total_rp": 0,
            "total_rp_used": 0,
            "total_rp_expired": 0,
            "is_default": 1,
            "shipping_address": null,
            "position": null,
            "customer_group_id": null,
            "crm_source": null,
            "crm_life_stage": null,
            "custom_field1": null,
            "custom_field2": null,
            "custom_field3": null,
            "custom_field4": null,
            "deleted_at": null,
            "created_at": "2018-01-03 20:45:20",
            "updated_at": "2020-08-10 10:26:45",
            "remember_token": null,
            "password": null,
            "customer_group": null,
            "opening_balance": "0.0000",
            "opening_balance_paid": "0.0000",
            "total_purchase": "0.0000",
            "purchase_paid": "0.0000",
            "total_purchase_return": "0.0000",
            "purchase_return_paid": "0.0000",
            "total_invoice": "2050.0000",
            "invoice_received": "1987.5000",
            "total_sell_return": "0.0000",
            "sell_return_paid": "0.0000",
            "purchase_due": 0,
            "sell_due": 62.5,
            "purchase_return_due": 0,
            "sell_return_due": 0
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/contactapi/{contactapi}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact</code></td>
<td>required</td>
<td>comma separated ids of contacts</td>
</tr>
</tbody>
</table>
<!-- END_881831b2bf43ea3a46b0f31984cdcfd4 -->
<!-- START_0864439d4f7d266432221198feef851d -->
<h2>Update contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://erp2.vooerp.com/connector/api/contactapi/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"type":"customer","supplier_business_name":"distinctio","prefix":"perspiciatis","first_name":"voluptatibus","middle_name":"dignissimos","last_name":"hic","tax_number":"488744dwd","pay_term_number":3,"pay_term_type":"months","mobile":"8795461009","landline":"65484-848-848","alternate_number":"9898795220","address_line_1":"velit","address_line_2":"similique","city":"aut","state":"libero","country":"reiciendis","zip_code":"soluta","customer_group_id":"iure","contact_id":"sed","dob":"2000-06-13","custom_field1":"veritatis","custom_field2":"dolorem","custom_field3":"occaecati","custom_field4":"commodi","email":"unde","shipping_address":"fugiat","position":"voluptas","opening_balance":10.3,"source_id":12,"life_stage_id":2,"assigned_to":[]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/contactapi/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": "customer",
    "supplier_business_name": "distinctio",
    "prefix": "perspiciatis",
    "first_name": "voluptatibus",
    "middle_name": "dignissimos",
    "last_name": "hic",
    "tax_number": "488744dwd",
    "pay_term_number": 3,
    "pay_term_type": "months",
    "mobile": "8795461009",
    "landline": "65484-848-848",
    "alternate_number": "9898795220",
    "address_line_1": "velit",
    "address_line_2": "similique",
    "city": "aut",
    "state": "libero",
    "country": "reiciendis",
    "zip_code": "soluta",
    "customer_group_id": "iure",
    "contact_id": "sed",
    "dob": "2000-06-13",
    "custom_field1": "veritatis",
    "custom_field2": "dolorem",
    "custom_field3": "occaecati",
    "custom_field4": "commodi",
    "email": "unde",
    "shipping_address": "fugiat",
    "position": "voluptas",
    "opening_balance": 10.3,
    "source_id": 12,
    "life_stage_id": 2,
    "assigned_to": []
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 21,
        "business_id": 1,
        "type": "customer",
        "supplier_business_name": null,
        "name": "created from api",
        "prefix": null,
        "first_name": "created from api",
        "middle_name": null,
        "last_name": null,
        "email": null,
        "contact_id": "CO0009",
        "contact_status": "active",
        "tax_number": null,
        "city": null,
        "state": null,
        "country": null,
        "address_line_1": "test address",
        "address_line_2": null,
        "zip_code": "54878787",
        "dob": "2000-06-13",
        "mobile": "8754154872154",
        "landline": null,
        "alternate_number": null,
        "pay_term_number": null,
        "pay_term_type": null,
        "credit_limit": null,
        "created_by": 1,
        "balance": "0.0000",
        "total_rp": 0,
        "total_rp_used": 0,
        "total_rp_expired": 0,
        "is_default": 0,
        "shipping_address": null,
        "position": null,
        "customer_group_id": null,
        "crm_source": null,
        "crm_life_stage": null,
        "custom_field1": null,
        "custom_field2": null,
        "custom_field3": null,
        "custom_field4": null,
        "deleted_at": null,
        "created_at": "2020-08-10 10:41:42",
        "updated_at": "2020-08-10 10:41:42",
        "remember_token": null,
        "password": null
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT connector/api/contactapi/{contactapi}</code></p>
<p><code>PATCH connector/api/contactapi/{contactapi}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact</code></td>
<td>required</td>
<td>id of the contact to be updated</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>optional</td>
<td>Type of contact (supplier, customer, both)</td>
</tr>
<tr>
<td><code>supplier_business_name</code></td>
<td>string</td>
<td>optional</td>
<td>required* Required if type is supplier</td>
</tr>
<tr>
<td><code>prefix</code></td>
<td>string</td>
<td>optional</td>
<td>Prefix for the name of the contact</td>
</tr>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the contact</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>tax_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_number</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>(months ,days)</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>landline</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>alternate_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>state</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>zip_code</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>customer_group_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>dob</code></td>
<td>string</td>
<td>optional</td>
<td>Fromat: Y-m-d</td>
</tr>
<tr>
<td><code>custom_field1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field4</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>shipping_address</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>position</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>opening_balance</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>source_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the source. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>life_stage_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the Life stage. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>assigned_to</code></td>
<td>array</td>
<td>optional</td>
<td>Ids of the users the lead is assigned to. Applicable only if the type is lead</td>
</tr>
</tbody>
</table>
<!-- END_0864439d4f7d266432221198feef851d -->
<!-- START_c00ac6505428393ae74ea7f7419d9de5 -->
<h2>Contact payment</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://erp2.vooerp.com/connector/api/contactapi-payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"contact_id":17,"amount":453.13,"method":"cash","paid_on":"2020-07-22 15:48:29","account_id":14,"card_number":"cumque","card_holder_name":"ipsa","card_transaction_number":"sit","card_type":"quia","card_month":"fugiat","card_year":"aliquid","card_security":"voluptatum","transaction_no_1":"aliquid","transaction_no_2":"sed","transaction_no_3":"et","cheque_number":"vitae","bank_account_number":"placeat","note":"velit"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/contactapi-payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "contact_id": 17,
    "amount": 453.13,
    "method": "cash",
    "paid_on": "2020-07-22 15:48:29",
    "account_id": 14,
    "card_number": "cumque",
    "card_holder_name": "ipsa",
    "card_transaction_number": "sit",
    "card_type": "quia",
    "card_month": "fugiat",
    "card_year": "aliquid",
    "card_security": "voluptatum",
    "transaction_no_1": "aliquid",
    "transaction_no_2": "sed",
    "transaction_no_3": "et",
    "cheque_number": "vitae",
    "bank_account_number": "placeat",
    "note": "velit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "amount": "20",
        "method": "cash",
        "paid_on": "2020-07-22 15:48:29",
        "created_by": 1,
        "payment_for": "19",
        "business_id": 1,
        "is_advance": 1,
        "payment_ref_no": "SP2020\/0127",
        "document": null,
        "updated_at": "2020-07-22 15:48:29",
        "created_at": "2020-07-22 15:48:29",
        "id": 215
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/contactapi-payment</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the contact</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>float</td>
<td>required</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>paid_on</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>bank_account_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
</tbody>
</table>
<!-- END_c00ac6505428393ae74ea7f7419d9de5 -->
<!--<h1>Expense management</h1>-->
<!-- START_730bcfb1e5b171a39d96ecb8931567ef -->
<!--<h2>List expenses</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/expense?location_id=in&amp;payment_status=paid&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;expense_for=ipsam&amp;per_page=15" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/expense"-->
<!--);-->

<!--let params = {-->
<!--    "location_id": "in",-->
<!--    "payment_status": "paid",-->
<!--    "start_date": "2018-06-25",-->
<!--    "end_date": "2018-06-25",-->
<!--    "expense_for": "ipsam",-->
<!--    "per_page": "15",-->
<!--};-->
<!--Object.keys(params)-->
<!--    .forEach(key =&gt; url.searchParams.append(key, params[key]));-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 59,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "payment_status": "due",-->
<!--            "ref_no": "EP2020\/0001",-->
<!--            "transaction_date": "2020-07-03 12:58:00",-->
<!--            "total_before_tax": "50.0000",-->
<!--            "tax_id": null,-->
<!--            "tax_amount": "0.0000",-->
<!--            "final_total": "50.0000",-->
<!--            "expense_category_id": null,-->
<!--            "document": null,-->
<!--            "created_by": 9,-->
<!--            "is_recurring": 0,-->
<!--            "recur_interval": null,-->
<!--            "recur_interval_type": null,-->
<!--            "recur_repetitions": null,-->
<!--            "recur_stopped_on": null,-->
<!--            "recur_parent_id": null,-->
<!--            "created_at": "2020-07-03 12:58:23",-->
<!--            "updated_at": "2020-07-03 12:58:24",-->
<!--            "transaction_for": {-->
<!--                "id": 1,-->
<!--                "user_type": "user",-->
<!--                "surname": "Mr",-->
<!--                "first_name": "Admin",-->
<!--                "last_name": null,-->
<!--                "username": "admin",-->
<!--                "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cbaaafa6a2a58baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a>",-->
<!--                "language": "en",-->
<!--                "contact_no": null,-->
<!--                "address": null,-->
<!--                "business_id": 1,-->
<!--                "max_sales_discount_percent": null,-->
<!--                "allow_login": 1,-->
<!--                "essentials_department_id": null,-->
<!--                "essentials_designation_id": null,-->
<!--                "status": "active",-->
<!--                "crm_contact_id": null,-->
<!--                "is_cmmsn_agnt": 0,-->
<!--                "cmmsn_percent": "0.00",-->
<!--                "selected_contacts": 0,-->
<!--                "dob": null,-->
<!--                "gender": null,-->
<!--                "marital_status": null,-->
<!--                "blood_group": null,-->
<!--                "contact_number": null,-->
<!--                "fb_link": null,-->
<!--                "twitter_link": null,-->
<!--                "social_media_1": null,-->
<!--                "social_media_2": null,-->
<!--                "permanent_address": null,-->
<!--                "current_address": null,-->
<!--                "guardian_name": null,-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null,-->
<!--                "bank_details": null,-->
<!--                "id_proof_name": null,-->
<!--                "id_proof_number": null,-->
<!--                "deleted_at": null,-->
<!--                "created_at": "2018-01-04 02:15:19",-->
<!--                "updated_at": "2018-01-04 02:15:19"-->
<!--            }-->
<!--        }-->
<!--    ],-->
<!--    "links": {-->
<!--        "first": "http:\/\/local.pos.com\/connector\/api\/expense?page=1",-->
<!--        "last": null,-->
<!--        "prev": null,-->
<!--        "next": null-->
<!--    },-->
<!--    "meta": {-->
<!--        "current_page": 1,-->
<!--        "from": 1,-->
<!--        "path": "http:\/\/local.pos.com\/connector\/api\/expense",-->
<!--        "per_page": 10,-->
<!--        "to": 1-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/expense</code></p>-->
<!--<h4>Query Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment_status</code></td>-->
<!--<td>optional</td>-->
<!--<td>payment status</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>start_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>end_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>expense_for</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the user for which expense is created</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>per_page</code></td>-->
<!--<td>optional</td>-->
<!--<td>Total records per page. default: 10, Set -1 for no pagination</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_730bcfb1e5b171a39d96ecb8931567ef -->
<!-- START_b9605a38c94472a8465c59bff2c0789d -->
<!--<h2>Create expense / expense refund</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X POST \-->
<!--    "https://erp2.vooerp.com/connector/api/expense" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}" \-->
<!--    -d '{"location_id":20,"final_total":7825.93,"transaction_date":"2020-5-7 15:20:22","tax_rate_id":12,"expense_for":1,"contact_id":17,"additional_notes":"molestiae","is_refund":0,"is_recurring":0,"recur_interval":6,"recur_interval_type":"months","subscription_repeat_on":15,"subscription_no":"est","recur_repetitions":11,"payment":[{"amount":453.13,"method":"cash","account_id":8,"card_number":"sequi","card_holder_name":"sint","card_transaction_number":"recusandae","card_type":"corporis","card_month":"tempora","card_year":"architecto","card_security":"asperiores","transaction_no_1":"quisquam","transaction_no_2":"doloremque","transaction_no_3":"odio","note":"beatae","cheque_number":"fugiat"}]}'-->
<!--</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/expense"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--let body = {-->
<!--    "location_id": 20,-->
<!--    "final_total": 7825.93,-->
<!--    "transaction_date": "2020-5-7 15:20:22",-->
<!--    "tax_rate_id": 12,-->
<!--    "expense_for": 1,-->
<!--    "contact_id": 17,-->
<!--    "additional_notes": "molestiae",-->
<!--    "is_refund": 0,-->
<!--    "is_recurring": 0,-->
<!--    "recur_interval": 6,-->
<!--    "recur_interval_type": "months",-->
<!--    "subscription_repeat_on": 15,-->
<!--    "subscription_no": "est",-->
<!--    "recur_repetitions": 11,-->
<!--    "payment": [-->
<!--        {-->
<!--            "amount": 453.13,-->
<!--            "method": "cash",-->
<!--            "account_id": 8,-->
<!--            "card_number": "sequi",-->
<!--            "card_holder_name": "sint",-->
<!--            "card_transaction_number": "recusandae",-->
<!--            "card_type": "corporis",-->
<!--            "card_month": "tempora",-->
<!--            "card_year": "architecto",-->
<!--            "card_security": "asperiores",-->
<!--            "transaction_no_1": "quisquam",-->
<!--            "transaction_no_2": "doloremque",-->
<!--            "transaction_no_3": "odio",-->
<!--            "note": "beatae",-->
<!--            "cheque_number": "fugiat"-->
<!--        }-->
<!--    ]-->
<!--}-->

<!--fetch(url, {-->
<!--    method: "POST",-->
<!--    headers: headers,-->
<!--    body: body-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": {-->
<!--        "id": 75,-->
<!--        "business_id": 1,-->
<!--        "location_id": "1",-->
<!--        "payment_status": "due",-->
<!--        "ref_no": "EP2020\/0013",-->
<!--        "transaction_date": "2020-07-06T05:31:29.480975Z",-->
<!--        "total_before_tax": "43",-->
<!--        "tax_id": null,-->
<!--        "tax_amount": 0,-->
<!--        "final_total": "43",-->
<!--        "expense_category_id": null,-->
<!--        "document": null,-->
<!--        "created_by": 1,-->
<!--        "is_recurring": 0,-->
<!--        "recur_interval": null,-->
<!--        "recur_interval_type": null,-->
<!--        "recur_repetitions": null,-->
<!--        "recur_stopped_on": null,-->
<!--        "recur_parent_id": null,-->
<!--        "created_at": "2020-07-06 11:01:29",-->
<!--        "updated_at": "2020-07-06 11:01:29",-->
<!--        "expense_for": []-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>POST connector/api/expense</code></p>-->
<!--<h4>Body Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Type</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>required</td>-->
<!--<td>id of the business location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>final_total</code></td>-->
<!--<td>float</td>-->
<!--<td>required</td>-->
<!--<td>Expense amount</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>transaction_date</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>transaction date format:Y-m-d H:i:s,</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>tax_rate_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>id of the tax rate applicable to the expense</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>expense_for</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>id of the user for which expense is created</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>contact_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>id of the contact(customer or supplier) for which expense is created</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>additional_notes</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>is_refund</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>whether expense refund (0, 1)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>is_recurring</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>whether expense is recurring (0, 1)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>recur_interval</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>value of the interval expense will be regenerated</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>recur_interval_type</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>type of the recur interval ('days', 'months', 'years')</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>subscription_repeat_on</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>day of the month on which expense will be generated if recur interval type is months (1-30)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>subscription_no</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>subscription number</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>recur_repetitions</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>total number of expense to be generated</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment</code></td>-->
<!--<td>array</td>-->
<!--<td>optional</td>-->
<!--<td>payment lines for the expense</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.amount</code></td>-->
<!--<td>float</td>-->
<!--<td>optional</td>-->
<!--<td>amount of the payment</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.method</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.account_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>account id</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_number</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_holder_name</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_transaction_number</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_type</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_month</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_year</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.card_security</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.transaction_no_1</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.transaction_no_2</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.transaction_no_3</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.note</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>payment note</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment.*.cheque_number</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_b9605a38c94472a8465c59bff2c0789d -->
<!-- START_080493e04c6fbd231ad5580a2473865c -->
<!--<h2>Get the specified expense / expense refund</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/expense/59" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/expense/59"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 59,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "payment_status": "due",-->
<!--            "ref_no": "EP2020\/0001",-->
<!--            "transaction_date": "2020-07-03 12:58:00",-->
<!--            "total_before_tax": "50.0000",-->
<!--            "tax_id": null,-->
<!--            "tax_amount": "0.0000",-->
<!--            "final_total": "50.0000",-->
<!--            "expense_category_id": null,-->
<!--            "document": null,-->
<!--            "created_by": 9,-->
<!--            "is_recurring": 0,-->
<!--            "recur_interval": null,-->
<!--            "recur_interval_type": null,-->
<!--            "recur_repetitions": null,-->
<!--            "recur_stopped_on": null,-->
<!--            "recur_parent_id": null,-->
<!--            "created_at": "2020-07-03 12:58:23",-->
<!--            "updated_at": "2020-07-03 12:58:24",-->
<!--            "transaction_for": {-->
<!--                "id": 1,-->
<!--                "user_type": "user",-->
<!--                "surname": "Mr",-->
<!--                "first_name": "Admin",-->
<!--                "last_name": null,-->
<!--                "username": "admin",-->
<!--                "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3d2d7dedaddf3d6cbd2dec3dfd69dd0dcde">[email&#160;protected]</a>",-->
<!--                "language": "en",-->
<!--                "contact_no": null,-->
<!--                "address": null,-->
<!--                "business_id": 1,-->
<!--                "max_sales_discount_percent": null,-->
<!--                "allow_login": 1,-->
<!--                "essentials_department_id": null,-->
<!--                "essentials_designation_id": null,-->
<!--                "status": "active",-->
<!--                "crm_contact_id": null,-->
<!--                "is_cmmsn_agnt": 0,-->
<!--                "cmmsn_percent": "0.00",-->
<!--                "selected_contacts": 0,-->
<!--                "dob": null,-->
<!--                "gender": null,-->
<!--                "marital_status": null,-->
<!--                "blood_group": null,-->
<!--                "contact_number": null,-->
<!--                "fb_link": null,-->
<!--                "twitter_link": null,-->
<!--                "social_media_1": null,-->
<!--                "social_media_2": null,-->
<!--                "permanent_address": null,-->
<!--                "current_address": null,-->
<!--                "guardian_name": null,-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null,-->
<!--                "bank_details": null,-->
<!--                "id_proof_name": null,-->
<!--                "id_proof_number": null,-->
<!--                "deleted_at": null,-->
<!--                "created_at": "2018-01-04 02:15:19",-->
<!--                "updated_at": "2018-01-04 02:15:19"-->
<!--            }-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/expense/{expense}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>expense</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of the expenses</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_080493e04c6fbd231ad5580a2473865c -->
<!-- START_c6ce035dd3adbdb5657673678f7ec844 -->
<!--<h2>Update expense / expense refund</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X PUT \-->
<!--    "https://erp2.vooerp.com/connector/api/expense/1" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}" \-->
<!--    -d '{"final_total":12040736.922855476,"transaction_date":"2020-5-7 15:20:22","tax_rate_id":14,"expense_for":11,"contact_id":1,"additional_notes":"autem","is_recurring":0,"recur_interval":8,"recur_interval_type":"months","subscription_repeat_on":15,"subscription_no":"corporis","recur_repetitions":19,"payment":[]}'-->
<!--</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/expense/1"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--let body = {-->
<!--    "final_total": 12040736.922855476,-->
<!--    "transaction_date": "2020-5-7 15:20:22",-->
<!--    "tax_rate_id": 14,-->
<!--    "expense_for": 11,-->
<!--    "contact_id": 1,-->
<!--    "additional_notes": "autem",-->
<!--    "is_recurring": 0,-->
<!--    "recur_interval": 8,-->
<!--    "recur_interval_type": "months",-->
<!--    "subscription_repeat_on": 15,-->
<!--    "subscription_no": "corporis",-->
<!--    "recur_repetitions": 19,-->
<!--    "payment": []-->
<!--}-->

<!--fetch(url, {-->
<!--    method: "PUT",-->
<!--    headers: headers,-->
<!--    body: body-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": {-->
<!--        "id": 75,-->
<!--        "business_id": 1,-->
<!--        "location_id": "1",-->
<!--        "payment_status": "due",-->
<!--        "ref_no": "EP2020\/0013",-->
<!--        "transaction_date": "2020-07-06T05:31:29.480975Z",-->
<!--        "total_before_tax": "43",-->
<!--        "tax_id": null,-->
<!--        "tax_amount": 0,-->
<!--        "final_total": "43",-->
<!--        "expense_category_id": null,-->
<!--        "document": null,-->
<!--        "created_by": 1,-->
<!--        "is_recurring": 0,-->
<!--        "recur_interval": null,-->
<!--        "recur_interval_type": null,-->
<!--        "recur_repetitions": null,-->
<!--        "recur_stopped_on": null,-->
<!--        "recur_parent_id": null,-->
<!--        "created_at": "2020-07-06 11:01:29",-->
<!--        "updated_at": "2020-07-06 11:01:29",-->
<!--        "expense_for": []-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>PUT connector/api/expense/{expense}</code></p>-->
<!--<p><code>PATCH connector/api/expense/{expense}</code></p>-->
<!--<h4>Body Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Type</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>final_total</code></td>-->
<!--<td>float</td>-->
<!--<td>optional</td>-->
<!--<td>Expense amount</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>transaction_date</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>transaction date format:Y-m-d H:i:s,</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>tax_rate_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>id of the tax rate applicable to the expense</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>expense_for</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>id of the user for which expense is created</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>contact_id</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>id of the contact(customer or supplier) for which expense is created</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>additional_notes</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>is_recurring</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>whether expense is recurring (0, 1)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>recur_interval</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>value of the interval expense will be regenerated</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>recur_interval_type</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>type of the recur interval ('days', 'months', 'years')</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>subscription_repeat_on</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>day of the month on which expense will be generated if recur interval type is months (1-30)</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>subscription_no</code></td>-->
<!--<td>string</td>-->
<!--<td>optional</td>-->
<!--<td>subscription number</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>recur_repetitions</code></td>-->
<!--<td>integer</td>-->
<!--<td>optional</td>-->
<!--<td>total number of expense to be generated</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment</code></td>-->
<!--<td>array</td>-->
<!--<td>optional</td>-->
<!--<td>payment lines for the expense</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_c6ce035dd3adbdb5657673678f7ec844 -->
<!-- START_e1f7f0662d8d007a0f8501170b0d7409 -->
<!--<h2>List expense refunds</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/expense-refund?location_id=sed&amp;payment_status=paid&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;expense_for=voluptatem&amp;per_page=15" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/expense-refund"-->
<!--);-->

<!--let params = {-->
<!--    "location_id": "sed",-->
<!--    "payment_status": "paid",-->
<!--    "start_date": "2018-06-25",-->
<!--    "end_date": "2018-06-25",-->
<!--    "expense_for": "voluptatem",-->
<!--    "per_page": "15",-->
<!--};-->
<!--Object.keys(params)-->
<!--    .forEach(key =&gt; url.searchParams.append(key, params[key]));-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 230,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "payment_status": "partial",-->
<!--            "ref_no": "refund",-->
<!--            "transaction_date": "2020-12-15 11:16:00",-->
<!--            "total_before_tax": "65.0000",-->
<!--            "tax_id": null,-->
<!--            "tax_amount": "0.0000",-->
<!--            "final_total": "65.0000",-->
<!--            "expense_category_id": null,-->
<!--            "document": null,-->
<!--            "created_by": 9,-->
<!--            "created_at": "2020-12-15 11:46:56",-->
<!--            "updated_at": "2020-12-15 12:47:30",-->
<!--            "expense_for": []-->
<!--        }-->
<!--    ],-->
<!--    "links": {-->
<!--        "first": "http:\/\/local.pos.com\/connector\/api\/expense-refund?page=1",-->
<!--        "last": null,-->
<!--        "prev": null,-->
<!--        "next": null-->
<!--    },-->
<!--    "meta": {-->
<!--        "current_page": 1,-->
<!--        "from": 1,-->
<!--        "path": "http:\/\/local.pos.com\/connector\/api\/expense-refund",-->
<!--        "per_page": 15,-->
<!--        "to": 1-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/expense-refund</code></p>-->
<!--<h4>Query Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>payment_status</code></td>-->
<!--<td>optional</td>-->
<!--<td>payment status</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>start_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>end_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>expense_for</code></td>-->
<!--<td>optional</td>-->
<!--<td>id of the user for which expense is created</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>per_page</code></td>-->
<!--<td>optional</td>-->
<!--<td>Total records per page. default: 10, Set -1 for no pagination</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_e1f7f0662d8d007a0f8501170b0d7409 -->
<h1>Product management</h1>
<!-- START_404e69adab4f56eabc2cc3d3cfd9e802 -->
<h2>List products</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/product?brand_id=alias&amp;category_id=alias&amp;sub_category_id=nobis&amp;location_id=ut&amp;selling_price_group=accusamus&amp;name=nisi&amp;sku=ipsa&amp;per_page=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/product"
);

let params = {
    "brand_id": "alias",
    "category_id": "alias",
    "sub_category_id": "nobis",
    "location_id": "ut",
    "selling_price_group": "accusamus",
    "name": "nisi",
    "sku": "ipsa",
    "per_page": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Men's Reverse Fleece Crew",
            "business_id": 1,
            "type": "single",
            "sub_unit_ids": null,
            "enable_stock": 1,
            "alert_quantity": "5.0000",
            "sku": "AS0001",
            "barcode_type": "C128",
            "expiry_period": null,
            "expiry_period_type": null,
            "enable_sr_no": 0,
            "weight": null,
            "product_custom_field1": null,
            "product_custom_field2": null,
            "product_custom_field3": null,
            "product_custom_field4": null,
            "image": null,
            "woocommerce_media_id": null,
            "product_description": null,
            "created_by": 1,
            "warranty_id": null,
            "is_inactive": 0,
            "repair_model_id": null,
            "not_for_selling": 0,
            "ecom_shipping_class_id": null,
            "ecom_active_in_store": 1,
            "woocommerce_product_id": 356,
            "woocommerce_disable_sync": 0,
            "image_url": "http:\/\/local.pos.com\/img\/default.png",
            "product_variations": [
                {
                    "id": 1,
                    "variation_template_id": null,
                    "name": "DUMMY",
                    "product_id": 1,
                    "is_dummy": 1,
                    "created_at": "2018-01-03 21:29:08",
                    "updated_at": "2018-01-03 21:29:08",
                    "variations": [
                        {
                            "id": 1,
                            "name": "DUMMY",
                            "product_id": 1,
                            "sub_sku": "AS0001",
                            "product_variation_id": 1,
                            "woocommerce_variation_id": null,
                            "variation_value_id": null,
                            "default_purchase_price": "130.0000",
                            "dpp_inc_tax": "143.0000",
                            "profit_percent": "0.0000",
                            "default_sell_price": "130.0000",
                            "sell_price_inc_tax": "143.0000",
                            "created_at": "2018-01-03 21:29:08",
                            "updated_at": "2020-06-09 00:23:22",
                            "deleted_at": null,
                            "combo_variations": null,
                            "variation_location_details": [
                                {
                                    "id": 56,
                                    "product_id": 1,
                                    "product_variation_id": 1,
                                    "variation_id": 1,
                                    "location_id": 1,
                                    "qty_available": "20.0000",
                                    "created_at": "2020-06-08 23:46:40",
                                    "updated_at": "2020-06-08 23:46:40"
                                }
                            ],
                            "media": [
                                {
                                    "id": 1,
                                    "business_id": 1,
                                    "file_name": "1591686466_978227300_nn.jpeg",
                                    "description": null,
                                    "uploaded_by": 9,
                                    "model_type": "App\\Variation",
                                    "woocommerce_media_id": null,
                                    "model_id": 1,
                                    "created_at": "2020-06-09 00:07:46",
                                    "updated_at": "2020-06-09 00:07:46",
                                    "display_name": "nn.jpeg",
                                    "display_url": "http:\/\/local.pos.com\/uploads\/media\/1591686466_978227300_nn.jpeg"
                                }
                            ],
                            "selling_price_group": [
                                {
                                    "id": 2,
                                    "variation_id": 1,
                                    "price_group_id": 1,
                                    "price_inc_tax": "140.0000",
                                    "created_at": "2020-06-09 00:23:31",
                                    "updated_at": "2020-06-09 00:23:31"
                                }
                            ]
                        }
                    ]
                }
            ],
            "brand": {
                "id": 1,
                "business_id": 1,
                "name": "Levis",
                "description": null,
                "created_by": 1,
                "deleted_at": null,
                "created_at": "2018-01-03 21:19:47",
                "updated_at": "2018-01-03 21:19:47"
            },
            "unit": {
                "id": 1,
                "business_id": 1,
                "actual_name": "Pieces",
                "short_name": "Pc(s)",
                "allow_decimal": 0,
                "base_unit_id": null,
                "base_unit_multiplier": null,
                "created_by": 1,
                "deleted_at": null,
                "created_at": "2018-01-03 15:15:20",
                "updated_at": "2018-01-03 15:15:20"
            },
            "category": {
                "id": 1,
                "name": "Men's",
                "business_id": 1,
                "short_code": null,
                "parent_id": 0,
                "created_by": 1,
                "category_type": "product",
                "description": null,
                "slug": null,
                "woocommerce_cat_id": null,
                "deleted_at": null,
                "created_at": "2018-01-03 21:06:34",
                "updated_at": "2018-01-03 21:06:34"
            },
            "sub_category": {
                "id": 5,
                "name": "Shirts",
                "business_id": 1,
                "short_code": null,
                "parent_id": 1,
                "created_by": 1,
                "category_type": "product",
                "description": null,
                "slug": null,
                "woocommerce_cat_id": null,
                "deleted_at": null,
                "created_at": "2018-01-03 21:08:18",
                "updated_at": "2018-01-03 21:08:18"
            },
            "product_tax": {
                "id": 1,
                "business_id": 1,
                "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b6d7a6f7b0a0b">[email&#160;protected]</a>%",
                "amount": 10,
                "is_tax_group": 0,
                "created_by": 1,
                "woocommerce_tax_rate_id": null,
                "deleted_at": null,
                "created_at": "2018-01-04 02:40:07",
                "updated_at": "2018-01-04 02:40:07"
            },
            "product_locations": [
                {
                    "id": 1,
                    "business_id": 1,
                    "location_id": null,
                    "name": "Awesome Shop",
                    "landmark": "Linking Street",
                    "country": "USA",
                    "state": "Arizona",
                    "city": "Phoenix",
                    "zip_code": "85001",
                    "invoice_scheme_id": 1,
                    "invoice_layout_id": 1,
                    "selling_price_group_id": null,
                    "print_receipt_on_invoice": 1,
                    "receipt_printer_type": "browser",
                    "printer_id": null,
                    "mobile": null,
                    "alternate_number": null,
                    "email": null,
                    "website": null,
                    "featured_products": [
                        "5",
                        "71"
                    ],
                    "is_active": 1,
                    "default_payment_accounts": "{\"cash\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"card\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"cheque\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"bank_transfer\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"other\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"custom_pay_1\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"custom_pay_2\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"custom_pay_3\":{\"is_enabled\":\"1\",\"account\":\"3\"}}",
                    "custom_field1": null,
                    "custom_field2": null,
                    "custom_field3": null,
                    "custom_field4": null,
                    "deleted_at": null,
                    "created_at": "2018-01-04 02:15:20",
                    "updated_at": "2020-06-09 01:07:05",
                    "pivot": {
                        "product_id": 2,
                        "location_id": 1
                    }
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/local.pos.com\/connector\/api\/product?page=1",
        "last": "http:\/\/local.pos.com\/connector\/api\/product?page=32",
        "prev": null,
        "next": "http:\/\/local.pos.com\/connector\/api\/product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/local.pos.com\/connector\/api\/product",
        "per_page": 10,
        "to": 10
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/product</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>brand_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>sub_category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>selling_price_group</code></td>
<td>optional</td>
<td>(1, 0)</td>
</tr>
<tr>
<td><code>name</code></td>
<td>optional</td>
<td>Search term for product name</td>
</tr>
<tr>
<td><code>sku</code></td>
<td>optional</td>
<td>Search term for product sku</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_404e69adab4f56eabc2cc3d3cfd9e802 -->
<!-- START_3bba79ec6b433bb13818ff41ac1d70e6 -->
<h2>Get the specified product</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/product/1?selling_price_group=est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/product/1"
);

let params = {
    "selling_price_group": "est",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Men's Reverse Fleece Crew",
            "business_id": 1,
            "type": "single",
            "sub_unit_ids": null,
            "enable_stock": 1,
            "alert_quantity": "5.0000",
            "sku": "AS0001",
            "barcode_type": "C128",
            "expiry_period": null,
            "expiry_period_type": null,
            "enable_sr_no": 0,
            "weight": null,
            "product_custom_field1": null,
            "product_custom_field2": null,
            "product_custom_field3": null,
            "product_custom_field4": null,
            "image": null,
            "woocommerce_media_id": null,
            "product_description": null,
            "created_by": 1,
            "warranty_id": null,
            "is_inactive": 0,
            "repair_model_id": null,
            "not_for_selling": 0,
            "ecom_shipping_class_id": null,
            "ecom_active_in_store": 1,
            "woocommerce_product_id": 356,
            "woocommerce_disable_sync": 0,
            "image_url": "http:\/\/local.pos.com\/img\/default.png",
            "product_variations": [
                {
                    "id": 1,
                    "variation_template_id": null,
                    "name": "DUMMY",
                    "product_id": 1,
                    "is_dummy": 1,
                    "created_at": "2018-01-03 21:29:08",
                    "updated_at": "2018-01-03 21:29:08",
                    "variations": [
                        {
                            "id": 1,
                            "name": "DUMMY",
                            "product_id": 1,
                            "sub_sku": "AS0001",
                            "product_variation_id": 1,
                            "woocommerce_variation_id": null,
                            "variation_value_id": null,
                            "default_purchase_price": "130.0000",
                            "dpp_inc_tax": "143.0000",
                            "profit_percent": "0.0000",
                            "default_sell_price": "130.0000",
                            "sell_price_inc_tax": "143.0000",
                            "created_at": "2018-01-03 21:29:08",
                            "updated_at": "2020-06-09 00:23:22",
                            "deleted_at": null,
                            "combo_variations": null,
                            "variation_location_details": [
                                {
                                    "id": 56,
                                    "product_id": 1,
                                    "product_variation_id": 1,
                                    "variation_id": 1,
                                    "location_id": 1,
                                    "qty_available": "20.0000",
                                    "created_at": "2020-06-08 23:46:40",
                                    "updated_at": "2020-06-08 23:46:40"
                                }
                            ],
                            "media": [
                                {
                                    "id": 1,
                                    "business_id": 1,
                                    "file_name": "1591686466_978227300_nn.jpeg",
                                    "description": null,
                                    "uploaded_by": 9,
                                    "model_type": "App\\Variation",
                                    "woocommerce_media_id": null,
                                    "model_id": 1,
                                    "created_at": "2020-06-09 00:07:46",
                                    "updated_at": "2020-06-09 00:07:46",
                                    "display_name": "nn.jpeg",
                                    "display_url": "http:\/\/local.pos.com\/uploads\/media\/1591686466_978227300_nn.jpeg"
                                }
                            ],
                            "selling_price_group": [
                                {
                                    "id": 2,
                                    "variation_id": 1,
                                    "price_group_id": 1,
                                    "price_inc_tax": "140.0000",
                                    "created_at": "2020-06-09 00:23:31",
                                    "updated_at": "2020-06-09 00:23:31"
                                }
                            ]
                        }
                    ]
                }
            ],
            "brand": {
                "id": 1,
                "business_id": 1,
                "name": "Levis",
                "description": null,
                "created_by": 1,
                "deleted_at": null,
                "created_at": "2018-01-03 21:19:47",
                "updated_at": "2018-01-03 21:19:47"
            },
            "unit": {
                "id": 1,
                "business_id": 1,
                "actual_name": "Pieces",
                "short_name": "Pc(s)",
                "allow_decimal": 0,
                "base_unit_id": null,
                "base_unit_multiplier": null,
                "created_by": 1,
                "deleted_at": null,
                "created_at": "2018-01-03 15:15:20",
                "updated_at": "2018-01-03 15:15:20"
            },
            "category": {
                "id": 1,
                "name": "Men's",
                "business_id": 1,
                "short_code": null,
                "parent_id": 0,
                "created_by": 1,
                "category_type": "product",
                "description": null,
                "slug": null,
                "woocommerce_cat_id": null,
                "deleted_at": null,
                "created_at": "2018-01-03 21:06:34",
                "updated_at": "2018-01-03 21:06:34"
            },
            "sub_category": {
                "id": 5,
                "name": "Shirts",
                "business_id": 1,
                "short_code": null,
                "parent_id": 1,
                "created_by": 1,
                "category_type": "product",
                "description": null,
                "slug": null,
                "woocommerce_cat_id": null,
                "deleted_at": null,
                "created_at": "2018-01-03 21:08:18",
                "updated_at": "2018-01-03 21:08:18"
            },
            "product_tax": {
                "id": 1,
                "business_id": 1,
                "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e7b1a6b3a7d6d7">[email&#160;protected]</a>%",
                "amount": 10,
                "is_tax_group": 0,
                "created_by": 1,
                "woocommerce_tax_rate_id": null,
                "deleted_at": null,
                "created_at": "2018-01-04 02:40:07",
                "updated_at": "2018-01-04 02:40:07"
            },
            "product_locations": [
                {
                    "id": 1,
                    "business_id": 1,
                    "location_id": null,
                    "name": "Awesome Shop",
                    "landmark": "Linking Street",
                    "country": "USA",
                    "state": "Arizona",
                    "city": "Phoenix",
                    "zip_code": "85001",
                    "invoice_scheme_id": 1,
                    "invoice_layout_id": 1,
                    "selling_price_group_id": null,
                    "print_receipt_on_invoice": 1,
                    "receipt_printer_type": "browser",
                    "printer_id": null,
                    "mobile": null,
                    "alternate_number": null,
                    "email": null,
                    "website": null,
                    "featured_products": [
                        "5",
                        "71"
                    ],
                    "is_active": 1,
                    "default_payment_accounts": "{\"cash\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"card\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"cheque\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"bank_transfer\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"other\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"custom_pay_1\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"custom_pay_2\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"custom_pay_3\":{\"is_enabled\":\"1\",\"account\":\"3\"}}",
                    "custom_field1": null,
                    "custom_field2": null,
                    "custom_field3": null,
                    "custom_field4": null,
                    "deleted_at": null,
                    "created_at": "2018-01-04 02:15:20",
                    "updated_at": "2020-06-09 01:07:05",
                    "pivot": {
                        "product_id": 2,
                        "location_id": 1
                    }
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/product/{product}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>product</code></td>
<td>required</td>
<td>comma separated ids of products</td>
</tr>
</tbody>
</table>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>selling_price_group</code></td>
<td>optional</td>
<td>(1, 0)</td>
</tr>
</tbody>
</table>
<!-- END_3bba79ec6b433bb13818ff41ac1d70e6 -->
<!-- START_950940377acf79b12c3e6aa18d408e53 -->
<h2>List Selling Price Group</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/selling-price-group" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/selling-price-group"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Retail",
            "description": null,
            "business_id": 1,
            "is_active": 1,
            "deleted_at": null,
            "created_at": "2020-10-21 04:30:06",
            "updated_at": "2020-11-16 18:23:15"
        },
        {
            "id": 2,
            "name": "Wholesale",
            "description": null,
            "business_id": 1,
            "is_active": 1,
            "deleted_at": null,
            "created_at": "2020-10-21 04:30:21",
            "updated_at": "2020-11-16 18:23:00"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/selling-price-group</code></p>
<!-- END_950940377acf79b12c3e6aa18d408e53 -->
<!-- START_fa45d1ff85298b2a572b3ac163f32c0a -->
<h2>List Variations</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/variation/?brand_id=beatae&amp;category_id=porro&amp;sub_category_id=non&amp;not_for_selling=magni&amp;name=rerum&amp;sku=enim&amp;per_page=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/variation/"
);

let params = {
    "brand_id": "beatae",
    "category_id": "porro",
    "sub_category_id": "non",
    "not_for_selling": "magni",
    "name": "rerum",
    "sku": "enim",
    "per_page": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "variation_id": 1,
            "variation_name": "",
            "sub_sku": "AS0001",
            "product_id": 1,
            "product_name": "Men's Reverse Fleece Crew",
            "sku": "AS0001",
            "type": "single",
            "business_id": 1,
            "barcode_type": "C128",
            "expiry_period": null,
            "expiry_period_type": null,
            "enable_sr_no": 0,
            "weight": null,
            "product_custom_field1": null,
            "product_custom_field2": null,
            "product_custom_field3": null,
            "product_custom_field4": null,
            "product_image": "1528728059_fleece_crew.jpg",
            "product_description": null,
            "warranty_id": null,
            "brand_id": 1,
            "brand_name": "Levis",
            "unit_id": 1,
            "enable_stock": 1,
            "not_for_selling": 0,
            "unit_name": "Pc(s)",
            "unit_allow_decimal": 0,
            "category_id": 1,
            "category": "Men's",
            "sub_category_id": 5,
            "sub_category": "Shirts",
            "tax_id": 1,
            "tax_type": "exclusive",
            "tax_name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="25736471651415">[email&#160;protected]</a>%",
            "tax_amount": 10,
            "product_variation_id": 1,
            "default_purchase_price": "130.0000",
            "dpp_inc_tax": "143.0000",
            "profit_percent": "0.0000",
            "default_sell_price": "130.0000",
            "sell_price_inc_tax": "143.0000",
            "product_variation_name": "",
            "variation_location_details": [],
            "media": [],
            "selling_price_group": [],
            "product_image_url": "http:\/\/local.pos.com\/uploads\/img\/1528728059_fleece_crew.jpg",
            "product_locations": [
                {
                    "id": 1,
                    "business_id": 1,
                    "location_id": null,
                    "name": "Awesome Shop",
                    "landmark": "Linking Street",
                    "country": "USA",
                    "state": "Arizona",
                    "city": "Phoenix",
                    "zip_code": "85001",
                    "invoice_scheme_id": 1,
                    "invoice_layout_id": 1,
                    "selling_price_group_id": null,
                    "print_receipt_on_invoice": 1,
                    "receipt_printer_type": "browser",
                    "printer_id": null,
                    "mobile": null,
                    "alternate_number": null,
                    "email": null,
                    "website": null,
                    "featured_products": null,
                    "is_active": 1,
                    "default_payment_accounts": "",
                    "custom_field1": null,
                    "custom_field2": null,
                    "custom_field3": null,
                    "custom_field4": null,
                    "deleted_at": null,
                    "created_at": "2018-01-04 02:15:20",
                    "updated_at": "2019-12-11 04:53:39",
                    "pivot": {
                        "product_id": 1,
                        "location_id": 1
                    }
                }
            ]
        },
        {
            "variation_id": 2,
            "variation_name": "28",
            "sub_sku": "AS0002-1",
            "product_id": 2,
            "product_name": "Levis Men's Slimmy Fit Jeans",
            "sku": "AS0002",
            "type": "variable",
            "business_id": 1,
            "barcode_type": "C128",
            "expiry_period": null,
            "expiry_period_type": null,
            "enable_sr_no": 0,
            "weight": null,
            "product_custom_field1": null,
            "product_custom_field2": null,
            "product_custom_field3": null,
            "product_custom_field4": null,
            "product_image": "1528727964_levis_jeans.jpg",
            "product_description": null,
            "warranty_id": null,
            "brand_id": 1,
            "brand_name": "Levis",
            "unit_id": 1,
            "enable_stock": 1,
            "not_for_selling": 0,
            "unit_name": "Pc(s)",
            "unit_allow_decimal": 0,
            "category_id": 1,
            "category": "Men's",
            "sub_category_id": 4,
            "sub_category": "Jeans",
            "tax_id": 1,
            "tax_type": "exclusive",
            "tax_name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d482958094e5e4">[email&#160;protected]</a>%",
            "tax_amount": 10,
            "product_variation_id": 2,
            "default_purchase_price": "70.0000",
            "dpp_inc_tax": "77.0000",
            "profit_percent": "0.0000",
            "default_sell_price": "70.0000",
            "sell_price_inc_tax": "77.0000",
            "product_variation_name": "Waist Size",
            "variation_location_details": [
                {
                    "id": 1,
                    "product_id": 2,
                    "product_variation_id": 2,
                    "variation_id": 2,
                    "location_id": 1,
                    "qty_available": "50.0000",
                    "created_at": "2018-01-06 06:57:11",
                    "updated_at": "2020-08-04 04:11:27"
                }
            ],
            "media": [
                {
                    "id": 1,
                    "business_id": 1,
                    "file_name": "1596701997_743693452_test.jpg",
                    "description": null,
                    "uploaded_by": 9,
                    "model_type": "App\\Variation",
                    "woocommerce_media_id": null,
                    "model_id": 2,
                    "created_at": "2020-08-06 13:49:57",
                    "updated_at": "2020-08-06 13:49:57",
                    "display_name": "test.jpg",
                    "display_url": "http:\/\/local.pos.com\/uploads\/media\/1596701997_743693452_test.jpg"
                }
            ],
            "selling_price_group": [],
            "product_image_url": "http:\/\/local.pos.com\/uploads\/img\/1528727964_levis_jeans.jpg",
            "product_locations": [
                {
                    "id": 1,
                    "business_id": 1,
                    "location_id": null,
                    "name": "Awesome Shop",
                    "landmark": "Linking Street",
                    "country": "USA",
                    "state": "Arizona",
                    "city": "Phoenix",
                    "zip_code": "85001",
                    "invoice_scheme_id": 1,
                    "invoice_layout_id": 1,
                    "selling_price_group_id": null,
                    "print_receipt_on_invoice": 1,
                    "receipt_printer_type": "browser",
                    "printer_id": null,
                    "mobile": null,
                    "alternate_number": null,
                    "email": null,
                    "website": null,
                    "featured_products": null,
                    "is_active": 1,
                    "default_payment_accounts": "",
                    "custom_field1": null,
                    "custom_field2": null,
                    "custom_field3": null,
                    "custom_field4": null,
                    "deleted_at": null,
                    "created_at": "2018-01-04 02:15:20",
                    "updated_at": "2019-12-11 04:53:39",
                    "pivot": {
                        "product_id": 2,
                        "location_id": 1
                    }
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/local.pos.com\/connector\/api\/variation?page=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/local.pos.com\/connector\/api\/variation?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/local.pos.com\/connector\/api\/variation",
        "per_page": "2",
        "to": 2
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/variation/{id?}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>product</code></td>
<td>optional</td>
<td>comma separated ids of variations</td>
</tr>
</tbody>
</table>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>brand_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>sub_category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>not_for_selling</code></td>
<td>optional</td>
<td>Values: 0 or 1</td>
</tr>
<tr>
<td><code>name</code></td>
<td>optional</td>
<td>Search term for product name</td>
</tr>
<tr>
<td><code>sku</code></td>
<td>optional</td>
<td>Search term for product sku</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_fa45d1ff85298b2a572b3ac163f32c0a -->
<h1>Sales management</h1>
<!-- START_7ff3a37eb4717090fde5a1e26a7e3d4a -->
<h2>List sells</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/sell?location_id=deserunt&amp;contact_id=ex&amp;payment_status=paid&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;user_id=voluptatem&amp;service_staff_id=dolores&amp;shipping_status=ordered&amp;only_subscriptions=unde&amp;per_page=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/sell"
);

let params = {
    "location_id": "deserunt",
    "contact_id": "ex",
    "payment_status": "paid",
    "start_date": "2018-06-25",
    "end_date": "2018-06-25",
    "user_id": "voluptatem",
    "service_staff_id": "dolores",
    "shipping_status": "ordered",
    "only_subscriptions": "unde",
    "per_page": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 6,
            "business_id": 1,
            "location_id": 1,
            "res_table_id": null,
            "res_waiter_id": null,
            "res_order_status": null,
            "type": "sell",
            "sub_type": null,
            "status": "final",
            "is_quotation": 0,
            "payment_status": "paid",
            "adjustment_type": null,
            "contact_id": 4,
            "customer_group_id": null,
            "invoice_no": "AS0001",
            "ref_no": "",
            "subscription_no": null,
            "subscription_repeat_on": null,
            "transaction_date": "2018-04-10 13:23:21",
            "total_before_tax": "770.0000",
            "tax_id": null,
            "tax_amount": "0.0000",
            "discount_type": "percentage",
            "discount_amount": "0.0000",
            "rp_redeemed": 0,
            "rp_redeemed_amount": "0.0000",
            "shipping_details": null,
            "shipping_address": null,
            "shipping_status": null,
            "delivered_to": null,
            "shipping_charges": "0.0000",
            "additional_notes": null,
            "staff_note": null,
            "round_off_amount": "0.0000",
            "final_total": "770.0000",
            "expense_category_id": null,
            "expense_for": null,
            "commission_agent": null,
            "document": null,
            "is_direct_sale": 0,
            "is_suspend": 0,
            "exchange_rate": "1.000",
            "total_amount_recovered": null,
            "transfer_parent_id": null,
            "return_parent_id": null,
            "opening_stock_product_id": null,
            "created_by": 1,
            "import_batch": null,
            "import_time": null,
            "types_of_service_id": null,
            "packing_charge": null,
            "packing_charge_type": null,
            "service_custom_field_1": null,
            "service_custom_field_2": null,
            "service_custom_field_3": null,
            "service_custom_field_4": null,
            "mfg_parent_production_purchase_id": null,
            "mfg_wasted_units": null,
            "mfg_production_cost": "0.0000",
            "mfg_is_final": 0,
            "is_created_from_api": 0,
            "essentials_duration": "0.00",
            "essentials_duration_unit": null,
            "essentials_amount_per_unit_duration": "0.0000",
            "essentials_allowances": null,
            "essentials_deductions": null,
            "rp_earned": 0,
            "repair_completed_on": null,
            "repair_warranty_id": null,
            "repair_brand_id": null,
            "repair_status_id": null,
            "repair_model_id": null,
            "repair_defects": null,
            "repair_serial_no": null,
            "repair_updates_email": 0,
            "repair_updates_sms": 0,
            "repair_checklist": null,
            "repair_security_pwd": null,
            "repair_security_pattern": null,
            "repair_due_date": null,
            "repair_device_id": null,
            "order_addresses": null,
            "is_recurring": 0,
            "recur_interval": null,
            "recur_interval_type": null,
            "recur_repetitions": null,
            "recur_stopped_on": null,
            "recur_parent_id": null,
            "invoice_token": null,
            "pay_term_number": null,
            "pay_term_type": null,
            "pjt_project_id": null,
            "pjt_title": null,
            "woocommerce_order_id": null,
            "selling_price_group_id": null,
            "created_at": "2018-01-06 07:06:11",
            "updated_at": "2018-01-06 07:06:11",
            "sell_lines": [
                {
                    "id": 1,
                    "transaction_id": 6,
                    "product_id": 2,
                    "variation_id": 3,
                    "quantity": 10,
                    "mfg_waste_percent": "0.0000",
                    "quantity_returned": "0.0000",
                    "unit_price_before_discount": "70.0000",
                    "unit_price": "70.0000",
                    "line_discount_type": null,
                    "line_discount_amount": "0.0000",
                    "unit_price_inc_tax": "77.0000",
                    "item_tax": "7.0000",
                    "tax_id": 1,
                    "discount_id": null,
                    "lot_no_line_id": null,
                    "sell_line_note": null,
                    "res_service_staff_id": null,
                    "res_line_order_status": null,
                    "woocommerce_line_items_id": null,
                    "parent_sell_line_id": null,
                    "children_type": "",
                    "sub_unit_id": null,
                    "created_at": "2018-01-06 07:06:11",
                    "updated_at": "2018-01-06 07:06:11"
                }
            ],
            "payment_lines": [
                {
                    "id": 1,
                    "transaction_id": 6,
                    "business_id": null,
                    "is_return": 0,
                    "amount": "770.0000",
                    "method": "cash",
                    "transaction_no": null,
                    "card_transaction_number": null,
                    "card_number": null,
                    "card_type": "visa",
                    "card_holder_name": null,
                    "card_month": null,
                    "card_year": null,
                    "card_security": null,
                    "cheque_number": null,
                    "bank_account_number": null,
                    "paid_on": "2018-01-09 17:30:35",
                    "created_by": 1,
                    "payment_for": null,
                    "parent_id": null,
                    "note": null,
                    "document": null,
                    "payment_ref_no": null,
                    "account_id": null,
                    "created_at": "2018-01-06 01:36:11",
                    "updated_at": "2018-01-06 01:36:11"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/local.pos.com\/connector\/api\/sell?page=1",
        "last": "http:\/\/local.pos.com\/connector\/api\/sell?page=6",
        "prev": null,
        "next": "http:\/\/local.pos.com\/connector\/api\/sell?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/local.pos.com\/connector\/api\/sell",
        "per_page": 10,
        "to": 10
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/sell</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>id of the location</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>optional</td>
<td>id of the customer</td>
</tr>
<tr>
<td><code>payment_status</code></td>
<td>optional</td>
<td>payment status</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>user_id</code></td>
<td>optional</td>
<td>id of the user who created the sale</td>
</tr>
<tr>
<td><code>service_staff_id</code></td>
<td>optional</td>
<td>id of the service staff assigned with the sale</td>
</tr>
<tr>
<td><code>shipping_status</code></td>
<td>optional</td>
<td>Shipping Status of the sale ('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>only_subscriptions</code></td>
<td>optional</td>
<td>Filter only subcription invoices (1, 0)</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_7ff3a37eb4717090fde5a1e26a7e3d4a -->
<!-- START_b36ef2e65db4271ba22222f5c5dce2ba -->
<h2>Create sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://erp2.vooerp.com/connector/api/sell" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"sells":[{"location_id":15,"contact_id":7,"transaction_date":"2020-07-22 15:48:29","invoice_no":"quaerat","status":"final","is_quotation":true,"tax_rate_id":4,"discount_amount":10,"discount_type":"fixed","sale_note":"recusandae","staff_note":"nulla","commission_agent":5,"shipping_details":"Express Delivery","shipping_address":"laboriosam","shipping_status":"ordered","delivered_to":"'Mr robin'","shipping_charges":10,"packing_charge":10,"exchange_rate":1,"selling_price_group_id":5,"pay_term_number":3,"pay_term_type":"months","is_recurring":0,"recur_interval":3,"recur_interval_type":"months","subscription_repeat_on":15,"subscription_no":"nihil","recur_repetitions":20,"rp_redeemed":1,"rp_redeemed_amount":13.5,"types_of_service_id":13,"service_custom_field_1":"quia","service_custom_field_2":"ullam","service_custom_field_3":"distinctio","service_custom_field_4":"id","round_off_amount":639.2552,"table_id":1,"service_staff_id":1,"change_return":0,"products":[{"product_id":17,"variation_id":58,"quantity":1,"unit_price":437.5,"tax_rate_id":0,"discount_amount":0,"discount_type":"percentage","sub_unit_id":11,"note":"consectetur"}],"payments":[{"amount":453.13,"method":"cash","account_id":2,"card_number":"rerum","card_holder_name":"molestias","card_transaction_number":"est","card_type":"explicabo","card_month":"earum","card_year":"in","card_security":"corrupti","transaction_no_1":"provident","transaction_no_2":"veritatis","transaction_no_3":"dolore","bank_account_number":"suscipit","note":"doloremque","cheque_number":"voluptate"}]}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/sell"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "sells": [
        {
            "location_id": 15,
            "contact_id": 7,
            "transaction_date": "2020-07-22 15:48:29",
            "invoice_no": "quaerat",
            "status": "final",
            "is_quotation": true,
            "tax_rate_id": 4,
            "discount_amount": 10,
            "discount_type": "fixed",
            "sale_note": "recusandae",
            "staff_note": "nulla",
            "commission_agent": 5,
            "shipping_details": "Express Delivery",
            "shipping_address": "laboriosam",
            "shipping_status": "ordered",
            "delivered_to": "'Mr robin'",
            "shipping_charges": 10,
            "packing_charge": 10,
            "exchange_rate": 1,
            "selling_price_group_id": 5,
            "pay_term_number": 3,
            "pay_term_type": "months",
            "is_recurring": 0,
            "recur_interval": 3,
            "recur_interval_type": "months",
            "subscription_repeat_on": 15,
            "subscription_no": "nihil",
            "recur_repetitions": 20,
            "rp_redeemed": 1,
            "rp_redeemed_amount": 13.5,
            "types_of_service_id": 13,
            "service_custom_field_1": "quia",
            "service_custom_field_2": "ullam",
            "service_custom_field_3": "distinctio",
            "service_custom_field_4": "id",
            "round_off_amount": 639.2552,
            "table_id": 1,
            "service_staff_id": 1,
            "change_return": 0,
            "products": [
                {
                    "product_id": 17,
                    "variation_id": 58,
                    "quantity": 1,
                    "unit_price": 437.5,
                    "tax_rate_id": 0,
                    "discount_amount": 0,
                    "discount_type": "percentage",
                    "sub_unit_id": 11,
                    "note": "consectetur"
                }
            ],
            "payments": [
                {
                    "amount": 453.13,
                    "method": "cash",
                    "account_id": 2,
                    "card_number": "rerum",
                    "card_holder_name": "molestias",
                    "card_transaction_number": "est",
                    "card_type": "explicabo",
                    "card_month": "earum",
                    "card_year": "in",
                    "card_security": "corrupti",
                    "transaction_no_1": "provident",
                    "transaction_no_2": "veritatis",
                    "transaction_no_3": "dolore",
                    "bank_account_number": "suscipit",
                    "note": "doloremque",
                    "cheque_number": "voluptate"
                }
            ]
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 6,
            "business_id": 1,
            "location_id": 1,
            "res_table_id": null,
            "res_waiter_id": null,
            "res_order_status": null,
            "type": "sell",
            "sub_type": null,
            "status": "final",
            "is_quotation": 0,
            "payment_status": "paid",
            "adjustment_type": null,
            "contact_id": 4,
            "customer_group_id": null,
            "invoice_no": "AS0001",
            "ref_no": "",
            "subscription_no": null,
            "subscription_repeat_on": null,
            "transaction_date": "2018-04-10 13:23:21",
            "total_before_tax": "770.0000",
            "tax_id": null,
            "tax_amount": "0.0000",
            "discount_type": "percentage",
            "discount_amount": "0.0000",
            "rp_redeemed": 0,
            "rp_redeemed_amount": "0.0000",
            "shipping_details": null,
            "shipping_address": null,
            "shipping_status": null,
            "delivered_to": null,
            "shipping_charges": "0.0000",
            "additional_notes": null,
            "staff_note": null,
            "round_off_amount": "0.0000",
            "final_total": "770.0000",
            "expense_category_id": null,
            "expense_for": null,
            "commission_agent": null,
            "document": null,
            "is_direct_sale": 0,
            "is_suspend": 0,
            "exchange_rate": "1.000",
            "total_amount_recovered": null,
            "transfer_parent_id": null,
            "return_parent_id": null,
            "opening_stock_product_id": null,
            "created_by": 1,
            "import_batch": null,
            "import_time": null,
            "types_of_service_id": null,
            "packing_charge": null,
            "packing_charge_type": null,
            "service_custom_field_1": null,
            "service_custom_field_2": null,
            "service_custom_field_3": null,
            "service_custom_field_4": null,
            "mfg_parent_production_purchase_id": null,
            "mfg_wasted_units": null,
            "mfg_production_cost": "0.0000",
            "mfg_is_final": 0,
            "is_created_from_api": 0,
            "essentials_duration": "0.00",
            "essentials_duration_unit": null,
            "essentials_amount_per_unit_duration": "0.0000",
            "essentials_allowances": null,
            "essentials_deductions": null,
            "rp_earned": 0,
            "repair_completed_on": null,
            "repair_warranty_id": null,
            "repair_brand_id": null,
            "repair_status_id": null,
            "repair_model_id": null,
            "repair_defects": null,
            "repair_serial_no": null,
            "repair_updates_email": 0,
            "repair_updates_sms": 0,
            "repair_checklist": null,
            "repair_security_pwd": null,
            "repair_security_pattern": null,
            "repair_due_date": null,
            "repair_device_id": null,
            "order_addresses": null,
            "is_recurring": 0,
            "recur_interval": null,
            "recur_interval_type": null,
            "recur_repetitions": null,
            "recur_stopped_on": null,
            "recur_parent_id": null,
            "invoice_token": null,
            "pay_term_number": null,
            "pay_term_type": null,
            "pjt_project_id": null,
            "pjt_title": null,
            "woocommerce_order_id": null,
            "selling_price_group_id": null,
            "created_at": "2018-01-06 07:06:11",
            "updated_at": "2018-01-06 07:06:11",
            "sell_lines": [
                {
                    "id": 1,
                    "transaction_id": 6,
                    "product_id": 2,
                    "variation_id": 3,
                    "quantity": 10,
                    "mfg_waste_percent": "0.0000",
                    "quantity_returned": "0.0000",
                    "unit_price_before_discount": "70.0000",
                    "unit_price": "70.0000",
                    "line_discount_type": null,
                    "line_discount_amount": "0.0000",
                    "unit_price_inc_tax": "77.0000",
                    "item_tax": "7.0000",
                    "tax_id": 1,
                    "discount_id": null,
                    "lot_no_line_id": null,
                    "sell_line_note": null,
                    "res_service_staff_id": null,
                    "res_line_order_status": null,
                    "woocommerce_line_items_id": null,
                    "parent_sell_line_id": null,
                    "children_type": "",
                    "sub_unit_id": null,
                    "created_at": "2018-01-06 07:06:11",
                    "updated_at": "2018-01-06 07:06:11"
                }
            ],
            "payment_lines": [
                {
                    "id": 1,
                    "transaction_id": 6,
                    "business_id": null,
                    "is_return": 0,
                    "amount": "770.0000",
                    "method": "cash",
                    "transaction_no": null,
                    "card_transaction_number": null,
                    "card_number": null,
                    "card_type": "visa",
                    "card_holder_name": null,
                    "card_month": null,
                    "card_year": null,
                    "card_security": null,
                    "cheque_number": null,
                    "bank_account_number": null,
                    "paid_on": "2018-01-09 17:30:35",
                    "created_by": 1,
                    "payment_for": null,
                    "parent_id": null,
                    "note": null,
                    "document": null,
                    "payment_ref_no": null,
                    "account_id": null,
                    "created_at": "2018-01-06 01:36:11",
                    "updated_at": "2018-01-06 01:36:11"
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/sell</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sells.*.location_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the business location</td>
</tr>
<tr>
<td><code>sells.*.contact_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the customer</td>
</tr>
<tr>
<td><code>sells.*.transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>sells.*.invoice_no</code></td>
<td>string</td>
<td>optional</td>
<td>Invoice number</td>
</tr>
<tr>
<td><code>sells.*.status</code></td>
<td>string</td>
<td>optional</td>
<td>sale status (final, draft)</td>
</tr>
<tr>
<td><code>sells.*.is_quotation</code></td>
<td>boolean</td>
<td>optional</td>
<td>Is sell quotation (0, 1), If 1 status should be draft</td>
</tr>
<tr>
<td><code>sells.*.tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the tax rate applicable to the sale</td>
</tr>
<tr>
<td><code>sells.*.discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable to the sale</td>
</tr>
<tr>
<td><code>sells.*.discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the discount amount (fixed, percentage)</td>
</tr>
<tr>
<td><code>sells.*.sale_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.staff_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.commission_agent</code></td>
<td>integer</td>
<td>optional</td>
<td>commission agent id</td>
</tr>
<tr>
<td><code>sells.*.shipping_details</code></td>
<td>string</td>
<td>optional</td>
<td>shipping details</td>
</tr>
<tr>
<td><code>sells.*.shipping_address</code></td>
<td>string</td>
<td>optional</td>
<td>shipping address</td>
</tr>
<tr>
<td><code>sells.*.shipping_status</code></td>
<td>string</td>
<td>optional</td>
<td>('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>sells.*.delivered_to</code></td>
<td>string</td>
<td>optional</td>
<td>Name of the person recieved the consignment</td>
</tr>
<tr>
<td><code>sells.*.shipping_charges</code></td>
<td>float</td>
<td>optional</td>
<td>shipping amount</td>
</tr>
<tr>
<td><code>sells.*.packing_charge</code></td>
<td>float</td>
<td>optional</td>
<td>packing charge</td>
</tr>
<tr>
<td><code>sells.*.exchange_rate</code></td>
<td>float</td>
<td>optional</td>
<td>exchange rate for the currency used</td>
</tr>
<tr>
<td><code>sells.*.selling_price_group_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the selling price group</td>
</tr>
<tr>
<td><code>sells.*.pay_term_number</code></td>
<td>integer</td>
<td>optional</td>
<td>pay term value</td>
</tr>
<tr>
<td><code>sells.*.pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the pay term value ('days', 'months')</td>
</tr>
<tr>
<td><code>sells.*.is_recurring</code></td>
<td>integer</td>
<td>optional</td>
<td>whether the invoice is recurring (0, 1)</td>
</tr>
<tr>
<td><code>sells.*.recur_interval</code></td>
<td>integer</td>
<td>optional</td>
<td>value of the interval invoice will be regenerated</td>
</tr>
<tr>
<td><code>sells.*.recur_interval_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the recur interval ('days', 'months', 'years')</td>
</tr>
<tr>
<td><code>sells.*.subscription_repeat_on</code></td>
<td>integer</td>
<td>optional</td>
<td>day of the month on which invoice will be generated if recur interval type is months (1-30)</td>
</tr>
<tr>
<td><code>sells.*.subscription_no</code></td>
<td>string</td>
<td>optional</td>
<td>subscription number</td>
</tr>
<tr>
<td><code>sells.*.recur_repetitions</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of invoices to be generated</td>
</tr>
<tr>
<td><code>sells.*.rp_redeemed</code></td>
<td>integer</td>
<td>optional</td>
<td>reward points redeemed</td>
</tr>
<tr>
<td><code>sells.*.rp_redeemed_amount</code></td>
<td>float</td>
<td>optional</td>
<td>reward point redeemed amount after conversion</td>
</tr>
<tr>
<td><code>sells.*.types_of_service_id</code></td>
<td>integer</td>
<td>optional</td>
<td>types of service id</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_1</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 1</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_2</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 2</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_3</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 3</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_4</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 4</td>
</tr>
<tr>
<td><code>sells.*.round_off_amount</code></td>
<td>float</td>
<td>optional</td>
<td>round off amount on total payable</td>
</tr>
<tr>
<td><code>sells.*.table_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the table</td>
</tr>
<tr>
<td><code>sells.*.service_staff_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the service staff assigned to the sale</td>
</tr>
<tr>
<td><code>sells.*.change_return</code></td>
<td>float</td>
<td>optional</td>
<td>Excess paid amount</td>
</tr>
<tr>
<td><code>sells.*.products</code></td>
<td>array</td>
<td>required</td>
<td>array of the products for the sale</td>
</tr>
<tr>
<td><code>sells.*.payments</code></td>
<td>array</td>
<td>optional</td>
<td>payment lines for the sale</td>
</tr>
<tr>
<td><code>sells.*.products.*.product_id</code></td>
<td>integer</td>
<td>required</td>
<td>product id</td>
</tr>
<tr>
<td><code>sells.*.products.*.variation_id</code></td>
<td>integer</td>
<td>required</td>
<td>variation id</td>
</tr>
<tr>
<td><code>sells.*.products.*.quantity</code></td>
<td>float</td>
<td>required</td>
<td>quantity</td>
</tr>
<tr>
<td><code>sells.*.products.*.unit_price</code></td>
<td>float</td>
<td>optional</td>
<td>unit selling price</td>
</tr>
<tr>
<td><code>sells.*.products.*.tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>tax rate id applicable on the product</td>
</tr>
<tr>
<td><code>sells.*.products.*.discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable on the product</td>
</tr>
<tr>
<td><code>sells.*.products.*.discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of discount amount ('fixed', 'percentage')</td>
</tr>
<tr>
<td><code>sells.*.products.*.sub_unit_id</code></td>
<td>integer</td>
<td>optional</td>
<td>sub unit id</td>
</tr>
<tr>
<td><code>sells.*.products.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>note for the product</td>
</tr>
<tr>
<td><code>sells.*.payments.*.amount</code></td>
<td>float</td>
<td>required</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>sells.*.payments.*.method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>sells.*.payments.*.account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.bank_account_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
<tr>
<td><code>sells.*.payments.*.cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_b36ef2e65db4271ba22222f5c5dce2ba -->
<!-- START_58290524d0f076592088e0a8e43da94c -->
<h2>Get the specified sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/sell/55" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/sell/55"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 55,
            "business_id": 1,
            "location_id": 1,
            "res_table_id": 5,
            "res_waiter_id": null,
            "res_order_status": null,
            "type": "sell",
            "sub_type": null,
            "status": "final",
            "is_quotation": 0,
            "payment_status": "paid",
            "adjustment_type": null,
            "contact_id": 1,
            "customer_group_id": null,
            "invoice_no": "AS0007",
            "ref_no": "",
            "subscription_no": null,
            "subscription_repeat_on": null,
            "transaction_date": "2020-06-04 23:29:36",
            "total_before_tax": "437.5000",
            "tax_id": 1,
            "tax_amount": "39.3750",
            "discount_type": "percentage",
            "discount_amount": "10.0000",
            "rp_redeemed": 0,
            "rp_redeemed_amount": "0.0000",
            "shipping_details": "Express Delivery",
            "shipping_address": null,
            "shipping_status": "ordered",
            "delivered_to": "Mr Robin",
            "shipping_charges": "10.0000",
            "additional_notes": null,
            "staff_note": null,
            "round_off_amount": "0.0000",
            "final_total": "453.1300",
            "expense_category_id": null,
            "expense_for": null,
            "commission_agent": null,
            "document": null,
            "is_direct_sale": 0,
            "is_suspend": 0,
            "exchange_rate": "1.000",
            "total_amount_recovered": null,
            "transfer_parent_id": null,
            "return_parent_id": null,
            "opening_stock_product_id": null,
            "created_by": 9,
            "import_batch": null,
            "import_time": null,
            "types_of_service_id": 1,
            "packing_charge": "10.0000",
            "packing_charge_type": "fixed",
            "service_custom_field_1": null,
            "service_custom_field_2": null,
            "service_custom_field_3": null,
            "service_custom_field_4": null,
            "mfg_parent_production_purchase_id": null,
            "mfg_wasted_units": null,
            "mfg_production_cost": "0.0000",
            "mfg_is_final": 0,
            "is_created_from_api": 0,
            "essentials_duration": "0.00",
            "essentials_duration_unit": null,
            "essentials_amount_per_unit_duration": "0.0000",
            "essentials_allowances": null,
            "essentials_deductions": null,
            "rp_earned": 0,
            "repair_completed_on": null,
            "repair_warranty_id": null,
            "repair_brand_id": null,
            "repair_status_id": null,
            "repair_model_id": null,
            "repair_defects": null,
            "repair_serial_no": null,
            "repair_updates_email": 0,
            "repair_updates_sms": 0,
            "repair_checklist": null,
            "repair_security_pwd": null,
            "repair_security_pattern": null,
            "repair_due_date": null,
            "repair_device_id": null,
            "order_addresses": null,
            "is_recurring": 0,
            "recur_interval": null,
            "recur_interval_type": "days",
            "recur_repetitions": 0,
            "recur_stopped_on": null,
            "recur_parent_id": null,
            "invoice_token": null,
            "pay_term_number": null,
            "pay_term_type": null,
            "pjt_project_id": null,
            "pjt_title": null,
            "woocommerce_order_id": null,
            "selling_price_group_id": 0,
            "created_at": "2020-06-04 23:29:36",
            "updated_at": "2020-06-04 23:29:36",
            "sell_lines": [
                {
                    "id": 38,
                    "transaction_id": 55,
                    "product_id": 17,
                    "variation_id": 58,
                    "quantity": 1,
                    "mfg_waste_percent": "0.0000",
                    "quantity_returned": "0.0000",
                    "unit_price_before_discount": "437.5000",
                    "unit_price": "437.5000",
                    "line_discount_type": "fixed",
                    "line_discount_amount": "0.0000",
                    "unit_price_inc_tax": "437.5000",
                    "item_tax": "0.0000",
                    "tax_id": null,
                    "discount_id": null,
                    "lot_no_line_id": null,
                    "sell_line_note": "",
                    "res_service_staff_id": null,
                    "res_line_order_status": null,
                    "woocommerce_line_items_id": null,
                    "parent_sell_line_id": null,
                    "children_type": "",
                    "sub_unit_id": null,
                    "created_at": "2020-06-04 23:29:36",
                    "updated_at": "2020-06-04 23:29:36"
                }
            ],
            "payment_lines": [
                {
                    "id": 37,
                    "transaction_id": 55,
                    "business_id": 1,
                    "is_return": 0,
                    "amount": "453.1300",
                    "method": "cash",
                    "transaction_no": null,
                    "card_transaction_number": null,
                    "card_number": null,
                    "card_type": "credit",
                    "card_holder_name": null,
                    "card_month": null,
                    "card_year": null,
                    "card_security": null,
                    "cheque_number": null,
                    "bank_account_number": null,
                    "paid_on": "2020-06-04 23:29:36",
                    "created_by": 9,
                    "payment_for": 1,
                    "parent_id": null,
                    "note": null,
                    "document": null,
                    "payment_ref_no": "SP2020\/0002",
                    "account_id": null,
                    "created_at": "2020-06-04 23:29:36",
                    "updated_at": "2020-06-04 23:29:36"
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/sell/{sell}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell</code></td>
<td>required</td>
<td>comma separated ids of the sells</td>
</tr>
</tbody>
</table>
<!-- END_58290524d0f076592088e0a8e43da94c -->
<!-- START_2a80f06912c7d436a7f8e3deb270d869 -->
<h2>Update sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://erp2.vooerp.com/connector/api/sell/6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"contact_id":13,"transaction_date":"2020-5-7 15:20:22","status":"final","is_quotation":true,"tax_rate_id":9,"discount_amount":10,"discount_type":"fixed","sale_note":"impedit","staff_note":"quia","commission_agent":17,"shipping_details":"Express Delivery","shipping_address":"cum","shipping_status":"ordered","delivered_to":"Mr Robin","shipping_charges":10,"packing_charge":10,"exchange_rate":1,"selling_price_group_id":7,"pay_term_number":3,"pay_term_type":"months","is_recurring":0,"recur_interval":9,"recur_interval_type":"days","subscription_repeat_on":7,"subscription_no":"et","recur_repetitions":13,"rp_redeemed":13,"rp_redeemed_amount":13.5,"types_of_service_id":5,"service_custom_field_1":"reprehenderit","service_custom_field_2":"nobis","service_custom_field_3":"distinctio","service_custom_field_4":"nihil","round_off_amount":93870.13096,"table_id":11,"service_staff_id":16,"change_return":0,"change_return_id":8,"products":[{"sell_line_id":8,"product_id":17,"variation_id":58,"quantity":1,"unit_price":437.5,"tax_rate_id":11,"discount_amount":0,"discount_type":"percentage","sub_unit_id":15,"note":"doloremque"}],"payments":[{"payment_id":18,"amount":453.13,"method":"cash","account_id":19,"card_number":"vitae","card_holder_name":"ex","card_transaction_number":"et","card_type":"aut","card_month":"et","card_year":"cupiditate","card_security":"odit","transaction_no_1":"iste","transaction_no_2":"eos","transaction_no_3":"tempore","note":"alias","cheque_number":"corporis","bank_account_number":"quasi"}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/sell/6"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "contact_id": 13,
    "transaction_date": "2020-5-7 15:20:22",
    "status": "final",
    "is_quotation": true,
    "tax_rate_id": 9,
    "discount_amount": 10,
    "discount_type": "fixed",
    "sale_note": "impedit",
    "staff_note": "quia",
    "commission_agent": 17,
    "shipping_details": "Express Delivery",
    "shipping_address": "cum",
    "shipping_status": "ordered",
    "delivered_to": "Mr Robin",
    "shipping_charges": 10,
    "packing_charge": 10,
    "exchange_rate": 1,
    "selling_price_group_id": 7,
    "pay_term_number": 3,
    "pay_term_type": "months",
    "is_recurring": 0,
    "recur_interval": 9,
    "recur_interval_type": "days",
    "subscription_repeat_on": 7,
    "subscription_no": "et",
    "recur_repetitions": 13,
    "rp_redeemed": 13,
    "rp_redeemed_amount": 13.5,
    "types_of_service_id": 5,
    "service_custom_field_1": "reprehenderit",
    "service_custom_field_2": "nobis",
    "service_custom_field_3": "distinctio",
    "service_custom_field_4": "nihil",
    "round_off_amount": 93870.13096,
    "table_id": 11,
    "service_staff_id": 16,
    "change_return": 0,
    "change_return_id": 8,
    "products": [
        {
            "sell_line_id": 8,
            "product_id": 17,
            "variation_id": 58,
            "quantity": 1,
            "unit_price": 437.5,
            "tax_rate_id": 11,
            "discount_amount": 0,
            "discount_type": "percentage",
            "sub_unit_id": 15,
            "note": "doloremque"
        }
    ],
    "payments": [
        {
            "payment_id": 18,
            "amount": 453.13,
            "method": "cash",
            "account_id": 19,
            "card_number": "vitae",
            "card_holder_name": "ex",
            "card_transaction_number": "et",
            "card_type": "aut",
            "card_month": "et",
            "card_year": "cupiditate",
            "card_security": "odit",
            "transaction_no_1": "iste",
            "transaction_no_2": "eos",
            "transaction_no_3": "tempore",
            "note": "alias",
            "cheque_number": "corporis",
            "bank_account_number": "quasi"
        }
    ]
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 91,
    "business_id": 1,
    "location_id": 1,
    "res_table_id": null,
    "res_waiter_id": null,
    "res_order_status": null,
    "type": "sell",
    "sub_type": null,
    "status": "final",
    "is_quotation": 0,
    "payment_status": "paid",
    "adjustment_type": null,
    "contact_id": 1,
    "customer_group_id": 1,
    "invoice_no": "AS0020",
    "ref_no": "",
    "subscription_no": null,
    "subscription_repeat_on": null,
    "transaction_date": "25-09-2020 15:22",
    "total_before_tax": 962.5,
    "tax_id": null,
    "tax_amount": 0,
    "discount_type": "fixed",
    "discount_amount": "19.5000",
    "rp_redeemed": 0,
    "rp_redeemed_amount": "0.0000",
    "shipping_details": null,
    "shipping_address": null,
    "shipping_status": null,
    "delivered_to": null,
    "shipping_charges": "0.0000",
    "additional_notes": null,
    "staff_note": null,
    "round_off_amount": "0.0000",
    "final_total": 943,
    "expense_category_id": null,
    "expense_for": null,
    "commission_agent": null,
    "document": null,
    "is_direct_sale": 0,
    "is_suspend": 0,
    "exchange_rate": "1.000",
    "total_amount_recovered": null,
    "transfer_parent_id": null,
    "return_parent_id": null,
    "opening_stock_product_id": null,
    "created_by": 9,
    "import_batch": null,
    "import_time": null,
    "types_of_service_id": null,
    "packing_charge": "0.0000",
    "packing_charge_type": null,
    "service_custom_field_1": null,
    "service_custom_field_2": null,
    "service_custom_field_3": null,
    "service_custom_field_4": null,
    "mfg_parent_production_purchase_id": null,
    "mfg_wasted_units": null,
    "mfg_production_cost": "0.0000",
    "mfg_production_cost_type": "percentage",
    "mfg_is_final": 0,
    "is_created_from_api": 0,
    "essentials_duration": "0.00",
    "essentials_duration_unit": null,
    "essentials_amount_per_unit_duration": "0.0000",
    "essentials_allowances": null,
    "essentials_deductions": null,
    "rp_earned": 0,
    "repair_completed_on": null,
    "repair_warranty_id": null,
    "repair_brand_id": null,
    "repair_status_id": null,
    "repair_model_id": null,
    "repair_job_sheet_id": null,
    "repair_defects": null,
    "repair_serial_no": null,
    "repair_checklist": null,
    "repair_security_pwd": null,
    "repair_security_pattern": null,
    "repair_due_date": null,
    "repair_device_id": null,
    "repair_updates_notif": 0,
    "order_addresses": null,
    "is_recurring": 0,
    "recur_interval": 1,
    "recur_interval_type": "days",
    "recur_repetitions": 0,
    "recur_stopped_on": null,
    "recur_parent_id": null,
    "invoice_token": null,
    "pay_term_number": null,
    "pay_term_type": null,
    "pjt_project_id": null,
    "pjt_title": null,
    "woocommerce_order_id": null,
    "selling_price_group_id": 0,
    "created_at": "2020-09-23 20:16:19",
    "updated_at": "2020-09-25 17:57:08",
    "payment_lines": [
        {
            "id": 55,
            "transaction_id": 91,
            "business_id": 1,
            "is_return": 0,
            "amount": "461.7500",
            "method": "cash",
            "transaction_no": null,
            "card_transaction_number": null,
            "card_number": null,
            "card_type": "credit",
            "card_holder_name": null,
            "card_month": null,
            "card_year": null,
            "card_security": null,
            "cheque_number": null,
            "bank_account_number": null,
            "paid_on": "2020-09-23 20:16:19",
            "created_by": 9,
            "is_advance": 0,
            "payment_for": 1,
            "parent_id": null,
            "note": null,
            "document": null,
            "payment_ref_no": "SP2020\/0018",
            "account_id": null,
            "created_at": "2020-09-23 20:16:19",
            "updated_at": "2020-09-23 20:16:19"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT connector/api/sell/{sell}</code></p>
<p><code>PATCH connector/api/sell/{sell}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell</code></td>
<td>required</td>
<td>id of sell to update</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the customer</td>
</tr>
<tr>
<td><code>transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>status</code></td>
<td>string</td>
<td>optional</td>
<td>sale status (final, draft)</td>
</tr>
<tr>
<td><code>is_quotation</code></td>
<td>boolean</td>
<td>optional</td>
<td>Is sell quotation (0, 1), If 1 status should be draft</td>
</tr>
<tr>
<td><code>tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the tax rate applicable to the sale</td>
</tr>
<tr>
<td><code>discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable to the sale</td>
</tr>
<tr>
<td><code>discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the discount amount (fixed, percentage)</td>
</tr>
<tr>
<td><code>sale_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>staff_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>commission_agent</code></td>
<td>integer</td>
<td>optional</td>
<td>commission agent id</td>
</tr>
<tr>
<td><code>shipping_details</code></td>
<td>string</td>
<td>optional</td>
<td>shipping details</td>
</tr>
<tr>
<td><code>shipping_address</code></td>
<td>string</td>
<td>optional</td>
<td>shipping address</td>
</tr>
<tr>
<td><code>shipping_status</code></td>
<td>string</td>
<td>optional</td>
<td>('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>delivered_to</code></td>
<td>string</td>
<td>optional</td>
<td>Name of the person recieved the consignment</td>
</tr>
<tr>
<td><code>shipping_charges</code></td>
<td>float</td>
<td>optional</td>
<td>shipping amount</td>
</tr>
<tr>
<td><code>packing_charge</code></td>
<td>float</td>
<td>optional</td>
<td>packing charge</td>
</tr>
<tr>
<td><code>exchange_rate</code></td>
<td>float</td>
<td>optional</td>
<td>exchange rate for the currency used</td>
</tr>
<tr>
<td><code>selling_price_group_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the selling price group</td>
</tr>
<tr>
<td><code>pay_term_number</code></td>
<td>integer</td>
<td>optional</td>
<td>pay term value</td>
</tr>
<tr>
<td><code>pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the pay term value ('days', 'months')</td>
</tr>
<tr>
<td><code>is_recurring</code></td>
<td>integer</td>
<td>optional</td>
<td>whether the invoice is recurring (0, 1)</td>
</tr>
<tr>
<td><code>recur_interval</code></td>
<td>integer</td>
<td>optional</td>
<td>value of the interval invoice will be regenerated</td>
</tr>
<tr>
<td><code>recur_interval_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the recur interval ('days', 'months', 'years')</td>
</tr>
<tr>
<td><code>subscription_repeat_on</code></td>
<td>integer</td>
<td>optional</td>
<td>day of the month on which invoice will be generated if recur interval type is months (1-30)</td>
</tr>
<tr>
<td><code>subscription_no</code></td>
<td>string</td>
<td>optional</td>
<td>subscription number</td>
</tr>
<tr>
<td><code>recur_repetitions</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of invoices to be generated</td>
</tr>
<tr>
<td><code>rp_redeemed</code></td>
<td>integer</td>
<td>optional</td>
<td>reward points redeemed</td>
</tr>
<tr>
<td><code>rp_redeemed_amount</code></td>
<td>float</td>
<td>optional</td>
<td>reward point redeemed amount after conversion</td>
</tr>
<tr>
<td><code>types_of_service_id</code></td>
<td>integer</td>
<td>optional</td>
<td>types of service id</td>
</tr>
<tr>
<td><code>service_custom_field_1</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 1</td>
</tr>
<tr>
<td><code>service_custom_field_2</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 2</td>
</tr>
<tr>
<td><code>service_custom_field_3</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 3</td>
</tr>
<tr>
<td><code>service_custom_field_4</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 4</td>
</tr>
<tr>
<td><code>round_off_amount</code></td>
<td>float</td>
<td>optional</td>
<td>round off amount on total payable</td>
</tr>
<tr>
<td><code>table_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the table</td>
</tr>
<tr>
<td><code>service_staff_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the service staff assigned to the sale</td>
</tr>
<tr>
<td><code>change_return</code></td>
<td>float</td>
<td>optional</td>
<td>Excess paid amount</td>
</tr>
<tr>
<td><code>change_return_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the change return payment if exists</td>
</tr>
<tr>
<td><code>products</code></td>
<td>array</td>
<td>required</td>
<td>array of the products for the sale</td>
</tr>
<tr>
<td><code>payments</code></td>
<td>array</td>
<td>optional</td>
<td>payment lines for the sale</td>
</tr>
<tr>
<td><code>products.*.sell_line_id</code></td>
<td>integer</td>
<td>optional</td>
<td>sell line id for existing item only</td>
</tr>
<tr>
<td><code>products.*.product_id</code></td>
<td>integer</td>
<td>optional</td>
<td>product id</td>
</tr>
<tr>
<td><code>products.*.variation_id</code></td>
<td>integer</td>
<td>optional</td>
<td>variation id</td>
</tr>
<tr>
<td><code>products.*.quantity</code></td>
<td>float</td>
<td>optional</td>
<td>quantity</td>
</tr>
<tr>
<td><code>products.*.unit_price</code></td>
<td>float</td>
<td>optional</td>
<td>unit selling price</td>
</tr>
<tr>
<td><code>products.*.tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>tax rate id applicable on the product</td>
</tr>
<tr>
<td><code>products.*.discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable on the product</td>
</tr>
<tr>
<td><code>products.*.discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of discount amount ('fixed', 'percentage')</td>
</tr>
<tr>
<td><code>products.*.sub_unit_id</code></td>
<td>integer</td>
<td>optional</td>
<td>sub unit id</td>
</tr>
<tr>
<td><code>products.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>note for the product</td>
</tr>
<tr>
<td><code>payments.*.payment_id</code></td>
<td>integer</td>
<td>optional</td>
<td>payment id for existing payment line</td>
</tr>
<tr>
<td><code>payments.*.amount</code></td>
<td>float</td>
<td>optional</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>payments.*.method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>payments.*.account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>payments.*.card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
<tr>
<td><code>payments.*.cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.bank_account_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_2a80f06912c7d436a7f8e3deb270d869 -->
<!-- START_baafa13f7e2b1743b19694175534b085 -->
<h2>Delete Sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://erp2.vooerp.com/connector/api/sell/odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/sell/odio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE connector/api/sell/{sell}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell</code></td>
<td>required</td>
<td>id of the sell to be deleted</td>
</tr>
</tbody>
</table>
<!-- END_baafa13f7e2b1743b19694175534b085 -->
<!-- START_915df593fed3a09da6acc3b2f4cce019 -->
<h2>Add Sell Return</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://erp2.vooerp.com/connector/api/sell-return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"transaction_id":6,"transaction_date":"2020-5-7 15:20:22","invoice_no":"qui","discount_amount":10,"discount_type":"fixed","products":[{"sell_line_id":5,"quantity":1,"unit_price_inc_tax":437.5}]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/sell-return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "transaction_id": 6,
    "transaction_date": "2020-5-7 15:20:22",
    "invoice_no": "qui",
    "discount_amount": 10,
    "discount_type": "fixed",
    "products": [
        {
            "sell_line_id": 5,
            "quantity": 1,
            "unit_price_inc_tax": 437.5
        }
    ]
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 159,
    "business_id": 1,
    "location_id": 1,
    "res_table_id": null,
    "res_waiter_id": null,
    "res_order_status": null,
    "type": "sell_return",
    "sub_type": null,
    "status": "final",
    "is_quotation": 0,
    "payment_status": "paid",
    "adjustment_type": null,
    "contact_id": 1,
    "customer_group_id": null,
    "invoice_no": "CN2020\/0005",
    "ref_no": null,
    "subscription_no": null,
    "subscription_repeat_on": null,
    "transaction_date": "2020-11-17 00:00:00",
    "total_before_tax": 3,
    "tax_id": null,
    "tax_amount": 0,
    "discount_type": "percentage",
    "discount_amount": 12,
    "rp_redeemed": 0,
    "rp_redeemed_amount": "0.0000",
    "shipping_details": null,
    "shipping_address": null,
    "shipping_status": null,
    "delivered_to": null,
    "shipping_charges": "0.0000",
    "additional_notes": null,
    "staff_note": null,
    "round_off_amount": "0.0000",
    "final_total": 2.64,
    "expense_category_id": null,
    "expense_for": null,
    "commission_agent": null,
    "document": null,
    "is_direct_sale": 0,
    "is_suspend": 0,
    "exchange_rate": "1.000",
    "total_amount_recovered": null,
    "transfer_parent_id": null,
    "return_parent_id": 157,
    "opening_stock_product_id": null,
    "created_by": 9,
    "import_batch": null,
    "import_time": null,
    "types_of_service_id": null,
    "packing_charge": null,
    "packing_charge_type": null,
    "service_custom_field_1": null,
    "service_custom_field_2": null,
    "service_custom_field_3": null,
    "service_custom_field_4": null,
    "mfg_parent_production_purchase_id": null,
    "mfg_wasted_units": null,
    "mfg_production_cost": "0.0000",
    "mfg_production_cost_type": "percentage",
    "mfg_is_final": 0,
    "is_created_from_api": 0,
    "essentials_duration": "0.00",
    "essentials_duration_unit": null,
    "essentials_amount_per_unit_duration": "0.0000",
    "essentials_allowances": null,
    "essentials_deductions": null,
    "rp_earned": 0,
    "repair_completed_on": null,
    "repair_warranty_id": null,
    "repair_brand_id": null,
    "repair_status_id": null,
    "repair_model_id": null,
    "repair_job_sheet_id": null,
    "repair_defects": null,
    "repair_serial_no": null,
    "repair_checklist": null,
    "repair_security_pwd": null,
    "repair_security_pattern": null,
    "repair_due_date": null,
    "repair_device_id": null,
    "repair_updates_notif": 0,
    "order_addresses": null,
    "is_recurring": 0,
    "recur_interval": null,
    "recur_interval_type": null,
    "recur_repetitions": null,
    "recur_stopped_on": null,
    "recur_parent_id": null,
    "invoice_token": null,
    "pay_term_number": null,
    "pay_term_type": null,
    "pjt_project_id": null,
    "pjt_title": null,
    "woocommerce_order_id": null,
    "selling_price_group_id": null,
    "created_at": "2020-11-17 12:05:11",
    "updated_at": "2020-11-17 13:22:09"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/sell-return</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>transaction_id</code></td>
<td>integer</td>
<td>required</td>
<td>Id of the sell</td>
</tr>
<tr>
<td><code>transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>invoice_no</code></td>
<td>string</td>
<td>optional</td>
<td>Invoice number of the return</td>
</tr>
<tr>
<td><code>discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable to the sale</td>
</tr>
<tr>
<td><code>discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the discount amount (fixed, percentage)</td>
</tr>
<tr>
<td><code>products</code></td>
<td>array</td>
<td>required</td>
<td>array of the products for the sale</td>
</tr>
<tr>
<td><code>products.*.sell_line_id</code></td>
<td>integer</td>
<td>required</td>
<td>sell line id</td>
</tr>
<tr>
<td><code>products.*.quantity</code></td>
<td>float</td>
<td>required</td>
<td>quantity to be returned from the sell line</td>
</tr>
<tr>
<td><code>products.*.unit_price_inc_tax</code></td>
<td>float</td>
<td>required</td>
<td>unit selling price of the returning item</td>
</tr>
</tbody>
</table>
<!-- END_915df593fed3a09da6acc3b2f4cce019 -->
<!-- START_65fedd88e348b2b300399869c8a4e299 -->
<h2>List Sell Return</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/list-sell-return" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/list-sell-return"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 159,
            "business_id": 1,
            "location_id": 1,
            "res_table_id": null,
            "res_waiter_id": null,
            "res_order_status": null,
            "type": "sell_return",
            "sub_type": null,
            "status": "final",
            "is_quotation": 0,
            "payment_status": "partial",
            "adjustment_type": null,
            "contact_id": 1,
            "customer_group_id": null,
            "invoice_no": "CN2020\/0005",
            "ref_no": null,
            "subscription_no": null,
            "subscription_repeat_on": null,
            "transaction_date": "2020-11-17 00:00:00",
            "total_before_tax": "3.0000",
            "tax_id": null,
            "tax_amount": "0.0000",
            "discount_type": "percentage",
            "discount_amount": "12.0000",
            "rp_redeemed": 0,
            "rp_redeemed_amount": "0.0000",
            "shipping_details": null,
            "shipping_address": null,
            "shipping_status": null,
            "delivered_to": null,
            "shipping_charges": "0.0000",
            "additional_notes": null,
            "staff_note": null,
            "round_off_amount": "0.0000",
            "final_total": "2.6400",
            "expense_category_id": null,
            "expense_for": null,
            "commission_agent": null,
            "document": null,
            "is_direct_sale": 0,
            "is_suspend": 0,
            "exchange_rate": "1.000",
            "total_amount_recovered": null,
            "transfer_parent_id": null,
            "return_parent_id": 157,
            "opening_stock_product_id": null,
            "created_by": 9,
            "import_batch": null,
            "import_time": null,
            "types_of_service_id": null,
            "packing_charge": null,
            "packing_charge_type": null,
            "service_custom_field_1": null,
            "service_custom_field_2": null,
            "service_custom_field_3": null,
            "service_custom_field_4": null,
            "mfg_parent_production_purchase_id": null,
            "mfg_wasted_units": null,
            "mfg_production_cost": "0.0000",
            "mfg_production_cost_type": "percentage",
            "mfg_is_final": 0,
            "is_created_from_api": 0,
            "essentials_duration": "0.00",
            "essentials_duration_unit": null,
            "essentials_amount_per_unit_duration": "0.0000",
            "essentials_allowances": null,
            "essentials_deductions": null,
            "rp_earned": 0,
            "repair_completed_on": null,
            "repair_warranty_id": null,
            "repair_brand_id": null,
            "repair_status_id": null,
            "repair_model_id": null,
            "repair_job_sheet_id": null,
            "repair_defects": null,
            "repair_serial_no": null,
            "repair_checklist": null,
            "repair_security_pwd": null,
            "repair_security_pattern": null,
            "repair_due_date": null,
            "repair_device_id": null,
            "repair_updates_notif": 0,
            "order_addresses": null,
            "is_recurring": 0,
            "recur_interval": null,
            "recur_interval_type": null,
            "recur_repetitions": null,
            "recur_stopped_on": null,
            "recur_parent_id": null,
            "invoice_token": null,
            "pay_term_number": null,
            "pay_term_type": null,
            "pjt_project_id": null,
            "pjt_title": null,
            "woocommerce_order_id": null,
            "selling_price_group_id": null,
            "created_at": "2020-11-17 12:05:11",
            "updated_at": "2020-11-17 13:22:09",
            "payment_lines": [
                {
                    "id": 126,
                    "transaction_id": 159,
                    "business_id": 1,
                    "is_return": 0,
                    "amount": "1.8000",
                    "method": "cash",
                    "transaction_no": null,
                    "card_transaction_number": null,
                    "card_number": null,
                    "card_type": "credit",
                    "card_holder_name": null,
                    "card_month": null,
                    "card_year": null,
                    "card_security": null,
                    "cheque_number": null,
                    "bank_account_number": null,
                    "paid_on": "2020-11-17 12:05:00",
                    "created_by": 9,
                    "is_advance": 0,
                    "payment_for": 1,
                    "parent_id": null,
                    "note": null,
                    "document": null,
                    "payment_ref_no": "SP2020\/0078",
                    "account_id": null,
                    "created_at": "2020-11-17 12:05:58",
                    "updated_at": "2020-11-17 12:05:58"
                }
            ],
            "return_parent_sell": {
                "id": 157,
                "business_id": 1,
                "location_id": 1,
                "res_table_id": null,
                "res_waiter_id": null,
                "res_order_status": null,
                "type": "sell",
                "sub_type": null,
                "status": "final",
                "is_quotation": 0,
                "payment_status": "paid",
                "adjustment_type": null,
                "contact_id": 1,
                "customer_group_id": null,
                "invoice_no": "AS0073",
                "ref_no": "",
                "subscription_no": null,
                "subscription_repeat_on": null,
                "transaction_date": "2020-11-13 12:42:17",
                "total_before_tax": "6.2500",
                "tax_id": null,
                "tax_amount": "0.0000",
                "discount_type": "percentage",
                "discount_amount": "10.0000",
                "rp_redeemed": 0,
                "rp_redeemed_amount": "0.0000",
                "shipping_details": null,
                "shipping_address": null,
                "shipping_status": null,
                "delivered_to": null,
                "shipping_charges": "0.0000",
                "additional_notes": null,
                "staff_note": null,
                "round_off_amount": "0.0000",
                "final_total": "5.6300",
                "expense_category_id": null,
                "expense_for": null,
                "commission_agent": null,
                "document": null,
                "is_direct_sale": 0,
                "is_suspend": 0,
                "exchange_rate": "1.000",
                "total_amount_recovered": null,
                "transfer_parent_id": null,
                "return_parent_id": null,
                "opening_stock_product_id": null,
                "created_by": 9,
                "import_batch": null,
                "import_time": null,
                "types_of_service_id": null,
                "packing_charge": "0.0000",
                "packing_charge_type": null,
                "service_custom_field_1": null,
                "service_custom_field_2": null,
                "service_custom_field_3": null,
                "service_custom_field_4": null,
                "mfg_parent_production_purchase_id": null,
                "mfg_wasted_units": null,
                "mfg_production_cost": "0.0000",
                "mfg_production_cost_type": "percentage",
                "mfg_is_final": 0,
                "is_created_from_api": 0,
                "essentials_duration": "0.00",
                "essentials_duration_unit": null,
                "essentials_amount_per_unit_duration": "0.0000",
                "essentials_allowances": null,
                "essentials_deductions": null,
                "rp_earned": 0,
                "repair_completed_on": null,
                "repair_warranty_id": null,
                "repair_brand_id": null,
                "repair_status_id": null,
                "repair_model_id": null,
                "repair_job_sheet_id": null,
                "repair_defects": null,
                "repair_serial_no": null,
                "repair_checklist": null,
                "repair_security_pwd": null,
                "repair_security_pattern": null,
                "repair_due_date": null,
                "repair_device_id": null,
                "repair_updates_notif": 0,
                "order_addresses": null,
                "is_recurring": 0,
                "recur_interval": 1,
                "recur_interval_type": "days",
                "recur_repetitions": 0,
                "recur_stopped_on": null,
                "recur_parent_id": null,
                "invoice_token": null,
                "pay_term_number": null,
                "pay_term_type": null,
                "pjt_project_id": null,
                "pjt_title": null,
                "woocommerce_order_id": null,
                "selling_price_group_id": 0,
                "created_at": "2020-11-13 12:42:17",
                "updated_at": "2020-11-13 12:42:18",
                "sell_lines": [
                    {
                        "id": 139,
                        "transaction_id": 157,
                        "product_id": 157,
                        "variation_id": 205,
                        "quantity": 5,
                        "mfg_waste_percent": "0.0000",
                        "quantity_returned": "3.0000",
                        "unit_price_before_discount": "1.2500",
                        "unit_price": "1.2500",
                        "line_discount_type": "fixed",
                        "line_discount_amount": "0.0000",
                        "unit_price_inc_tax": "1.2500",
                        "item_tax": "0.0000",
                        "tax_id": null,
                        "discount_id": null,
                        "lot_no_line_id": null,
                        "sell_line_note": "",
                        "res_service_staff_id": null,
                        "res_line_order_status": null,
                        "woocommerce_line_items_id": null,
                        "parent_sell_line_id": null,
                        "children_type": "",
                        "sub_unit_id": null,
                        "created_at": "2020-11-13 12:42:17",
                        "updated_at": "2020-11-17 13:22:09"
                    }
                ]
            }
        }
    ],
    "links": {
        "first": "http:\/\/local.pos.com\/connector\/api\/list-sell-return?sell_id=157&amp;page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/local.pos.com\/connector\/api\/list-sell-return",
        "per_page": 10,
        "to": 1
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/list-sell-return</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell_id</code></td>
<td>optional</td>
<td>Id of the sell for which return is added</td>
</tr>
</tbody>
</table>
<!-- END_65fedd88e348b2b300399869c8a4e299 -->
<!-- START_13d1efb0e363abdb0c1d2b6b1b538cfd -->
<h2>Update shipping status</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://erp2.vooerp.com/connector/api/update-shipping-status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"id":20,"shipping_status":"ordered","delivered_to":"beatae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/update-shipping-status"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "id": 20,
    "shipping_status": "ordered",
    "delivered_to": "beatae"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/update-shipping-status</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the sale</td>
</tr>
<tr>
<td><code>shipping_status</code></td>
<td>string</td>
<td>optional</td>
<td>('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>delivered_to</code></td>
<td>string</td>
<td>optional</td>
<td>Name of the consignee</td>
</tr>
</tbody>
</table>
<!-- END_13d1efb0e363abdb0c1d2b6b1b538cfd -->
<!--<h1>Superadmin</h1>-->
<!-- START_9c3766fcfc8903a5407f756fa5d6a6ac -->
<!--<h2>Get active subscription details</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/active-subscription" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/active-subscription"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": {-->
<!--        "id": 1,-->
<!--        "business_id": 1,-->
<!--        "package_id": 3,-->
<!--        "start_date": "2020-09-05 00:00:00",-->
<!--        "trial_end_date": "2020-09-15",-->
<!--        "end_date": "2020-10-05 00:00:00",-->
<!--        "package_price": "599.9900",-->
<!--        "package_details": {-->
<!--            "location_count": 0,-->
<!--            "user_count": 0,-->
<!--            "product_count": 0,-->
<!--            "invoice_count": 0,-->
<!--            "name": "Unlimited",-->
<!--            "woocommerce_module": 1,-->
<!--            "essentials_module": 1-->
<!--        },-->
<!--        "created_id": 1,-->
<!--        "paid_via": "stripe",-->
<!--        "payment_transaction_id": "ch_1CuLdQAhokBpT93LVZNg2At6",-->
<!--        "status": "approved",-->
<!--        "deleted_at": null,-->
<!--        "created_at": "2018-08-01 07:49:09",-->
<!--        "updated_at": "2018-08-01 07:49:09",-->
<!--        "locations_created": 1,-->
<!--        "users_created": 6,-->
<!--        "products_created": 2,-->
<!--        "invoices_created": 1-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/active-subscription</code></p>-->
<!-- END_9c3766fcfc8903a5407f756fa5d6a6ac -->
<!-- START_f5b3230edac6232bb97641903e95ef57 -->
<!--<h2>Get Superadmin Package List</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/packages" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/packages"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "name": "Starter - Free",-->
<!--            "description": "Give it a test drive...",-->
<!--            "location_count": 0,-->
<!--            "user_count": 0,-->
<!--            "product_count": 0,-->
<!--            "bookings": 0,-->
<!--            "kitchen": 0,-->
<!--            "order_screen": 0,-->
<!--            "tables": 0,-->
<!--            "invoice_count": 0,-->
<!--            "interval": "months",-->
<!--            "interval_count": 1,-->
<!--            "trial_days": 10,-->
<!--            "price": "0.0000",-->
<!--            "custom_permissions": {-->
<!--                "assetmanagement_module": "1",-->
<!--                "connector_module": "1",-->
<!--                "crm_module": "1",-->
<!--                "essentials_module": "1",-->
<!--                "manufacturing_module": "1",-->
<!--                "productcatalogue_module": "1",-->
<!--                "project_module": "1",-->
<!--                "repair_module": "1",-->
<!--                "woocommerce_module": "1"-->
<!--            },-->
<!--            "created_by": 1,-->
<!--            "sort_order": 0,-->
<!--            "is_active": 1,-->
<!--            "is_private": 0,-->
<!--            "is_one_time": 0,-->
<!--            "enable_custom_link": 0,-->
<!--            "custom_link": "",-->
<!--            "custom_link_text": "",-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-10-09 16:38:02",-->
<!--            "updated_at": "2020-11-11 12:19:17"-->
<!--        },-->
<!--        {-->
<!--            "id": 2,-->
<!--            "name": "Regular",-->
<!--            "description": "For Small Shops",-->
<!--            "location_count": 0,-->
<!--            "user_count": 0,-->
<!--            "product_count": 0,-->
<!--            "bookings": 0,-->
<!--            "kitchen": 0,-->
<!--            "order_screen": 0,-->
<!--            "tables": 0,-->
<!--            "invoice_count": 0,-->
<!--            "interval": "months",-->
<!--            "interval_count": 1,-->
<!--            "trial_days": 10,-->
<!--            "price": "199.9900",-->
<!--            "custom_permissions": {-->
<!--                "repair_module": "1"-->
<!--            },-->
<!--            "created_by": 1,-->
<!--            "sort_order": 1,-->
<!--            "is_active": 1,-->
<!--            "is_private": 0,-->
<!--            "is_one_time": 0,-->
<!--            "enable_custom_link": 0,-->
<!--            "custom_link": null,-->
<!--            "custom_link_text": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-10-09 16:38:02",-->
<!--            "updated_at": "2020-10-09 16:38:02"-->
<!--        },-->
<!--        {-->
<!--            "id": 3,-->
<!--            "name": "Unlimited",-->
<!--            "description": "For Large Business",-->
<!--            "location_count": 0,-->
<!--            "user_count": 0,-->
<!--            "product_count": 0,-->
<!--            "bookings": 0,-->
<!--            "kitchen": 0,-->
<!--            "order_screen": 0,-->
<!--            "tables": 0,-->
<!--            "invoice_count": 0,-->
<!--            "interval": "months",-->
<!--            "interval_count": 1,-->
<!--            "trial_days": 10,-->
<!--            "price": "599.9900",-->
<!--            "custom_permissions": {-->
<!--                "assetmanagement_module": "1",-->
<!--                "connector_module": "1",-->
<!--                "crm_module": "1",-->
<!--                "essentials_module": "1",-->
<!--                "manufacturing_module": "1",-->
<!--                "productcatalogue_module": "1",-->
<!--                "project_module": "1",-->
<!--                "repair_module": "1",-->
<!--                "woocommerce_module": "1"-->
<!--            },-->
<!--            "created_by": 1,-->
<!--            "sort_order": 1,-->
<!--            "is_active": 1,-->
<!--            "is_private": 0,-->
<!--            "is_one_time": 0,-->
<!--            "enable_custom_link": 0,-->
<!--            "custom_link": "",-->
<!--            "custom_link_text": "",-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-10-09 16:38:02",-->
<!--            "updated_at": "2020-11-02 12:09:19"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/packages</code></p>-->
<!-- END_f5b3230edac6232bb97641903e95ef57 -->
<!--<h1>Table management</h1>-->
<!-- START_b0940bb5148ed593b38ecffd6d0524d4 -->
<!--<h2>List tables</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/table?location_id=velit" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/table"-->
<!--);-->

<!--let params = {-->
<!--    "location_id": "velit",-->
<!--};-->
<!--Object.keys(params)-->
<!--    .forEach(key =&gt; url.searchParams.append(key, params[key]));-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 5,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "name": "Table 1",-->
<!--            "description": null,-->
<!--            "created_by": 9,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-06-04 22:36:37",-->
<!--            "updated_at": "2020-06-04 22:36:37"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/table</code></p>-->
<!--<h4>Query Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>int id of the location</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_b0940bb5148ed593b38ecffd6d0524d4 -->
<!-- START_74a747cca362ed29880939bd55a57127 -->
<!--<h2>Show the specified table</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/table/5" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/table/5"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 5,-->
<!--            "business_id": 1,-->
<!--            "location_id": 1,-->
<!--            "name": "Table 1",-->
<!--            "description": null,-->
<!--            "created_by": 9,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-06-04 22:36:37",-->
<!--            "updated_at": "2020-06-04 22:36:37"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/table/{table}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>table</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of required tables</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_74a747cca362ed29880939bd55a57127 -->
<!--<h1>Tax management</h1>-->
<!-- START_f9b364a9748fed0253f02b17a450703d -->
<!--<h2>List taxes</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/tax" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/tax"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d1b0c190d7c7d">[email&#160;protected]</a>%",-->
<!--            "amount": 10,-->
<!--            "is_tax_group": 0,-->
<!--            "created_by": 1,-->
<!--            "woocommerce_tax_rate_id": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-04 02:40:07",-->
<!--            "updated_at": "2018-01-04 02:40:07"-->
<!--        },-->
<!--        {-->
<!--            "id": 2,-->
<!--            "business_id": 1,-->
<!--            "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90d3d7c3c4d0a1a0">[email&#160;protected]</a>%",-->
<!--            "amount": 10,-->
<!--            "is_tax_group": 0,-->
<!--            "created_by": 1,-->
<!--            "woocommerce_tax_rate_id": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-04 02:40:55",-->
<!--            "updated_at": "2018-01-04 02:40:55"-->
<!--        },-->
<!--        {-->
<!--            "id": 3,-->
<!--            "business_id": 1,-->
<!--            "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3261756166720a">[email&#160;protected]</a>%",-->
<!--            "amount": 8,-->
<!--            "is_tax_group": 0,-->
<!--            "created_by": 1,-->
<!--            "woocommerce_tax_rate_id": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-04 02:41:13",-->
<!--            "updated_at": "2018-01-04 02:41:13"-->
<!--        },-->
<!--        {-->
<!--            "id": 4,-->
<!--            "business_id": 1,-->
<!--            "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88cfdbdcc8b9b0">[email&#160;protected]</a>%",-->
<!--            "amount": 18,-->
<!--            "is_tax_group": 1,-->
<!--            "created_by": 1,-->
<!--            "woocommerce_tax_rate_id": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-04 02:42:19",-->
<!--            "updated_at": "2018-01-04 02:42:19"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/tax</code></p>-->
<!-- END_f9b364a9748fed0253f02b17a450703d -->
<!-- START_930b84e999710cdc95d8205b1054a595 -->
<!--<h2>Get the specified tax</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/tax/1" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/tax/1"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "name": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d7b6c796d1c1d">[email&#160;protected]</a>%",-->
<!--            "amount": 10,-->
<!--            "is_tax_group": 0,-->
<!--            "created_by": 1,-->
<!--            "woocommerce_tax_rate_id": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-04 02:40:07",-->
<!--            "updated_at": "2018-01-04 02:40:07"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/tax/{tax}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>tax</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of required taxes</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_930b84e999710cdc95d8205b1054a595 -->
<h1>Category management</h1>
<!-- START_f8494c9a746f2982f51e344563b475a8 -->
<h2>List Category</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/taxonomy?type=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/taxonomy"
);

let params = {
    "type": "quia",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Men's",
            "business_id": 1,
            "short_code": null,
            "parent_id": 0,
            "created_by": 1,
            "category_type": "product",
            "description": null,
            "slug": null,
            "woocommerce_cat_id": null,
            "deleted_at": null,
            "created_at": "2018-01-03 21:06:34",
            "updated_at": "2018-01-03 21:06:34",
            "sub_categories": [
                {
                    "id": 4,
                    "name": "Jeans",
                    "business_id": 1,
                    "short_code": null,
                    "parent_id": 1,
                    "created_by": 1,
                    "category_type": "product",
                    "description": null,
                    "slug": null,
                    "woocommerce_cat_id": null,
                    "deleted_at": null,
                    "created_at": "2018-01-03 21:07:34",
                    "updated_at": "2018-01-03 21:07:34"
                },
                {
                    "id": 5,
                    "name": "Shirts",
                    "business_id": 1,
                    "short_code": null,
                    "parent_id": 1,
                    "created_by": 1,
                    "category_type": "product",
                    "description": null,
                    "slug": null,
                    "woocommerce_cat_id": null,
                    "deleted_at": null,
                    "created_at": "2018-01-03 21:08:18",
                    "updated_at": "2018-01-03 21:08:18"
                }
            ]
        },
        {
            "id": 21,
            "name": "Food &amp; Grocery",
            "business_id": 1,
            "short_code": null,
            "parent_id": 0,
            "created_by": 1,
            "category_type": "product",
            "description": null,
            "slug": null,
            "woocommerce_cat_id": null,
            "deleted_at": null,
            "created_at": "2018-01-06 05:31:35",
            "updated_at": "2018-01-06 05:31:35",
            "sub_categories": []
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/taxonomy</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>optional</td>
<td>Type of Category (product, device, hrm_department)</td>
</tr>
</tbody>
</table>
<!-- END_f8494c9a746f2982f51e344563b475a8 -->
<!-- START_b928b0227f535bab611da00bc247f60c -->
<h2>Get the specified Category</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/taxonomy/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/taxonomy/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Men's",
            "business_id": 1,
            "short_code": null,
            "parent_id": 0,
            "created_by": 1,
            "category_type": "product",
            "description": null,
            "slug": null,
            "woocommerce_cat_id": null,
            "deleted_at": null,
            "created_at": "2018-01-03 21:06:34",
            "updated_at": "2018-01-03 21:06:34",
            "sub_categories": [
                {
                    "id": 4,
                    "name": "Jeans",
                    "business_id": 1,
                    "short_code": null,
                    "parent_id": 1,
                    "created_by": 1,
                    "category_type": "product",
                    "description": null,
                    "slug": null,
                    "woocommerce_cat_id": null,
                    "deleted_at": null,
                    "created_at": "2018-01-03 21:07:34",
                    "updated_at": "2018-01-03 21:07:34"
                },
                {
                    "id": 5,
                    "name": "Shirts",
                    "business_id": 1,
                    "short_code": null,
                    "parent_id": 1,
                    "created_by": 1,
                    "category_type": "product",
                    "description": null,
                    "slug": null,
                    "woocommerce_cat_id": null,
                    "deleted_at": null,
                    "created_at": "2018-01-03 21:08:18",
                    "updated_at": "2018-01-03 21:08:18"
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/taxonomy/{taxonomy}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>Category</code></td>
<td>required</td>
<td>comma separated ids of product categories</td>
</tr>
</tbody>
</table>
<!-- END_b928b0227f535bab611da00bc247f60c -->
<!--<h1>Types of service management</h1>-->
<!-- START_b7d8e3052b6a47b9bfe5f6ebd5d8fa61 -->
<!--<h2>List types of service</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/types-of-service" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/types-of-service"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "name": "Home Delivery",-->
<!--            "description": null,-->
<!--            "business_id": 1,-->
<!--            "location_price_group": {-->
<!--                "1": "0"-->
<!--            },-->
<!--            "packing_charge": "10.0000",-->
<!--            "packing_charge_type": "fixed",-->
<!--            "enable_custom_fields": 0,-->
<!--            "created_at": "2020-06-04 22:41:13",-->
<!--            "updated_at": "2020-06-04 22:41:13"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/types-of-service</code></p>-->
<!-- END_b7d8e3052b6a47b9bfe5f6ebd5d8fa61 -->
<!-- START_d7b9bf97c5de35536625b759853d0fe3 -->
<!--<h2>Get the specified types of service</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/types-of-service/1" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/types-of-service/1"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "name": "Home Delivery",-->
<!--            "description": null,-->
<!--            "business_id": 1,-->
<!--            "location_price_group": {-->
<!--                "1": "0"-->
<!--            },-->
<!--            "packing_charge": "10.0000",-->
<!--            "packing_charge_type": "fixed",-->
<!--            "enable_custom_fields": 0,-->
<!--            "created_at": "2020-06-04 22:41:13",-->
<!--            "updated_at": "2020-06-04 22:41:13"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/types-of-service/{types_of_service}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>types_of_service</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of required types of services</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_d7b9bf97c5de35536625b759853d0fe3 -->
<!--<h1>Unit management</h1>-->
<!-- START_67d5fa9f69cb75cbecbcab90aa615c1e -->
<!--<h2>List units</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/unit" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/unit"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "actual_name": "Pieces",-->
<!--            "short_name": "Pc(s)",-->
<!--            "allow_decimal": 0,-->
<!--            "base_unit_id": null,-->
<!--            "base_unit_multiplier": null,-->
<!--            "created_by": 1,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-03 15:15:20",-->
<!--            "updated_at": "2018-01-03 15:15:20",-->
<!--            "base_unit": null-->
<!--        },-->
<!--        {-->
<!--            "id": 2,-->
<!--            "business_id": 1,-->
<!--            "actual_name": "Packets",-->
<!--            "short_name": "packets",-->
<!--            "allow_decimal": 0,-->
<!--            "base_unit_id": null,-->
<!--            "base_unit_multiplier": null,-->
<!--            "created_by": 1,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-06 01:07:01",-->
<!--            "updated_at": "2018-01-06 01:08:36",-->
<!--            "base_unit": null-->
<!--        },-->
<!--        {-->
<!--            "id": 15,-->
<!--            "business_id": 1,-->
<!--            "actual_name": "Dozen",-->
<!--            "short_name": "dz",-->
<!--            "allow_decimal": 0,-->
<!--            "base_unit_id": 1,-->
<!--            "base_unit_multiplier": "12.0000",-->
<!--            "created_by": 9,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-07-20 13:11:09",-->
<!--            "updated_at": "2020-07-20 13:11:09",-->
<!--            "base_unit": {-->
<!--                "id": 1,-->
<!--                "business_id": 1,-->
<!--                "actual_name": "Pieces",-->
<!--                "short_name": "Pc(s)",-->
<!--                "allow_decimal": 0,-->
<!--                "base_unit_id": null,-->
<!--                "base_unit_multiplier": null,-->
<!--                "created_by": 1,-->
<!--                "deleted_at": null,-->
<!--                "created_at": "2018-01-03 15:15:20",-->
<!--                "updated_at": "2018-01-03 15:15:20"-->
<!--            }-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/unit</code></p>-->
<!-- END_67d5fa9f69cb75cbecbcab90aa615c1e -->
<!-- START_17b54fc5627b3e3dab9d30f80da21dc9 -->
<!--<h2>Get the specified unit</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/unit/1" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/unit/1"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "actual_name": "Pieces",-->
<!--            "short_name": "Pc(s)",-->
<!--            "allow_decimal": 0,-->
<!--            "base_unit_id": null,-->
<!--            "base_unit_multiplier": null,-->
<!--            "created_by": 1,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-03 15:15:20",-->
<!--            "updated_at": "2018-01-03 15:15:20",-->
<!--            "base_unit": null-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/unit/{unit}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>unit</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of the units</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_17b54fc5627b3e3dab9d30f80da21dc9 -->
<h1>User management</h1>
<!-- START_9d201fa59006772510fc0285886d0b0f -->
<h2>Get the loggedin user details.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/user/loggedin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/user/loggedin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "user_type": "user",
        "surname": "Mr",
        "first_name": "Admin",
        "last_name": null,
        "username": "admin",
        "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c1a0a5aca8af81a4b9a0acb1ada4efa2aeac">[email&#160;protected]</a>",
        "language": "en",
        "contact_no": null,
        "address": null,
        "business_id": 1,
        "max_sales_discount_percent": null,
        "allow_login": 1,
        "essentials_department_id": null,
        "essentials_designation_id": null,
        "status": "active",
        "crm_contact_id": null,
        "is_cmmsn_agnt": 0,
        "cmmsn_percent": "0.00",
        "selected_contacts": 0,
        "dob": null,
        "gender": null,
        "marital_status": null,
        "blood_group": null,
        "contact_number": null,
        "fb_link": null,
        "twitter_link": null,
        "social_media_1": null,
        "social_media_2": null,
        "permanent_address": null,
        "current_address": null,
        "guardian_name": null,
        "custom_field_1": null,
        "custom_field_2": null,
        "custom_field_3": null,
        "custom_field_4": null,
        "bank_details": null,
        "id_proof_name": null,
        "id_proof_number": null,
        "deleted_at": null,
        "created_at": "2018-01-04 02:15:19",
        "updated_at": "2018-01-04 02:15:19"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/user/loggedin</code></p>
<!-- END_9d201fa59006772510fc0285886d0b0f -->
<!-- START_3b5f86fc519477d4b2c3b6b7104257c7 -->
<!--<h2>List users</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://erp2.vooerp.com/connector/api/user?service_staff=consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/user"
);

let params = {
    "service_staff": "consequatur",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "user_type": "user",
            "surname": "Mr",
            "first_name": "Admin",
            "last_name": null,
            "username": "admin",
            "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1071747d797e507568717d607c753e737f7d">[email&#160;protected]</a>",
            "language": "en",
            "contact_no": null,
            "address": null,
            "business_id": 1,
            "max_sales_discount_percent": null,
            "allow_login": 1,
            "essentials_department_id": null,
            "essentials_designation_id": null,
            "status": "active",
            "crm_contact_id": null,
            "is_cmmsn_agnt": 0,
            "cmmsn_percent": "0.00",
            "selected_contacts": 0,
            "dob": null,
            "gender": null,
            "marital_status": null,
            "blood_group": null,
            "contact_number": null,
            "fb_link": null,
            "twitter_link": null,
            "social_media_1": null,
            "social_media_2": null,
            "permanent_address": null,
            "current_address": null,
            "guardian_name": null,
            "custom_field_1": null,
            "custom_field_2": null,
            "custom_field_3": null,
            "custom_field_4": null,
            "bank_details": null,
            "id_proof_name": null,
            "id_proof_number": null,
            "deleted_at": null,
            "created_at": "2018-01-04 02:15:19",
            "updated_at": "2018-01-04 02:15:19"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/user</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>service_staff</code></td>
<td>optional</td>
<td>boolean Filter service staffs from users list (0, 1)</td>
</tr>
</tbody>
</table>-->
<!-- END_3b5f86fc519477d4b2c3b6b7104257c7 -->
<!-- START_5182c01637c8f532fe8cddbeed5f3ca0 -->
<!--<h2>Get the specified user</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/user/1" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/user/1"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "user_type": "user",-->
<!--            "surname": "Mr",-->
<!--            "first_name": "Admin",-->
<!--            "last_name": null,-->
<!--            "username": "admin",-->
<!--            "email": "<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="442520292d2a04213c25293428216a272b29">[email&#160;protected]</a>",-->
<!--            "language": "en",-->
<!--            "contact_no": null,-->
<!--            "address": null,-->
<!--            "business_id": 1,-->
<!--            "max_sales_discount_percent": null,-->
<!--            "allow_login": 1,-->
<!--            "essentials_department_id": null,-->
<!--            "essentials_designation_id": null,-->
<!--            "status": "active",-->
<!--            "crm_contact_id": null,-->
<!--            "is_cmmsn_agnt": 0,-->
<!--            "cmmsn_percent": "0.00",-->
<!--            "selected_contacts": 0,-->
<!--            "dob": null,-->
<!--            "gender": null,-->
<!--            "marital_status": null,-->
<!--            "blood_group": null,-->
<!--            "contact_number": null,-->
<!--            "fb_link": null,-->
<!--            "twitter_link": null,-->
<!--            "social_media_1": null,-->
<!--            "social_media_2": null,-->
<!--            "permanent_address": null,-->
<!--            "current_address": null,-->
<!--            "guardian_name": null,-->
<!--            "custom_field_1": null,-->
<!--            "custom_field_2": null,-->
<!--            "custom_field_3": null,-->
<!--            "custom_field_4": null,-->
<!--            "bank_details": null,-->
<!--            "id_proof_name": null,-->
<!--            "id_proof_number": null,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2018-01-04 02:15:19",-->
<!--            "updated_at": "2018-01-04 02:15:19"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/user/{user}</code></p>-->
<!--<h4>URL Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>user</code></td>-->
<!--<td>required</td>-->
<!--<td>comma separated ids of the required users</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_5182c01637c8f532fe8cddbeed5f3ca0 -->
<!-- START_89e46657027975ac623db673ed8a4d00 -->
<!--<h2>Update user password.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://erp2.vooerp.com/connector/api/update-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"current_password":"et","new_password":"consequatur"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://erp2.vooerp.com/connector/api/update-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "current_password": "et",
    "new_password": "consequatur"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": 1,
    "msg": "Password updated successfully"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/update-password</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>current_password</code></td>
<td>string</td>
<td>required</td>
<td>Current password of the user</td>
</tr>
<tr>
<td><code>new_password</code></td>
<td>string</td>
<td>required</td>
<td>New password of the user</td>
</tr>
</tbody>
</table>-->
<!-- END_89e46657027975ac623db673ed8a4d00 -->
<!--<h1>general</h1>-->
<!-- START_4291b84958f2fa16d58446f4a4412eae -->
<!--<h2>List payment accounts</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/payment-accounts" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/payment-accounts"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "id": 1,-->
<!--            "business_id": 1,-->
<!--            "name": "Test Account",-->
<!--            "account_number": "8746888847455",-->
<!--            "account_type_id": 0,-->
<!--            "note": null,-->
<!--            "created_by": 9,-->
<!--            "is_closed": 0,-->
<!--            "deleted_at": null,-->
<!--            "created_at": "2020-06-04 21:34:21",-->
<!--            "updated_at": "2020-06-04 21:34:21"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/payment-accounts</code></p>-->
<!-- END_4291b84958f2fa16d58446f4a4412eae -->
<!-- START_ad1145912d113a821c97dbb9e337b960 -->
<!--<h2>List payment methods</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/payment-methods" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/payment-methods"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "cash": "Cash",-->
<!--    "card": "Card",-->
<!--    "cheque": "Cheque",-->
<!--    "bank_transfer": "Bank Transfer",-->
<!--    "other": "Other",-->
<!--    "custom_pay_1": "Custom Payment 1",-->
<!--    "custom_pay_2": "Custom Payment 2",-->
<!--    "custom_pay_3": "Custom Payment 3"-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/payment-methods</code></p>-->
<!-- END_ad1145912d113a821c97dbb9e337b960 -->
<!-- START_c20326b50073732875acc9a84f706194 -->
<!--<h2>Get business details</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/business-details" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/business-details"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": {-->
<!--        "id": 1,-->
<!--        "name": "Awesome Shop",-->
<!--        "currency_id": 2,-->
<!--        "start_date": "2018-01-01",-->
<!--        "tax_number_1": "3412569900",-->
<!--        "tax_label_1": "GSTIN",-->
<!--        "tax_number_2": null,-->
<!--        "tax_label_2": null,-->
<!--        "default_sales_tax": null,-->
<!--        "default_profit_percent": 25,-->
<!--        "owner_id": 1,-->
<!--        "time_zone": "America\/Phoenix",-->
<!--        "fy_start_month": 1,-->
<!--        "accounting_method": "fifo",-->
<!--        "default_sales_discount": "10.00",-->
<!--        "sell_price_tax": "includes",-->
<!--        "logo": null,-->
<!--        "sku_prefix": "AS",-->
<!--        "enable_product_expiry": 0,-->
<!--        "expiry_type": "add_expiry",-->
<!--        "on_product_expiry": "keep_selling",-->
<!--        "stop_selling_before": 0,-->
<!--        "enable_tooltip": 1,-->
<!--        "purchase_in_diff_currency": 0,-->
<!--        "purchase_currency_id": null,-->
<!--        "p_exchange_rate": "1.000",-->
<!--        "transaction_edit_days": 30,-->
<!--        "stock_expiry_alert_days": 30,-->
<!--        "keyboard_shortcuts": {-->
<!--            "pos": {-->
<!--                "express_checkout": "shift+e",-->
<!--                "pay_n_ckeckout": "shift+p",-->
<!--                "draft": "shift+d",-->
<!--                "cancel": "shift+c",-->
<!--                "recent_product_quantity": "f2",-->
<!--                "weighing_scale": null,-->
<!--                "edit_discount": "shift+i",-->
<!--                "edit_order_tax": "shift+t",-->
<!--                "add_payment_row": "shift+r",-->
<!--                "finalize_payment": "shift+f",-->
<!--                "add_new_product": "f4"-->
<!--            }-->
<!--        },-->
<!--        "pos_settings": {-->
<!--            "amount_rounding_method": null,-->
<!--            "disable_pay_checkout": 0,-->
<!--            "disable_draft": 0,-->
<!--            "disable_express_checkout": 0,-->
<!--            "hide_product_suggestion": 0,-->
<!--            "hide_recent_trans": 0,-->
<!--            "disable_discount": 0,-->
<!--            "disable_order_tax": 0,-->
<!--            "is_pos_subtotal_editable": 0-->
<!--        },-->
<!--        "weighing_scale_setting": {-->
<!--            "label_prefix": null,-->
<!--            "product_sku_length": "4",-->
<!--            "qty_length": "3",-->
<!--            "qty_length_decimal": "2"-->
<!--        },-->
<!--        "manufacturing_settings": null,-->
<!--        "essentials_settings": null,-->
<!--        "ecom_settings": null,-->
<!--        "woocommerce_wh_oc_secret": null,-->
<!--        "woocommerce_wh_ou_secret": null,-->
<!--        "woocommerce_wh_od_secret": null,-->
<!--        "woocommerce_wh_or_secret": null,-->
<!--        "enable_brand": 1,-->
<!--        "enable_category": 1,-->
<!--        "enable_sub_category": 1,-->
<!--        "enable_price_tax": 1,-->
<!--        "enable_purchase_status": 1,-->
<!--        "enable_lot_number": 0,-->
<!--        "default_unit": null,-->
<!--        "enable_sub_units": 0,-->
<!--        "enable_racks": 0,-->
<!--        "enable_row": 0,-->
<!--        "enable_position": 0,-->
<!--        "enable_editing_product_from_purchase": 1,-->
<!--        "sales_cmsn_agnt": null,-->
<!--        "item_addition_method": 1,-->
<!--        "enable_inline_tax": 1,-->
<!--        "currency_symbol_placement": "before",-->
<!--        "enabled_modules": [-->
<!--            "purchases",-->
<!--            "add_sale",-->
<!--            "pos_sale",-->
<!--            "stock_transfers",-->
<!--            "stock_adjustment",-->
<!--            "expenses",-->
<!--            "account",-->
<!--            "tables",-->
<!--            "modifiers",-->
<!--            "service_staff",-->
<!--            "booking",-->
<!--            "kitchen",-->
<!--            "subscription",-->
<!--            "types_of_service"-->
<!--        ],-->
<!--        "date_format": "m\/d\/Y",-->
<!--        "time_format": "24",-->
<!--        "ref_no_prefixes": {-->
<!--            "purchase": "PO",-->
<!--            "purchase_return": null,-->
<!--            "stock_transfer": "ST",-->
<!--            "stock_adjustment": "SA",-->
<!--            "sell_return": "CN",-->
<!--            "expense": "EP",-->
<!--            "contacts": "CO",-->
<!--            "purchase_payment": "PP",-->
<!--            "sell_payment": "SP",-->
<!--            "expense_payment": null,-->
<!--            "business_location": "BL",-->
<!--            "username": null,-->
<!--            "subscription": null-->
<!--        },-->
<!--        "theme_color": null,-->
<!--        "created_by": null,-->
<!--        "enable_rp": 0,-->
<!--        "rp_name": null,-->
<!--        "amount_for_unit_rp": "1.0000",-->
<!--        "min_order_total_for_rp": "1.0000",-->
<!--        "max_rp_per_order": null,-->
<!--        "redeem_amount_per_unit_rp": "1.0000",-->
<!--        "min_order_total_for_redeem": "1.0000",-->
<!--        "min_redeem_point": null,-->
<!--        "max_redeem_point": null,-->
<!--        "rp_expiry_period": null,-->
<!--        "rp_expiry_type": "year",-->
<!--        "repair_settings": null,-->
<!--        "email_settings": {-->
<!--            "mail_driver": "smtp",-->
<!--            "mail_host": null,-->
<!--            "mail_port": null,-->
<!--            "mail_username": null,-->
<!--            "mail_password": null,-->
<!--            "mail_encryption": null,-->
<!--            "mail_from_address": null,-->
<!--            "mail_from_name": null-->
<!--        },-->
<!--        "sms_settings": {-->
<!--            "url": null,-->
<!--            "send_to_param_name": "to",-->
<!--            "msg_param_name": "text",-->
<!--            "request_method": "post",-->
<!--            "param_1": null,-->
<!--            "param_val_1": null,-->
<!--            "param_2": null,-->
<!--            "param_val_2": null,-->
<!--            "param_3": null,-->
<!--            "param_val_3": null,-->
<!--            "param_4": null,-->
<!--            "param_val_4": null,-->
<!--            "param_5": null,-->
<!--            "param_val_5": null,-->
<!--            "param_6": null,-->
<!--            "param_val_6": null,-->
<!--            "param_7": null,-->
<!--            "param_val_7": null,-->
<!--            "param_8": null,-->
<!--            "param_val_8": null,-->
<!--            "param_9": null,-->
<!--            "param_val_9": null,-->
<!--            "param_10": null,-->
<!--            "param_val_10": null-->
<!--        },-->
<!--        "custom_labels": {-->
<!--            "payments": {-->
<!--                "custom_pay_1": null,-->
<!--                "custom_pay_2": null,-->
<!--                "custom_pay_3": null-->
<!--            },-->
<!--            "contact": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            },-->
<!--            "product": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            },-->
<!--            "location": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            },-->
<!--            "user": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            },-->
<!--            "purchase": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            },-->
<!--            "sell": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            },-->
<!--            "types_of_service": {-->
<!--                "custom_field_1": null,-->
<!--                "custom_field_2": null,-->
<!--                "custom_field_3": null,-->
<!--                "custom_field_4": null-->
<!--            }-->
<!--        },-->
<!--        "common_settings": {-->
<!--            "default_datatable_page_entries": "25"-->
<!--        },-->
<!--        "is_active": 1,-->
<!--        "created_at": "2018-01-04 02:15:19",-->
<!--        "updated_at": "2020-06-04 22:33:01",-->
<!--        "locations": [-->
<!--            {-->
<!--                "id": 1,-->
<!--                "business_id": 1,-->
<!--                "location_id": null,-->
<!--                "name": "Awesome Shop",-->
<!--                "landmark": "Linking Street",-->
<!--                "country": "USA",-->
<!--                "state": "Arizona",-->
<!--                "city": "Phoenix",-->
<!--                "zip_code": "85001",-->
<!--                "invoice_scheme_id": 1,-->
<!--                "invoice_layout_id": 1,-->
<!--                "selling_price_group_id": null,-->
<!--                "print_receipt_on_invoice": 1,-->
<!--                "receipt_printer_type": "browser",-->
<!--                "printer_id": null,-->
<!--                "mobile": null,-->
<!--                "alternate_number": null,-->
<!--                "email": null,-->
<!--                "website": null,-->
<!--                "featured_products": [-->
<!--                    "5",-->
<!--                    "71"-->
<!--                ],-->
<!--                "is_active": 1,-->
<!--                "default_payment_accounts": {-->
<!--                    "cash": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "card": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "cheque": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "bank_transfer": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "other": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "custom_pay_1": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "custom_pay_2": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    },-->
<!--                    "custom_pay_3": {-->
<!--                        "is_enabled": "1",-->
<!--                        "account": null-->
<!--                    }-->
<!--                },-->
<!--                "custom_field1": null,-->
<!--                "custom_field2": null,-->
<!--                "custom_field3": null,-->
<!--                "custom_field4": null,-->
<!--                "deleted_at": null,-->
<!--                "created_at": "2018-01-04 02:15:20",-->
<!--                "updated_at": "2020-06-05 00:56:54"-->
<!--            }-->
<!--        ],-->
<!--        "currency": {-->
<!--            "id": 2,-->
<!--            "country": "America",-->
<!--            "currency": "Dollars",-->
<!--            "code": "USD",-->
<!--            "symbol": "$",-->
<!--            "thousand_separator": ",",-->
<!--            "decimal_separator": ".",-->
<!--            "created_at": null,-->
<!--            "updated_at": null-->
<!--        },-->
<!--        "printers": []-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/business-details</code></p>-->
<!-- END_c20326b50073732875acc9a84f706194 -->
<!-- START_10f2d454f50aa840a3699d7f1aca1848 -->
<!--<h2>Get profit and loss report</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/profit-loss-report?location_id=ipsa&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;user_id=eos" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/profit-loss-report"-->
<!--);-->

<!--let params = {-->
<!--    "location_id": "ipsa",-->
<!--    "start_date": "2018-06-25",-->
<!--    "end_date": "2018-06-25",-->
<!--    "user_id": "eos",-->
<!--};-->
<!--Object.keys(params)-->
<!--    .forEach(key =&gt; url.searchParams.append(key, params[key]));-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": {-->
<!--        "total_purchase_shipping_charge": 0,-->
<!--        "total_sell_shipping_charge": 0,-->
<!--        "total_transfer_shipping_charges": "0.0000",-->
<!--        "opening_stock": 0,-->
<!--        "closing_stock": "386859.00000000",-->
<!--        "total_purchase": 386936,-->
<!--        "total_purchase_discount": "0.000000000000",-->
<!--        "total_purchase_return": "0.0000",-->
<!--        "total_sell": 9764.5,-->
<!--        "total_sell_discount": "11.550000000000",-->
<!--        "total_sell_return": "0.0000",-->
<!--        "total_sell_round_off": "0.0000",-->
<!--        "total_expense": "0.0000",-->
<!--        "total_adjustment": "0.0000",-->
<!--        "total_recovered": "0.0000",-->
<!--        "total_reward_amount": "0.0000",-->
<!--        "left_side_module_data": [-->
<!--            {-->
<!--                "value": "0.0000",-->
<!--                "label": "Total Payroll",-->
<!--                "add_to_net_profit": true-->
<!--            },-->
<!--            {-->
<!--                "value": 0,-->
<!--                "label": "Total Production Cost",-->
<!--                "add_to_net_profit": true-->
<!--            }-->
<!--        ],-->
<!--        "right_side_module_data": [],-->
<!--        "net_profit": 9675.95,-->
<!--        "gross_profit": -11.55,-->
<!--        "total_sell_by_subtype": []-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/profit-loss-report</code></p>-->
<!--<h4>Query Parameters</h4>-->
<!--<table>-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Parameter</th>-->
<!--<th>Status</th>-->
<!--<th>Description</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--<tr>-->
<!--<td><code>location_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>optional id of the location</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>start_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>optional format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>end_date</code></td>-->
<!--<td>optional</td>-->
<!--<td>optional format:Y-m-d</td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td><code>user_id</code></td>-->
<!--<td>optional</td>-->
<!--<td>optional id of the user</td>-->
<!--</tr>-->
<!--</tbody>-->
<!--</table>-->
<!-- END_10f2d454f50aa840a3699d7f1aca1848 -->
<!-- START_3735fc8265b24a44289e78c671b7e198 -->
<!--<h2>Get product current stock</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/product-stock-report" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/product-stock-report"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "total_sold": null,-->
<!--            "total_transfered": null,-->
<!--            "total_adjusted": null,-->
<!--            "stock_price": null,-->
<!--            "stock": null,-->
<!--            "sku": "AS0001",-->
<!--            "product": "Men's Reverse Fleece Crew",-->
<!--            "type": "single",-->
<!--            "product_id": 1,-->
<!--            "unit": "Pc(s)",-->
<!--            "enable_stock": 1,-->
<!--            "unit_price": "143.0000",-->
<!--            "product_variation": "DUMMY",-->
<!--            "variation_name": "DUMMY",-->
<!--            "location_name": null,-->
<!--            "location_id": null,-->
<!--            "variation_id": 1-->
<!--        },-->
<!--        {-->
<!--            "total_sold": "50.0000",-->
<!--            "total_transfered": null,-->
<!--            "total_adjusted": null,-->
<!--            "stock_price": "3850.00000000",-->
<!--            "stock": "50.0000",-->
<!--            "sku": "AS0002-1",-->
<!--            "product": "Levis Men's Slimmy Fit Jeans",-->
<!--            "type": "variable",-->
<!--            "product_id": 2,-->
<!--            "unit": "Pc(s)",-->
<!--            "enable_stock": 1,-->
<!--            "unit_price": "77.0000",-->
<!--            "product_variation": "Waist Size",-->
<!--            "variation_name": "28",-->
<!--            "location_name": "Awesome Shop",-->
<!--            "location_id": 1,-->
<!--            "variation_id": 2-->
<!--        },-->
<!--        {-->
<!--            "total_sold": "60.0000",-->
<!--            "total_transfered": null,-->
<!--            "total_adjusted": null,-->
<!--            "stock_price": "6930.00000000",-->
<!--            "stock": "90.0000",-->
<!--            "sku": "AS0002-2",-->
<!--            "product": "Levis Men's Slimmy Fit Jeans",-->
<!--            "type": "variable",-->
<!--            "product_id": 2,-->
<!--            "unit": "Pc(s)",-->
<!--            "enable_stock": 1,-->
<!--            "unit_price": "77.0000",-->
<!--            "product_variation": "Waist Size",-->
<!--            "variation_name": "30",-->
<!--            "location_name": "Awesome Shop",-->
<!--            "location_id": 1,-->
<!--            "variation_id": 3-->
<!--        }-->
<!--    ],-->
<!--    "links": {-->
<!--        "first": "http:\/\/local.pos.com\/connector\/api\/product-stock-report?page=1",-->
<!--        "last": "http:\/\/local.pos.com\/connector\/api\/product-stock-report?page=22",-->
<!--        "prev": null,-->
<!--        "next": "http:\/\/local.pos.com\/connector\/api\/product-stock-report?page=2"-->
<!--    },-->
<!--    "meta": {-->
<!--        "current_page": 1,-->
<!--        "from": 1,-->
<!--        "last_page": 22,-->
<!--        "path": "http:\/\/local.pos.com\/connector\/api\/product-stock-report",-->
<!--        "per_page": 3,-->
<!--        "to": 3,-->
<!--        "total": 66-->
<!--    }-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/product-stock-report</code></p>-->
<!-- END_3735fc8265b24a44289e78c671b7e198 -->
<!-- START_bcba924904cb332c44b32be37a5ae3d6 -->
<!--<h2>Get notifications</h2>-->
<!--<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>-->
<!--<blockquote>-->
<!--<p>Example request:</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-bash">curl -X GET \-->
<!--    -G "https://erp2.vooerp.com/connector/api/notifications" \-->
<!--    -H "Content-Type: application/json" \-->
<!--    -H "Accept: application/json" \-->
<!--    -H "Authorization: Bearer {token}"</code></pre>-->
<!--<pre><code class="language-javascript">const url = new URL(-->
<!--    "https://erp2.vooerp.com/connector/api/notifications"-->
<!--);-->

<!--let headers = {-->
<!--    "Content-Type": "application/json",-->
<!--    "Accept": "application/json",-->
<!--    "Authorization": "Bearer {token}",-->
<!--};-->

<!--fetch(url, {-->
<!--    method: "GET",-->
<!--    headers: headers,-->
<!--})-->
<!--    .then(response =&gt; response.json())-->
<!--    .then(json =&gt; console.log(json));</code></pre>-->
<!--<blockquote>-->
<!--<p>Example response (200):</p>-->
<!--</blockquote>-->
<!--<pre><code class="language-json">{-->
<!--    "data": [-->
<!--        {-->
<!--            "msg": "Payroll for August\/2020 added by Mr. Super Admin. Reference No. 2020\/0002",-->
<!--            "icon_class": "fas fa-money-bill-alt bg-green",-->
<!--            "link": "http:\/\/local.pos.com\/hrm\/payroll",-->
<!--            "read_at": null,-->
<!--            "created_at": "3 hours ago"-->
<!--        }-->
<!--    ]-->
<!--}</code></pre>-->
<!--<h3>HTTP Request</h3>-->
<!--<p><code>GET connector/api/notifications</code></p>-->
<!-- END_bcba924904cb332c44b32be37a5ae3d6 -->
<!--  -->    </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  <script data-cfasync="false" src="https://pos.ultimatefosters.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://pos.ultimatefosters.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="35baa7ef7b36925f865633bf-|49" defer=""></script></body>
</html>