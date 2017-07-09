/**
 * Created by Administrator on 2017/6/6.
 */
class upload{
    constructor(){
        this.type="image/jpeg,image/png,image/gif";
        this.selectBtnStyle={width:150,height:40,background:"pink",borderRadius:6,text:'选择文件'};
        this.previewBoxStyle={width:450};
        this.listsStyle={width:200,height:200};
        this.uploadBtnStyle={width:150,height:40,background:"red",borderRadius:6,text:'上传文件'};
        this.file=0;
        this.size=1024*1024*7;
        this.listarr=[];
    }
    // 创建视图
    createView(params={}){
        // 创建大容器
        this.createContainer(params.container,params.parent,()=>{
            // 创建选择文件按钮
            this.createSelectBtn(params.selectBtn);
            // 创建预览
            this.createPreview(params.previewBox);
            // this.change(params.list);
            // 创建上传按钮
            this.createUploadBtn(params.uploadBtn);
            this.change();
        });

    }
    createContainer(container,parent,callback){
        // 容器存在 就返回
        if (container){
            this.container=container;
            return ;
        }
        this.parent=parent;
        // 容器不存在就创建
        let div=this.container=document.createElement("div");
        div.style.cssText="position: relative";
        // 创建好容器放入页面
        this.parent.appendChild(div);
        callback();
    }

    createSelectBtn(selectBtn){
        // 判断是否存在选择文件按钮
        if (selectBtn){
            this.selectBtn=selectBtn;
            return ;
        }
        // 创建选择文件按钮
        let select=this.selectBtn=document.createElement("div");
        select.style.cssText="width: "+this.selectBtnStyle.width+"px;height: "+this.selectBtnStyle.height+"px;border-radius:"+this.selectBtnStyle.borderRadius+"px;background: "+this.selectBtnStyle.background+";text-align: center;line-height: "+this.selectBtnStyle.height+"px;color: #fff;position: relative;";
        let span=document.createElement("span");
        span.innerHTML=this.selectBtnStyle.text;
        let input=this.input=document.createElement("input");
        input.type="file";
        input.accept=this.type;
        input.multiple="multiple";

        input.name="file";

        input.style.cssText="position:absolute;display:block;left:0;top: 0;width:100%;height: 100%;opacity:0;";

        this.container.appendChild(select);
        select.appendChild(span);
        select.appendChild(input);
    }
    // 创建预览盒子
    createPreview(previewBox){
        if(previewBox){
            this.previewBox=previewBox;
            return ;
        }
        let box=this.previewBox=document.createElement("div");
        box.style.cssText="width:"+this.previewBoxStyle.width+"px;margin: 10px 0;overflow:hidden;";
        this.container.insertBefore(box,this.uploadBtn);
    }
    // 创建预览列表
    createList(list){
        if(list){
            return ;
        }
        // 创建列表盒子
        let lists=document.createElement("div");
        // 图片
        let img=document.createElement("img");
        // 进度条
        let progress=document.createElement("div");
        // 进度条背景
        let back=document.createElement("div");
        // 进度条进度百分比
        let mess=document.createElement("span");
        // 错误提示信息
        let error=document.createElement("div");
        // 删除
        let del=document.createElement("div");

        lists.style.cssText="width:"+this.listsStyle.width+"px;height:"+this.listsStyle.height+"px;border: 1px solid #000;position: relative;margin: 6px;overflow: hidden;float:left";
        img.style.cssText="width: 100%;position: absolute;left: 0;top:0;";
        progress.style.cssText="width:100% ;height: 20px;border-top:1px solid #000;position: absolute;left: 0;bottom: 0;text-align: center;line-height: 20px;";
        back.style.cssText="width: 0%;height: 100%;background: #1b6d85;opacity: 0.5;position:absolute;left:0;top:0";
        error.style.cssText="position: absolute;width: 100px;height: 30px;left: 0;top: 0;right: 0;bottom: 0;margin: auto;background: #ccc;font-size: 14px;text-align: center;line-height: 30px;display:none";
        del.style.cssText="position: absolute;right: 10px;top:5px;width: 50px;height: 20px;background: #ccc;text-align: center;line-height: 20px;display:none;";
        del.innerHTML="删除";

        this.previewBox.appendChild(lists);
        lists.appendChild(img);
        lists.appendChild(progress);
        progress.appendChild(mess);
        progress.appendChild(back);
        lists.appendChild(error);
        lists.appendChild(del);

        lists.onmousemove=function () {
          del.style.display="block";
        };
        lists.onmouseout=function () {
            del.style.display="none";
        };

        return {
            lists:lists,
            img:img,
            back:back,
            mess:mess,
            error:error,
            del:del
        }

    }
    // 创建上传按钮
    createUploadBtn(uploadBtn){
        if(uploadBtn){
            this.uploadBtn=uploadBtn;
            return ;
        }
        let upload=this.uploadBtn=document.createElement("div");

        upload.style.cssText="width: "+this.uploadBtnStyle.width+"px;height: "+this.uploadBtnStyle.height+"px;border-radius:"+this.uploadBtnStyle.borderRadius+"px;background: "+this.uploadBtnStyle.background+";text-align: center;line-height: "+this.uploadBtnStyle.height+"px;color: #fff;position: relative;cursor: pointer;";
        upload.innerHTML=this.uploadBtnStyle.text;

        this.container.appendChild(upload);
    }

    // 预览显示
    change(){
        let that=this;
        // this.datas=[];
        this.input.onchange=function () {
            // for(let i=0;i<this.files.length;i++){
            //     // 预览列表
            //     let listobj=that.createList(list);
            //     that.file=that.input.files[i];
            //     // console.log(that.file);
            //     if(that.check(that.file,listobj)){
            //         let f=new FileReader();
            //         f.readAsDataURL(that.file);
            //         f.onload=function (e) {
            //             listobj.img.src=e.target.result;
            //         }
            //         // 删除
            //         listobj.del.onclick=function () {
            //             this.parentNode.parentNode.removeChild(this.parentNode);
            //             // delete this.parentNode.parentNode.previousElementSibling.lastElementChild.files;
            //         }
            //         that.uploadfile(listobj);
            //     }
            // }

            that.data=Array.prototype.slice.call(this.files);
            that.check();
            // this.datas=this.datas.concat(that.data);
            // this.data=this.datas;
        }
    }
    // 检测大小 类型
    check(){
        let that=this;
        let temp=[];
        for (let i=0;i<that.data.length;i++){
            temp[i]=that.data[i];
        }
        for (let i=0;i<temp.length;i++){
            // 显示列表
            let obj=that.createList();
            let read=new FileReader();
            (function (obj,read) {
                read.readAsDataURL(temp[i]);
                read.onload=function (e) {
                    obj.img.src=e.target.result;
                }
            })(obj,read)
            if(temp[i].size>that.size||that.type.indexOf(temp[i].type)==-1){
                obj.error.style.display="block";
                obj.error.innerHTML="格式不符";
                for (let j=0;j<temp.length;j++){
                    // 这里这里这里
                    if(temp[j]==that.data[i]){
                        that.data.splice(i,1);
                    }
                }
                obj.del.onclick=function () {
                    this.parentNode.parentNode.removeChild(this.parentNode);
                }
            }else {
                that.listarr.push(obj);
                for(let i=0;i<that.listarr.length;i++){
                    that.listarr[i].index=i;
                    that.listarr[i].del.onclick=function () {
                        this.parentNode.parentNode.removeChild(this.parentNode);
                        that.data.splice(this.index,1);
                    }
                }
            }
        }
    }
    // 上传
    uploadfile(url,callback){
        let that=this;
        // 上传
        that.uploadBtn.onclick=function () {
            if (!url){
                console.error("必须要传入地址");
                return;
            }
            for (let i=0;i<that.data.length;i++){
                let ajax=new XMLHttpRequest();
                let formdata=new FormData();
                formdata.append("file",that.data[i]);
                ajax.upload.onprogress=function (e) {
                    let pre=e.loaded/e.total*100;
                    that.listarr[i].back.style.width=pre+"%";
                    that.listarr[i].mess.innerHTML=pre+"%";
                };
                ajax.onload=function () {
                    that.listarr[i].error.style.display="block";
                    that.listarr[i].error.innerHTML="上传成功！";
                    callback(ajax.response);
                };
                ajax.open("post",url,true);
                ajax.send(formdata);
            }
        }
    }

}