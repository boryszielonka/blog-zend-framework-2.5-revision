<?php
namespace Blog\Controller;

use Blog\Entity\Post;
use Blog\Form\Add;
use Blog\InputFilter\AddPost;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function addAction()
    {
        $form = new Add();
        $data = ['form' => $form];

        if ($this->request->isPost()) {
            $post = new Post();
            $form->bind($post);
            $form->setInputFilter(new AddPost());
            $form->setData($this->request->getPost());

            if ($form->isValid()) {
                $blogService = $this->getServiceLocator()->get('Blog\Service\BlogServiceInterface');
                $blogService->save($post);
                
                $data['success'] = true;
            }
        }

        return new ViewModel($data);
    }
}
