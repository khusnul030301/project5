<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Post extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        // Inisialisasi model sekali saja
        $this->postModel = new PostModel();
    }

    public function index()
    {
        // Ambil semua postingan yang status-nya "published"
        $data['posts'] = $this->postModel
            ->where('status', 'published')
            ->orderBy('created_at', 'DESC') // urutkan berdasarkan tanggal terbaru
            ->findAll();

        // Tampilkan view post.php
        return view('Post', $data);
    }

    public function viewPost($slug)
    {
        // Ambil satu postingan berdasarkan slug dan status
        $post = $this->postModel->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        // Jika tidak ditemukan, tampilkan halaman 404
        if (!$post) {
            throw PageNotFoundException::forPageNotFound("Menu tidak ditemukan: $slug");
        }

        // Kirim data ke view
        return view('Post_detail', ['post' => $post]);
    }
}
