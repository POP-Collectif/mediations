<?php

return function ($site) {

  // get all articles
  $magazines = page('magazines')->children()->listed()->sortBy('date', 'desc');

  $lastMagazine = null;
  if ($magazines->count() > 0) {
    $lastMagazine = $magazines->first();
  }

  // add a tag filter
  // if ($tag = get('tag')) {
  //   $articles = $articles->filterBy('tags', '=', $tag, ',');
  // }
  //
  // // add pagination
  // $articles = $articles->paginate(20);
  //
  // // create a shortcut for pagination
  // $pagination = $articles->pagination();

  // pass $articles and $pagination to the template
  return [
    // 'articles' => $articles,
    // 'pagination' => $pagination,
    'magazines' => $magazines,
    'lastMagazine' => $lastMagazine,
  ];

};
