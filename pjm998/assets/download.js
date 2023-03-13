// Blob Download
function fblobDownload(){
    // 请求获取release地址
    let jhr=new XMLHttpRequest();
    let rurl="https://gitee.com/api/v5/repos/cxasm/notepad--/releases/latest";
    jdata=""
    jhr.open('GET',rurl,true);
    jhr.send();
    jhr.onreadystatechange=function(){
        if(jhr.readyState==4 && jhr.status===200){
            var ajson=jhr.responseText;
            // console.log(json);
        }
        return ajson;
    }
    jdata=jhr.onreadystatechange.
    console.log(jdata)
    var obj=JSON.parse(JSON.stringify(jdata));
    console.log(obj);
    var url=obj[0]["assets"]//[0]["browser_download_url"]
    console.log(url)
    // let xhr = new XMLHttpRequest();
    // xhr.open('GET', url, true);
    // xhr.onprogress = function (e) {
    //     let percent = Math.floor( e.loaded / e.total * 100); // 下载进度
    //     console.log(percent, '进度');
    // };
    // xhr.send();
    // xhr.responseType = "arraybuffer";
    // xhr.onreadystatechange = event => {
    //     if(xhr.readyState == 4){
    //         if (xhr.status == 200){
    //             const fileName = 'fileName';
    //             let blob = new Blob([xhr.response], {type: 'application/zip'}); // 文件类型
    //             const downLoadLink = document.createElement('a');
    //             downLoadLink.download = fileName;
    //             downLoadLink.href = URL.createObjectURL(blob);
    //             downLoadLink.click();
    //         }
    //     }
    // }
}