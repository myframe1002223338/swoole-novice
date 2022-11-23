# Swoole新手包

#### 介绍
Swoole新手包，让进阶开发变得轻而易举。

#### 软件架构
Swoole新手包（以下简称新手包）虽名为新手包，但本意是倡导低代码情况下完成进阶开发，最大限度降低学习成本，掌握核心技术。新手包对Swoole进行高度封装，对于之前没有或较少接触过多进程、协程、多种通信协议模块等技术实现的开发者使其快速掌握进阶开发，可以在任何PHP框架或原生PHP中进行开发，完美兼容。


#### 下载安装

1. [https://www.easylt.cn](https://www.easylt.cn)官网直接下载，在技术支持-新手包系列中选择Swoole新手包进入并下载。

2. Git下载指令：<code>git clone https://github.com/myframe1002223338/swoole-novice.git</code>

3. composer安装指令：composer create-project "swoole-novice/swoole-novice":"dev-master"

   PS：composer安装显示以下错误：

   ​        [Symfony\Component\Process\Exception\RuntimeException] 

   ​        The Process class relies on proc_open, which is not available on your PHP installation. 

   ​        解决方法：打开php.ini，搜索disable_functions，找到disable_functions = xxx,xxx,xxx...删除其中的

   ​        proc_open保存并重启服务器即可。

#### 使用文档

请下载新手包后打开、阅读《开发手册》

#### 版权信息

EASYLT 3 遵循MIT开源协议发布，并提供免费试用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。 

版权所有Copyright © 2006-2020 by 李腾 ([https://www.easylt.cn](https://www.easylt.cn/)) All rights reserved。

更多细节参阅 LICENSE