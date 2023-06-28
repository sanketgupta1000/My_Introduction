let imgs = document.getElementsByClassName("image");

function dragStart(event) {
    // event.preventDefault();
    event.dataTransfer.setData("text/plain", event.target.id);
}

function dragOver(event) {
    event.preventDefault();
}

function Drop(event) {
    // event.preventDefault();
    let id1 = event.dataTransfer.getData("text/plain");
    let e1 = document.getElementById(id1);

    let temp=e1.src;
    e1.src=event.target.src;
    event.target.src=temp;
}

for(i of imgs)
{
    i.draggable="true";
    i.addEventListener("dragstart", dragStart);
    i.addEventListener("dragover", dragOver);
    i.addEventListener("drop", Drop);
}