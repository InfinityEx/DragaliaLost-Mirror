// Blob Download
// function bdl(){
//     $.ajax({
//         url:"https://ghproxy.com/MaaAssistantArknights/MaaAssistantArknights/releases/download/v4.12.3/MAA-v4.12.3-win-arm64.zip",
//         type:'GET',
//         dataType:'blob',
//         CORS:true,
//         contentType:'application/x-www-form-urlencoded',
//         secure:true,
//         headers:{
//             'Access-Control-Allow-Origin': '*'
//         },
//     beforeSend:function(xhr){
//         xhr.setRequestHeader("Authorization", "Basic " + btoa(""))
//     },
//     success:function(data){
//         let dlink=window.URL.createObjectURL(data)
//         const a=document.createElement('a')
//         a.href=dlink
//         a.download='demo.zip'
//         document.body.appendChild(a)
//         a.click()
//         document.body.removeChild(a)
//     }
//     })
// }
function bdl(){
    // 请求获取release地址
    let jhr=new XMLHttpRequest();
    // let rurl="https://gitee.com/api/v5/repos/cxasm/notepad--/releases/latest"
    let rurl="https://api.github.com/repos/MaaAssistantArknights/MaaAssistantArknights/releases/latest"
    jhr.open('GET',rurl,true);
    jhr.send()
    let ajson
    jhr.onreadystatechange=function(){
        if(jhr.readyState==4 && jhr.status===200){
            ajson=jhr.responseText
            let obj=JSON.parse(ajson)
            // let url=obj["assets"][0]["browser_download_url"]
            let url="https://ghproxy.com/"+obj["assets"][3]["browser_download_url"]
            let fname=obj["assets"][3]["name"]
            // let url='./mmd.zip'
            console.log(url)
            //`${url}?response-content-type=application/octet-stream`
            let xhr=new XMLHttpRequest()
            xhr.open('POST',url,true)
            xhr.responseType="blob"
            xhr.withCredentials=true
            // xhr.setRequestHeader('Access-Control-Allow-Origin', '*')
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
            // xhr.setRequestHeader("Access-Control-Allow-Origin","http://dl.com")
            xhr.setRequestHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            xhr.setRequestHeader('Access-Control-Allow-Origin', '*')
            xhr.onprogress=function(e){
                let percent=Math.floor(e.loaded/e.total*100)
                document.getElementsByClassName("btn btn-secondary").item("a").innerText=`下载中:${percent}%`
            }
            
            xhr.onload=function(e){
                console.log(xhr.response)
                let dllink=window.URL.createObjectURL(xhr.response)
                let downloadlink=document.createElement('a')
                downloadlink.download=fname
                downloadlink.href=URL.createObjectURL(dllink)
                downloadlink.click()
            }
            xhr.send()
            // xhr.responseType="arraybuffer"
            // xhr.onreadystatechange=event=>{
            //     if(xhr.readyState==4 && xhr.status==200){
            //         const fileName='fileName'
            //         let blob=new Blob([xhr.response],{type:'application/octet-stream'})
            //         // downloadlink=document.getElementsByClassName("btn btn-secondary").item("a")
            //         let downloadlink=document.createElement('a')
            //         downloadlink.download=fileName
            //         downloadlink.href=URL.createObjectURL(blob)
            //         downloadlink.click()
            //     }
            // }
            
        }
    }
}
function bd2l(){
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
            getData(fname)
            jhr.send()
        }
    }
}
function getData(fname){
    const durl="https://ghproxy.com/https://github.com/MaaAssistantArknights/MaaAssistantArknights/releases/download/v4.12.3/MAA-v4.12.3-win-arm64.zip"
    const name=fname
    const a=document.createElement('a')
    a.href=durl
    a.download=name
    document.body.appendChild(a)
    a.click()
    document.body.removeChild(a)
    document.getElementsByClassName("btn btn-secondary").item("a").innerText='Blob下载'
}