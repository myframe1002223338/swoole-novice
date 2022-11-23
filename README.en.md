# SwooleNovice

#### Description
Swoole novice package makes advanced development easy.

#### Software Architecture
Although the swoole novice package (hereinafter referred to as the novice package) is called the novice package, its original intention is to advocate the completion of advanced development under the condition of low code, minimize the learning cost and master the core technology. The novice package highly encapsulates swoole. For developers who have not or rarely contacted too many processes, processes, multiple communication protocol modules and other technical implementations before, it enables them to quickly master advanced development, and can be developed in any PHP framework or native PHP, which is perfectly compatible.

#### Download and install

1. [https://www.easylt.cn](https://www.easylt.cn)Download directly from the official website. Select the swoole novice package in the technical support novice package series to enter and download.

2. Git download：<code>git clone https://github.com/myframe1002223338/swoole-novice.git</code>

3. composer installation instructions：composer create-project "swoole-novice/swoole-novice":"dev-master"

   PS：The composer installation displays the following error：

   ​        [Symfony\Component\Process\Exception\RuntimeException] 

   ​        The Process class relies on proc_open, which is not available on your PHP installation. 

   ​        Solution: open php.ini and search for disable_ Functions, find disable_ Functions = XXX, XXX, XXX... 

   ​        Delete proc_ Open save and restart the server.

#### Document

Please open and read the development manual after downloading the novice package

#### Copyright Information

Easylt 3 is released in accordance with MIT open source agreement and provides free trial.

The copyright information of the third-party source code and binary files contained in this project will be marked separately.

Copyright © 2006-2020 by Li Teng ([https://www.easylt.cn ]( https://www.easylt.cn/ )) All rights reserved。

See LICENSE for more details