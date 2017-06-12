<?php
return array(
    //'配置项'=>'配置值'
    // 默认模板文件后缀
    'TMPL_TEMPLATE_SUFFIX'  =>  '.html',
    // 设置默认的模板主题
    'DEFAULT_THEME'    =>    'default',
    //设置模板替换变量2
    'TMPL_PARSE_STRING'  =>array(
        '__CSS__'=>__ROOT__."/Public/".MODULE_NAME."/css",      // __ROOT__ 根目录
        '__JS__'=>__ROOT__."/Public/".MODULE_NAME."/js",        // MODULE_NAME 文件路径
        '__IMG__'=>__ROOT__."/Public/".MODULE_NAME."/img",
        '__UPLOAD__'=>'__ROOT__/Uploads',
    )



);