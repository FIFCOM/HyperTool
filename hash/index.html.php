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
    <title>Hash encryption- HyperTool</title>
</head>
<body>
<body class="mdui-theme-primary-indigo mdui-theme-accent-indigo mdui-theme-layout-auto">
<div class="mdui-container doc-container">

    <div class="mdui-card" style="margin-top: 15px;border-radius:10px">
        <div class="mdui-card-primary">
            <div class="mdui-card-primary-title">HyperTool - Hash encryption</div>
            <div class="mdui-card-primary-subtitle" style="margin-top: 5px">Simply to generate hash from any data like sensitive passwords.</div>
        </div>
        <div class="mdui-card-content" style="margin-top: -35px">
            <div id="markdown-view" class="markdown-body editormd-html-preview">
                <form action="#" method="post">
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <textarea class="mdui-textfield-input" name="content" id="content" rows="5" placeholder=" Paste or type text..."><?=$content?></textarea>
                    </div>
                    <br>
            </div>
        </div>
    </div>
    <br>
    <select name="algo" class="mdui-select" mdui-select="{position: 'bottom'}">
        <option value="0">--- SELECT ALGO ---</option>
        <option value="md5">MD5</option>
        <option value="sha1">SHA-1</option>
        <option value="sha256">SHA-256</option>
        <option value="crc32b">CRC32b</option>
        <option value="1">--- MORE ALGORITHM ---</option>
        <option value="md4">MD4</option>
        <option value="crc32">CRC32</option>
        <!-- <option value="crc32c">CRC32c</option> --> <!-- PHP 7.4+ -->
        <option value="sha224">SHA224</option>
        <option value="sha384">SHA384</option>
        <option value="sha512">SHA512</option>
        <option value="sha3-224">SHA3-224</option>
        <option value="sha3-256">SHA3-256</option>
        <option value="sha3-384">SHA3-384</option>
        <option value="sha3-512">SHA3-512</option>
        <option value="ripemd128">RIPEMD-128</option>
        <option value="ripemd160">RIPEMD-160</option>
        <option value="ripemd256">RIPEMD-256</option>
        <option value="ripemd320">RIPEMD-320</option>
        <option value="whirlpool">WHIRLPOOL</option>
        <option value="tiger128,3">TIGER-128 ROUND=3</option>
        <option value="tiger160,3">TIGER-160 ROUND=3</option>
        <option value="tiger192,3">TIGER-192 ROUND=3</option>
        <option value="tiger128,4">TIGER-128 ROUND=4</option>
        <option value="tiger160,4">TIGER-160 ROUND=4</option>
        <option value="tiger192,4">TIGER-192 ROUND=4</option>
        <option value="snefru">SNEFRU</option>
        <option value="snefru256">SNEFRU-256</option>
        <option value="gost">GOST</option>
        <option value="gost-crypto">GOST-CRYPTO</option>
        <option value="adler32">ADLER-32</option>
        <option value="fnv132">FNV132</option>
        <option value="fnv164">FNV164</option>
        <option value="fnv1a32">FNV1A32</option>
        <option value="fnv1a64">FNV1A64</option>
        <option value="joaat">JOAAT</option>
        <option value="haval128,3">HAVAL-128 ROUND=3</option>
        <option value="haval160,3">HAVAL-160 ROUND=3</option>
        <option value="haval192,3">HAVAL-192 ROUND=3</option>
        <option value="haval224,3">HAVAL-224 ROUND=3</option>
        <option value="haval256,3">HAVAL-256 ROUND=3</option>
        <option value="haval128,4">HAVAL-128 ROUND=4</option>
        <option value="haval160,4">HAVAL-160 ROUND=4</option>
        <option value="haval192,4">HAVAL-192 ROUND=4</option>
        <option value="haval224,4">HAVAL-224 ROUND=4</option>
        <option value="haval256,4">HAVAL-256 ROUND=4</option>
        <option value="haval128,5">HAVAL-128 ROUND=5</option>
        <option value="haval160,5">HAVAL-160 ROUND=5</option>
        <option value="haval192,5">HAVAL-192 ROUND=5</option>
        <option value="haval224,5">HAVAL-224 ROUND=5</option>
        <option value="haval256,5">HAVAL-256 ROUND=5</option>
    </select>
    <input style="float: right;" class="mdui-btn mdui-color-theme-accent mdui-ripple" type="submit" value="convert">
    </form>
    <div class="mdui-card" style="margin-top: 15px;border-radius:10px">
        <div class="mdui-card-primary">

        </div>
        <div class="mdui-card-content" style="margin-top: -35px">
            <div class="mdui-card-primary">
                <div class="mdui-card-primary-title">Result</div>
                <div class="mdui-card-primary-subtitle" style="margin-top: 5px">Click the result to copy.</div>
            </div>
            <div id="markdown-view" class="markdown-body editormd-html-preview">
                <div class="mdui-textfield mdui-textfield-floating-label">
                    <i class="mdui-icon material-icons">https</i>
                    <label class="mdui-textfield-label">$Result</label>
                    <input class="mdui-textfield-input" type="text" onclick="copy_result()" id="result" value="<?=$result?>"/>
                </div>
                <div class="mdui-textfield mdui-textfield-floating-label">
                    <i class="mdui-icon material-icons">code</i>
                    <label class="mdui-textfield-label">Base64($Result)</label>
                    <input class="mdui-textfield-input" type="text" onclick="copy_base64_result()" id="base64_result" value="<?=$base64_result?>"/>
                </div>
                <br>
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
    function copy_result()
    {
        const input = document.getElementById("result");
        input.select();
        document.execCommand("Copy");
    }
    function copy_base64_result()
    {
        const input = document.getElementById("base64_result");
        input.select();
        document.execCommand("Copy");
    }
</script>
</body>
</html>
