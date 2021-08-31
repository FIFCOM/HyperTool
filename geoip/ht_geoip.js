function query() {
    let $ = mdui.$
    document.getElementById('btn').innerHTML = '<div class="mdui-progress-indeterminate"></div>正在查询...'
    let data = {}
    let query = $('#query').val()
    if (query) {
        data['q'] = query
    }

    $.ajax({
        method: 'POST',
        url: 'https://api.fifcom.cn/geoip/index.php',
        data: data,
        success: function (json) {
            let res = JSON.parse(json)
            document.getElementById('btn').innerHTML = '查询'
            if (res['status'] == 'ok') {
                document.getElementById('ip').innerHTML = 'IP : ' + res['ip']
                document.getElementById('country').innerHTML = '国家 : ' + res['country']
                document.getElementById('region').innerHTML = '省 / 州 : ' + res['region']
                document.getElementById('city').innerHTML = '城市 : ' + res['city']
                document.getElementById('latlon').innerHTML = '经纬度 : ' + res['lon'] + ',' + res['lat']
                document.getElementById('isp').innerHTML = 'ISP : ' + res['isp']
                document.getElementById('org').innerHTML = '组织 : ' + res['org']
                document.getElementById('as').innerHTML = 'ASN : ' + res['as']
            } else if (res['status'] == 'err') {
                document.getElementById('ip').innerHTML = 'IP : ' + '无结果'
                document.getElementById('country').innerHTML = '国家 : ' + '无结果'
                document.getElementById('region').innerHTML = '省 / 州 : ' + '无结果'
                document.getElementById('city').innerHTML = '城市 : ' + '无结果'
                document.getElementById('latlon').innerHTML = '经纬度 : ' + '无结果'
                document.getElementById('isp').innerHTML = 'ISP : ' + '无结果'
                document.getElementById('org').innerHTML = '组织 : ' + '无结果'
                document.getElementById('as').innerHTML = 'ASN : ' + '无结果'
            }
        }
    })
}
