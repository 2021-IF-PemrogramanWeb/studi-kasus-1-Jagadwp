var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "studi-kasus-1"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM browser", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
