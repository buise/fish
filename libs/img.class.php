<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 16:06
 */
class img{
    public $code="2345678wertyupkjhgfdsazxcvbnmQWERTYUIPLKJHGFDSAZXCVBNM";
    public $codeLen=4;
    public $codeUrl="../ARCENA.ttf";
    public $width=150;
    public $height=50;
    public $image;
    public $type="png";
    public $str;
    public $size=array("min"=>25,"max"=>30);
    public $angle=array("min"=>-10,"max"=>10);
    public $lineLen=array("min"=>1,"max"=>4);
    public $pixLen=80;
//    创建画布
    public function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->getColor());
    }
//    颜色
    public function getColor($color="back"){
        $r=$color=="back"?mt_rand(0,120):mt_rand(125,250);
        $g=$color=="back"?mt_rand(0,120):mt_rand(125,250);
        $b=$color=="back"?mt_rand(0,120):mt_rand(125,250);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
//    创建内容
    public function createContent(){
        $this->createText();
        for ($i=0;$i<$this->codeLen;$i++){
            $size=mt_rand($this->size["min"],$this->size["max"]);
            $angle=mt_rand($this->angle["min"],$this->angle["max"]);
            $x=$i*$this->width/$this->codeLen+mt_rand(4,10);
            $box=imagettfbbox($size,$angle,$this->codeUrl,$this->str[$i]);
            $y=$box[1]-$box[7]+mt_rand(10,25);
            imagettftext($this->image,$size,$angle,$x,$y,$this->getColor("dd"),$this->codeUrl,$this->str[$i]);
        }
    }
//    创建文字
    public function createText(){
        $str="";
        for ($i=0;$i<$this->codeLen;$i++){
            $str.=$this->code[mt_rand(0,strlen($this->code)-1)];
        }
        $this->str=$str;
    }
//    创建干扰线
    public function createLine(){
        $lineLen=mt_rand($this->lineLen["min"],$this->lineLen["max"]);
        for ($i=0;$i<$lineLen;$i++){
            imageline($this->image,mt_rand(0,$this->width/2),mt_rand(0,$this->height),mt_rand($this->width/2,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }
//    创建点点
    public function createPix(){
        for ($i=0;$i<$this->pixLen;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor("dd"));
        }
    }
//    输出图片
    public function putImg(){
        header("content-type:image/".$this->type);
        $this->createCanvas();
        $this->createContent();
        $this->createLine();
        $this->createPix();
        $type="image".$this->type;
        $type($this->image);
        imagedestroy($this->image);
    }
}