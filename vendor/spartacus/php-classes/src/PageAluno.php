<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 6/25/2018
 * Time: 4:08 PM
 */

namespace Spartacus;


class PageAluno extends Page
{

    public function __construct(array $opts = array(), $tpl_dir = "/spartacus/views/aluno/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}