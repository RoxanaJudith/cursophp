<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogPost;

class PostController extends BaseController {
	public function getIndex() {

		// global $pdo;
		// $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
		// $query->execute();
		// $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
		//con Eloquent
		$blogPosts = BlogPost::all();
		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate() {
		//admin/posts/create
		return $this->render('admin/insert-post.twig');
	}

	public function postCreate() {
		// global $pdo;
		// $sql = 'INSERT INTO blog_posts(title, content) VALUES(:title, :content)';
		// $query = $pdo->prepare($sql);
		// $result = $query->execute([
		// 	'title' => $_POST['title'],
		// 	'content' => $_POST['content'],
		// ]);

//con Eloquent
		$blogPost = new BlogPost([
			'title' => $_POST['title'],
			'content' => $_POST['content'],
		]);
		$blogPost->save();
		$result = true;

		return $this->render('admin/insert-post.twig', ['result' => $result]);
	}
}