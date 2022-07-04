@extends('layouts.main')

@section('text-box')
    <div class="text-box container">
        <h1>Blog Mahasiswa UNG</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda, autem beatae corporis cum,
            cumque explicabo fugit harum id itaque laudantium molestiae natus officia, pariatur quas quisquam
            repellendus sint voluptatem.</p>
        <a href="/" class="hero-btn">Visit us to know more</a>
    </div>
@endsection

@section('container')
    <h3 class="text-center">Blog Terbaru</h3>
    <p class="text-center">Blog di perbaharui oleh mahasiswa setiap minggu</p>
    <div class="row mt-4  text-center d-flex justify-content-around p-2">
        <div class="col-sm-3 m-2 p-4 bg-light-blue">
            <h5>Postingan Pertama</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet assumenda delectus
                dolore eum eveniet ex facere illum iusto, natus odit recusandae similique sit suscipit tempora
                tenetur, ullam, unde veritatis.</p>
            <a href="/post/postingan-pertama" class="text-decoration-none">see details</a>
        </div>
        <div class="col-sm-3 m-2 p-4 bg-light-blue">
            <h5>Postingan Kedua</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet assumenda delectus
                dolore eum eveniet ex facere illum iusto, natus odit recusandae similique sit suscipit tempora
                tenetur, ullam, unde veritatis.</p>
            <a href="/post/postingan-kedua" class="text-decoration-none">see details</a>
        </div>
        <div class="col-sm-3 m-2 p-4 bg-light-blue">
            <h5>Postingan Ketiga</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet assumenda delectus
                dolore eum eveniet ex facere illum iusto, natus odit recusandae similique sit suscipit tempora
                tenetur, ullam, unde veritatis.</p>
            <a href="/post/postingan-ketiga" class="text-decoration-none">see details</a>
        </div>
    </div>
    <div class="row testimonial d-flex justify-content-around text-center">
        <h3>Whats our student says</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto asperiores consequuntur corporis ea ex harum inventore ipsa magni minus modi, nisi optio praesentium quos similique, sunt, voluptas? Culpa, unde.</p>
        <div class="col-sm-5 testimonial-col d-flex flex-row p-4">
            <img src="storage/users/marij.jpg" alt="Marij Mokoginta">
            <div class="d-flex flex-column">
                <p class="text-small text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur consequatur,
                    corporis dolores in necessitatibus nesciunt nisi non odio officiis reiciendis rem rerum
                    saepe tempore ullam unde veritatis voluptate voluptatibus?</p>
                <h5>Ma'rij Mokoginta</h5>
            </div>
        </div>
        <div class="col-sm-5 testimonial-col d-flex flex-row p-4">
            <img src="storage/users/jarvis.png" alt="Marij Mokoginta">
            <div class="d-flex flex-column">
                <p class="text-small text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur consequatur,
                    corporis dolores in necessitatibus nesciunt nisi non odio officiis reiciendis rem rerum
                    saepe tempore ullam unde veritatis voluptate voluptatibus?</p>
                <h5>Ma'rij Mokoginta</h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="article text-center d-flex align-items-center justify-content-center">
            <h4 class="hero-btn">Bergabung dengan kami</h4>
        </div>
    </div>
@endsection
