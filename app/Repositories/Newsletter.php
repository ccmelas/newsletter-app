<?php
/**
 * Created by PhpStorm.
 * User: melas
 * Date: 12/2/17
 * Time: 5:57 AM
 */
namespace App\Repositories;

interface Newsletter
{
    public function subscribe(array $data);
}