@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <main class="content">
        <div class="container p-0">


            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-lg-5 col-xl-3 border-right">

                        <div class="chat">
                            <strong>Chat</strong>
                        </div>

                        <div class="search-container">
                            <img src="assets/admin/img/icons/search.png" alt="Search Icon" class="search-icon">
                            <input type="text" class="form-control my-3" placeholder="Search...">
                        </div>

                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time">12m
                                    <div class="notification">2</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time-off">12m</div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time">12m
                                    <div class="notification">2</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time-off">12m</div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time">12m
                                    <div class="notification">2</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time-off">12m</div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time-off">12m</div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="chat-container">
                                <img src="assets/admin/img/yalil.png" class="user-img" alt="Vanessa Tucker" width="40"
                                    height="40">
                                <div class="flex-grow-1">
                                    Vanessa Tucker
                                    <div class="small">Apakah produk ini masih ada?</div>
                                </div>
                                <div class="time">12m
                                    <div class="notification">2</div>
                                </div>
                            </div>
                        </a>
                        <hr class="d-block d-lg-none mt-1 mb-0">
                    </div>
                    <div class="col-12 col-lg-7 col-xl-9">
                        <div class="center-content">
                            <img src="assets/admin/img/icons/chat.png" alt="Descriptive Alt Text" class="center-image">
                            <p class="center-text">Mulai Obrolan!</p>
                            <h6>Pilih pesan di samping untuk mulai chat dengan pelanggan</h6>
                        </div>
                        <!-- Chat content (hidden by default) -->
                        <div class="chat-content" style="display: none;">
                            <!-- Chat Header -->
                            <div
                                class="chat-header d-flex align-items-center justify-content-between p-3 border-bottom">
                                <div class="chat-user-info d-flex align-items-center">
                                    <img src="assets/admin/img/yalil.png" alt="User Avatar" class="user-img" width="40"
                                        height="40">
                                    <div class="ms-2">
                                        <h5 class="mb-0">Vanessa Tucker</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat Messages -->
                            <div class="chat-messages">
                                <div class="message received">
                                    <div class="message-content bg-light rounded">
                                        Apakah produk ini masih ada?
                                    </div>
                                    <small class="text-start">12:45 PM</small>
                                </div>
                                <div class="message sent text-end">
                                    <div class="message-content text-white rounded">
                                        Yes, produk ini masih tersedia!
                                    </div>
                                    <small class="text-muted">12:46 PM</small>
                                </div>
                            </div>

                            <!-- Chat Input -->
                            <div class="chat-input p-3 border-top">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tulis pesan...">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
