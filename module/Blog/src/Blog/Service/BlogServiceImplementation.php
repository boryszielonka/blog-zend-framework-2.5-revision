<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Blog\Service;

use Blog\Entity\Post;

/**
 * Description of BlogServiceImplementation
 *
 * @author borys
 */
class BlogServiceImplementation implements BlogServiceInterface
{

    /**
     *
     * @var type
     */
    private $postRepo;

    //put your code here
    public function save(Post $post)
    {
        $this->postRepo->save($post);
    }

    function setPostRepo($postRepo)
    {
        $this->postRepo = $postRepo;
    }

    function getPostRepo()
    {
        return $this->postRepo;
    }
}
