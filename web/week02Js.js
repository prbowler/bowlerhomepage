const clickButton = document.getElementById('clickButton');
const changeColor= document.getElementById('changeColor');
const colorPick = document.getElementById('colorPick');
const div1 = document.getElementById('div1');
let color = 'green';

clickButton.addEventListener('click', buttonClicked);
changeColor.addEventListener('click', ()=> {
    if(colorPick.value) {
        color = colorPick.value;
    }
    changeBtnColor(color);
});

function buttonClicked() {
    clickButton.innerHTML = "Clicked!";
}

function changeBtnColor(color) {
    div1.style.backgroundColor = color;
}
