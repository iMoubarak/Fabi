function connexion(form)
{
    var formdata = new FormData(form);
    var http = new XMLHttpRequest();
    if(http)
    {
        http.open("POST","connexion.php");
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
function inscription(form)
{
    var formdata = new FormData(form);
    var http = new XMLHttpRequest();
    if(http)
    {
        http.open("POST","tmpI.php");
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
var formI = document.getElementById('formI');
if(formI !== null)
{
    formI.addEventListener("submit", function (params) {
        params.preventDefault();
        inscription(formI);
    })
}