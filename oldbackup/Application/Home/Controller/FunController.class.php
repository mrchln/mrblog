<?php
namespace Home\Controller;
use Think\Controller;
class FunController extends Controller {
    #登录判断
    public function valid(){
        if(empty($_SESSION['username'])){
            $this->error('Sorry 你没有权限！',U('index/login'));
            exit();
        }
    }


	##
    ##一个查询方法
    ##
    public function seach($db,$num,$page_header,$order,$where){
        //$this->valid();
        $count = $db->where($where)->count();// 
        $Page       = new \Think\Page($count,$num);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        if($page_header==false){
            $Page->setConfig("header","");
        }else{
            $Page->setConfig("header","<span class='rows'>共 %TOTAL_ROW% ".$page_header."</span>");
        }
        $show       = $Page->show();// 分页显示输出

        $selectArticle=$db->order($order)->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        
        return $arr_page = array(
        "show"=>$show,
        "Page"=>$Page,
        "selectArticle"=>$selectArticle,
        );
    }


    ##
    ##一个create更新、插入方法
    ##


    public function fncreate($db,$active,$submit,$success,$error,$success_link,$error_link){
        if(@$_POST['submit']==$submit){
                //dump($user);

                if(!$cr=$db->create()){
                    exit($db->getError());
                }else{
                    if($db->$active()){
                        $this->success($success,$success_link);
                    }else{
                        $this->error($error,$error_link);
                        
                    }
                }
        }
    }

    #
    #归档查询方法
    #
    public function selectfile($modular,$db,$start,$over,$time,$limit){
    	$Easycode = new \Mrcln\code\Easycode;
		
        for($y=$over;$start<=$y;$y--){
            $map[$time]=array("like",array("%".$y."%"));
            $arr_year=$db->order($time.' '.$limit)->where($map)->select();
            if(!empty($arr_year)){
                echo "<div class='year'><span class='ico-small'>　　</span>".date('Y',strtotime($arr_year[0][$time]))."</div>";
                for($mon=12;1<$mon;$mon--){
                    if($mon<10){//查询月份小于10的时候
                        $map[$time]=array("like",array("%".$y."-0".$mon."%"));
                        $arr_month=$db->order($time.' '.$limit)->where($map)->select();
                        if(!empty($arr_month)){
                            echo "<div class='month'><span class='ico-small'>　　</span>".date('M',strtotime($arr_month[0][$time]))." (".count($arr_month).")"."</div>";
                            for($n=0;$n<count($arr_month);$n++){
                                echo "<div class='title'><a href='".$modular."/".$Easycode->encode($arr_month[$n]['id'])."'>".$arr_month[$n]['title']."</a></div>";                
                            }
                        }
                    }else{
                        $map[$time]=array("like",array("%".$y."-".$mon."%"));
                        $arr_month=$db->order($time.' '.$limit)->where($map)->select();
                        if(!empty($arr_month)){
                            echo "<div class='month'><span class='ico-small'>　　</span>".date('M',strtotime($arr_month[0][$time]))." (".count($arr_month).")"."</div>";
                            for($n=0;$n<count($arr_month);$n++){
                                echo "<div class='title'><a href='".$modular."/".$Easycode->encode($arr_month[$n]['id'])."'>".$arr_month[$n]['title']."</a></div>";                
                            }
                        }
                    }
                    
                }

            }

        
            //dump(count($arr_year));
        }
    }
    public function count($db){
        $arr=$db->select();
        $count=count($arr);
        for($i=0;$i<=$count;$i++){
            $readed+=$arr[$i]['readed'];
        }
        return $readed;

    }
    public function comments($db){
        return $arr=$db->select();
    }



    ##
    ##一个删除方法
    ##
    public function dele($id,$db){
        $this->valid();
        if(!empty($id)){
            $selectArticle=$db->where("id=%d",$id)->delete();
            if($selectArticle){
                $this->success("删除成功!","");
            }else{
                $this->error("删除失败!","");
            }
        }
    }


    #
    #提示方法
    #
    public function message_show($data,$sushow,$ershow,$sulink,$erlink){
        if($data){
            $this->success($sushow,$sulink);
        }else{
            $this->error($ershow,$erlink);
        }
    }

    #
    #权限相关提示信息
    #
    public function set_permission($fig){
        if($fig==1){
            if($_SESSION['fig']==2||$_SESSION['fig']==1){

                return;

            }
        }else if($fig=2){
            if($_SESSION['fig']==2){

                return;

            }
            if($_SESSION['fig']==1){
                 echo "你所在的用户组无法访问";
                exit();
            }
        }else{
             echo "你所在的用户组无法访问";
            exit();
        }
        
    }


    #
    #取系统常量
    #
    function systemsta(){
       
        $du=array(
        'THINK_PATH'=>THINK_PATH.'框架系统目录 ',
        'APP_PATH '=>APP_PATH .'应用目录（默认为入口文件所在目录）',
        'LIB_PATH'=>LIB_PATH."系统类库目录（默认为 THINK_PATH.'Library/'）",
        '__CONTROLLER__'=>__CONTROLLER__.'当前控制器的URL地址  ',
        '__ACTION__'=>__ACTION__,
        '__URL__'=>__URL__,
        '__SELF__'=>__SELF__.'//当前操作的URL地址',
        '__APP__'=>__APP__,
        '__ROOT_'=>__ROOT__.'//网站根目录地址' ,
        'MODULE_NAME'=>MODULE_NAME .'//当前模块名  ',
        'MODULE_PATH'=>MODULE_PATH,
        'CONTROLLER_NAME'=>CONTROLLER_NAME.'//当前控制器名',
        'ACTION_NAME'=>ACTION_NAME.'//当前操作名 ' ,
        'STORAGE_TYPE'=>STORAGE_TYPE.'//当前存储类型',
        'APP_STATUS'=>APP_STATUS.'//当前应用状态',
        'THEME_NAME'=>THEME_NAME.'//当前主题名称 ',
        'MEMORY_LIMIT_ON'=>MEMORY_LIMIT_ON.'//系统内存统计支持',
        'LANG_SET'=>LANG_SET.'//当前浏览器语言 ',
        'MEMORY_LIMIT_ON'=>MEMORY_LIMIT_ON.'//系统内存统计支持',
        'BIND_CONTROLLER'=>BIND_CONTROLLER.'//当前绑定的控制器（3.2.1新增）',
        'BIND_ACTION'=>BIND_ACTION.'//当前绑定的控制器（3.2.1新增）',
        'IS_WIN'=>IS_WIN.'//当前绑定的控制器（3.2.1新增）',
        'TEMP_PATH '=>TEMP_PATH ."//应用缓存目录（默认为 RUNTIME_PATH.'Temp/'）",
        'COMMON_PATH'=>COMMON_PATH."//公共模块目录 （默认为 APP_PATH.'Common/'）",

            );
        return dump($du);
    }

    #
    #获取当前操作系统
    #
    function getOS(){ 
    $os=''; 
    $Agent=$_SERVER['HTTP_USER_AGENT']; 
    if (eregi('win',$Agent)&&strpos($Agent, '95')){ 
        $os='Windows 95'; 
    }elseif(eregi('win 9x',$Agent)&&strpos($Agent, '4.90')){ 
        $os='Windows ME'; 
    }elseif(eregi('win',$Agent)&&ereg('98',$Agent)){ 
        $os='Windows 98'; 
    }elseif(eregi('win',$Agent)&&eregi('nt 5.0',$Agent)){ 
        $os='Windows 2000'; 
    }elseif(eregi('win',$Agent)&&eregi('nt 6.0',$Agent)){ 
        $os='Windows Vista'; 
    }elseif(eregi('win',$Agent)&&eregi('nt 6.1',$Agent)){ 
        $os='Windows 7'; 
    }elseif(eregi('win',$Agent)&&eregi('nt 5.1',$Agent)){ 
        $os='Windows XP'; 
    }elseif(eregi('win',$Agent)&&eregi('nt',$Agent)){ 
        $os='Windows NT'; 
    }elseif(eregi('win',$Agent)&&ereg('32',$Agent)){ 
        $os='Windows 32'; 
    }elseif(eregi('linux',$Agent)){ 
        $os='Linux'; 
    }elseif(eregi('unix',$Agent)){ 
        $os='Unix'; 
    }else if(eregi('sun',$Agent)&&eregi('os',$Agent)){ 
        $os='SunOS'; 
    }elseif(eregi('ibm',$Agent)&&eregi('os',$Agent)){ 
        $os='IBM OS/2'; 
    }elseif(eregi('Mac',$Agent)&&eregi('PC',$Agent)){ 
        $os='Macintosh'; 
    }elseif(eregi('PowerPC',$Agent)){ 
        $os='PowerPC'; 
    }elseif(eregi('AIX',$Agent)){ 
        $os='AIX'; 
    }elseif(eregi('HPUX',$Agent)){ 
        $os='HPUX'; 
    }elseif(eregi('NetBSD',$Agent)){ 
        $os='NetBSD'; 
    }elseif(eregi('BSD',$Agent)){ 
        $os='BSD'; 
    }elseif(ereg('OSF1',$Agent)){ 
        $os='OSF1'; 
    }elseif(ereg('IRIX',$Agent)){ 
        $os='IRIX'; 
    }elseif(eregi('FreeBSD',$Agent)){ 
        $os='FreeBSD'; 
    }elseif($os==''){ 
        $os='Unknown'; 
    } 
    return $os; 
} 




}