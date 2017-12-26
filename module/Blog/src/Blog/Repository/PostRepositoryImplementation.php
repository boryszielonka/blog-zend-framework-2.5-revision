<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Blog\Repository;

use Blog\Entity\Post;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

/**
 * Description of PostRepositoryImplementation
 *
 * @author bo
 */
class PostRepositoryImplementation implements PostRepositoryInterface
{

    /**
     *
     * @var Adapter $dbAdapter
     */
    private $dbAdapter;

    //put your code here
    public function save(Post $post)
    {
        $sql = new Sql($this->dbAdapter);
        $insert = $sql->insert()
            ->values([
                'title' => $post->getTitle(),
                'slug' => $post->getSlug(),
                'content' => $post->getContent(),
                'category_id' => $post->getCategory(),
                'created' => time()
            ])
            ->into('post');

        $statement = $sql->prepareStatementForSqlObject($insert);
        $statement->execute();
    }

    function setDbAdapter(Adapter $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }

    function getDbAdapter(): Adapter
    {
        return $this->dbAdapter;
    }
}
