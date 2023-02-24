function imgSize() {
    //? Count how many elements are there in 'fig' class
    const figElementCount = document.getElementsByClassName("fig");

    for (let i = 0; i < figElementCount.length; i++) {
        let idNum = i + 1;
        let myImg = document.querySelector(`#img${idNum}`);
        //? Image current size
        let currentHeight = myImg.clientHeight;

        //? Resize figure element
        var e1 = document.getElementById(`fg${idNum}`);
        e1.style.height = `${currentHeight - 15}px`;
    }
}