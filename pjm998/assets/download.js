// Blob Download
function bdl(){
    // get json data
    let jhr=new XMLHttpRequest();
    // let rurl="https://gitee.com/api/v5/repos/cxasm/notepad--/releases/latest"
    let rurl="https://api.github.com/repos/MaaAssistantArknights/MaaAssistantArknights/releases/latest"
    jhr.open('GET',rurl,true);
    jhr.send()
    let ajson
    jhr.onreadystatechange=function(){
        jhr.onprogress=function(e){
            let percent=Math.floor(e.loaded/e.total*100)
            document.getElementsByClassName("btn btn-secondary").item("a").innerText=`下载中:${percent}%`
        }
        if(jhr.readyState==4 && jhr.status===200){
            ajson=jhr.responseText
            let obj=JSON.parse(ajson)
            // let url=obj["assets"][0]["browser_download_url"]
            let url=obj["assets"][3]["browser_download_url"]
            let fname=obj["assets"][3]["name"]
            getData(url,fname)
            // jhr.send()
        }
    }
}
function getData(url,fname){
    const durl=url+'?response-content-type=application/octet-stream'
    const name=fname
    const a=document.createElement('a')
    a.href=durl
    a.download=name
    document.body.appendChild(a)
    a.click()
    document.body.removeChild(a)
    document.getElementsByClassName("btn btn-secondary").item("a").innerText='Blob下载'
}