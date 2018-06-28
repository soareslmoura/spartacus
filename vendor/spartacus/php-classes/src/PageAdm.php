<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 6/26/2018
 * Time: 7:14 PM
 */

namespace Spartacus;


class PageAdm extends Page
{

    public function __construct(array $opts = array(), $tpl_dir = "/spartacus/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}