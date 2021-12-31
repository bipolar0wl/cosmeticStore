<?
echo $method = $_SERVER['REQUEST_METHOD'];
$query = explode("/", $_SERVER['QUERY_STRING']);
foreach ($query as $key => $value) {
  echo "$key: $value<br>";
}

// echo $formData = getFormData($method);