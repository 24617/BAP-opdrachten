
//console.log(__dirname); // laat zien waar het in zit

//console.log(__filename);  // laat de file name zien

//console.log(process.env);  // laat alles zien waarmee je ingelogd bent

let argv = process.argv; // als je in de cmd de file opstart en erachter aap noot mies wim schrijft laat hij dat zien

var result = 0;
var vraag = '';

  for (var i = 2; i < process.argv.length; i++){
    result += Number(process.argv[i]);
}

for (var x = 3; x < process.argv.length; x++){
  vraag += ' + ' + Number(process.argv[x])
}
  var conclusie = process.argv[2] + vraag + ' : ' + (process.argv.length - 2) + ' = ';
  result /= (process.argv.length - 2);
  console.log(conclusie + result);
