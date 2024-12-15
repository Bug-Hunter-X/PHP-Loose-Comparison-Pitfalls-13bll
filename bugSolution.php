function foo(a, b) {
  if (a === b) {
    return true; 
  } else {
    return false;
  }
}

//This will return false when comparing 0 and '0'
var result = foo(0, '0');
console.log(result); // Output: false

function fooStrict(a, b) {
  if (a === b) {
    return true; 
  } else {
    return false;
  }
}

//This will return true when comparing 0 and 0
var result2 = fooStrict(0, 0);
console.log(result2); // Output: true

//This will return false when comparing 0 and '0'
var result3 = fooStrict(0, '0');
console.log(result3); // Output: false