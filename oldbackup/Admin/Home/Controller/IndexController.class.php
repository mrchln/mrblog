<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    
    public function index(){
        $fun=A('Fun');
        $fun->valid();
        //$fun->systemsta();
        $this->display();
    }

    #登录
    public function login(){
        if(isset($_POST['user'])){
           
            $admin=M('admin');
                $adf=$admin->where("username='%s' and password='%s'",array($_POST['user'],md5($_POST['pwd'])))->field('username,author,fig')->select();
               // dump($adf);
                if($adf){
                    $_SESSION['username']=$adf[0]['username'];
                    $_SESSION['author']=$adf[0]['author']; 
                    $_SESSION['fig']=$adf[0]['fig']; 
                    //$this->success('Nice,登录成功！',__CONTROLLER__.'/');
                    echo "<script>location.href='".__CONTROLLER__.'/'."';</script>";
                
                }else{
                    $this->error("I'M Sorry,账号或密码错误！");
                }
        }
        
        $this->display();
    }

    #登出
    public function logout(){
        if (session_destroy())
        {
            $this->success('您已安全退出','../../../index.php');
            exit();
        }
        else
        {
            unset($_SESSION);
            $this->success('您已安全退出','../../../index.php');
            exit();
        }

    }
    #切换账号
    public function change_login(){
        if (session_destroy())
        {
            $this->success('您已安全退出',__CONTROLLER__.'/login');
            exit();
        }
        else
        {
            unset($_SESSION);
            $this->success('您已安全退出',__CONTROLLER__.'/login');
            exit();
        }
    }
    public function header(){
        //dump(__APP__);

    }

    #添加文章，更新文章
    public function addArticle(){
        $fun=A('Fun');
        $classify=M('modular');
        $infoshow=M('infoshow');
        $tag=M('tag');
        $user=M($_POST['class']);

        //$addtag=M('article');     
        $action=    ACTION_NAME;
        $selectClassify=$classify->select(); 
        $selectInfoshow=$infoshow->where("funname='$action'")->select(); 
        $arr=array(
            'class'=>$selectClassify,
            'infoshow'=>$selectInfoshow,
            );
        $this->assign($arr);
        $selectTag=$tag->select(); 
        $this->assign('tag',$selectTag);
        $result=implode(",", $_POST['tagid']);//把获取的select的数组合并，，，
        //dump($selectClassify);
        $datalist[]=array(
            'title'=>$_POST['til'],
            'content'=>$_POST['content1'],
            'author'=>$_SESSION['author'],
            'now'=>date('Y-m-d H:i:s'),
            'user'=>$_SESSION['username'],
           // 'ename'=>$_POST['class'],
            'tag'=>$result,

            );
        
        if(empty($_GET['id'])){
            $da=$user->addAll($datalist);
            if(@$_POST['submit']=='提交内容'){
                 $fun->chkadd($result);
                 $fun->message_show($da,'撰写成功！','撰写失败！');
            }
           
            

           //$fun->fncreate($user,'add','提交内容','撰写成功！','撰写失败！');
           //$this->message_show($suc,'撰写成功！','撰写失败！');

        }else{

                $user=M($_SESSION['class']);


                $selectArticle=$user->where("id=%d",$_GET['id'])->select();
				$editorClassify=$classify->where("ename='".$selectArticle[0]['ename']."'")->select(); 
				//$tagArr = explode(',', ); //分割标签为字符串用于前端显示
                $arr=array(
                'id'=>$selectArticle[0]['id'],
                'title'=>$selectArticle[0]['title'],
                'editorClassify'=>$editorClassify[0]['classify'],
                'content'=>$selectArticle[0]['content'],
                'tagSelect'=>$selectArticle[0]['tag'],
                );
				//dump($arr['editorClassify']);
                $this->assign('arr',$arr);
                $data['title']=$_POST['til'];
                $data['content']=$_POST['content1'];
                $data['author']=$_SESSION['author'];
                $data['user']=$_SESSION['username'];
                $data['updatetime']=date('Y-m-d H:i:s');
               // 'ename'=>$_POST['class'],
                $data['tag']=$result;
                
                if(@$_POST['submit']=='提交内容'){
                $fun->chkadd($result);
                $da=$user->where('id=%d',$_GET['id'])->save($data);
                $fun->message_show($da,'更新成功！','更新失败！',__CONTROLLER__.'/adminArticle');
                //$fun->fncreate($user,'save','提交内容','更新成功！','更新失败！',__CONTROLLER__.'/adminArticle');
                }    
        }
        
        $this->display();
    }
    


    #文章管理
    public function adminArticle(){
        $fun=A('Fun');              //实例化方法控制器
        $classify=M('modular');    

        //$addtag=M('article');           
        $selectClassify=$classify->select(); 
        $this->assign('class',$selectClassify);
        if(empty($_GET['ename'])){
            $adminArticle=D("mood");
            $_SESSION['class']="mood";          //修改文章，对应模块的id
        }else{
            $adminArticle=D($_GET['ename']);
            $_SESSION['class']= $_GET['ename'];
            
            }
        $author=$_SESSION['author'];
        $user=$_SESSION['username'];
        if($_SESSION['fig']==2){
        $arr_seach=$fun->seach($adminArticle,10,"篇文章","now desc","");//参数格式seach($db,$num,$page_header,$order,$where)
       // dump($arr);       
        ##按最早排序
        if(!@empty($_POST['time'])){
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now asc","");
        }
        ##按作者查询
        if(!@empty($_POST['author'])){
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now desc","author='{$_POST['author']}'");
        }
        /*##按标签查询
        if(!@empty($_POST['classify'])){
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now desc","classify='{$_POST['classify']}'");
        }*/
        ##模糊查询
        if(!@empty($_POST['seach'])){
            $map['title'] =array('like',"%{$_POST['seach']}%",'or');
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now desc",$map);
        }
        }else{

            //dump($user);
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now desc","user='$user'");//参数格式seach($db,$num,$page_header,$order,$where)


       // dump($arr);       
        ##按最早排序
        if(!@empty($_POST['time'])){
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now asc","user='$user'");
        }
        ##模糊查询
        if(!@empty($_POST['seach'])){
            $map['title'] =array('like',"%{$_POST['seach']}%",'or');
            $map['author'] =$author;
            $arr_seach=$fun->seach($adminArticle,10,"篇文章","now desc",$map);
        }

        }
        ##输出到view
        $selectArticle=$arr_seach['selectArticle'];
        $show=$arr_seach['show'];
        $arr_index=array(
            "selectArticle"=>$selectArticle,
            "page"=>$show
            );
        $this->assign($arr_index);
        $this->display();
    }
    
    
    
   

    #删除文章
    public function del(){
        $fun=A('Fun'); 
        $del=M($_SESSION['class']);     
        $fun->dele($_GET['id'],$del);   
    }

    #用户管理
    public function setuser(){
        $fun=A('Fun');
        $fun->set_permission(2);
        $user=M("admin");
        $arr_seach=$fun->seach($user,10,"个用户","time desc","");
        ##按最早排序
        if(!@empty($_POST['time'])){
            $arr_seach=$fun->seach($user,10,"个用户","time asc","");
        }
        ##按作者查询
        if(!@empty($_POST['author'])){
            $arr_seach=$fun->seach($user,10,"个用户","time desc","author='{$_POST['author']}'");
        }
        ##按权限查询
        if(!@empty($_POST['fig'])){
            $arr_seach=$fun->seach($user,10,"个用户","time desc","fig='{$_POST['fig']}'");
        }
        ##模糊查询
        if(!@empty($_POST['seach'])){
            $map['author'] =array('like',"%{$_POST['seach']}%",'or');
            $arr_seach=$fun->seach($user,10,"个用户","time desc",$map);
        }
        ##输出到view
        $selectAdmin=$arr_seach['selectArticle'];
        $show=$arr_seach['show'];
        $arr_index=array(
            "selectArticle"=>$selectAdmin,
            "page"=>$show
            );
        $this->assign($arr_index);
        $this->display();
    }
    ##用户添加
    public function addUser(){
        $fun=A('Fun');
        $addUser=D('admin');
        $fun->fncreate($addUser,'add','提交','添加成功！','添加失败！');
        $this->display();
    }
    ##用户修改
    public function editorUser(){
        $fun=A('Fun');
        $editorUser=D('admin');
        $select=$editorUser->where('id=%d',$_GET['id'])->select();
        $this->assign('select',$select);
        $fun->fncreate($editorUser,'save','提交','修改成功！','修改失败！');
        $this->display();
    }
    ##删除用户
    public function delUser(){
        $fun=A('Fun');
        $del=M('admin');      
        $fun->dele($_GET['id'],$del);  
    }


    #关于我
    public function setAbout(){
        $fun=A('Fun');
        $fun->set_permission(1);
        $user=M('about');      
        $about=$user->select();
        //dump($about);
        $this->assign("about",$about);
        $this->display();
    }
    public function editorAbout(){
        $post=$_GET['post'];
        if(!empty($post)){
        $user=M("about");
        $ab=$user->select();
        //dump($ab[0][$post]);   
        }
        $this->assign('arr',$ab[0][$post]);
        $this->assign('change',$post);
        $this->assign('id',$ab[0]['id']);
        $this->display();
    }
    public function editorAbouta(){
        $change=$_POST['change'];
        $id=$_POST['id'];
        $content=$_POST['content'];
        $data[$change]=htmlspecialchars($content);
        if(!empty($change)){
        $user=M("about");
        $ab=$user->where('id=%d',$id)->save($data);
        if($ab){
            $this->success('修改成功！',__CONTROLLER__.'/setAbout');
        }else{
            $this->error('修改失败！');
        }  
        }
    }



    #文章设置
    public function setTag(){
        $fun=A('Fun');
        //$fun->set_permission(1);
        $tag=M('tag');          
        $selectTag=$tag->select(); 
        //dump($selectClassify);
        $this->assign('tag',$selectTag);

        ##标签设置
        if(!empty($_POST['tagname'])){
            if(empty($_POST['tagid'])){
                $data['tagname']=$_POST['tagname'];
                $add=$tag->add($data);
                if($add){
                     $this->success('添加成功！');
                 }else{
                    $this->error('添加失败！');
                 }
             }else{
                $data['tagname']=$_POST['tagname'];
                $sa=$tag->where('id=%d',$_POST['tagid'])->save($data);
                if($sa){
                     $this->success('修改成功！');
                 }else{
                    $this->error('修改失败！');
                 }
             }
        }
        
        
        ##删除分类、标签
        if(@$_POST['submit']=='删除'){
            if(!empty($_POST['id'])){
            $data=$_POST['id'];
            //dump($data);
            $del=$tag->where('id=%d',$data)->delete();
            if($del){
                 $this->success('删除成功！');
             }else{
                $this->error('删除失败！');
             }
            }
        }
        ##修改跳转
        if(@$_POST['submit']=='修改'){
            if(!empty($_POST['id'])){
                $data=$_POST['id'];               
                $del=$tag->where('id=%d',$data)->select();
                //dump($del[0]);
                $this->assign('tagname',$del[0]);
            }
        }
        $this->display();
    }



    #邻居管理
    public function setFriends(){
        $fun=A('Fun');
        $fun->set_permission(1);
        $user=M("neighbors");
        $arr_seach=$fun->seach($user,10,"个邻居","time desc","");
        ##模糊查询
        if(!@empty($_POST['seach'])){
            $map['nearly'] =array('like',"%{$_POST['seach']}%",'or');
            $arr_seach=$fun->seach($user,10,"个邻居","now desc",$map);
        }
        ##输出到view
        $selectArticle=$arr_seach['selectArticle'];
        $show=$arr_seach['show'];
        $arr_index=array(
            "selectArticle"=>$selectArticle,
            "page"=>$show
            );
        $this->assign($arr_index);
        $this->display();
    }
    ##邻居添加、修改、删除
    public function editorFriends(){
        $editorUser=M('neighbors');
        $select=$editorUser->where('id=%d',$_GET['id'])->select();
        $this->assign('select',$select);
        $this->display();
    }
    public function addFriends(){
        $this->display();
    }
    public function apFriends(){
        $fun=A('Fun');
        $editorUser=D('neighbors');
        if(!empty($_POST['id'])){
            $fun->fncreate($editorUser,'save','提交','修改成功！','修改失败！',__CONTROLLER__.'/setFriends');
        }else{
            $fun->fncreate($editorUser,'add','提交','添加成功！','添加失败！',__CONTROLLER__.'/setFriends');
        }
    }
    public function delFriends(){
        $fun=A('Fun');
        $del=M('neighbors');      
        $fun->dele($_GET['id'],$del);  
    }

    #
    #美图管理
    #
    public function setMap(){
        $fun=A('Fun');
        //$fun->set_permission(1);
        $user=M("mapshow");
        $arr_seach=$fun->seach($user,10,"张图片","time desc","");
        ##模糊查询
        if(!@empty($_POST['seach'])){
            $map['title'] =array('like',"%{$_POST['seach']}%",'or');
            $arr_seach=$fun->seach($user,10,"张图片","time desc",$map);
        }
        ##输出到view
        $selectArticle=$arr_seach['selectArticle'];
        $show=$arr_seach['show'];
        $arr_index=array(
            "selectArticle"=>$selectArticle,
            "page"=>$show
            );
        $this->assign($arr_index);
        if(!empty($_POST['map'])){
        $editorUser=M('mapshow');
        $author=$_SESSION['author'];
        $data['title']=$_POST['til'];
        $data['content']=$_POST['cont'];
        $data['author']=$author;
        $data['link']=htmlspecialchars($_POST['lin']);
        $data['time']=date('Y-m-d H:i:s');
       // dump($editorUser);
        
        if(!empty($_POST['linkid'])){
            $da=$editorUser->where('id=%d',$_POST['linkid'])->save($data);
            $fun->message_show($da,'修改成功！','修改失败！');    
        }else{
            $da=$editorUser->add($data);
            $fun->message_show($da,'添加成功！','添加失败！');
        
        }

        
        }
        ##修改跳转
            if(!empty($_GET['eid'])){
                $data=$_GET['eid'];               
                $del=$user->where('id=%d',$data)->select();
                $this->assign('map',$del[0]);
            }
        ##删除
        
            if(!empty($_GET['id'])){
                $data=$_GET['id'];               
                $del=$user->where('id=%d',$data)->delete();
                $fun->message_show($del,'删除成功！','删除失败！');

            }
        
        $this->display();
    }



    #
    #网站历程
    #
    public function setTime(){
        $fun=A('Fun');
        $fun->set_permission(1);
        $user=D("timeaxis");
        $arr_seach=$fun->seach($user,10,"个阶段","time desc","");
        ##模糊查询
        if(!@empty($_POST['seach'])){
            $map['title'] =array('like',"%{$_POST['seach']}%",'or');
            $arr_seach=$fun->seach($user,10,"个阶段","time desc",$map);
        }
        ##输出到view
        $selectArticle=$arr_seach['selectArticle'];
        $show=$arr_seach['show'];
        $arr_index=array(
            "selectArticle"=>$selectArticle,
            "page"=>$show
            );
        $this->assign($arr_index);
        if(!empty($_POST['id'])){
            $fun->fncreate($user,'save','提交','修改成功！','修改失败！');
        }else{
            $fun->fncreate($user,'add','提交','添加成功！','添加失败！');
            // dump(D('timeaxis')->_sql());//最后执行的sql
        
        }

        ##修改跳转
            if(!empty($_GET['eid'])){
                $data=$_GET['eid'];               
                $del=$user->where('id=%d',$data)->select();
                $this->assign('map',$del[0]);
            }
        ##删除
            if(!empty($_GET['id'])){
                $data=$_GET['id'];               
                $del=$user->where('id=%d',$data)->delete();
                $fun->message_show($del,'删除成功！','删除失败！');

            }       
        $this->display();
    }



    #添加板块
    public function addPlate(){
        exit();
        $fun=A('Fun');
        $fun->set_permission(2);
        $class=D('modular');     
        $selectClassify=$class->relation(true)->select(); 
        //dump($selectClassify);
        $this->assign('class',$selectClassify);
    ##分类设置
        if(!empty($_POST['class'])){
            if(empty($_POST['classnameid'])){
                $data['classify']=$_POST['class'];
                $add=$class->relation('classify')->add($data);
                if($add){
                     $this->success('添加成功！');
                 }else{
                    $this->error('添加失败！');
                 }
            }else{
                    $data['classify']=$_POST['class'];
                    $sa=$class->relation(true)->where('id=%d',$_POST['classnameid'])->save($data);
                    if($sa){
                         $this->success('修改成功！');
                     }else{
                        $this->error('修改失败！');
                     }
            }
        }
    if(@$_POST['submit']=='删除'){
            if(!empty($_POST['classid'])){
                $data=$_POST['classid'];
                dump($data);
                $del=$class->where('id=%d',$data)->delete();
                if($del){
                     $this->success('删除成功！');
                }else{
                     $this->error('删除失败！');
                }
             }
        }
        ##修改跳转
        if(@$_POST['submit']=='修改'){
            if(!empty($_POST['classid'])){
                $data=$_POST['classid'];               
                $del=$class->where('id=%d',$data)->select();
                dump($del[0]);
                $this->assign('classname',$del[0]);
            }
        }

            $path1='./Application/Home/View/';
            $path2='./Application/Home/View/Index';
            $_SESSION['path']=$path1;
            $base_dir1=$path1;
            $base_dir2=$path2;
            $fso1=opendir($base_dir1);
            $fso2=opendir($base_dir2);
            echo  $base_dir1."<hr/>";
            
            while($flist=readdir($fso1)){
                print_r($flist.'<br/>');
            }
            echo  '<br/>'.$base_dir2."<hr/>";
            while($flist=readdir($fso2)){
                print_r($flist.'<br/>');
            }
            closedir($fso);
          $this->display();
    }
    public function addLanmu(){
        #
        #创建数据库并初始化
        #
        $sqlname=$_POST['bkm'];
         $model=M();
         $time=date('Y-m-d h:i:s');
         $sql_query="CREATE TABLE IF NOT EXISTS `tb_$sqlname` (
                          `id` int(10) NOT NULL AUTO_INCREMENT,
                          `pinglun_id` int(11) DEFAULT NULL,
                          `content` longtext NOT NULL,
                          `author` varchar(20) NOT NULL DEFAULT '',
                          `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                          `title` varchar(200) NOT NULL,
                          `readed` int(11) NOT NULL DEFAULT '0',
                          `classify` varchar(10) DEFAULT NULL,
                          `select_1_classify` varchar(10) DEFAULT NULL,
                          PRIMARY KEY (`id`),
                          KEY `pinglun_id` (`pinglun_id`)
                        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
          $sql_insert="INSERT INTO `tb_$sqlname` (`content`, `author`,`update_time`) VALUES('技术精粹板块','小零','$time')";
          $create=$model->query($sql_query);
          $insert=$model->query($sql_insert);
          //echo "创建数据库成功！<br/>";
          //echo "初始化数据成功！<br/>";


          #
          #生成板块文件
          #
            
        session_start();
        $lan_name=$_SESSION['path'].$_POST['mum'];
        $houzhui=@$_POST['bkm'];
        
        #判断目录
        
        function createFolder($path)//createFolder新增一个文件夹
     {
      if (!file_exists($path))//判断目录是否存在
      {
       createFolder(dirname($path));//dirname() 函数返回路径中的目录部分。
       mkdir($path, 0777);//mkdir() 函数创建目录。若成功，则返回 true，否则返回 false。mkdir(path,mode,recursive,context),mode是权限,recursive递归，context句柄环境
      }
     }
    createFolder($lan_name);
        
        #生成文件
        
    /*=========生成视图文件======*/
        $filename= $lan_name.'/'.$houzhui.".html";
        $Controllername= "./Application/Home/Controller/".$houzhui."Controller.class.php";
        $content=file_get_contents("./Application/Home/View/Index/center.html");
        $origin_str = file_get_contents('./Application/Home/Data/Index.class.php');
        //$update_str = str_replace('qwe=0', 'qwe=1', $orgin_str);
        //file_put_contents($Controllername, $update_str);
        //echo $content;
        //$filename="aa/".$_POST['ename'];
        //echo $filename;
        //print_r($origin_str);
        $fp=fopen($Controllername,"w+");//打开文件指针，创建文,fopen(filename,mode,include_path,context)
        if($lan_name!=""){
        if(!is_writable($Controllername)){//is_writable() 函数判断指定的文件是否可写。
            die("文件：".$Controllername."不可写，请检查"); 
        }
        
        if(fwrite($fp,$origin_str)){
           $this->success('创建成功','');
        }else{
           $this->error('创建失败','');
        }

        }
        fclose($fp);
        }



        #
        #系统设置
        #
        public function setAdmin(){
            $fun=A('Fun');
            $fun->set_permission(1);
            $fun->getOS();
            $this->display();
        }
}