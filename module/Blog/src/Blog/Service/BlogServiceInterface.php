<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Blog\Service;

use Blog\Entity\Post;

/**
 * Description of BlogServiceInterface
 *
 * @author borys
 */
interface BlogServiceInterface
{

    public function save(Post $post);
}
