<!doctype html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
        integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
        crossorigin="anonymous"
    />
    <title>Base64- HyperTool</title>
</head>
<body>
<body class="mdui-theme-primary-indigo mdui-theme-accent-indigo mdui-theme-layout-auto">
<div class="mdui-container doc-container">

    <div class="mdui-card" style="margin-top: 15px;border-radius:10px">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">HyperTool - Base64</div>
            <div class="mdui-card-primary-subtitle" style="margin-top: 5px">Simply encode or decode text to(by) base64 format.</div>
        </div>
        <div class="mdui-card-content" style="margin-top: -35px">
            <div id="markdown-view" class="markdown-body editormd-html-preview">
                <form action="#" method="post">
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <textarea class="mdui-textfield-input" name="content" id="content" rows="7" placeholder=" Paste or type text..."><?=$content?></textarea>
                    </div>
                    <br>
            </div>
        </div>
    </div>

    <div class="mdui-card" style="margin-top: 15px;border-radius:10px">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-subtitle" style="margin-top: 5px">Then click the ENCODE or DECODE button.</div>
        </div>
        <div class="mdui-card-content" style="margin-top: -35px">
            <div id="markdown-view" class="markdown-body editormd-html-preview">
                    <p><input style="float: right;" class="mdui-btn mdui-color-theme-accent mdui-ripple" name="mode" id="mode" type="submit" value="encode"></p>
                    <p><input style="float: left;" class="mdui-btn mdui-color-theme-accent mdui-ripple" name="mode" id="mode" type="submit" value="decode"></p>
                    <br><br>
                </form>
            </div>
        </div>
    </div>

    <div class="mdui-card" style="margin-top: 15px;border-radius:10px">
        <div class="mdui-card-primary">
            
        </div>
        <div class="mdui-card-content" style="margin-top: -35px">
            <div id="markdown-view" class="markdown-body editormd-html-preview">
                <form action="#" method="post">
                    <textarea class="mdui-textfield-input" name="result" id="result" rows="8" onclick=copyinput() placeholder=" Result will goes here..."><?=$result?></textarea>
                    <p><input style="float: right;" class="mdui-btn mdui-color-theme-accent mdui-ripple" type="button" value="copy" onclick="copyinput()" <?=$COPY_BUTTON_STATUS?>></p>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <div class="mdui-card" style="margin-top: 15px;border-radius:10px">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-subtitle" style="margin-top: 0px"> © 2021 Fifcom Technology Atelier | <a href="https://f15.pw/ht" target="_blank">HyperTool</a></div>
        </div>

    </div>

</div>
<script
    src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
    integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
    crossorigin="anonymous"
></script>
<script language="JavaScript"> 
    function copyinput() 
    { 
    var input=document.getElementById("result");
    input.select();
    document.execCommand("Copy");
    } 
</script>
</body>
</html>