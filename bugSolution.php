```php
function calculateSum($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    return "Invalid input: Both parameters must be numeric.";
  }
}

$result = calculateSum(10, '20');
var_dump($result); //Output: string(3) "1020"

$result2 = calculateSum(10, 20);
var_dump($result2); // Output: int(30)
```