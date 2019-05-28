<?php namespace Phpcmf\Controllers;

/**
 * 二次开发时可以修改本文件，不影响升级覆盖
 */
class Search extends \Phpcmf\Home\Module
{

    public function index()
    {
        // 初始化模块
        $this->_module_init();
        // 调用搜索方法
        $this->_Search();
    }

    // 获取搜索参数
    public function get_param($module)
    {

        list($catid, $get) = parent::get_param($module);

        // 这里可以重组$get变量

        return [$catid, $get];
    }

    public function ajax_search($wd, $column)
    {
        return '模型类方法输出';
    }

}
