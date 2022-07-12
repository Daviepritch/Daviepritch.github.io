const message = document.getElementById('message');
const param = new URLSearchParams(window.location.search);
const username = param.get('username');
const pw = param.get('pw');

//Test

function register(){
    var first_name = document.getElementById('first_name').value;
    var surname = document.getElementById('surname').value;
    var email = document.getElementById('email').value;
    var busname = document.getElementById('busname').value;
	var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;


var con = new ActiveXObject("ADODB.Connection");
con.Open("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=./databases/userspws.accdb");
var cmd = new ActiveXObject("ADODB.Command");
cmd.ActiveConnection = con;
cmd.CommandText = "INSERT INTO signups (first_name, surname, email, busname, username, password) VALUES (?, ?)";
cmd.Parameters.Append(cmd.CreateParameter("?", adVarWChar, adParamInput, 50, first_name));
cmd.Parameters.Append(cmd.CreateParameter("?", adVarWChar, adParamInput, 50, surname));
cmd.Parameters.Append(cmd.CreateParameter("?", adVarWChar, adParamInput, 50, email));
cmd.Parameters.Append(cmd.CreateParameter("?", adVarWChar, adParamInput, 50, busname));
cmd.Parameters.Append(cmd.CreateParameter("?", adVarWChar, adParamInput, 50, username));
cmd.Parameters.Append(cmd.CreateParameter("?", adVarWChar, adParamInput, 50, password));
cmd.Execute();
con.Close();

//if(username.toLowerCase() === 'daviepritch' && pw === 'DaviePrit92'){
//  message.innerHTML = 'Welcome Back ' + username +'!';
//} else if(!username || !pw){
//  message.innerHTML = 'Add some client-side validation!';
//} else {
//  message.innerHTML = 'Hurray for client-side validation!';
//}
