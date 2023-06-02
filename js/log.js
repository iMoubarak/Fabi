function connexion(form)
{
    var formdata = new FormData(form);
    var http = new XMLHttpRequest();
    if(http)
    {
        http.open("POST","tmpC.php");
        http.onreadystatechange = function()
        {
            if(http.readyState == 4 && http.status == 200)
            {
                console.log("done");
            }
        }
        http.send(formdata);
    }
}
function connexion(form)
{
    var formdata = new FormData(form);
    var http = new XMLHttpRequest();
    if(http)
    {
        http.open("POST","tmpC.php");
        http.onreadystatechange = function()
        {
            if(http.readyState == 4 && http.status == 200)
            {
                console.log("done");
            }
        }
        http.send(formdata);
    }
}
var formC = document.getElementById('formC');
if(formC !== null)
{
    formC.addEventListener("submit", function (params) {
        params.preventDefault();
        connexion(formC);
    })
}