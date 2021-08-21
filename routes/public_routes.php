<?php


Route::get('/projects', function () {
  return view('frontEnd.index');
})->name('projects');

Route::get('/notes', function () {
  return view('frontEnd.notes');
})->name('notes');
