<?php

// this contains the application parameters that can be maintained via GUI
return array(
    // this is displayed in the header section
    'title' => 'TinyBlog',
    // this is used in error pages
    'adminEmail' => 'webmaster@example.com',
    // number of posts displayed per page
    'postsPerPage' => 10,
    // maximum number of comments that can be displayed in recent comments portlet
    'recentCommentCount' => 10,
    // maximum number of tags that can be displayed in tag cloud portlet
    'tagCloudCount' => 20,
    // whether post comments need to be approved before published
    'commentNeedApproval' => true,
    // the copyright information displayed in the footer section
    'copyrightInfo' => 'Copyright &copy; 2012 by 海之梦工作室.',

    //--------------------------------------------------------------------------------------
    //Below are configurations for customerized features.
    //options for banner in homepage
    'displayBanner' => true,
    'bannerWidth' => '400px',
    'bannerHeight' => '300px',
    
    //options for business menus block
    'displayBusinessMenuBlock' => 'true',
    //content style: title -> (businessName -> businessLink)
    'BusinessMenuContent' => array('个人业务' => array('银行卡' => 'yinghangka.html',
                                                      '生活助手' => '',
                                                      '个人贷款' => '',
                                                      '投资理财' => '',
                                                      '储蓄业务' => '',
                                                      '专项服务' => '',
                                                      '个人电子银行' => '',
                                                      '外汇汇款' => ''),
                                   '小企业业务' => array('您的需求与体验' => '',
                                                        '我们的产品' => '',
                                                        '融资方案' => '',
                                                        '自助融资平台' => ''),
                                   '公司业务' => array('企业服务产品' => '',
                                                      '行业金融服务' => '',
                                                      '国际贸易金融' => '',
                                                      '信息资讯' => ''),
                                   '金融市场业务' => array('企业服务产品' => ''),
                                   ),
    
    //configurations for social widgets
    'displayWeibo' => true,
    'displayQQ' => true,
    'displayEmail' => true,
);
