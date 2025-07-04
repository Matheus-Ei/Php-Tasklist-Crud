<?php
/**
 * Returns the path to the specified file or directory.
 *
 * @param string $path The relative path to the file or directory.
 * @return string The absolute path to the file or directory.
 */
function basePath($path) {
    $absolutePath = __DIR__ . '/../' . $path;
    return $absolutePath;
};


/*
 * Inspect a value
 *
 * @param mixed $value
 * @return void
 */
function inspect($value) {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

/*
 * Inspect a value and stops running after it
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value) {
  echo '<pre>';
  die(var_dump($value));
  echo '</pre>';
}

/**
 * Redirects to the specified URL.
 *
 * @param string $url The URL to redirect to.
 * @return void
 */
function redirect($url) {
    header("Location: $url");
}
