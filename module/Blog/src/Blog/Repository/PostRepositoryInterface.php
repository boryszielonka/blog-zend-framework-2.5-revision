<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Blog\Repository;

use Blog\Entity\Post;

/**
 *
 * @author borys
 */
interface PostRepositoryInterface
{

    /**
     * 
     * @param Post $post
     */
    public function save(Post $post);
}
