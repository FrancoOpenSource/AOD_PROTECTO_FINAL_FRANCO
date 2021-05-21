<?php

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('/vehicles', function ($trail, $vehicle) {
$trail->push($vehicle->model, route('/vehicles', $vehicle->id));
});
