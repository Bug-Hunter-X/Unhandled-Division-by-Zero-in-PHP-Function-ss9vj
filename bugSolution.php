function foo(a, b) {
  if ($b === 0) {
    return "Division by zero error"; // Or throw an exception
  } elseif ($a === 0) {
    return 0; 
  }
  return a / b;
}

//Example Usage
$result1 = foo(10, 2); //Correct Result
$result2 = foo(10, 0); //Correct Result
$result3 = foo(0, 2); //Correct Result