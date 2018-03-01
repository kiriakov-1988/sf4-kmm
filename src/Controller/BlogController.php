<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\Tag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $n = time() % 5256000; // генератор случайного числа ("поделено" на два месяца
        //                                                            -> будут уникальные числа как минимум этот срок)

        $post = new Post();
        $post->setAuthorName('author' . $n);
        $post->setText('test ' . ($n + 1) . ' text in blog');
        $post->setCreatedAt(new \DateTime());
        $post->setUpdatedAt(new \DateTime());

        $category = new Category();
        $category->setName('cat ' . $n);

        $post->setCategory($category);

        $comment1 = new Comment();
        $comment1->setUser('guest ' . ($n + 1));
//        $comment1->setText('comment from guest 4');
        $comment1->setText('comment from '.$comment1->getUser());
        $comment1->setCreatedAt(new \DateTime());
        $comment1->setPost($post);

        $comment2 = new Comment();
        $comment2->setUser('guest - ' . ($n + 2));
        $comment2->setText('comment from '.$comment2->getUser());
        $comment2->setCreatedAt(new \DateTime());
        $comment2->setPost($post);

        $tag1 = new Tag();
        $tag1->setName('Tag-' . $n);
        // вызов этого метода ничего не дает дополнительного
        // $tag1->addPostesWithTags($post);
        $post->addTags($tag1);

        $tag2 = new Tag();
        $tag2->setName('Tag_' . $n);
        $post->addTags($tag2);


        $manager = $this->getDoctrine()->getManager();

        $manager->persist($post);
        $manager->persist($category);
        $manager->persist($comment1);
        $manager->persist($comment2);
        $manager->persist($tag1);
        $manager->persist($tag2);

        $manager->flush();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
