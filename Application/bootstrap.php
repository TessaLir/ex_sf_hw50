<?php
    require_once 'core/model.php'; 
    require_once 'core/view.php'; 
    require_once 'core/controller.php'; 
    require_once 'core/route.php'; 

    require_once 'Models/model_user.php';
    require_once 'Models/model_card.php';
    require_once 'Models/model_comment.php';

    Route::start(); // запускаем маршрутизатор