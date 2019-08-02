<?php

return [
    "/" => function() {
        return (new Controllers\DefaultController())->index();
    },
    "/blog" => function() {
        return (new Controllers\BlogController())->index();
    },
    "/blog/article/(\d+)" => function(int $id) {
        return (new Controllers\BlogController())->article($id);
    },
    "/page/([A-z-_+]*)" => function(string $slug) {
        return (new Controllers\PageController())->view($slug);
    }
];
