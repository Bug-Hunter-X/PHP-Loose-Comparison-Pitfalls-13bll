function foo(a, b) {
  if (a === b) {
    return true; 
  } else {
    return false;
  }
}

//This will not return true when comparing 0 and '0'
var result = foo(0, '0');
console.log(result); // Output: false