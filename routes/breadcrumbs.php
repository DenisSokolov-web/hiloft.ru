<?php

// Home
Breadcrumbs::register('admin', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('admin'));
});

/*
 *
 */
// Home > Users
Breadcrumbs::register('users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Пользователи', route('users.index'));
});

// Home > Users > Create
Breadcrumbs::register('users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push('Новый', route('users.create'));
});

// Home > Users > Show [user]
Breadcrumbs::register('users.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push('Профиль', route('users.show', $id));
});

// Home > Users > Edit [user]
Breadcrumbs::register('users.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push('Профиль', route('users.edit', $id));
});

/*
 *
 */
// Home > Hotels
Breadcrumbs::register('hotels.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Отели', route('hotels.index'));
});

// Home > Hotels > Create
Breadcrumbs::register('hotels.create', function ($breadcrumbs) {
    $breadcrumbs->parent('hotels.index');
    $breadcrumbs->push('Новый', route('hotels.create'));
});

// Home > Hotels > Show
Breadcrumbs::register('hotels.show', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.index');
    $breadcrumbs->push('Профиль отеля', route('hotels.show', $hotel_id));
});

// Home > Hotels > Edit
Breadcrumbs::register('hotels.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('hotels.index');
    $breadcrumbs->push('Редактирование', route('hotels.edit', $id));
});


/*
 *
 */
// Home > Photos
Breadcrumbs::register('photos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Фото', route('photos.index'));
});

// Home > Photos > Create
Breadcrumbs::register('photos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('photos.index');
    $breadcrumbs->push('Загрузка фото', route('photos.create'));
});

// Home > Photos > Show
Breadcrumbs::register('photos.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('photos.index');
    $breadcrumbs->push('Редактирование фото', route('photos.edit', $id));
});

/*
 *
 */
// Home > Hotels.Photos
Breadcrumbs::register('hotels.photos.index', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Фото отеля', route('hotels.photos.index', $hotel_id));
});


// Home > Hotels.Photos > Create
Breadcrumbs::register('hotels.photos.create', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.photos.index', $hotel_id);
    $breadcrumbs->push('Загрузка фото', route('hotels.photos.create', $hotel_id));
});

// Home > Hotels.Photos > Edit
Breadcrumbs::register('hotels.photos.edit', function ($breadcrumbs, $hotel_id, $photo_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Редактирование фото', route('hotels.photos.edit', [$hotel_id, $photo_id]));
});


/*
 *
 */
// Home > Hotels.Rooms > Index
Breadcrumbs::register('hotels.rooms.index', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Комнаты и номера', route('hotels.rooms.index', $hotel_id));
});

// Home > Hotels.Rooms > Create
Breadcrumbs::register('hotels.rooms.create', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.rooms.index', $hotel_id);
    $breadcrumbs->push('Добавление номера', route('hotels.rooms.create', $hotel_id));
});

// Home > Hotels.Rooms > Edit
Breadcrumbs::register('hotels.rooms.edit', function ($breadcrumbs, $hotel_id, $room_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Редактирование номера', route('hotels.rooms.edit', [$hotel_id, $room_id]));
});

/*
 *
 */
// Home > Hotels.Contacts > Edit
Breadcrumbs::register('hotels.contacts.edit', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Изменить контактные данные', route('hotels.contacts.edit', $hotel_id));
});

/*
 *
 */
// Home > Hotels.SEO > Edit
Breadcrumbs::register('hotels.seo.edit', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Изменить seo данные', route('hotels.seo.edit', $hotel_id));
});

/*
 *
 */
// Home > Hotels > Photos > Edit > Type
Breadcrumbs::register('hotels.photos.edit.type', function ($breadcrumbs, $hotel_id, $type_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Изменить фото', route('hotels.photos.edit.type', [$hotel_id, $type_id]));
});

// Home > Hotels > Photos > Create > Type
Breadcrumbs::register('hotels.photos.create.type', function ($breadcrumbs, $hotel_id, $type_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Загрузить фото', route('hotels.photos.create.type', [$hotel_id, $type_id]));
});


/*
 *
 */

// Home > Hotel > Feedbacks > Index
Breadcrumbs::register('hotels.feedbacks.index', function ($breadcrumbs, $hotel_id) {
    $breadcrumbs->parent('hotels.show', $hotel_id);
    $breadcrumbs->push('Отзывы', route('hotels.feedbacks.index', [$hotel_id]));
});

// Home > Hotel > Feedbacks > Edit
Breadcrumbs::register('hotels.feedbacks.edit', function ($breadcrumbs, $hotel_id, $feedback_id) {
    $breadcrumbs->parent('hotels.feedbacks.index', $hotel_id);
    $breadcrumbs->push('Редактирование', route('hotels.feedbacks.edit', [$hotel_id, $feedback_id]));
});