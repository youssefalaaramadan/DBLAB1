function findLongestWord(str) {
  var longestWord = str.split(' ').reduce(function(longest, currentWord) {
    return currentWord.length > longest.length ? currentWord : longest;
  }, "");
  return longestWord;
  
}

 var y = findLongestWord("this is javascript string demo");
  console.log(y);
  document.write(y);
