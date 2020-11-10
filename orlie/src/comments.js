var commentSection = document.getElementById("comments");
var postButton = document.getElementById("post");
postButton.addEventListener("click", post);

function post() {
    var ajax = new XMLHttpRequest();
    var u = document.getElementById("user").value;
    var c = document.getElementById("comment").value;
    ajax.open("GET", "/src/comments.php?name=" + n + "&user=" + u + "&comment=" + c, true);
    ajax.send();

    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            commentSection.innerHTML = ajax.responseText;
        }
    };
}
