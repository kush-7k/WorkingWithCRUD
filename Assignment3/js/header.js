document.addEventListener('DOMContentLoaded',(loaded) =>
{
    console.log('Ready!')
    document.getElementById("gHeader").innerHTML='<div><a href="index.html"><img class= "logo-container" src="./img/headerpic.jpg"></a></div><nav><ul><li><a href="index.html"><button class="btn">Main page</button></a></li><li><a href="index.html"><button class="btn">About Me</button></a></li><li><a href="index.html"><button class="btn">My projects</button></a></li><li><a href="add.php"><button class="btn">Create Profile</button></a></li></nav>'
})