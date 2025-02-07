function foo(a, b) {
  if (a === 0 || b === 0) {
    return 0; // Incorrect: Should handle division by zero
  }
  return a / b;
}

//Example Usage
$result1 = foo(10, 2); //Correct Result
$result2 = foo(10, 0); //Error: Division by Zero
$result3 = foo(0, 2); //Correct Result based on current logic